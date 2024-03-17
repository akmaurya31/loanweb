@extends('layouts/admin-master')
@section('admin')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="javascript:;" onclick="getTestimonialForm()" class="btn btn-rounded btn-primary"><span class="btn-icon-start text-info"><i
                                    class="fa fa-plus color-info"></i>
                            </span>Create Testimonial</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="table">
                            <thead>
                                <tr>
                                    <th>S.no</th>
                                    <th>Action</th>
                                    <th>User Image</th>
                                    <th>User Name</th>
                                    <th>User Profile</th>
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
     var controllerListUrl = '{{ route('testimonials.testimonialsReload') }}';
     var statusUrl = '{{ route('testimonials.testimonialsstatusUpdate') }}';
     var deleteUrl = '{{ route('testimonials.testimonialsdelete') }}';
   

function getTestimonialForm(){    
    $('#myTestimonialForm')[0].reset(); 
    $('.form-group').removeClass('has-error'); 
    $('.help-block').empty(); 
    $('#basicModal').modal('show');
    $(".modal-title").text('Create Testimonial');   
    $('#photo-preview').hide();
    $('#label-photo').text('Upload Photo');
}  

function save() {
      
    if(save_method == 'add') {
        url = "{{ route('testimonials.testimonials_store') }}";
    } else {
        url = "{{ route('testimonials.testimonials_update') }}";
    }
    var formData = new FormData($('#myTestimonialForm')[0]);

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

function editTestimonialForm(id){
    save_method = 'update';
    $('#myTestimonialForm')[0].reset(); 
    $('.form-group').removeClass('has-error'); 
    $('.help-block').empty(); 

    $.ajax({
        url: '{{ route("testimonials.testimonials_edit", ":id") }}'.replace(':id', id),
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="id"]').val(data.id);          
            $('[name="name"]').val(data.name); 
            $('[name="content"]').val(data.content);   
            $('[name="profile"]').val(data.profile);         
            $('#basicModal').modal('show'); 
            $('.modal-title').text('Edit Testimonial'); 
            $('#photo-preview').show(); 

            if(data.bg_image)
            {
                $('#label-photo').text('Change Photo'); // label photo upload
                $('#photo-preview div').html('<img src="'+base_url+'upload/testimonial/'+data.bg_image+'" class="img-responsive">'); // show photo
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
                        <form id="myTestimonialForm">
                            @csrf
                            <input type="hidden" value="" name="id"/>
                            <div class="mb-3 row">
                                <label class="col-sm-4 col-form-label">Bg Image</label>
                                <div class="col-sm-8">
                                    <div  id="photo-preview">
                                        <label class="control-label col-md-3">Photo</label>
                                        <div class="col-md-9">(No photo) <span class="help-block"></span></div>
                                    </div>
                                    <input type="file" class="form-control-" name="user_image" id="user_image">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-4 col-form-label">User Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name" id="name">
                                    <span class="help-block"></span>
                                </div>
                            </div> 
                            <div class="mb-3 row">
                                <label class="col-sm-4 col-form-label">User Profile</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="profile" id="profile">
                                    <span class="help-block"></span>
                                </div>
                            </div> 
                            
                            <div class="mb-3 row">
                                <label class="col-sm-4 col-form-label">User Content </label>
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
