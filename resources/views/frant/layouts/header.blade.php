  <!-- Header -->

  <header class="header style8 py-4 py-lg-0">
    <div class="container">
        <div class="header_inner d-flex align-items-center justify-content-between">
            <div class="logo flex-shrink-0">
                <a href="/" class="logo-default">
                <?php logo()?>
                    <!--<img src="{{ asset('backend/images/logo.png')}}" alt="logo">--></a>
            </div>


            <div class="header_right_part d-flex align-items-center justify-content-between gap-lg-5">
                <div class="mainnav d-none d-lg-block">
                    <ul class="main-menu">

                        <li class="menu-item active-"><a href="/" id=""><span>Home</span></a></li>
                       <li class="menu-item "><a href="{{ route('home.applyloan')}}" id=""><span>Apply Loan</span></a></li>

                        <li class="menu-item "><a href="{{ route('home.checkstatus') }}" id=""><span>Check Loan Status</span></a></li>
                        <li class="menu-item "><a href="{{ route('service.service_list') }}" id=""><span>Services</span></a></li>

                        <li class="menu-item"><a href="{{ route('home.contact') }}" id=""><span>Contact Us</span></a></li>
                         <li class="menu-item"><a href="{{ route('home.repayment') }}" id=""><span>Repayment</span></a></li>
                   
                    </ul>
                </div>

                <div class="btn-part d-flex align-items-center gap-4">
                    

                    <!-- Mobile Responsive Menu Toggle Button -->
                    <button type="button" class="mr-menu_toggle d-lg-none">
                        <i class="bi bi-list"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Responsive Menu -->
<div class="mr-menu">
    <div class="mr-menu_overlay"></div>
    <button type="button" class="mr-menu_close"><i class="bi bi-x-lg"></i></button>
    <div class="logo"></div> <!-- Keep this div empty. Logo will come here by JavaScript -->
    <div class="mr_navmenu"></div> <!-- Keep this div empty. Menu will come here by JavaScript -->
</div>


<!-- Main Wrapper-->
<main class="wrapper">