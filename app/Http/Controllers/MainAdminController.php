<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class MainAdminController extends Controller
{
    public function AdminProfile(){
      $title = "Admin Profile";
        $adminData = User::find(1);
        
        return view('admin.profile.view_profile', compact('adminData', 'title'));

     }
     
     public function AdminProfileEdit(){
         $title = "Admin Profile Update";
        $adminEdit = User::find(1);
        return view('admin.profile.view_profile_edit',compact('adminEdit','title'));
     }

     
     public function AdminProfileStore(Request $request){
      
        $data = User::find(1);
           $data->name = $request->username;
           $data->mobile = $request->mobile;
           $data->email = $request->email_id;
           $data->address = $request->address;
           $data->annualInterestRate = $request->annualInterestRate;

           $data->processing_free = $request->processing_free;
           $data->health_insurance_free = $request->health_insurance_free;
           $data->bank_name = $request->bank_name;
           $data->ifsc = $request->ifsc;
           $data->account = $request->account;
           $data->holder_name = $request->holder_name;
           $data->google_pay = $request->google_pay;

           $data->facebook = $request->facebook;
           $data->linkedin = $request->linkedin;
           $data->youtube = $request->youtube;
           $data->instagram = $request->instagram;

          if($request->file('user_images')){
               $file = $request->file('user_images');
               if($data->user_images){
               unlink(public_path('upload/admin_images/'.@$data->user_images));
               }
               $filename = date('Y-m-d').$file->getClientOriginalName();
               $uploadSuccess = $file->move(public_path('upload/admin_images'),$filename);
               $data['user_images'] = $filename;
          }
          $data->save();
               $notifecation = [
                 'message' => 'Admin Profile Updated Successfully',
                 'alert-type' =>'success',
              ];
        return redirect()->route('admin.profile')->with($notifecation);
     }


     public function AdminPassword () {
      $data['title'] = "Admin Password Edit";
        return view('admin.password.edit_password',$data);   
     }

     public function AdminPasswordUpdate(Request $request) {
        $validateData = $request->validate([
           'oldpassword' =>'required',
           'password' =>'required|confirmed',
        ]);
        
        $hasedPassword = User::find(1)->password;
        if(Hash::check($request->oldpassword,$hasedPassword)){
             $admin = User::find(1);
             $admin->password = Hash::make($request->password);
             $admin->save();
             Auth::logout();
             return redirect()->route('admin.logout');
        }else{
           return redirect()->back();
        }
     }
     
  
}
