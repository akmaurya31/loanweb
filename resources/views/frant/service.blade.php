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
@endsection
