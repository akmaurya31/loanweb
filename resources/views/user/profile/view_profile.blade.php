
@extends('layouts/admin-master')
@section('admin')

<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="profile-back">
							<img src="{{asset('backend/images/profile1.jpg')}}" alt="">
							<div class="social-btn">
								
								<a href="{{ route('profile.edit') }}" class="btn btn-primary">Update Profile</a>
							</div>
						</div>
						<div class="profile-pic d-flex">
							<img src="{{ (!empty($user->user_images))? url('upload/user_images/'.$user->user_images): url('upload/no-image.jpg') }}" alt="">
							<div class="profile-info2">
								<h2 class="mb-0">{{ $user->name}}</h2>
								<h4>User</h4>
								<span class="d-block"><i class="fas fa-map-marker-alt me-2"></i>{{ $user->address}}</span>
							</div>
						</div>
					</div>
					
					<div class="col-xl-9 col-xxl-8 col-lg-6 mt-lg-5 mt-0">
						<div class="row">
							<div class="col-xl-8 col-xxl-7">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h4 class="fs-20 font-w600">Contact Me</h4>
									</div>
									<div class="card-body">
					
										<div class="d-flex flex-wrap">	
											<div class="d-flex contacts-social align-items-center mb-3  me-sm-5 me-0">
												<span class="me-3">
													<i class="fas fa-phone-alt"></i>
												</span>
												<div>
													<span>Phone</span>
													<h5 class="mb-0 fs-18">{{ $user->mobile}}</h5>
												</div>
											</div>
											<div class="d-flex contacts-social align-items-center mb-3">
												<span class="me-3">
													<i class="fas fa-envelope-open"></i>
												</span>
												<div>
													<span>Email</span>
													<h5 class="mb-0 fs-18">{{ $user->email}}</h5>
												</div>
											</div>
										</div>	
									</div>
									
								</div>
							</div>
							<div class="col-xl-4 col-xxl-5">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h4 class="fs-20 font-w600">Socials</h4>
									</div>
									<div class="card-body">
										<div>
											<a href="javascript:;" class="btn text-start d-block mb-3 bg-facebook light"><i class="fab fa-facebook-f scale5 me-4 text-facebook"></i>/franklin.jr123</a>
											<a href="javascript:;" class="btn text-start d-block mb-3 bg-linkedin light"><i class="fab fa-linkedin-in scale5 me-4 text-linkedin"></i>/franklin.jr123</a>
											<a href="javascript:;" class="btn text-start d-block mb-3 bg-dribble light"><i class="fab fa-dribbble scale5 me-4 text-dribble"></i>/franklin.jr123</a>
											<a href="javascript:;" class="btn text-start d-block mb-3 bg-youtube light"><i class="fab fa-youtube scale5 me-4 text-youtube"></i>
											/franklin.jr123</a>
										</div>
									</div>
								</div>
							</div>
						
						</div>
					</div>
				</div>
            </div>


            @endsection