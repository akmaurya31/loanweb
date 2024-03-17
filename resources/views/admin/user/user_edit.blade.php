@extends('layouts/admin-master')
@section('admin')

 <div class="container-fluid">
			
                <!-- row -->
                <div class="row">
                   <div class="col-xl-12 col-lg-12">
                        <div class="card">
                           
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="post" action="{{ route('userprofile.userprofile_update',$adminEdit->id) }}" enctype='multipart/form-data'>
                                    @csrf

                                    <div class="row"> 
                                        <div class="mb-3  col-xl-4">
                                            <label class="col-form-label">User Image</label>
                                            <div class="">
                                             
                                                <input id="Image" type="file" name="user_images" class="form-control" >
                                               <img style="width: 20%;" id="showImage" src="{{ (!empty($adminEdit->user_images))? url('upload/user_images/'.$adminEdit->user_images): url('upload/no-image.jpg') }}" alt="">
                                            
                                               </div>
                                        </div>
                                        <div class="mb-3  col-xl-4">
                                            <label class="col-form-label">User Name</label>
                                            <div class="">
                                                <input type="text" name="name" class="form-control" value="{{ $adminEdit->name }}">
                                                @error('name')<span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>

                                         <div class="mb-3  col-xl-4">
                                            <label class="col-form-label">Mobile No.</label>
                                            <div class="">
                                                <input type="text" name="mobile" class="form-control" value="{{ $adminEdit->mobile }}">
                                                @error('mobile')<span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3  col-xl-4">
                                            <label class="col-form-label">Email</label>
                                            <div class="">
                                                <input type="email" name="email" class="form-control" value="{{ $adminEdit->email }}">
                                            </div>
                                        </div>
                                        

                                        <div class="mb-3  col-xl-4">
                                            <label class="col-form-label"> Password</label>
                                            <div class="">
                                                <input type="text" name="password" class="form-control" value="">
                                                @error('password')<span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 col-xl-4">
                                            <label class="col-form-label">Address</label>
                                            <div class="">
                                                <textarea type="password" name="address" class="form-control" > {{ $adminEdit->address }}</textarea>
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