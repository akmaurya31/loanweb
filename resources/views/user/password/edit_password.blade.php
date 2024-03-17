@extends('layouts/admin-master')
@section('admin')
    <div class="container-fluid">

        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">

                    <div class="card-body">
                        <div class="basic-form">
                            <form method="post" action="{{ route('user.password.update') }}">
                                @csrf

                                <div class="row">
                                    <div class="mb-3 col-xl-4 ">
                                        <label class="col-form-label">Current Password</label>
                                        <div class="">
                                            <input id="current_password" type="password"  name="oldpassword" class="form-control" value="">
                                        </div>
                                    </div>
                                        <div class="mb-3 col-xl-4 ">
                                        <label class="col-form-label">New Password</label>
                                        <div class="">
                                            <input id="password" type="password" name="password" class="form-control" value="">
                                        </div>
                                    </div>
                                        <div class="mb-3 col-xl-4 ">
                                        <label class="col-form-label">Confirm Password</label>
                                        <div class="">
                                            <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" value="">
                                        </div>
                                    </div>

                                </div>
                                <div class="mb-3 col-xl-12">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>

                       
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
@endsection
