 <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
				<div class="dropdown header-profile2 ">
					<a class="nav-link " href="javascript:void(0);"  role="button" data-bs-toggle="dropdown">
						<div class="header-info2 d-flex align-items-center">
							<img src="{{ asset('backend/images/profile/pic1.jpg')}}" alt=""/>
							<div class="d-flex align-items-center sidebar-info">
								<div>
									<span class="font-w400 d-block">{{ Auth::user()->name}}</span>
									<small class="text-end font-w400"><?php if(Auth::user()->is_Admin==1){ echo "Super Admin";}else{ echo "Customer";}?></small>
								</div>	
								<i class="fas fa-chevron-down"></i>
							</div>
							
						</div>
					</a>
					<div class="dropdown-menu dropdown-menu-end">
						<a href="{{ route('admin.profile') }}" class="dropdown-item ai-icon ">
							<svg  xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
							<span class="ms-2">Admin Profile </span>
						</a>
						
						<a href="/logout" class="dropdown-item ai-icon">
							<svg  xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
							<span class="ms-2">Logout </span>
						</a>
					</div>
				</div>
				<ul class="metismenu" id="menu">

                    <?php if(Auth::user()->is_Admin==1){?>
                <li><a href="/admin/dashboard" class="" aria-expanded="false">
                        <i class="flaticon-025-dashboard"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>

                <li><a href="{{ route('contact.contact_view_list') }}" class="" aria-expanded="false">
                    <i class="flaticon-072-printer"></i>
                    <span class="nav-text">Contact Query</span>
                </a>
            </li>

            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                <i class="flaticon-041-graph"></i>
                <span class="nav-text">Report</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('contact.customer_state_wise') }}">Customer Feedback Status</a></li>
                <li><a href="{{ route('contact.customer_payment') }}">User Payment Status </a></li>
           </ul>
        </li>

                <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-041-graph"></i>
                    <span class="nav-text">Master</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('banner.banner_view_list') }}">Banner</a></li>
                <!--<li><a href="{{ route('gallery.gallery_view_list') }}">Gallery</a></li>-->
                    <li><a href="{{ route('menu.menu_view_list') }}">Menu</a></li>
                    <li><a href="{{ route('testimonials.testimonials_view_list') }}">User Testimonials</a></li>
                    </ul>
            </li>

           <!-- <li><a href="{{ route('menu.menu_view_list') }}" class="" aria-expanded="false">
                <i class="flaticon-043-menu"></i>
                <span class="nav-text">Menu</span>
            </a>
            </li>

            <li><a href="{{ route('category.category')}}" class="" aria-expanded="false">
                    <i class="flaticon-013-checkmark"></i>
                    <span class="nav-text">Category</span>
                </a>
            </li>

           

            <li><a href="{{ route('news.news_view_list') }}" class="" aria-expanded="false">
                <i class="flaticon-022-copy"></i>
                <span class="nav-text">News & Events</span>
            </a>
        </li>-->


            

            
           

        <li><a href="{{ route('userprofile.userprofile_list')}}" class="" aria-expanded="false">
            <i class="flaticon-086-star"></i>
            <span class="nav-text">User Registration</span>
        </a>
    </li>


        
    <li><a href="{{ route('admin.profile') }}" class=""
        aria-expanded="false">
        <i class="flaticon-045-heart"></i>
        <span class="nav-text">Admin Profile </span>
    </a>
</li>

<li><a href="{{ route('admin.profile.view') }}" class=""
        aria-expanded="false">
        <i class="flaticon-093-waving"></i>
        <span class="nav-text">Change Password</span>
    </a>
</li>

<li><a href="/logout" class="" aria-expanded="false">
        <i class="flaticon-013-checkmark"></i>
        <span class="nav-text">Logout </span>
    </a>
</li>     

                    <?php } else{?>
                        <li><a href="/dashboard" class="" aria-expanded="false">
                            <i class="flaticon-025-dashboard"></i>
                            <span class="nav-text">Customer List</span>
                        </a>
                    </li>
                   



        <li><a href="{{ route('user.profile') }}" class=""
            aria-expanded="false">
            <i class="flaticon-045-heart"></i>
            <span class="nav-text">User Profile </span>
        </a>
    </li>

        <li><a href="{{ route('user.profile.view') }}" class=""
                aria-expanded="false">
                <i class="flaticon-093-waving"></i>
                <span class="nav-text">Change Password</span>
            </a>
        </li>

        <li><a href="/logout" class="" aria-expanded="false">
                <i class="flaticon-013-checkmark"></i>
                <span class="nav-text">Logout </span>
            </a>
        </li>

                        <?php } ?>
                   
                </ul>

                <?php if(Auth::user()->is_Admin==0){?>
				<div class="plus-box">
					<p class="fs-14 font-w600 mb-2">We Provide 24 Hours Services For Customer<br>Call:-<a class="text-warning" href=""> <?php mobile()?></a><br></p>
					
				</div>
				<div class="copyright">
					<p><strong>Loan Portal</strong> © 2024 All Rights Reserved</p>
		
				</div>
                <?php } ?>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->