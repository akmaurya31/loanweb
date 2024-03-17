@extends('frant/layouts/frant-master')
@section('webfrant')
    <?php if($getBanner){?>
    <section id="home" class="wptb-slider style-ai" style="background-image: url('{{ asset('upload/banner/' . $getBanner->banner_image) }}')">
        <div class="container">
            <div class="wptb-slider--wrapper">
                <div class="wptb-slider--item">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-7">
                            <div class="wptb-slider--content">
                                <h1 style="font-size: 31px;"><?= $getBanner->heading ?></h1>
                                <p style="margin-top: 16px;"><?= $getBanner->content ?></p>
                                <a href="{{ route('home.applyloan')}}" class="btn btn-primary text-white" style="background:#3b074a"> GET LOAN NOW <span class="btn-arrow-hover"><i class="bi bi-arrow-up-right"></i><i class="bi bi-arrow-up-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>




    <section class="wptb-video-wrapper" style="background-image: url('assets/img/background/bg-2.png');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <img src="{{ asset('upload/menu/' . $getAbout->image) }}" alt="img">
                </div>

                <div class="col-md-7">
                    <div class="wptb-video-content wptb-slider--content">
                        <h1><?= $getAbout->heading?></h1>
                            <?= $getAbout->content?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wptb-social-services ">
        <div class="container">        

            <div class="wptb-heading">
                <div class="wptb-heading--inner text-center">
                    <h2 class="wptb-heading--title wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Our Services</h2>
                    <div class="wptb-heading--subtitle wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"></div>
                </div>
            </div>

            <div class="row">
                <?php foreach ($getother as $i => $val){ ?>
                <div class="col-lg-3 col-md-4">
                    <div class="wptb-icon-box5 one">
                        <div class="wptb-item--inner">
                            <div class="wptb-item--icon-">
                                <img src="{{ asset('upload/menu/' . $val->image) }}" alt="img" style="height: 229px; width: 83%;">
                            </div>
                            <div class="wptb-item--box">
                                <h2 class="wptb-item--title"> <?= $val->heading ?></h2>
                                <div class="wptb-item--description"> <?= $val->content ?></div>
                                <a href="{{ route('home.applyloan')}}" style="font-weight: 100;   color: #000; font-size: 14px;" class="btn ">Apply Now <span class="btn-arrow-hover"><i class="bi bi-arrow-up-right"></i><i class="bi bi-arrow-up-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <?php } ?>

            </div>
        </div>
    </section>

    <section class="wptb-pricing section-lg bg-gray-">
        <div class="container">
            <div class="wptb-heading">
                <div class="wptb-heading--inner text-center pb-5">
                    <h2 class="wptb-heading--title wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Amount Based</h2>
                    <div class="wptb-heading--subtitle nine wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"></div>
                </div>
            </div>
            <!-- Price Table -->
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="wptb-pricing1 one no-active wow flipInY" style="visibility: visible; animation-name: flipInY;">
                        <h3 class="wptb-title"><span>Small Loan</span></h3>
                        <div class="wptb-meta">
                            <span class="wptb-after">UP To</span>
                            <div class="wptb-price"><span class="wptb-currency"></span> <span class="wptb-value">1-5 </span> <span class="wptb-suffix">Lakh</span></div>
                        </div>
                        <ul class="wptb-feature">
                            <li class="is-active">Repayment Schedule</li>
                                <li class="is-active">   Easy 4 Step Process</li>
                                    <li class="is-active">   Credit Counselor</li>
                                        <li class="is-active">   Low Interest Rate</li>
                            
                            
                        </ul>
                        <a href="{{ route('home.applyloan')}}" class="btn btn-danger">Choose This  Quote <span class="btn-arrow-hover"><i class="bi bi-arrow-up-right"></i><i class="bi bi-arrow-up-right"></i></span></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="wptb-pricing1 two is-active wow flipInY" style="visibility: visible; animation-name: flipInY;">
                        <h3 class="wptb-title"><span>Medium Loan</span></h3>
                        <div class="wptb-meta">
                            <span class="wptb-after">UPTO</span>
                            <div class="wptb-price"><span class="wptb-currency">₹</span> <span class="wptb-value">5-10 </span> <span class="wptb-suffix">Lakh</span></div>
                        </div>
                        <ul class="wptb-feature">
                            <li class="is-active">Money in the bank</li>
                                <li class="is-active"> Easy 4 Step Process</li>
                                    <li class="is-active"> Credit Counselor</li>
                                        <li class="is-active"> Small Commissions</li>
                           
                        </ul>
                        <a href="{{ route('home.applyloan')}}" class="btn">Choose This Quote <span class="btn-arrow-hover"><i class="bi bi-arrow-up-right"></i><i class="bi bi-arrow-up-right"></i></span></a>
                    </div>                            
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="wptb-pricing1 three no-active wow flipInY" style="visibility: visible; animation-name: flipInY;">
                        <h3 class="wptb-title"><span>LARGE LOAN </span></h3>
                        <div class="wptb-meta">
                            <span class="wptb-after">UPTO</span>
                            <div class="wptb-price"><span class="wptb-currency">₹</span> <span class="wptb-value">10-25</span> <span class="wptb-suffix">Lakh</span></div>
                        </div>
                        <ul class="wptb-feature">
                            <li class="is-active">Easy 4 Step Process</li>
                                <li class="is-active">  Low Interest Rate</li>
                                    <li class="is-active">  Credit Counselor</li>
                                        <li class="is-active">  Repayment Schedule</li>
                          
                        </ul>
                        <a href="{{ route('home.applyloan')}}" class="btn">Choose This Quote <span class="btn-arrow-hover"><i class="bi bi-arrow-up-right"></i><i class="bi bi-arrow-up-right"></i></span></a>
                    </div>                            
                </div>
            </div>
            <!-- Price Table End -->
        </div>
    </section>

    
    <section class="wptb-newsletter section-lg">
        <div class="container">
            <div class="wptb-newsletter--inner" style="background-image: url('assets/img/background/bg-23.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
                <div class="row align-items-center">
                    <div class="col-lg-12 text-center">
                        <h4 class="widget-title wow ">Get started in a few simple clicks</h4>
                   
                        <h5 class="widget-text pb-4">Evaluate the loan amount you are eligible for and choose an EMI plan that works for you.</h5>
                       
                        <a href="{{ route('home.checkstatus')}}" class="btn btn-default" style="color: #000;background: #fff;">Check Eligibility</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wptb-social-services">
        <div class="container">        

            <div class="wptb-heading">
                <div class="wptb-heading--inner text-center">
                    <h2 class="wptb-heading--title wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Why choose us</h2>
                    <div class="wptb-heading--subtitle wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"></div>
                </div>
            </div>

            <div class="row">
                <?php foreach($getWhyMenu as $val){?>
                <div class="col-lg-3 col-md-4">
                    <div class="wptb-icon-box5 one">
                        <div class="wptb-item--inner">
                            <div class="wptb-item--icon-">
                                <img src="{{ asset('upload/menu/' . $val->image) }}" alt="img">
                            </div>
                            <div class="wptb-item--box">
                                <h2 class="wptb-item--title"> <?= $val->heading ?></h2>
                                <div class="wptb-item--description"> <?= $val->content ?></div>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <?php } ?>

            </div>
        </div>
    </section>


    <section class="wptb-testimonial--carousel1 pt-0">
        <div class="wptb-heading">
            <div class="wptb-heading--inner text-center">
                
                <h2 class="wptb-heading--title wow fadeInUp">What our clients say</h2>
                <div class="wptb-heading--subtitle thirteen wow fadeInUp"></div>
            </div>
        </div>

      
    </section>
    
@endsection
