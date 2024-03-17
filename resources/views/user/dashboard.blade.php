@extends('layouts/admin-master')
@section('admin')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-6">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row separate-row">
                                <div class="col-sm-6">
                                    <div class="job-icon pb-4 d-flex justify-content-between">
                                        <div>
                                            <div class="d-flex align-items-center mb-1">
                                                <h2 class="mb-0">342</h2>
                                                <span class="text-success ms-3">+0.5 %</span>
                                            </div>	
                                            <span class="fs-14 d-block mb-2">Interview Schedules</span>
                                        </div>	
                                        <div id="NewCustomers"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="job-icon pb-4 pt-4 pt-sm-0 d-flex justify-content-between">
                                        <div>
                                            <div class="d-flex align-items-center mb-1">
                                                <h2 class="mb-0">984</h2>
                                            </div>	
                                            <span class="fs-14 d-block mb-2">Application Sent</span>
                                        </div>	
                                        <div id="NewCustomers1"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="job-icon pt-4 pb-sm-0 pb-4 pe-3 d-flex justify-content-between">
                                        <div>
                                            <div class="d-flex align-items-center mb-1">
                                                <h2 class="mb-0">1,567k</h2>
                                                <span class="text-danger ms-3">-2 % </span>
                                            </div>	
                                            <span class="fs-14 d-block mb-2">Profile Viewed</span>
                                        </div>	
                                        <div id="NewCustomers2"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="job-icon pt-4  d-flex justify-content-between">
                                        <div>
                                            <div class="d-flex align-items-center mb-1">
                                                <h2 class="mb-0">437</h2>
                                            </div>	
                                            <span class="fs-14 d-block mb-2">Unread Messages</span>
                                        </div>	
                                        <div id="NewCustomers3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
       <!-- <div class="col-xl-6">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row ">
                                <div class="col-xl-8 col-xxl-7 col-sm-7">
                                    <div class="update-profile d-flex">
                                        <img src="{{asset('backend/images/profile/pic1.jpg')}}" alt="">
                                        <div class="ms-4">
                                            <h3 class="fs-24 font-w600 mb-0">Franklin Jr</h3>
                                            <span class="text-primary d-block mb-4">UI / UX Designer</span>
                                            <span><i class="fas fa-map-marker-alt me-1"></i>Medan, Sumatera Utara - ID</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-xxl-5 col-sm-5 sm-mt-auto mt-3">
                                    <a href="javascript:void(0);" class="btn btn-primary btn-rounded">Update Profile</a>
                                </div>
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
        </div>-->
        
    </div>	
</div>
    
@endsection