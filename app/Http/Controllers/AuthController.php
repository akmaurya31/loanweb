<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Models\PasswordReset;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Carbon;
use Exception;

use function Ramsey\Uuid\v1;

//use PharIo\Manifest\Url;

class AuthController extends Controller
{
    public function loadRegister()
    {
        /*if(Auth::user()){
            $route = $this->redirectDash();
            return redirect($route);
        }*/
        return view('register');
    }


    public function StudentRegister(Request $request)
    {
        if(Auth::user()){
            $route = $this->redirectDash();
            return redirect($route);
        }

        $request->validate([
            'name' => 'string|required|min:2',
            'email' => 'string|email|required|max:100|unique:users',
            'password' =>'required|confirmed|min:6'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('success','Your Registration has been successfull.');
    }


    public function loadLogin()
    {
        if(Auth::user()){
            $route = $this->redirectDash();
            return redirect($route);
        }
        return view('login');
    }

    public function Userlogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $userCredential = $request->only('email','password');
        if(Auth::attempt($userCredential)){
            $route = $this->redirectDash();
            return redirect($route);
        }
        else{
            return back()->with('error','Username & Password is incorrect');
        }
    }

    public function redirectDash()
    {
        $redirect = '';

        if(Auth::user() && Auth::user()->is_Admin == 1){
            $redirect = '/admin/dashboard';
        }
       /* else if(Auth::user() && Auth::user()->role == 2){
            $redirect = '/sub-admin/dashboard';
        }
        else if(Auth::user() && Auth::user()->role == 3){
            $redirect = '/admin/dashboard';
        }*/
        else{
            $redirect = '/dashboard';
        }

        return $redirect;
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('/');
    }


    public function forgetPasswordStudent()
    {
        if(Auth::user()){
            $route = $this->redirectDash();
            return redirect($route);
        }
        return view('forget_password');
    }


    public function forgetPassword(Request $request)
    {

        $request->validate([
            'email' => 'required|email',            
        ]);

        if(Auth::user()){
            $route = $this->redirectDash();
            return redirect($route);
        }
            try{               
                $user = User::where('email',$request->email)->get();
                //dd($user);
                if(count($user) > 0){
                  $token = Str::random(60);
                  $domain =  Url::to('/');
                  $url =  $domain.'/reset-password?token='.$token;
                  $data['url'] = $url;
                  $data['email'] = $request->email;
                  $data['title'] = 'Password Reset';
                  $data['body'] = "Plz Click on below link to reset your password";
                  Mail::send('forgetPasswordMail',['data'=>$data],function($message) use ($data){
                    $message->to($data['email'])->subject($data['title']);
                  });
                   $datetime = Carbon::now()->format('Y-m-d H:i:s');
                  // updateOrCreate(Two Perameter leta hai)
                   PasswordReset::updateOrCreate(
                    ['email'=>$request->email],
                   ['email'=> $request->email,
                   'token'=>$token,
                   'created_at'=>$datetime]
                );
                return back()->with('success','Plz Check your Mail to reset your password');
                }else{
                    return back()->with('error','Email is Not Exits!');
                }

            }catch(Exception $e){
                return back()->with('error',$e->getMessage());
            }
    }

    public function resetPasswordLoad(Request $request){
            $restData =  PasswordReset::where('token',$request->token)->get();
            if(isset($request->token) && count($restData) > 0){
                  
                $user = User::where('email',$restData[0]['email'])->get();
            return view('resetPassword',compact('user'));

            }else{
                return view('404');
            }
    }

    public function resetPassword(Request $request){
        if(Auth::user()){
            $route = $this->redirectDash();
            return redirect($route);
        }

        $request->validate([  
            'password' =>'required|confirmed|min:6'
        ]);

        $user = User::find($request->user_id);
        $user->password = Hash::make($request->password);
        $user->save();

        PasswordReset::where('email',$user->email)->delete();
           return "Your Password has been successfuly Reset";
    }
}
