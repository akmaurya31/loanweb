<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserprofileController extends Controller
{
    public function Userprofile_list(){
        $data['title'] = "User List";
        $data['userDataList'] = User::where('is_Admin','0')->get();
        return view('admin.user.user_view_list',$data);
    }

    public function UserprofileCreate(){   
        $data['title'] = "User Add";    
        return view('admin.user.user_add');//compact('userDataList')
    }

    public function UserprofileStore(Request $request){       

        $request->validate([
            'name' => 'string|required|min:2',
            'email' => 'string|email|required|max:100|unique:users',
            'password' =>'required|min:6'//confirmed
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->address = $request->address;

        $user->facebook = $request->facebook;
        $user->linkedin = $request->linkedin;
        $user->instagram = $request->instagram;
        $user->youtube = $request->youtube;

        $user->password = Hash::make($request->password);        
           $user->created_by = Auth::user()->id;  

          if($request->file('user_images')){
               $file = $request->file('user_images');
               if($user->user_images){
                unlink(public_path('upload/user_images/'.@$user->user_images));
               }
               $filename = date('Y-m-d').$file->getClientOriginalName();
               $uploadSuccess = $file->move(public_path('upload/user_images'),$filename);
               $user['user_images'] = $filename;
          }
          $user->save();
               $notifecation = [
                 'message' => 'User   Add Successfully',
                 'alert-type' =>'success',
              ];
        return redirect()->route('userprofile.userprofile_list')->with($notifecation);
    }


     public function UserprofileEdit($id){
        $data['title'] = "User Update";
         $adminEdit  = User::find($id);
         return view('admin.user.user_edit',compact('adminEdit'));
     }

     

     public function UserprofileUpdate(Request $request ,$id){
        $user = User::find($id);       
if($request->password==''){
$password=$user->password;
}else{
    $password= Hash::make($request->password);
}
       
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->address = $request->address;
        $user->password = $password;  

        $user->facebook = $request->facebook;
        $user->linkedin = $request->linkedin;
        $user->instagram = $request->instagram;
        $user->youtube = $request->youtube;      
           $user->created_by = Auth::user()->id;       

           if($request->file('user_images')){
            $file = $request->file('user_images');
            if($user->user_images){
             unlink(public_path('upload/user_images/'.@$user->user_images));
            }
            $filename = date('Y-m-d').$file->getClientOriginalName();
            $uploadSuccess = $file->move(public_path('upload/user_images'),$filename);
            $user['user_images'] = $filename;
       }
          $user->save();
               $notifecation = [
                 'message' => 'User   Update  Successfully',
                 'alert-type' =>'success',
              ];
        return redirect()->route('userprofile.userprofile_list')->with($notifecation);
     }


     public function UserprofileDelete($id){
        $data['title'] = "User Delete";
        $datalist_category  = User::find($id);
        if($datalist_category->user_images){
            unlink(public_path('upload/user_images/'.@$datalist_category->user_images));
           }
        $datalist_category->delete();

        $notifecation = [
            'message' => 'User  Delete Successfully',
            'alert-type' =>'danger',
         ];
        return redirect()->route('userprofile.userprofile_list')->with($notifecation);
    }


    public function UserprofileActive($id){
        $data['title'] = "User Active";
        $datalist_category  = User::find($id);        
            $datalist_category->status = 'N';        
           $datalist_category->save();
           $notifecation = [
            'message' => 'User  InActive Successfully',
            'alert-type' =>'warning',
         ];
        return redirect()->route('userprofile.userprofile_list')->with($notifecation);
    }

    public function UserprofileInactive($id){
        $data['title'] = "User Inactive";
        $datalist_category  = User::find($id);        
            $datalist_category->status = 'Y';       
           $datalist_category->save();
           $notifecation = [
            'message' => 'User  Active Successfully',
            'alert-type' =>'success',
         ];
        return redirect()->route('userprofile.userprofile_list')->with($notifecation);
    }
}
