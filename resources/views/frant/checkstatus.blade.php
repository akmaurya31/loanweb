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

    <section class="wptb-contact-wrapper style3">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mt-5 mt-lg-0">
                    <div class="image-holder">
                        <img src="{{ asset('frantend/img/contact/image2.png') }}" alt="img" class="rounded">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="wptb-contact-form-wrapper">
                        <div class="wptb-heading">
                            <div class="wptb-heading--inner">

                                <h2 class="wptb-heading--title wow fadeInUp"
                                    style="visibility: visible; animation-name: fadeInUp;">Check Loan Status</h2>
                                <p>Enter your Mobile No. to check your application status.</p>
                            </div>
                        </div>

                             
                                        
                          <form class="contact-form" method="post" action="{{ route('home.mobile')}}" enctype='multipart/form-data'>
                            @csrf                           

                            <div class="row list-input">
                                <div class="col-md-6 mb-1">
                                    <label>Mobile Number</label>
                                    <input class="form-control" id="myber" type="number" name="number" placeholder=""
                                        >
                                        @error('number')<span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-md-12 mt-4 mb-4">
                                    <div class=" gap-1 ">
                                        <input type="submit" name="apply" class="btn btn-warning pt-2 pb-2"  value="Check">
                                    </div>
                                </div>
                            </div>
                        </form>
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif     

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
