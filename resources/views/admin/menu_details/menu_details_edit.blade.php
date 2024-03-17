@extends('layouts/admin-master')
@section('admin')

 <div class="container-fluid">
			
                <!-- row -->
                <div class="row">
                   <div class="col-xl-12 col-lg-12">
                        <div class="card">
                           
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="post" action="{{ route('menu_details.menu_details_update',['menu_id' => request('menu_id'),'id' => $fatchRecord->id]) }}" enctype='multipart/form-data'>
                                    @csrf



                                    <div class="row"> 
                                       
                                        <div class="mb-3  col-xl-3">
                                            <label class="col-form-label"> Image</label>
                                            <div class="">                                             
                                                <input id="Image" type="file" name="image" class="form-control-" >
                                                <img style="width: 20%;" id="showImage" src="{{ (!empty($fatchRecord->image))? url('upload/menu/'.$fatchRecord->image): url('upload/no-image.jpg') }}" alt="">
                                            </div>
                                        </div>

                                        

                                        <div class="mb-3  col-xl-9">
                                            <label class="col-form-label">Heading</label>
                                            <div class="">
                                                <input type="text" name="heading" class="form-control" value="{{ $fatchRecord->heading }}">
                                                @error('heading')<span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        
                                  
                                        <div class="mb-3 col-xl-12 ">
                                            <label class="col-form-label">Content</label>
                                            <div class="">
                                                <textarea type="text"  id="editor1" name="content" class="form-control" > {{$fatchRecord->content  }}</textarea>
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

@endsection