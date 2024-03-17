<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class StudentController extends Controller
{

    public function CustomerHelth_PDF(Request $request)
    {
        $mobile = decrypt($_GET['mob']);
        $data['title'] = "View CustomerPdf";
        $data['getAdmin'] = User::where('is_Admin', 1)->orderBy('id', 'desc')->first(); 
        $data['getCustomer'] = Contact::where('mobile',$mobile)->first();  

        return view('admin.helthcustomer_pdf', $data);
    }

    public function CustomerPDF(Request $request)
    {
        $mobile = decrypt($_GET['mob']);
        $data['title'] = "View CustomerPdf";
        $data['getAdmin'] = User::where('is_Admin', 1)->orderBy('id', 'desc')->first(); 
        $data['getCustomer'] = Contact::where('mobile',$mobile)->first();  

        return view('admin.customer_pdf', $data);
    }


    public function dashboard(Request $request)
{
    $data['title'] = "Customer Assign List";
    $id = Auth::user()->id;
    $query = Contact::where('assign_emp_id', $id);

    if ($request->filled('search_options_id')) {
        $query->where('assign_loan_id', $request->search_options_id);
    }

    if ($request->filled('starting_date') && $request->filled('ending_date')) {
        $query->whereBetween('created_at', [$request->starting_date, $request->ending_date]);
    }

    $data['contactList'] = $query->orderBy('id', 'desc')->get();
    $data['getUser'] = User::where('status', 'Y')->where('is_Admin', 0)->get();

    return view('admin.customer_statewise', $data);
}


    public function FeedbackUser(Request $request)
    {        
            $data = array(
                "assign_loan_id" => $request->feedback_id,
                "created_by" => Auth::user()->id
            );
            $updatedData = Contact::where('id', $request->cusid)->update($data);
             return response()->json(['success' => true, 'updatedData' => $updatedData]);  
        
    }

    public function EditCustomer($id){
        $title = "Edit Customer Details";
        $datalist  = Contact::find($id);
        return view('admin.edit_customer',compact('datalist','title'));
    }
    
    public function CustomerUpdate(Request $request, $id)
    {
        $data = Contact::find($id);
    
        $request->validate([
            'processing_free' => 'required',
            'helth_insorence_free' => 'required',
            'name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'whatsappnumber' => 'required',
            'aadharno' => 'required',
            'pancard' => 'required',
            'bankaccountno' => 'required',
            'loanamoun' => 'required',
            'city' => 'required',
            'pincode' => 'required',
            'bankname' => 'required',
            'bankifsccode' => 'required',
            'state' => 'required', // Add validation for state
            'loantype' => 'required', // Add validation for loantype
            'itr' => 'required', // Add validation for itr
            'loantenure' => 'required', // Add validation for loantenure
           
        ]);
    
        $data->processing_free = $request->processing_free;
        $data->helth_insorence_free = $request->helth_insorence_free;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->number;
        $data->whatsappnumber = $request->whatsappnumber;
        $data->aadharno = $request->aadharno;
        $data->pancard = $request->pancard;
        $data->bankaccountno = $request->bankaccountno;
        $data->bankname = $request->bankname;
        $data->bankifsccode = $request->bankifsccode;
        $data->loanamoun = $request->loanamoun;
        $data->city = $request->city;
        $data->pincode = $request->pincode;
        $data->state = $request->state;
        $data->loantype = $request->loantype;
        $data->itr = $request->itr;
        $data->loantenure = $request->loantenure;
        $data->address = $request->address;
    
        $result = $data->save();
    
        if ($result) {
            return redirect()->route('user.dashboard')->with('success', 'Your query has been updated successfully!');
        } else {
            return redirect()->route('user.dashboard')->with('error', 'There was an error updating your query. Please try again.');
        }
    }
    



}
