@extends('layouts/layout-comman')
@section('admin')

        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <div class="text-center mb-3">
                                    <a href="/"><?php logo()?></a>

                                   
                                </div>
                                <h4 class="text-center mb-4">Sign in your Admin Panel Account</h4>
                                <?php if($errors->any()){
                                    foreach ($errors->all() as $key => $error) {?>
                                        <h6 class="text-primary"><?= $error?></h6>
                                   <?php  }
                                    }?>
                                
                                <?php if(Session::has('success')){?>
                                    <h6 class="text-success"><?= Session::get('success')?></h6>
                                <?php }?>
                                <form method="POST" action="{{ route('userlogin')}}"> 
                                    @csrf
                                    <div class="mb-3">
                                        <label class="mb-1"><strong>Email</strong></label>
                                        <input  id="email" class="block mt-1 w-full form-control" type="email" name="email" value="{{ old('email') }}"  autofocus autocomplete="username" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-1"><strong>Password</strong></label>
                                        <input id="password" class="form-control" type="password" name="password"  autocomplete="current-password">
                                  
                                    </div>
                                    <div class="row d-flex justify-content-between mt-4 mb-2">
                                        
                                        <div class="mb-3">
                                            <a class='text-primary' href="{{ route('forgetpassword') }}">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block">{{ __('Log in') }}</button>
                                    </div>
                                </form>


                               <!-- <div class="new-account mt-3">
                                    <p>Don't have an account? <a class="text-primary" href="{{ route('studentregister')}}">Sign up</a></p>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
@endsection