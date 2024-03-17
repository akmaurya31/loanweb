@extends('layouts/admin-master')
@section('admin')

 <div class="container-fluid">
			
                <!-- row -->
                <div class="row">
                   <div class="col-xl-12 col-lg-12">
                        <div class="card">
                           
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="post" action="{{ route('gallery_details.gallery_details_store',['id' => request('id')])}}" enctype='multipart/form-data'>
                                    @csrf

                                     <div class="row"> 
                                       
                                        <div class="mb-3  col-xl-3">
                                            <label class="col-form-label">Multi Image</label>
                                            <div class="">                                             
                                                <input id="Image" type="file" name="images[]" class="-form-control" multiple>
                                               <img style="width: 20%;" id="showImage" src="" alt="">
                                            
                                               </div>
                                        </div>

                                       
                                        <div class="mb-3  col-xl-4">
                                            <label class="col-form-label"> Heading</label>
                                            <div class="">
                                                <input type="text" name="heading" class="form-control" value="{{ old('heading') }}">
                                                @error('heading')<span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                       
                                    

                                        
                                      
                                        <div class="mb-3 col-xl-2 pt-4">
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


@endsection