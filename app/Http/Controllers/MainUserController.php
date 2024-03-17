<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class MainUserController extends Controller
{

   public function Logout(){
    //Auth::logout();
    Auth::guard('web')->logout();
    return Redirect()->route('login');
   }

   public function UserProfile(){
      $title= "User Profile";
      $id = Auth::user()->id;
      $user = User::find($id);
      return view('user.profile.view_profile',compact('user','title'));
   }


   public function UserProfileEdit(){
      $title = "User Profile Update";
      $userEdit = User::find(Auth::user()->id);
      return view('user.profile.view_profile_edit',compact('userEdit','title'));
   }


   public function UserProfileStore(Request $request){
      
      $data = User::find(Auth::user()->id);
         $data->name = $request->username;
         $data->mobile = $request->mobile;
         $data->email = $request->email_id;
         $data->address = $request->address;
        if($request->file('user_images')){
             $file = $request->file('user_images');
             if($data->user_images){
             //unlink(public_path('upload/user_images/'.@$data->user_images));
             }
             $filename = date('Y-m-d').$file->getClientOriginalName();
             $uploadSuccess = $file->move(public_path('upload/user_images'),$filename);
             $data['user_images'] = $filename;
        }
        $data->save();
             $notifecation = [
               'message' => 'User Profile Updated Successfully',
               'alert-type' =>'success',
            ];
      return redirect()->route('user.profile')->with($notifecation);
   }

   

public function UserPassword() {
   $data['title'] = "User Password Update";
   return view('user.password.edit_password',$data);   
}

public function UserPasswordUpdate(Request $request) {
   $validateData = $request->validate([
      'oldpassword' =>'required',
      'password' =>'required|confirmed',
   ]);
   
   $hasedPassword = Auth::user()->password;
   if(Hash::check($request->oldpassword,$hasedPassword)){
        $user = User::find(Auth::id());
        $user->password = Hash::make($request->password);
        $user->save();
        Auth::logout();
        return redirect()->route('login');
   }else{
      return redirect()->back();
   }
}

public function UserVeryfiyOTP(Request $request) {
   $validateData = $request->validate([
      'email_id' =>'required',
   ]);
echo "Hello";die;
   //return redirect()->route('user.veryfiyotp');
}



}
