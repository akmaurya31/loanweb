@extends('layouts/admin-master')
@section('admin')

 <div class="container-fluid">
			
                <!-- row -->
                <div class="row">
                   <div class="col-xl-12 col-lg-12">
                        <div class="card">
                           
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="post" action="{{ route('gallery_details.gallery_details_update',['gallery_id' => request('gallery_id'),'id' => $fatchRecord->id]) }}" enctype='multipart/form-data'>
                                    @csrf



                                    <div class="row"> 
                                       
                                        <div class="mb-3  col-xl-3">
                                            <label class="col-form-label"> Image</label>
                                            <div class="">                                             
                                                <input id="Image" type="file" name="image" class="form-control-" >
                                                <img style="width: 20%;" id="showImage" src="{{ (!empty($fatchRecord->image))? url('upload/gallery/'.$fatchRecord->image): url('upload/no-image.jpg') }}" alt="">
                                            </div>
                                        </div>

                                        

                                        <div class="mb-3  col-xl-4">
                                            <label class="col-form-label">Heading</label>
                                            <div class="">
                                                <input type="text" name="heading" class="form-control" value="{{ $fatchRecord->heading }}">
                                                @error('heading')<span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                     

                                       
                                        <div class="mb-3 col-xl-2 pt-4">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Update</button>
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