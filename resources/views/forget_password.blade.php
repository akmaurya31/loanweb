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
                                <h4 class="text-center mb-4">Forgot Password</h4>
                                
                                <?php if($errors->any()){
                                    foreach ($errors->all() as $key => $error) {?>
                                        <h6 class="text-primary"><?= $error?></h6>
                                   <?php  }
                                    }?>
                                
                                <?php if(Session::has('error')){?>
                                    <h6 class="text-primary"><?= Session::get('error')?></h6>
                                <?php }?>


                                <?php if(Session::has('success')){?>
                                    <h6 class="text-success"><?= Session::get('success')?></h6>
                                <?php }?>


                                <form method="POST" action="{{ route('forgetpassword')}}"> 
                                    @csrf
                                    <div class="mb-3">
                                        <label class="mb-1"><strong>Email</strong></label>
                                        <input  id="email" class="block mt-1 w-full form-control" type="email" name="email" value="{{ old('email') }}"  autofocus autocomplete="username" />
                                    </div>
                                   
                                   
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                    </div>
                                </form>


                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
@endsection