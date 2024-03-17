@extends('frant/layouts/frant-master')
@section('webfrant')
<div id="wptb-page-title-default">
    <div class="wptb-page-title-default-bg" style="background-image:url({{ asset('frantend/img/background/bg-pagetitle.jpg')}})"></div>
 <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="wptb-page-title"></h1>
               
            </div>
        </div>
    </div> 
   </div>



 <style>
                    .paikasoft_ul li{
                       font-size: 20px;
                        line-height: 45px;
                        list-style: none;
                    }
                        
                    </style>

    <section class="wptb-contact-wrapper style2">
        <div class="container">
            <div class="row">


             
                <div class="col-lg-5">
             
                            <div class="footer-widget pt-5">
                               
                                <ul class="paikasoft_ul">
                                    <li>Bank Name:-<?= $getAdmin->bank_name?></li>                                               
                                               
                                    <li> Account No- <?= $getAdmin->account?></li>  
                                  
                                   <li>IFSC:- <?= $getAdmin->ifsc?> </a></li>
                                   
                                    <li>Gpay No:- <?= $getAdmin->google_pay?> </a></li>
                                    
                                     <li>Holder Name:- <?= $getAdmin->holder_name?> </a></li>
                                    
                                    
                                </ul>
                            </div>
                  
                   
                   
                </div>
            </div>
        </div>
    </section>

   
@endsection
