@extends('layouts/admin-master')
@section('admin')
<div class="container-fluid">
    <div class="row">
    
        <div class="col-xl-12 mt-4">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row shapreter-row">
                                <div class="col-xl-2 col-lg-2 col-sm-4 col-6">
                                    <a href="{{ route('contact.contact_view_list') }}">
                                    <div class="static-icon">
                                        <span>
                                            <i class="fas fa-phone-alt"></i>
                                        </span>
                                        <h3 class="count">{{ $Allquery }}</h3>
                                        <span class="fs-14">Contact Query</span>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-sm-4 col-6">
                                    <a href="{{ route('userprofile.userprofile_list')}}">
                                    <div class="static-icon">
                                        <span>
                                            <i class="fas fa-eye"></i>
                                        </span>
                                        <h3 class="count">{{ $AllUser }}</h3>
                                        <span class="fs-14">Registered User</span>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-sm-4 col-6">
                                    <a href="{{ route('menu.menu_view_list') }}">
                                    <div class="static-icon">
                                        <span>
                                            <i class="fas fa-suitcase"></i>
                                        </span>
                                        <h3 class="count">{{ $AllMenu }}</h3>
                                        <span class="fs-14">Menu</span>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-sm-4 col-6">
                                    <a href="">
                                    <div class="static-icon">
                                       
                                        <span>
                                            <i class="far fa-comments"></i>
                                        </span>
                                        <h3 class="count">{{ $AllGallery }}</h3>
                                        <span class="fs-14">Gallery</span>
                            
                                    </div>
                                    </a>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-sm-4 col-6">
                                    <a href="">
                                    <div class="static-icon">
                                        <span>
                                            <i class="fas fa-suitcase"></i>
                                        </span>
                                        <h3 class="count">{{ $AllCategory }}</h3>
                                        <span class="fs-14">Category</span>
                                    </div>
                                    </a>
                                </div>
                               
                                <div class="col-xl-2 col-lg-2 col-sm-4 col-6">
                                    <a href="">
                                    <div class="static-icon">
                                        <span>
                                            <i class="fas fa-calendar"></i>
                                        </span>
                                        <h3 class="count">{{ $AllBlogs }}</h3>
                                        <span class="fs-14">News & Blogs</span>
                                    </div>
                                    </a>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>

               
             
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header border-0 pb-0">
                                    <h4 class="fs-20 mb-1">Today Payment </h4>                                  
                                </div>
                                <div class="card-body loadmore-content">
                                    <div class="row" id="FeaturedCompaniesContent">
                                        <div class="col-xl-6 col-sm-6 mt-4 ">
                                            <div class="d-flex">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
                                                          <g  transform="translate(-457 -443)">
                                                            <rect  width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"/>
                                                            <g  transform="translate(457 443)">
                                                              <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#2769ee"/>
                                                              <circle  data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"/>
                                                              <circle  data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                                                            </g>
                                                          </g>
                                                    </svg>
                                                </span>
                                                <div class="ms-3 featured">
                                                    <h4 class="fs-20 mb-1">Kleon Team</h4>
                                                    <span>Desgin Team Agency</span>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="card-footer border-0 m-auto pt-0">
                                    <a href="{{ route('contact.customer_payment') }}" class="btn btn-outline-primary btn-rounded m-auto ">View more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header border-0 pb-0">
                                    <h4 class="fs-20 mb-1">Today Customer Status </h4>                                  
                                </div>
                                <div class="card-body loadmore-content">
                                    <div class="row" id="FeaturedCompaniesContent">
                                        <div class="col-xl-6 col-sm-6 mt-4 ">
                                            <div class="d-flex">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
                                                          <g  transform="translate(-457 -443)">
                                                            <rect  width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"/>
                                                            <g  transform="translate(457 443)">
                                                              <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#2769ee"/>
                                                              <circle  data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"/>
                                                              <circle  data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                                                            </g>
                                                          </g>
                                                    </svg>
                                                </span>
                                                <div class="ms-3 featured">
                                                    <h4 class="fs-20 mb-1">Kleon Team</h4>
                                                    <span>Desgin Team Agency</span>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="card-footer border-0 m-auto pt-0">
                                    <a href="{{ route('contact.customer_state_wise') }}" class="btn btn-outline-primary btn-rounded "  >View more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row ">
                                <div class="col-xl-8 col-xxl-7 col-sm-7">
                                    <div class="update-profile d-flex">
                                        <img src="{{asset('backend/logo.png')}}" alt="">
                                        <div class="ms-4">
                                            <h3 class="fs-24 font-w600 mb-0">{{ Auth::user()->name}}</h3>
                                            <span class="text-primary d-block mb-4">Super Admin</span>
                                            <span><i class="fas fa-map-marker-alt me-1"></i>{{ Auth::user()->address}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-xxl-5 col-sm-5 sm-mt-auto mt-3">
                                    <a href="{{ route('admin.profile') }}" class="btn btn-primary btn-rounded">Update Profile</a>
                                </div>
                                <div class="row mt-4 align-items-center">
                                    <h4 class="fs-20 mb-3">Skills</h4>
                                    <div class="col-xl-6 col-sm-6">
                                        <div class="progress default-progress">
                                            <div class="progress-bar bg-green progress-animated" style="width: 90%; height:13px;" role="progressbar">
                                                <span class="sr-only">90% Complete</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end mt-2 pb-4 justify-content-between">
                                            <span class="fs-14 font-w500">Figma</span>
                                            <span class="fs-16"><span class="text-black pe-2"></span>90%</span>
                                        </div>
                                        <div class="progress default-progress">
                                            <div class="progress-bar bg-info progress-animated" style="width: 68%; height:13px;" role="progressbar">
                                                <span class="sr-only">45% Complete</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end mt-2 pb-4 justify-content-between">
                                            <span class="fs-14 font-w500">Adobe XD</span>
                                            <span class="fs-16"><span class="text-black pe-2"></span>68%</span>
                                        </div>
                                        <div class="progress default-progress">
                                            <div class="progress-bar bg-blue progress-animated" style="width: 85%; height:13px;" role="progressbar">
                                                <span class="sr-only">85% Complete</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end mt-2 pb-4 justify-content-between">
                                            <span class="fs-14 font-w500">Photoshop</span>
                                            <span class="fs-16"><span class="text-black pe-2"></span>85%</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-sm-6">
                                        <div id="pieChart1"></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card" id="user-activity1">
                                <div class="card-header border-0 pb-0">
                                    <h4 class="fs-20 mb-1">Chart</h4>
                                    <div class="card-action coin-tabs">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link " data-bs-toggle="tab" href="#Daily1" role="tab">Daily</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " data-bs-toggle="tab" href="#weekly1" role="tab" >Weekly</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#monthly1" role="tab" >Monthly</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <span class="me-sm-5 me-0 font-w500">
                                        <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                                          <rect  width="13" height="13" fill="#f73a0b"/>
                                        </svg>
                                        Delivered
                                    </span>
                                    <span class="fs-16 font-w600 me-5">239 <small class="text-success fs-12 font-w400">+0.4%</small></span>
                                    <span class="ms-sm-5 ms-0 font-w500">
                                        <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                                          <rect  width="13" height="13" fill="#6e6e6e"/>
                                        </svg>
                                        Expense
                                    </span>
                                    <span class="fs-16 font-w600">239</span>
                                    <div class="tab-content mt-5" id="myTabContent">
                                        <div class="tab-pane fade show active" id="monthly1">
                                            <canvas id="activity1" class="chartjs"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

       
        
    </div>	
</div>
    
@endsection