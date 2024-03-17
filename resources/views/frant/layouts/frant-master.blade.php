<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon and touch Icons -->
    <link href="{{asset('frantend/img/favicon.png')}}" rel="shortcut icon" type="image/png">
    <link href="{{asset('frantend/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link href="{{asset('frantend/img/apple-touch-icon-72x72.png')}}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{asset('frantend/img/apple-touch-icon-114x114.png')}}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{asset('frantend/img/apple-touch-icon-144x144.png')}}" rel="apple-touch-icon" sizes="144x144">

    <!-- Page Title -->
    <title>Navi finance</title>
    <!-- Styles Include -->
    <link rel="stylesheet" href="{{asset('frantend/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('frantend/css/swiper/swiper.min.css')}}">
  
    <link rel="stylesheet" href="{{ asset('frantend/css/plugins/odometer/odometer-theme-default.css')}}"> 
   
    <link rel="stylesheet" href="{{ asset('frantend/css/header.css')}}"> 
    <link rel="stylesheet" href="{{ asset('frantend/css/section-heading.css')}}"> 
    <link rel="stylesheet" href="{{ asset('frantend/css/footer.css')}}"> 
    <link rel="stylesheet" href="{{ asset('frantend/css/style.css')}}"> 
    <link rel="stylesheet" href="{{ asset('frantend/css/seo-dark.css')}}"> 
    <link rel="stylesheet" href="{{ asset('frantend/css/shop.css')}}"> 
    <link rel="stylesheet" href="{{ asset('frantend/css/responsive.css')}}"> 

</head>


<body class="theme-style-social bg-23">

    
       
        @include('frant.layouts.header')
        @yield('webfrant')	
        @include('frant.layouts.footer') 
        
   

    <!-- Core JS -->
    <script src="{{asset('frantend/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('frantend/js/bootstrap.min.js')}}"></script>

    <!-- Swiper Slider -->
    <script src="{{asset('frantend/js/plugins/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Odometer -->
    <script src="{{asset('frantend/js/plugins/odometer/appear.js')}}"></script>
    <script src="{{asset('frantend/js/plugins/odometer/odometer.js')}}"></script>

    <!-- Split Text -->
    <!-- <script src="plugins/splittext/splt.min.js"></script>
        <script src="plugins/anime/anime.min.js"></script> -->

    <!-- WOW Effect -->
    <script src="{{asset('frantend/js/plugins/wow/wow.min.js')}}"></script>
    <!-- <script src="{{asset('frantend/js/cursor.js')}}"></script> -->

    <!-- Theme Custom JS -->
    <script src="{{asset('frantend/js/theme.js')}}"></script>

    <script src="{{ asset('frantend/js/jquery-3.6.0.min.js')}}"></script>  
  <script src="{{ asset('frantend/js/swiper/swiper.min.js')}}"></script>
  <script src="{{ asset('frantend/js/functions.js')}}"></script>
  
</style>
</body>

</html>