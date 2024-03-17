@extends('layouts/admin-master')
@section('admin')

 <div class="container-fluid">
			
                <!-- row -->
                <div class="row">
                   <div class="col-xl-12 col-lg-12">
                        <div class="card">
                           
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="post" action="{{ route('user.customer_update',['id' => $datalist->id]) }}" >
                                    @csrf
                                      
                                <div class="row">
                                    <div class="mb-3  col-xl-4">
                                        <input class="form-control" type="text" name="processing_free" placeholder="Processing fee" value="{{ $datalist->processing_free }}" >
                                        @error('processing_free')<span class="text-danger">{{ $message }}</span> @enderror
                                      </div>

                                      <div class="mb-3  col-xl-4">
                                        <input class="form-control" type="text" name="helth_insorence_free" placeholder="Health insurance free" value="{{ $datalist->helth_insorence_free }}" >
                                        @error('helth_insorence_free')<span class="text-danger">{{ $message }}</span> @enderror
                                      </div>


                                  <div class="mb-3  col-xl-4">
                                    <input class="form-control" type="text" name="name" placeholder="Your Name" value="{{ $datalist->name }}" >
                                    @error('name')<span class="text-danger">{{ $message }}</span> @enderror
                                  </div>
                                  <div class="mb-3  col-xl-4">
                                    <input class="form-control" type="email" name="email" placeholder="Email" value="{{ $datalist->email }}" >
                                    @error('email')<span class="text-danger">{{ $message }}</span> @enderror
                                  </div>
                                  <div class="mb-3  col-xl-4">
                                    <input class="form-control" id="myber" type="number" name="number" placeholder="Phone" value="{{ $datalist->mobile }}" >
                                    @error('number')<span class="text-danger">{{ $message }}</span> @enderror
                                  </div>
                                  <div class="mb-3  col-xl-4">
                                    <input class="form-control" id="myber" type="whatsappnumber" name="whatsappnumber" placeholder="Whatsapp No." value="{{ $datalist->whatsappnumber }}" >
                                    @error('whatsappnumber')<span class="text-danger">{{ $message }}</span> @enderror
                                  </div>
                                  <div class="mb-3  col-xl-4">
                                    <input class="form-control" type="text" name="aadharno" maxlength="12" minlength="12" placeholder="Aadhar No." value="{{ $datalist->aadharno }}" >
                                    @error('aadharno')<span class="text-danger">{{ $message }}</span> @enderror
                                  </div>
                                  <div class="mb-3  col-xl-4">
                                    <input class="form-control" type="text"   name="pancard"  placeholder="Pan No." value="{{ $datalist->pancard }}" >
                                    @error('pancard')<span class="text-danger">{{ $message }}</span> @enderror
                                  </div>
                                  <div class="mb-3  col-xl-4">
                                    <input class="form-control" type="text" name="bankaccountno" placeholder="Bank Account Number." value="{{ $datalist->bankaccountno }}" >
                                    @error('bankaccountno')<span class="text-danger">{{ $message }}</span> @enderror
                                  </div>
                                  <div class="mb-3  col-xl-4">
                                    <input class="form-control" type="text" name="bankname" placeholder="Bank Name." value="{{ $datalist->bankname }}" >
                                    @error('bankname')<span class="text-danger">{{ $message }}</span> @enderror
                                  </div>
                                  <div class="mb-3  col-xl-4">
                                    <input class="form-control" type="text" name="bankifsccode" placeholder="Bank IFSC" value="{{ $datalist->bankifsccode }}" >
                                    @error('bankifsccode')<span class="text-danger">{{ $message }}</span> @enderror
                                  </div>
                                  <div class="mb-3  col-xl-4">
                                    <input class="form-control" type="number" name="loanamoun" placeholder="Loan Amount" value="{{ $datalist->loanamoun }}" >
                                    @error('loanamoun')<span class="text-danger">{{ $message }}</span> @enderror
                                  </div>
                                  <div class="mb-3  col-xl-4">
                                    <input class="form-control" type="text" name="city" placeholder="City" value="{{ $datalist->city }}" >
                                    @error('city')<span class="text-danger">{{ $message }}</span> @enderror
                                  </div>
                                  <div class="mb-3  col-xl-4">
                                    <input class="form-control" type="number" name="pincode" placeholder="Pin Code" value="{{ $datalist->pincode }}" pattern="[0-9]{6}" ="" data-gtm-form-interact-field-id="2">
                                    @error('pincode')<span class="text-danger">{{ $message }}</span> @enderror
                                  </div>
                                  <div class="mb-3  col-xl-4">
                                    <select class="form-control" name="state" >
                                      
                                        <option class="placeholder" value="" selected disabled>Select State</option>
                                        <option value="Andhra Pradesh" {{ $datalist->state == 'Andhra Pradesh' ? 'selected' : '' }}>Andhra Pradesh</option>
                                        <option value="Arunachal Pradesh" {{ $datalist->state == 'Arunachal Pradesh' ? 'selected' : '' }}>Arunachal Pradesh</option>
                                        <option value="Assam" {{ $datalist->state == 'Assam' ? 'selected' : '' }}>Assam</option>
                                        <option value="Bihar" {{ $datalist->state == 'Bihar' ? 'selected' : '' }}>Bihar</option>
                                        <option value="Chhattisgarh" {{ $datalist->state == 'Chhattisgarh' ? 'selected' : '' }}>Chhattisgarh</option>
                                        <option value="Delhi" {{ $datalist->state == 'Delhi' ? 'selected' : '' }}>Delhi</option>
                                        <option value="Goa" {{ $datalist->state == 'Goa' ? 'selected' : '' }}>Goa</option>
                                        <option value="Gujarat" {{ $datalist->state == 'Gujarat' ? 'selected' : '' }}>Gujarat</option>
                                        <option value="Haryana" {{ $datalist->state == 'Haryana' ? 'selected' : '' }}>Haryana</option>
                                        <option value="Himachal Pradesh" {{ $datalist->state == 'Himachal Pradesh' ? 'selected' : '' }}>Himachal Pradesh</option>
                                        <option value="Jharkhand" {{ $datalist->state == 'Jharkhand' ? 'selected' : '' }}>Jharkhand</option>
                                        <option value="Karnataka" {{ $datalist->state == 'Karnataka' ? 'selected' : '' }}>Karnataka</option>
                                        <option value="Kerala" {{ $datalist->state == 'Kerala' ? 'selected' : '' }}>Kerala</option>
                                        <option value="Madhya Pradesh" {{ $datalist->state == 'Madhya Pradesh' ? 'selected' : '' }}>Madhya Pradesh</option>
                                        <option value="Maharashtra" {{ $datalist->state == 'Maharashtra' ? 'selected' : '' }}>Maharashtra</option>
                                        <option value="Manipur" {{ $datalist->state == 'Manipur' ? 'selected' : '' }}>Manipur</option>
                                        <option value="Meghalaya" {{ $datalist->state == 'Meghalaya' ? 'selected' : '' }}>Meghalaya</option>
                                        <option value="Mizoram" {{ $datalist->state == 'Mizoram' ? 'selected' : '' }}>Mizoram</option>
                                        <option value="Nagaland" {{ $datalist->state == 'Nagaland' ? 'selected' : '' }}>Nagaland</option>
                                        <option value="Odisha" {{ $datalist->state == 'Odisha' ? 'selected' : '' }}>Odisha</option>
                                        <option value="Punjab" {{ $datalist->state == 'Punjab' ? 'selected' : '' }}>Punjab</option>
                                        <option value="Rajasthan" {{ $datalist->state == 'Rajasthan' ? 'selected' : '' }}>Rajasthan</option>
                                    
                                        <option value="Sikkim" {{ $datalist->state == 'Sikkim' ? 'selected' : '' }}>Sikkim</option>
                                        <option value="Tamil Nadu" {{ $datalist->state == 'Tamil Nadu' ? 'selected' : '' }}>Tamil Nadu</option>
                                        <option value="Telangana" {{ $datalist->state == 'Telangana' ? 'selected' : '' }}>Telangana</option>
                                        <option value="Tripura" {{ $datalist->state == 'Tripura' ? 'selected' : '' }}>Tripura</option>
                                        <option value="Uttar Pradesh" {{ $datalist->state == 'Uttar Pradesh' ? 'selected' : '' }}>Uttar Pradesh</option>
                                        <option value="Uttarakhand" {{ $datalist->state == 'Uttarakhand' ? 'selected' : '' }}>Uttarakhand</option>
                                        <option value="West Bengal" {{ $datalist->state == 'West Bengal' ? 'selected' : '' }}>West Bengal</option>
                                        
                                    </select> 
                                  </div>
                                  <div class="mb-3  col-xl-4">
                                    <select class="form-control" name="loantype" >
                                        <option class="placeholder" value="" selected="selected">Select Loan Type</option>
                                        <option value="Personal Loan" {{ $datalist->loantype == 'Personal Loan' ? 'selected' : '' }}>Personal Loan</option>
                                        <option value="Home Loan" {{ $datalist->loantype == 'Home Loan' ? 'selected' : '' }}>Home Loan</option>
                                        <option value="Business Loan" {{ $datalist->loantype == 'Business Loan' ? 'selected' : '' }}>Business Loan</option>
                                        <option value="Education Loan" {{ $datalist->loantype == 'Education Loan' ? 'selected' : '' }}>Education Loan</option>
                                        <option value="Property Loan" {{ $datalist->loantype == 'Property Loan' ? 'selected' : '' }}>Property Loan</option>
                                        
                                    </select>
                                  </div>
                                  <div class="mb-3  col-xl-4">
                                    <select class="form-control" name="itr" >
                                        <option value="">Select ITR</option>
                                        <option value="Yes" {{ $datalist->itr == 'Yes' ? 'selected' : '' }}>Yes</option>
                                        <option value="No" {{ $datalist->itr == 'No' ? 'selected' : '' }}>No</option>
                                        
                                  </select>
                                  </div>
                                  <div class="mb-3  col-xl-4">
                                    <select class="form-control" name="loantenure" >
                                        <option value="">Select Tenure</option>
                                        <option value="1" {{ $datalist->loantenure == '1' ? 'selected' : '' }}>1 Year</option>
                                        <option value="2" {{ $datalist->loantenure == '2' ? 'selected' : '' }}>2 Year</option>
                                        <option value="3" {{ $datalist->loantenure == '3' ? 'selected' : '' }}>3 Year</option>
                                        <option value="4" {{ $datalist->loantenure == '4' ? 'selected' : '' }}>4 Year</option>
                                        <option value="5" {{ $datalist->loantenure == '5' ? 'selected' : '' }}>5 Year</option>
                                        <option value="6" {{ $datalist->loantenure == '6' ? 'selected' : '' }}>6 Year</option>
                                        <option value="7" {{ $datalist->loantenure == '7' ? 'selected' : '' }}>7 Year</option>
                                        <option value="8" {{ $datalist->loantenure == '8' ? 'selected' : '' }}>8 Year</option>
                                        <option value="9" {{ $datalist->loantenure == '9' ? 'selected' : '' }}>9 Year</option>
                                        <option value="10" {{ $datalist->loantenure == '10' ? 'selected' : '' }}>10 Year</option>
                                        <option value="11" {{ $datalist->loantenure == '11' ? 'selected' : '' }}>11 Year</option>
                                        <option value="12" {{ $datalist->loantenure == '12' ? 'selected' : '' }}>12 Year</option>
                                        <option value="13" {{ $datalist->loantenure == '13' ? 'selected' : '' }}>13 Year</option>
                                        <option value="14" {{ $datalist->loantenure == '14' ? 'selected' : '' }}>14 Year</option>
                                        <option value="15" {{ $datalist->loantenure == '15' ? 'selected' : '' }}>15 Year</option>
                                        <option value="16" {{ $datalist->loantenure == '16' ? 'selected' : '' }}>16 Year</option>
                                        <option value="17" {{ $datalist->loantenure == '17' ? 'selected' : '' }}>17 Year</option>
                                        <option value="18" {{ $datalist->loantenure == '18' ? 'selected' : '' }}>18 Year</option>
                                        <option value="19" {{ $datalist->loantenure == '19' ? 'selected' : '' }}>19 Year</option>
                                        <option value="20" {{ $datalist->loantenure == '20' ? 'selected' : '' }}>20 Year</option>
                                        
                                    </select>
                                  </div>
                                  
                                  <div class="mb-3  col-xl-12">
                                    <textarea class="form-control" type="text" name="address" placeholder="Address" value="{{ $datalist->address }}" ></textarea>
                                    @error('address')<span class="text-danger">{{ $message }}</span> @enderror
                                  </div>
                                 
                                  <div class="col-md-12 mt-4 mb-4">
                                      <div class="">
                                          <input type="submit" name="apply" class="btn btn-warning" value="Update">
                                      </div>
                                  </div>
                                </div>
                              </form>
                                </div>
                            </div>
                        </div>
					</div>
                </div>
            </div>

@endsection