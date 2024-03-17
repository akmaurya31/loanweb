@extends('layouts/admin-master')
@section('admin')

 <div class="container-fluid">
			
                <!-- row -->
                <div class="row">
                   <div class="col-xl-12 col-lg-12">
                        <div class="card">
                           
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="post" action="{{ route('admin.profile.store')}}" enctype='multipart/form-data'>
                                    @csrf

                                     <div class="row"> 
                                        <div class="mb-3  col-xl-4">
                                            <label class="col-form-label">Logo</label>
                                            <div class="">
                                             
                                                <input id="Image" type="file" name="user_images" class="form-control" >
                                               <img style="width: 20%;" id="showImage" src="{{ (!empty($adminEdit->user_images))? url('upload/admin_images/'.$adminEdit->user_images): url('upload/no-image.jpg') }}" alt="">
                                            
                                               </div>
                                        </div>
                                        <div class="mb-3  col-xl-4">
                                            <label class="col-form-label">User Name</label>
                                            <div class="">
                                                <input type="text" name="username" class="form-control" value="{{ $adminEdit->name }}">
                                                @error('username')<span class="text-danger">{{ $message }}</span> @enderror
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
                                                <input type="email" name="email_id" class="form-control" value="{{ $adminEdit->email }}">
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3 col-xl-8 ">
                                            <label class="col-form-label">Address</label>
                                            <div class="">
                                                <textarea type="password" name="address" class="form-control" > {{ $adminEdit->address }}</textarea>
                                            </div>
                                        </div>
                                            
                                        <div class="mb-3  col-xl-4">
                                            <label class="col-form-label">Processing Free</label>
                                            <div class="">
                                                <input type="text" name="processing_free" class="form-control" value="{{ $adminEdit->processing_free }}">
                                            </div>
                                        </div>

                                        <div class="mb-3  col-xl-4">
                                            <label class="col-form-label">Health Insurance Free</label>
                                            <div class="">
                                                <input type="text" name="health_insurance_free" class="form-control" value="{{ $adminEdit->health_insurance_free }}">
                                            </div>
                                        </div>


                                        <div class="mb-3  col-xl-4">
                                            <label class="col-form-label">Interest Rate</label>
                                            <div class="">
                                                <input type="text" name="annualInterestRate" class="form-control" value="{{ $adminEdit->annualInterestRate }}">
                                            </div>
                                        </div>

                                        
                                        <div class="mb-3  col-xl-4">
                                            <label class="col-form-label">Bank Name</label>
                                            <div class="">
                                                <input type="text" name="bank_name" class="form-control" value="{{ $adminEdit->bank_name }}">
                                            </div>
                                        </div>
                                        <div class="mb-3  col-xl-4">
                                            <label class="col-form-label">Ifsc</label>
                                            <div class="">
                                                <input type="text" name="ifsc" class="form-control" value="{{ $adminEdit->ifsc }}">
                                            </div>
                                        </div>
                                        <div class="mb-3  col-xl-4">
                                            <label class="col-form-label">Account No</label>
                                            <div class="">
                                                <input type="text" name="account" class="form-control" value="{{ $adminEdit->account }}">
                                            </div>
                                        </div>
                                        <div class="mb-3  col-xl-4">
                                            <label class="col-form-label">Holder Name</label>
                                            <div class="">
                                                <input type="text" name="holder_name" class="form-control" value="{{ $adminEdit->holder_name }}">
                                            </div>
                                        </div>
                                        <div class="mb-3  col-xl-4">
                                            <label class="col-form-label">Google pay</label>
                                            <div class="">
                                                <input type="text" name="google_pay" class="form-control" value="{{ $adminEdit->google_pay }}">
                                            </div>
                                        </div>
                                        



                                            <hr>
                                            <div class="mb-3  col-xl-4">
                                                <label class="col-form-label">Facebook</label>
                                                <div class="">
                                                    <input type="text" name="facebook" class="form-control" value="{{ $adminEdit->facebook }}">
                                                </div>
                                            </div>
    
                                             <div class="mb-3  col-xl-4">
                                                <label class="col-form-label">Linkedin</label>
                                                <div class="">
                                                    <input type="text" name="linkedin" class="form-control" value="{{ $adminEdit->linkedin }}">
                                                </div>
                                            </div>
    
                                            <div class="mb-3  col-xl-4">
                                                <label class="col-form-label">Youtube</label>
                                                <div class="">
                                                    <input type="text" name="youtube" class="form-control" value="{{ $adminEdit->youtube }}">
                                                </div>
                                            </div>
                                            <div class="mb-3 col-xl-4">
                                                <label class="col-form-label">Instagram</label>
                                                <div class="">
                                                    <input type="text" name="instagram" class="form-control" value="{{ $adminEdit->instagram }}">
                                                </div>
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