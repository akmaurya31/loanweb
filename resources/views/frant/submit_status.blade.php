@extends('frant/layouts/frant-master')
@section('webfrant')
    <div id="wptb-page-title-default">
        <div class="wptb-page-title-default-bg"
            style="background-image:url({{ asset('frantend/img/background/bg-pagetitle.jpg') }})"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="wptb-page-title"></h1>

                </div>
            </div>
        </div>
    </div>



    <section class="wptb-contact-wrapper style3">

        <div class="container-fluid">
            <form class="row justify-content-center align-items-center pt-4 pb-1" method="post">
                <div class="col-lg-3 mb-3 d-flex justify-content-center align-items-center">
                    <img src="" width="210" height="auto" alt="Check Status" class="">
                </div>
                <div class="col-lg-3">
                    <div class="mb-3">
                        <label class="form-label"><i class="bi-solid bi-info ml-5"></i> Application No</label>
                        <input type="text" class="form-control" style="font-weight: 600;" name="name"
                            value="FPN08561058<?= $getStatus->id?>" disabled="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><i class="bi bi-person-circle ml-5"></i> Full Name</label>
                        <input type="text" class="form-control" name="email" style="font-weight: 600;" value="<?= $getStatus->name?>"
                            disabled="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="mb-3 text-center">
                        <label class="form-label">Your online application status</label>

                        <h2 style="color:orange;">Pendding</h2>
                    </div>
                </div>
            </form>
        </div>


        <div class="container-fluid">
            <form class="row justify-content-center pt-5 pb-5">
                <div class="col-lg-3" style="background: #fff;padding: 10px;">
                    <div class="mb-3">
                        <label class="form-label"><i class="bi bi-envelope mx-2"></i> Email (ID)</label>
                        <input type="text" class="form-control" name="email" style="font-weight: 600;"
                            value="<?= $getStatus->email?>" disabled="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><i class="bi bi-phone mx-2"></i> Phone No.</label>
                        <input type="text" class="form-control" name="phonnumber" style="font-weight: 600;"
                            value="<?= $getStatus->mobile?>" disabled="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><i class="bi-brands bi-whatsapp mx-2"></i> WhatApp
                            No.</label>
                        <input type="text" class="form-control" name="whatappnumber" style="font-weight: 600;"
                            value="<?= $getStatus->whatsappnumber?>" disabled="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><i class="bi bi-credit-card mx-2"></i> Aadhar No.</label>
                        <input type="text" class="form-control" name="aadharno" style="font-weight: 600;"
                            value="<?= $getStatus->aadharno?>" disabled="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><i class="bi bi-credit-card-2-back mx-2"></i> PAN Card No.</label>
                        <input type="text" class="form-control" name="pancard" style="font-weight: 600;"
                            value="<?= $getStatus->pancard?>" disabled="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><i class="bi bi-bank mx-2"></i> Loan Amount</label>
                        <input type="text" class="form-control" name="loanamoun" style="font-weight: 600;" value="<?= $getStatus->loanamoun?>"
                            disabled="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><i class="bi bi-person-lines-fill mx-2"></i> Loan
                            Type</label>
                        <input type="text" class="form-control" name="loanamoun" style="font-weight: 600;"
                            value="<?= $getStatus->loantype?>" disabled="">
                    </div>
                </div>
                <div class="col-lg-3" style="background: #fff;padding: 10px;">
                    <div class="mb-3">
                        <label class="form-label"><i class="bi bi-bank2 mx-2"></i> Bank Name</label>
                        <input type="text" class="form-control" name="bankname" style="font-weight: 600;"
                            value="<?= $getStatus->bankname?>" disabled="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><i class="bi bi-card-text mx-2"></i> Bank Account
                            No.</label>
                        <input type="text" class="form-control" name="bankaccountno" style="font-weight: 600;"
                            value="<?= $getStatus->bankaccountno?>" disabled="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><i class="bi bi-credit-card-2-front mx-2"></i> Bank IFSC
                            Code</label>
                        <input type="text" class="form-control" name="bankifsccode" style="font-weight: 600;"
                            value="<?= $getStatus->bankifsccode?>" disabled="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><i class="bi bi-globe-americas mx-2"></i> State</label>
                        <input type="text" class="form-control" name="pincode" style="font-weight: 600;"
                            value="<?= $getStatus->state?>" disabled="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><i class="bi bi-geo-alt mx-2"></i> City</label>
                        <input type="text" class="form-control" name="city" style="font-weight: 600;"
                            value="<?= $getStatus->city?>" disabled="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><i class="bi bi-123 mx-2"></i> Pin Code</label>
                        <input type="text" class="form-control" name="pincode" style="font-weight: 600;"
                            value="<?= $getStatus->pincode?>" disabled="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><i class="bi bi-person-arms-up mx-2"></i> loan Tenure</label>
                        <input type="text" class="form-control" name="loanamoun" style="font-weight: 600;"
                            value="<?= $getStatus->loantenure?> Year" disabled="">
                    </div>
                </div>



                <div class="col-lg-3" style="background: #198754;border-radius: 11px;">
                    <div class="mb-3 text-center">
                        

<?php 
                     $encryptedMobile = encrypt($getStatus->mobile);                   
                    
                    if($getStatus->assign_loan_id==1 || $getStatus->assign_loan_id==2 ||$getStatus->assign_loan_id==4 || $getStatus->assign_loan_id==5 ||$getStatus->assign_loan_id==6 ){?>
    
    <div class="mb-3 pt-5 text-center">
        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <h2 class="text-white">APPROVED LOAN AMOUNT</h2>
                        <h5 class="text-white pb-3">This is Aadhaar Based Loan Approval</h5>                
                        <a href="" class="btn btn-primary">Withdraw Your Loan Amount</a>
                    <hr>
                     <a href="{{ asset('pdf/'.$getStatus->mobile. '_processing.pdf') }}" target="_blank" class="btn btn-info">Download Approval Letter</a>                   
                     <div class="mb-3">
                        <img src="{{ asset('backend/approveal.png')}}" style="width: 77%" alt="Check Status" class="images_size">
                    </div>
    </div>
    
    
 <?php }else if($getStatus->assign_loan_id==3 ){?>
    
    <div class="mb-3 pt-5 text-center">
        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <h2 class="text-white">APPROVED LOAN AMOUNT</h2>
                        <h5 class="text-white pb-3">This is Aadhaar Based Loan Approval</h5>                
                        <a href="" class="btn btn-primary">Withdraw Your Loan Amount</a>
                    <hr>
                    <a href="{{ asset('pdf/' . $getStatus->mobile . '_insurance.pdf') }}" target="_blank" class="btn btn-warning">Download Insurance</a>
                      <div class="mb-3">
                        <img src="{{ asset('backend/approveal.png')}}" style="width: 77%" alt="Check Status" class="images_size">
                    </div>
    </div>
    
    
 <?php } else{?>
    <div class="mb-3 pt-5">
        <a class="btn btn-warning" href="{{ route('home.submitpdf', ['mob' => $encryptedMobile]) }}">Loan Details</a>
                   

    </div>
    <div class="fs-4 fw-bold" style="color: rgb(240, 236, 236);">Approved Loan Amount</div>
    <label class="form-label" style="color: rgb(241, 238, 238);">Processing,,,,,</label>
<?php } ?>
                    </div>
                </div>
            </form>
        </div>


        </div>
    </section>
@endsection
