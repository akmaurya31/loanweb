<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Loan Portal </title>
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- PAGE TITLE HERE -->
    
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('backend/images/favicon.png') }}" />  
    <link href="{{asset('backend/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">    
    <link href="{{asset('backend/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
	<link href="{{asset('backend/vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />	
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
</head>
	

<style>
	.content-body .container-fluid, .content-body .container-sm, .content-body .container-md, .content-body .container-lg, .content-body .container-xl, .content-body .container-xxl {
    padding-top: 0.5rem;
    padding-right: 1.5rem;
    padding-left: 1.5rem;
}
.form-control {
   font-size:15px;
}
.form-group p{
    color:#ff0000;
}

.help-block{
    color:#ff0000;
}
.form-check-input {
   
    border-color: #FFC107;
}

@media only screen and (max-width: 87.5rem){
.header-profile img {
    width: 4.4375rem;
}
}


.header-profile img {
    border-radius: 0rem; 
}

.modal-header .close {
    padding: 0.2rem 0.2rem;    
    font-size: 1.75rem;
    font-weight: 100;
}
table.dataTable th{
    font-size: 15px;
}
		table.dataTable tbody td {
			font-size: 15px;
			font-weight: 500;
		}
		.text-success {
    color: #168d13 !important;
}	

.form-control {   
    border: 0.0625rem solid #93b78a;
}
.form-group{
	margin-bottom: 0.9rem;
}
.col-form-label {   
    font-size: 14.7px;
}
	
	.table tbody tr td{
        font-size: 14.7px;
    }
    label {
      font-size: 14.7px;
     }
     .header-profile img {
    width: 6.5rem;
    height: 3.5rem;
    border-radius: 1.25rem;
}

.plus-box {    
    padding: 2rem 1rem;    
}
	</style>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
       
        @include('layouts.admin-header');  
        @include('layouts.admin-sidebar');  
        <div class="content-body">@yield('admin')	</div> 





         <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed  by <a href="" target="_blank">Loan Portal</a> 2024</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

	
	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

 
 <!-- Required vendors -->
 <script src="{{asset('backend/vendor/global/global.min.js')}}"></script>
 <script src="{{asset('backend/vendor/chart.js/Chart.bundle.min.js')}}"></script>
 <script src="{{asset('backend/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>


 <!-- Apex Chart -->
 <script src="{{asset('backend/vendor/apexchart/apexchart.js')}}"></script>
 
 <script src="{{asset('backend/vendor/chart.js/Chart.bundle.min.js')}}"></script>
 
 <!-- Chart piety plugin files -->
 <script src="{{asset('backend/vendor/peity/jquery.peity.min.js')}}"></script>
 
 <!-- Dashboard 1 -->
 <script src="{{asset('backend/js/dashboard/dashboard-1.js')}}"></script>
 
 <script src="{{asset('backend/vendor/owl-carousel/owl.carousel.js')}}"></script>
 
 <script src="{{asset('backend/js/custom.min.js')}}"></script>
 <script src="{{asset('backend/js/dlabnav-init.js')}}"></script>
 
  <!-- Datatable -->
  <script src="{{asset('backend/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('backend/js/plugins-init/datatables.init.js')}}"></script>

  <script src="{{asset('backend/js/paikasoft.js')}}"></script>
 <!-- CK Editor -->
 <script src="{{asset('backend/js/ckeditor/ckeditor.js')}}"></script>


 <script type="text/javascript">
 $(function () {
 CKEDITOR.replace('editor1');
 CKEDITOR.replace('editor2');
 CKEDITOR.replace('editor3');
 CKEDITOR.replace('editor4');
 CKEDITOR.replace('editor5');

 $(".textarea").wysihtml5();
 });
 </script>

 <!-- Include toastr CSS and JS files -->
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

$(document).ready(function() {
 // This function will be executed when the element with id "delete" is clicked
 $(document).on("click", "#delete", function(e) {
     e.preventDefault(); // Prevent the default action (e.g., navigating to a new page)
     var link = $(this).attr("href");
const swalWithBootstrapButtons = Swal.mixin({

customClass: {
confirmButton: "btn btn-success",
cancelButton: "btn btn-danger"
},
buttonsStyling: false
});
swalWithBootstrapButtons.fire({
title: "Are you sure?",
text: "You won't be able to Delete this!",
icon: "warning",
showCancelButton: true,
confirmButtonText: "Yes, delete it!",
cancelButtonText: "No, cancel!",
reverseButtons: true
}).then((result) => {
if (result.isConfirmed) {
 window.location.href= link
swalWithBootstrapButtons.fire({
 title: "Deleted!",
 text: "Your file has been deleted.",
 icon: "success"
});
} else if (
/* Read more about handling dismissals below */
result.dismiss === Swal.DismissReason.cancel
) {
swalWithBootstrapButtons.fire({
 title: "Cancelled",
 text: "Your imaginary file is safe :)",
 icon: "error"
});
}
});
     
 });
});





 </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Display toastr messages -->
<script>
@if(Session::has('message'))

     var type = "{{ Session::get('alert-type','info') }}";
     var message = "{{ Session::get('message')}}";

     switch (type) {
         case "info":
             toastr.info(message);
             break;

         case "success":
             toastr.success(message);
             break;

         case "warning":
             toastr.warning(message);
             break;

         case "error":
             toastr.error(message);
             break;

         default:
             toastr.info(message);
     }

@endif
 </script>
 
 <script>
     function JobickCarousel()
         {

             /*  testimonial one function by = owl.carousel.js */
             jQuery('.front-view-slider').owlCarousel({
                 loop:false,
                 margin:30,
                 nav:true,
                 autoplaySpeed: 3000,
                 navSpeed: 3000,
                 autoWidth:true,
                 paginationSpeed: 3000,
                 slideSpeed: 3000,
                 smartSpeed: 3000,
                 autoplay: false,
                 animateOut: 'fadeOut',
                 dots:true,
                 navText: ['', ''],
                 responsive:{
                     0:{
                         items:1
                     },
                     
                     480:{
                         items:1
                     },			
                     
                     767:{
                         items:3
                     },
                     1750:{
                         items:3
                     }
                 }
             })
         }

         jQuery(window).on('load',function(){
             setTimeout(function(){
                 JobickCarousel();
             }, 1000); 
         });
 </script>


<script>
$(document).ready(function() {
$("#Image").change(function(e) {
var reader = new FileReader();
reader.onload = function(e) {
$("#showImage").attr('src', e.target.result);
}
reader.readAsDataURL(e.target.files['0']);
});

$("#Image1").change(function(e) {
var reader = new FileReader();
reader.onload = function(e) {
$("#showImage1").attr('src', e.target.result);
}
reader.readAsDataURL(e.target.files['0']);
});


$("#Image2").change(function(e) {
var reader = new FileReader();
reader.onload = function(e) {
$("#showImage2").attr('src', e.target.result);
}
reader.readAsDataURL(e.target.files['0']);
});


$("#Image3").change(function(e) {
var reader = new FileReader();
reader.onload = function(e) {
$("#showImage3").attr('src', e.target.result);
}
reader.readAsDataURL(e.target.files['0']);
});
});

</script>

</body>
</html>
