<?php

namespace App\Http\Controllers\Frantend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Menudetails;
use App\Models\MenuModal;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class HomeController extends Controller
{
    public function Home()
    {
        $data['getBanner'] = Banner::where('status','Y')->first(); 
        $data['getWhyMenu'] = Menudetails::where('menu_id',24)->where('status','Y')->get(); 
        $data['getAbout'] = Menudetails::where('menu_id',25)->where('status','Y')->first();        
  
        $data['getother'] = Menudetails::where('menu_id',27)->where('status','Y')->get();  
        return view('frant.home',$data);
    }



    public function Applyloon()
    {      
        $data['getAboutBanner'] = MenuModal::where('id',24)->first();       
        return view('frant.applyloan',$data);
    }


    public function Checkstatus()
    {      
        $data['getAboutBanner'] = MenuModal::where('id',24)->first();       
        return view('frant.checkstatus',$data);
    }


   public function Repayment()
    {      
        $data['getAdmin'] = User::where('is_Admin', 1)->orderBy('id', 'desc')->first();      
        return view('frant.repayment',$data);
    }
    
    
    
    public function ContactUs()
    {      
        $data['getAdmin'] = User::where('is_Admin', 1)->orderBy('id', 'desc')->first();      
        return view('frant.contact',$data);
    }
     
  
     public function contactAppoinment(Request $request){      
        $request->validate([
            'name' =>'required',       
            'email' =>'required',   
            'number' =>'required',     
            'whatsappnumber' =>'required',       
            'aadharno' =>'required',   
            'pancard' =>'required',     
            'bankaccountno' =>'required',       
            'loanamoun' =>'required',   
            'city' =>'required',     
            'pincode' =>'required',   
            'bankname' =>'required',
            'bankifsccode' =>'required',                          
         ]);      
          
        $data = new Contact();
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
        $data->vehicle1 = $request->vehicle1;       
       $result =  $data->save();
       if($result){
        return redirect()->route('home.applyloan')->with('success', 'Your query has been submitted successfully!');
    } else {
        return redirect()->route('home.applyloan')->with('error', 'There was an error submitting your query. Please try again.');
    }
    }


    public function CheckMobile(Request $request){     
        $request->validate([            
            'number' =>'required',                        
         ]);           
         $checkMobile = Contact::where('mobile',$request->number)->first();        
      
       if($checkMobile){
        $encryptedMobile = encrypt($checkMobile->mobile);
        return redirect()->route('home.submitstatus', ['mob' => $encryptedMobile]);

    } else {
        return redirect()->route('home.checkstatus')->with('error', 'There was an error submitting your query. Please Currect Mobile no again.');
    }
    }


    public function SubmitStatus($mob)
    {     
        $mobile = Crypt::decrypt($mob);
        $data['getStatus'] = Contact::where('mobile', $mobile)->orderBy('id', 'desc')->first();      
        return view('frant.submit_status',$data);
    }

    public function SubmitPDF($mob)
    {   
        $mobile = Crypt::decrypt($mob);
        $data['getUser'] = Contact::where('mobile', $mobile)->orderBy('id', 'desc')->first();    
        $data['getAdmin'] = User::where('is_Admin', 1)->orderBy('id', 'desc')->first(); 
        return view('frant.submit_pdf',$data);
    }
    

    
    
    
}
