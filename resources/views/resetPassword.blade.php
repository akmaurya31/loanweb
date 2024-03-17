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
                                <h4 class="text-center mb-4">Reset Password</h4>
                                <?php if($errors->any()){
                                    foreach ($errors->all() as $key => $error) {?>
                                        <h6 class="text-primary"><?= $error?></h6>
                                   <?php  }
                                    }?>
                                
                               
                                <form method="POST" action="{{ route('resetPassword')}}"> 
                                    @csrf
                                    <input   type="hidden" name="user_id" value="{{ $user[0]['id'] }}" >
                                    <div class="mb-3">
                                        <label class="mb-1"><strong>Password</strong></label>
                                        <input id="password" class="form-control" type="password" name="password"  autocomplete="new-password">
                                    </div>
                        
                                     <div class="mb-3">
                                        <label class="mb-1"><strong>Confirm Password</strong></label>
                                        <input id="password_confirmation" class="form-control block mt-1 w-full" type="password" name="password_confirmation"  autocomplete="new-password">
                                    </div>
                                   
                                   
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
                                    </div>
                                </form>


                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
@endsection