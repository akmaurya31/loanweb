@extends('layouts/admin-master')
@section('admin')

 <div class="container-fluid">
			
                <!-- row -->
                <div class="row">
                   <div class="col-xl-12 col-lg-12">
                        <div class="card">
                           
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="post" action="{{ route('userprofile.userprofile_store')}}" enctype='multipart/form-data'>
                                    @csrf

                                     <div class="row"> 
                                        <div class="mb-3  col-xl-4">
                                            <label class="col-form-label">User Image</label>
                                            <div class="">
                                             
                                                <input id="Image" type="file" name="category_image" class="form-control" >
                                               <img style="width: 20%;" id="showImage" src="" alt="">
                                            
                                               </div>
                                        </div>

                                        <div class="mb-3  col-xl-4">
                                            <label class="col-form-label"> User Name</label>
                                            <div class="">
                                                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                                                @error('name')<span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                       
                                  
                                        <div class="mb-3  col-xl-4">
                                            <label class="col-form-label"> Mobile No</label>
                                            <div class="">
                                                <input type="text" name="mobile" class="form-control" value="{{ old('mobile') }}">
                                                @error('mobile')<span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                     
                                        <div class="mb-3  col-xl-4">
                                            <label class="col-form-label"> Email Id</label>
                                            <div class="">
                                                <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                                                @error('email')<span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3  col-xl-4">
                                            <label class="col-form-label"> Password</label>
                                            <div class="">
                                                <input type="text" name="password" class="form-control" value="{{ old('password') }}">
                                                @error('password')<span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                       
                                        <div class="mb-3  col-xl-4">
                                            <label class="col-form-label"> Address</label>
                                            <div class="">
                                                <textarea type="text" name="address" class="form-control" >{{ old('address') }}</textarea>
                                                @error('address')<span class="text-danger">{{ $message }}</span> @enderror
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