<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Login panel</title>
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('backend/images/favicon.png') }}" />   
     <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
</head>
<style>
    b, strong {
        font-weight: bolder;
        font-family: 'Poppins';
    }
    .form-control {    
        border: 0.0625rem solid #372c2c;
       font-size:15px;
    }
    .form-group p{
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
    .card-body {
        padding: 0.875rem;
    }
    
    .header-profile img {
        border-radius: 0rem; 
    }
    .card-header {
        padding: 0.5rem 1.875rem 0.25rem;
       
    }
    .modal-header .close {
        padding: 0.2rem 0.2rem;    
        font-size: 1.75rem;
        font-weight: 100;
    }
    
            table.dataTable tbody td {
                font-size: 1.0rem;
            }
            .text-success {
        color: #168d13 !important;
    }	
    .btn {
        padding: 0.625rem 1rem;
        font-size: 1.0rem;
    }
    .form-control {   
        border: 0.0625rem solid #93b78a;
    }
    .form-group{
        margin-bottom: 0.9rem;
    }
    .col-form-label {   
        font-size: 16px;
    }
    .font-medium{
    font-size: 15px;
    }
        
        .table tbody tr td{
            font-size: 14px;
        }
        label {
          font-size: 14px;
         }
         .text-red-600{
         color:#ff0000;
         }
        </style>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            @yield('admin')
        </div>
    </div>
    


 <!-- Required vendors -->
 <script src="{{asset('backend/vendor/global/global.min.js')}}"></script>
 <script src="{{asset('backend/vendor/chart.js/Chart.bundle.min.js')}}"></script>
 <script src="{{asset('backend/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>
 


</body>
</html>
