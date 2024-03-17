@extends('layouts/admin-master')
@section('admin')

 <div class="container-fluid">
			
                <!-- row -->
                <div class="row">
                   <div class="col-xl-12 col-lg-12">
                        <div class="card">
                           
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="post" action="{{ route('news.news_update',$datalist_news->id) }}" enctype='multipart/form-data'>
                                    @csrf

                                     <div class="row"> 

                                        <div class="mb-3  col-xl-3">
                                            <label class="col-form-label">Image</label>
                                            <div class="">
                                             
                                                <input id="Image" type="file" name="category_image" class="form-control-" >
                                                <img style="width: 20%;" id="showImage" src="{{ (!empty($datalist_news->category_image))? url('upload/category_image/'.$datalist_news->category_image): url('upload/no-image.jpg') }}" alt="">
                                            
                                               </div>
                                        </div>
                                        <div class="mb-3  col-xl-6">
                                            <label class="col-form-label"> Heading</label>
                                            <div class="">
                                                <input type="text" name="heading" class="form-control" value="{{ $datalist_news->heading  }}">
                                                @error('heading')<span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3  col-xl-3">
                                            <label class="col-form-label"> Days</label>
                                            <div class="">
                                                <input type="date" name="days" class="form-control" value="{{ $datalist_news->days  }}">
                                                @error('days')<span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3  col-xl-12">
                                            <label class="col-form-label"> Content</label>
                                            <div class="">
                                                <textarea type="text" id="editor1" name="content" class="form-control" >{{ $datalist_news->content  }}</textarea>
                                               
                                            </div>
                                        </div>


                                    
                                           

                                      
                                        <div class="mb-3 col-xl-12">
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