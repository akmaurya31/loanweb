@extends('layouts/admin-master')
@section('admin')

 <div class="container-fluid">
			
                <!-- row -->
                <div class="row">
                   <div class="col-xl-12 col-lg-12">
                        <div class="card">
                           
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="post" action="{{ route('profile.store')}}" enctype='multipart/form-data'>
                                    @csrf

                                     <div class="row"> 
                                        <div class="mb-3  col-xl-6">
                                            <label class="col-form-label">User Name</label>
                                            <div class="">
                                                <input type="text" name="username" class="form-control" value="{{ $userEdit->name }}">
                                            </div>
                                        </div>

                                         <div class="mb-3  col-xl-6">
                                            <label class="col-form-label">Mobile No.</label>
                                            <div class="">
                                                <input type="text" name="mobile" class="form-control" value="{{ $userEdit->mobile }}">
                                            </div>
                                        </div>

                                        <div class="mb-3  col-xl-6">
                                            <label class="col-form-label">Email</label>
                                            <div class="">
                                                <input type="email" name="email_id" class="form-control" value="{{ $userEdit->email }}">
                                            </div>
                                        </div>
                                        <div class="mb-3 col-xl-6 ">
                                            <label class="col-form-label">Password</label>
                                            <div class="">
                                                <input type="password" name="password" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="mb-3 col-xl-12 ">
                                            <label class="col-form-label">Address</label>
                                            <div class="">
                                                <textarea type="password" name="address" class="form-control" > {{ $userEdit->address }}</textarea>
                                            </div>
                                        </div>
                                            <div class="mb-3  col-xl-6">
                                            <label class="col-form-label">User Profile Image</label>
                                            <div class="">
                                             
                                                <input id="Image" type="file" name="user_images" class="form-control" >
                                               <img style="width: 20%;" id="showImage" src="{{ (!empty($userEdit->user_images))? url('upload/user_images/'.$userEdit->user_images): url('upload/no-image.jpg') }}" alt="">
                                            
                                               </div>
                                        </div>

                                      
                                        <div class="mb-3 col-xl-12">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
					</div>
                </div>
            </div>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script>
       $(document).ready(function() {
    $("#Image").change(function(e) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $("#showImage").attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
    });
});

      </script>

@endsection