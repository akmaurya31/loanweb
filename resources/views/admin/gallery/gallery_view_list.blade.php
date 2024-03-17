@extends('layouts/admin-master')
@section('admin')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="javascript:;" onclick="getGalleryForm()" class="btn btn-rounded btn-primary"><span class="btn-icon-start text-info"><i
                                    class="fa fa-plus color-info"></i>
                            </span>Create Gallery</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="table">
                            <thead>
                                <tr>
                                    <th>S.no</th>
                                    <th>Action</th>
                                    <th>Gallery Image</th>
                                    <th>Heading</th>
                                    <th>Content</th>
                                    <th>Date</th>
                                </tr> 
                            </thead>                              
                                <tbody>
                                </tbody> 
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

        

<script>
     save_method = 'add'; 
     var table;
     var controllerListUrl = '{{ route('gallery.galleryReload') }}';
     var statusUrl = '{{ route('gallery.gallerystatusUpdate') }}';
     var deleteUrl = '{{ route('gallery.gallerydelete') }}';
   

function getGalleryForm(){    
    $('#myGalleryForm')[0].reset(); 
    $('.form-group').removeClass('has-error'); 
    $('.help-block').empty(); 
    $('#basicModal').modal('show');
    $(".modal-title").text('Create Gallery');   
    $('#photo-preview').hide();
    $('#label-photo').text('Upload Photo');
}  

function save() {
      
    if(save_method == 'add') {
        url = "{{ route('gallery.gallery_store') }}";
    } else {
        url = "{{ route('gallery.gallery_update') }}";
    }
    var formData = new FormData($('#myGalleryForm')[0]);

    $.ajax({
        url: url,
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        dataType: "JSON",
        success: function(data) {  
            
            if(data.status) 
            {               
                $('#basicModal').modal('hide');
                reload_table();
            }
            else
            {
                //alert(data.inputerror.length);
                for (var i = 0; i < data.inputerror.length; i++) 
                {
                    $('[name="'+data.inputerror[i]+'"]').parent().addClass('has-error'); 
                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]);
                }
            }
        },
        error: function(e) {
            alert('Error adding / update data');
            $('#btnSubmit').text('save'); 
            $('#btnSubmit').attr('disabled',false); 
           // btnSubmit.text('Save').prop('disabled', false);
        }
        
    });
}

function editGalleryForm(id){
    save_method = 'update';
    $('#myGalleryForm')[0].reset(); 
    $('.form-group').removeClass('has-error'); 
    $('.help-block').empty(); 

    $.ajax({
        url: '{{ route("gallery.gallery_edit", ":id") }}'.replace(':id', id),
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="id"]').val(data.id);          
            $('[name="heading"]').val(data.heading); 
            $('[name="content"]').val(data.content);         
            $('#basicModal').modal('show'); 
            $('.modal-title').text('Edit Gallery'); 
            $('#photo-preview').show(); 

            if(data.bg_image)
            {
                $('#label-photo').text('Change Photo'); // label photo upload
                $('#photo-preview div').html('<img src="'+base_url+'upload/gallery/'+data.bg_image+'" class="img-responsive">'); // show photo
                $('#photo-preview div').append('<input type="checkbox" name="remove_photo" value="'+data.bg_image+'"/> Remove photo when saving'); // remove photo

            }
            else
            {
                $('#label-photo').text('Upload logo'); // label photo upload
                $('#photo-preview div').text('(No logo)');
            }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

</script>


    <div class="modal fade" id="basicModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modal title</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="basic-form">
                        <form id="myGalleryForm">
                            @csrf
                            <input type="hidden" value="" name="id"/>
                            <div class="mb-3 row">
                                <label class="col-sm-4 col-form-label">Bg Image</label>
                                <div class="col-sm-8">
                                    <div  id="photo-preview">
                                        <label class="control-label col-md-3">Photo</label>
                                        <div class="col-md-9">(No photo) <span class="help-block"></span></div>
                                    </div>
                                    <input type="file" class="form-control-" name="bg_image" id="bg_image">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-4 col-form-label">Gallery Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="heading" id="heading">
                                    <span class="help-block"></span>
                                </div>
                            </div> 
                            
                            <div class="mb-3 row">
                                <label class="col-sm-4 col-form-label">Gallery Content </label>
                                <div class="col-sm-8">
                                    <textarea type="text" class="form-control" name="content" id="content"></textarea>
                                    <span class="help-block"></span>
                                </div>
                            </div> 
                            <div class="mb-3 row">
                                <div class="col-sm-10">
                                    <button type="button" class="btn btn-primary" id="btnSubmit" onclick="save()">Submit</button>
                                </div>
                            </div>
                        </form>
                        <h5 id="output"></h5>
                    </div>
                </div>              
            </div>
        </div>
    </div>
@endsection
