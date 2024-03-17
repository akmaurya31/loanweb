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
                        <img src="{{ asset('frantend/img/contact/image2.png')}}" alt="img" class="rounded">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="wptb-contact-form-wrapper">
                        <div class="wptb-heading">
                            <div class="wptb-heading--inner">

                                <h2 class="wptb-heading--title wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Apply For Loan</h2>
                                <div class="wptb-heading--subtitle two wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"></div>
                            </div>
                        </div>
                        
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
                       
                          <form class="contact-form" method="post" action="{{ route('home.contact_store')}}" enctype='multipart/form-data'>
                            @csrf
                            <div class="mb-3"><div class="fw-bold text-danger"></div></div>
                    <div class="row list-input">
                      <div class="col-md-6 mb-1 mr0">
                        <input class="form-control" type="text" name="name" placeholder="Your Name" value="{{ old('name') }}" required>
                        @error('name')<span class="text-danger">{{ $message }}</span> @enderror
                      </div>
                      <div class="col-md-6 mb-1 mr0">
                        <input class="form-control" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                        @error('email')<span class="text-danger">{{ $message }}</span> @enderror
                      </div>
                      <div class="col-md-6 mb-1">
                        <input class="form-control" id="myber" type="number" name="number" placeholder="Phone" value="{{ old('number') }}" required>
                        @error('number')<span class="text-danger">{{ $message }}</span> @enderror
                      </div>
                      <div class="col-md-6 mb-1">
                        <input class="form-control" id="myber" type="whatsappnumber" name="whatsappnumber" placeholder="Whatsapp No." value="{{ old('whatsappnumber') }}" required>
                        @error('whatsappnumber')<span class="text-danger">{{ $message }}</span> @enderror
                      </div>
                      <div class="col-md-6 mb-1">
                        <input class="form-control" type="text" name="aadharno" maxlength="12" minlength="12" placeholder="Aadhar No." value="{{ old('aadharno') }}" required>
                        @error('aadharno')<span class="text-danger">{{ $message }}</span> @enderror
                      </div>
                      <div class="col-md-6 mb-1">
                        <input class="form-control" type="text"  onkeyup="this.value = this.value.toUpperCase();" pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}" required="" data-gtm-form-interact-field-id="1" name="pancard"  placeholder="Pan No." value="{{ old('pancard') }}" required>
                        @error('pancard')<span class="text-danger">{{ $message }}</span> @enderror
                      </div>
                      <div class="col-md-6 mb-1">
                        <input class="form-control" type="text" name="bankaccountno" placeholder="Bank Account Number." value="{{ old('bankaccountno') }}" required>
                        @error('bankaccountno')<span class="text-danger">{{ $message }}</span> @enderror
                      </div>
                      <div class="col-md-6 mb-1">
                        <input class="form-control" type="text" name="bankname" placeholder="Bank Name." value="{{ old('bankname') }}" required>
                        @error('bankname')<span class="text-danger">{{ $message }}</span> @enderror
                      </div>
                      <div class="col-md-6 mb-1">
                        <input class="form-control" type="text" name="bankifsccode" placeholder="Bank IFSC" value="{{ old('bankifsccode') }}" required>
                        @error('bankifsccode')<span class="text-danger">{{ $message }}</span> @enderror
                      </div>
                      <div class="col-md-6 mb-1">
                        <input class="form-control" type="number" name="loanamoun" placeholder="Loan Amount" value="{{ old('loanamoun') }}" required>
                        @error('loanamoun')<span class="text-danger">{{ $message }}</span> @enderror
                      </div>
                      <div class="col-md-6 mb-1">
                        <input class="form-control" type="text" name="city" placeholder="City" value="{{ old('city') }}" required>
                        @error('city')<span class="text-danger">{{ $message }}</span> @enderror
                      </div>
                      <div class="col-md-6 mb-1">
                        <input class="form-control" type="number" name="pincode" placeholder="Pin Code" value="{{ old('pincode') }}" pattern="[0-9]{6}" required="" data-gtm-form-interact-field-id="2">
                        @error('pincode')<span class="text-danger">{{ $message }}</span> @enderror
                      </div>
                      <div class="col-md-6 mb-1">
                        <select class="form-control" name="state" required>
                          <option class="placeholder" value="" selected="selected">Select State</option>
                          <option value="Andhra Pradesh">Andhra Pradesh</option>
                          <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                          <option value="Assam">Assam</option>
                          <option value="Bihar">Bihar</option>
                          <option value="Chhattisgarh">Chhattisgarh</option>
                          <option value="Delhi">Delhi</option>
                          <option value="Goa">Goa</option>
                          <option value="Gujarat">Gujarat</option>
                          <option value="Haryana">Haryana</option>
                          <option value="Himachal Pradesh">Himachal Pradesh</option>
                          <option value="Jharkhand">Jharkhand</option>
                          <option value="Karnataka">Karnataka</option>
                          <option value="Kerala">Kerala</option>
                          <option value="Madhya Pradesh">Madhya Pradesh</option>
                          <option value="Maharashtra">Maharashtra</option>
                          <option value="Manipur">Manipur</option>
                          <option value="Meghalaya">Meghalaya</option>
                          <option value="Mizoram">Mizoram</option>
                          <option value="Nagaland">Nagaland</option>
                          <option value="Odisha">Odisha</option>
                          <option value="Punjab">Punjab</option>
                          <option value="Rajasthan">Rajasthan</option>
                          <option value="Sikkim">Sikkim</option>
                          <option value="Tamil Nadu">Tamil Nadu</option>
                          <option value="Telangana">Telangana</option>
                          <option value="Tripura">Tripura</option>
                          <option value="Uttar Pradesh">Uttar Pradesh</option>
                          <option value="Uttarakhand">Uttarakhand</option>
                          <option value="West Bengal">West Bengal</option>
                        </select> 
                      </div>
                      <div class="col-md-6 mb-1 mr0">
                        <select class="form-control" name="loantype" required>
                          <option class="placeholder" value="" selected="selected">Select Loan Type</option>
                          <option value="Personal Loan">Personal Loan</option>
                          <option value="Home Loan">Home Loan</option>
                          <option value="Business Loan">Business Loan</option>
                          <option value="Education Loan">Education Loan</option>
                          <option value="Property Loan">Property Loan</option>
                        </select>
                      </div>
                      <div class="col-md-6 mb-1 mr0">
                        <select class="form-control" name="itr" required>
                          <option value="">Select ITR</option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                      </select>
                      </div>
                      <div class="col-md-6 mb-1 mr0">
                        <select class="form-control" name="loantenure" required>
                          <option selected="selected" value="">Select Tenure</option>
                          <option value="1">1 Year</option>
                          <option value="2">2 Year</option>
                          <option value="3">3 Year</option>
                          <option value="4">4 Year</option>
                          <option value="5">5 Year</option>
                          <option value="6">6 Year</option>
                          <option value="7">7 Year</option>
                          <option value="8">8 Year</option>
                          <option value="9">9 Year</option>
                          <option value="10">10 Year</option>
                          <option value="11">11 Year</option>
                          <option value="12">12 Year</option>
                          <option value="13">13 Year</option>
                          <option value="14">14 Year</option>
                          <option value="15">15 Year</option>
                          <option value="16">16 Year</option>
                          <option value="17">17 Year</option>
                          <option value="18">18 Year</option>
                          <option value="19">19 Year</option>
                          <option value="20">20 Year</option>
                        </select>
                      </div>
                      <div class="col-md-12 mt-2">
                        <div class="single-get-touch" style="padding-left: 10px;">
                          <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" checked="">
                          <label for="vehicle1" style="font-size: 13px;">I authorize <?php employeeName(1)?> its partners to call/SMS/email me about its products. This overrides my number being in the NDNC registry.I also authorize <a href="/"></a> &amp; it's partners to fetch my Credit/CIBIL report when needed. I accept that approval of loan is a sole discretion of the bank.I agree to all <a href="/" target="_blank" style="color:#007bff">Terms &amp; Conditions</a> and <a href="/" target="_blank" style="color:#007bff">Privacy Policy.</a></label>
                        </div>
                      </div>
                      <div class="col-md-12 mt-4 mb-4">
                          <div class="d-grid gap-1 col-3 mx-auto">
                              <input type="submit" name="apply" class="btn btn-warning pt-2 pb-2" value="Submit">
                          </div>
                      </div>
                    </div>
                  </form>

                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
