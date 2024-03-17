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
                        <h4 class="text-center mb-4">Sign up your account</h4>
                        
                       
<?php if($errors->any()){
    foreach ($errors->all() as $key => $error) {?>
        <h6 class="text-primary"><?= $error?></h6>
   <?php  }
    }?>

<?php if(Session::has('success')){?>
    <h6 class="text-success"><?= Session::get('success')?></h6>
<?php }?>
                     

                        <form method="POST" action="{{ route('studentregister') }}">
                            @csrf              
                         
                
                            <div class="mb-3">
                                <label class="mb-1"><strong>{{ __('Name') }}</strong></label>
                                <input  id="name" class="block mt-1 w-full form-control" type="text" name="name" value="{{ old('name') }}"  autofocus autocomplete="name" />
                            </div>  
                
                            
                            <div class="mb-3">
                                <label class="mb-1"><strong>Email</strong></label>
                                <input  id="email" class="block mt-1 w-full form-control" type="email" name="email" value="{{ old('email') }}"  autofocus autocomplete="username" />
                            </div>  
                
                          
                            <div class="mb-3">
                                <label class="mb-1"><strong>Password</strong></label>
                                <input id="password" class="form-control" type="password" name="password"  autocomplete="new-password">
                            </div>
                
                             <div class="mb-3">
                                <label class="mb-1"><strong>Confirm Password</strong></label>
                                <input id="password_confirmation" class="form-control block mt-1 w-full" type="password" name="password_confirmation"  autocomplete="new-password">
                            </div>
                                 
       <div class="text-center">                                         
        <button type="submit" class="btn btn-primary btn-block"> Register</button>
    </div>
                        </form>

                      

                        <div class="new-account mt-3">
                            <p>Already have an account? <a class="text-primary" href="{{ route('login') }}">Sign in</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   
    
@endsection