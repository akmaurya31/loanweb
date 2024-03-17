<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class ContactController extends Controller
{
    public function Index(){
        $data['title'] = "Customer List";
        $data['contactList'] = Contact::orderBy('id','desc')->get();
        $data['getUser'] = User::where('status','Y')->where('is_Admin',0)->get();
        return view('admin.contact.contact_view_list',$data);
    }

    public function sendTestEmail()
    {
        try {
            // $mailContent = (object) ['StudentName' => $data->stuName, 'RefNo' => $data->refNo,'CourseName'=>'ABC','courseStartDate'=>$data->courseStartDate,'courseEndDate'=>$data->courseEndDate];
            $mailContent='hi';
            Mail::to('akmaurya31@gmail.com')->send(new TestMail($mailContent));
            die("ASdfas");
            return "Email sent successfully!";
            } catch (\Exception $e) {
                return "Error sending email: " . $e->getMessage();
            }
    }

    //34
    
    public function AssignUser(Request $request)
    {        
            $data = array(
                "assign_emp_id" => $request->emp_id,
                "created_by" => Auth::user()->id
            );
            $updatedData = Contact::where('id', $request->cusid)->update($data);
             return response()->json(['success' => true, 'updatedData' => $updatedData]);  
        
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

    

    public function Processinguser(Request $request)
    {        
            $data = array(
                "processing_free" => $request->processing_free,
                "created_by" => Auth::user()->id,
                //"id"=>$request->cusid
            );
            //print_r($data);die;
             $updatedData = Contact::where('id', $request->cusid)->update($data);
             return response()->json(['success' => true, 'updatedData' => $updatedData]);  
        
    }


    public function Insorenceuser(Request $request)
    {        
            $data = array(
                "helth_insorence_free" => $request->helth_insorence_free,
                "created_by" => Auth::user()->id,
                //"id"=>$request->cusid
            );
            //print_r($data);die;
             $updatedData = Contact::where('id', $request->cusid)->update($data);
             return response()->json(['success' => true, 'updatedData' => $updatedData]);  
        
    }


    public function Customer_statewise(Request $request){

        $query = Contact::query();

    if ($request->filled('search_options_id')) {
        $query->where('assign_loan_id', $request->search_options_id);
    }

    if ($request->filled('starting_date') && $request->filled('ending_date')) {
        $query->whereBetween('created_at', [$request->starting_date, $request->ending_date]);
    }

    $data['contactList'] = $query->orderBy('id', 'desc')->get();
    $data['getUser'] = User::where('status', 'Y')->where('is_Admin', 0)->get();
    $data['title'] = "Customer Feedback Status";
    return view('admin.customer_statewise', $data);
    }


    public function CustomerPDF(Request $request)
    {
        $mobile = decrypt($_GET['mob']);
        $data['title'] = "View CustomerPdf";
        $data['getAdmin'] = User::where('is_Admin', 1)->orderBy('id', 'desc')->first(); 
        $data['getCustomer'] = Contact::where('mobile',$mobile)->first();  

        return view('admin.customer_pdf', $data);
    }

    public function CustomerHelth_PDF(Request $request)
    {
        $mobile = decrypt($_GET['mob']);
        $data['title'] = "View CustomerPdf";
        $data['getAdmin'] = User::where('is_Admin', 1)->orderBy('id', 'desc')->first(); 
        $data['getCustomer'] = Contact::where('mobile',$mobile)->first();  

        return view('admin.helthcustomer_pdf', $data);
    }
    


    public function Customerpayment(Request $request){
        $query = Contact::query();

        if ($request->filled('emp_options_id')) {
            $query->where('assign_emp_id', $request->emp_options_id);
        }

        if ($request->filled('search_options_id')) {
            $query->where('assign_loan_id', $request->search_options_id);
        }

        
    
        if ($request->filled('starting_date') && $request->filled('ending_date')) {
            $query->whereBetween('created_at', [$request->starting_date, $request->ending_date]);
        }

        $data['title'] = "User Payment Status ";    
        $data['contactList'] = $query->orderBy('id', 'desc')->get();       
        $data['getEmployee'] = User::where('status','Y')->where('is_Admin',0)->get();
        return view('admin.user_customer_list',$data);
    }

}
