 <!--header start-->
 <header class="main-header position-absolute w-100">
     <title>@yield('title')</title>


     <nav @class([
         'navbar navbar-expand-xl navbar-dark sticky-header z-10',
         'home' => Route::currentRouteName() === 'home',
     ])>

         <div class="container d-flex align-items-center justify-content-lg-between position-relative">
             <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">


                 @if (Route::currentRouteName() === 'home')
                     <img src="{{ asset('images/trionova/head-logo.png') }}" alt="Home Logo" class="img-fluid logo-white desc-logo">
                 @else
                     <img src="{{ asset('images/trionova/Logo-blue.png') }}" alt="Logo" class="img-fluid logo-white desc-logo">
                 @endif

                 <img src="{{ asset('images/logo.png') }}" alt="Trionova LOGO"
                     class="img-fluid logo-white mobile-logo" />
                 <img src="{{ asset('images/logo.png') }}" alt="Trionova LOGO" class="img-fluid logo-color" />
             </a>
             <a class="navbar-toggler position-absolute right-0 border-0" href="#offcanvasWithBackdrop">
                 <i class="flaticon-menu" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop"
                     data-bs-toggle="offcanvas" role="button"></i>
             </a>
             <div class="clearfix"></div>
             <div class="collapse navbar-collapse justify-content-center">
                 <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                     <li><a href="{{ url('/') }}" class="nav-link">Home</a></li>


                     <li><a href="{{ url('/about-us') }}" class="nav-link">About</a></li>
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="javascript:void();" role="button"
                             data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                         <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                             <div class="dropdown-grid rounded-custom width-full-3">
                                 <div class="dropdown-grid-item bg-white radius-left-side">
                                     <h6 class="drop-heading">
                                         <a href="javascript:void();">Business Solutions</a>
                                     </h6>
                                     <a href="{{ url('/software-development') }}" class="dropdown-link">
                                         <span class="me-2">
                                             <i class="flaticon-menu"></i>
                                         </span>
                                         <div class="drop-title">Software Development</div>
                                     </a>
                                     <a href="{{ url('/mobile-app-company-in-chennai') }}" class="dropdown-link">
                                         <span class="me-2">
                                             <i class="flaticon-layer"></i>
                                         </span>
                                         <div class="drop-title">Mobile App
                                             Development </div>
                                     </a>
                                     <a href="{{ url('/flutter-app-development-company-in-chennai') }}"
                                         class="dropdown-link">
                                         <span class="me-2">
                                             <i class="flaticon-phone-book"></i>
                                         </span>
                                         <div class="drop-title">Flutter App Development</div>
                                     </a>
                                     <a href="{{ url('/consulting') }}" class="dropdown-link">
                                         <span class="me-2">
                                             <i class="flaticon-flash"></i>
                                         </span>
                                         <div class="drop-title">Consulting</div>
                                     </a>
                                     <a href="{{ url('Support') }}" class="dropdown-link">
                                         <span class="me-2">
                                             <i class="flaticon-settings"></i>
                                         </span>
                                         <div class="drop-title">Support</div>
                                     </a>

                                 </div>
                                 <div class="dropdown-grid-item bg-white">
                                     <h6 class="drop-heading">
                                         <a href="javascript:void();">Engineering</a>
                                     </h6>


                                     <a href="{{ url('cloud-service') }}" class="dropdown-link">
                                         <span class="me-2">
                                             <i class="flaticon-clipboard"></i>
                                         </span>
                                         <div class="drop-title">Cloud Services</div>
                                     </a>
                                     <a href="{{ url('AI') }}" class="dropdown-link">
                                         <span class="me-2">
                                             <i class="flaticon-settings"></i>
                                         </span>
                                         <div class="drop-title">AI Development</div>
                                     </a>
                                     <a href="{{ url('products') }}" class="dropdown-link">
                                         <span class="me-2">
                                             <i class="flaticon-settings"></i>
                                         </span>
                                         <div class="drop-title">Products</div>
                                     </a>
                                     <a href="{{ url('/Data-Science') }}" class="dropdown-link">
                                         <span class="me-2">
                                             <i class="flaticon-vector"></i>
                                         </span>
                                         <div class="drop-title">Data Science </div>
                                     </a>

                                 </div>
                                 <div class="dropdown-grid-item bg-white" style="border-radius: 17px;">
                                     <h6 class="drop-heading"> <a href="javascript:void();">Digital
                                             Marketing</a></h6>
                                     <a href="{{ url('/ui-ux-design') }}" class="dropdown-link">
                                         <span class="me-2">
                                             <i class="flaticon-clipboard"></i>
                                         </span>
                                         <div class="drop-title">UI/UX designing</div>
                                     </a>
                                     <a href="{{ url('Web-Development') }}" class="dropdown-link">
                                         <span class="me-2">
                                             <i class="flaticon-settings"></i>
                                         </span>
                                         <div class="drop-title">Website Development</div>
                                     </a>
                                     <a href="{{ url('/seo-sem-company-in-chennai') }}" class="dropdown-link">
                                         <span class="me-2">
                                             <i class="flaticon-settings"></i>
                                         </span>
                                         <div class="drop-title">SEO & SMM</div>
                                     </a>
                                     <a href="{{ url('/google-services') }}" class="dropdown-link">
                                         <span class="me-2">
                                             <i class="flaticon-vector"></i>
                                         </span>
                                         <div class="drop-title">Google Services </div>
                                     </a>

                                 </div>
                                 {{-- <div class="dropdown-grid-item last-item bg-light-subtle radius-right-side">
                                     <a href="#">
                                         <img src="{{asset('images/home_page/feature-img3.jpg')}}" alt="add"
                                             class="img-fluid rounded-custom" />
                                     </a>
                                 </div> --}}
                             </div>
                         </div>
                     </li>

                     {{-- <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                             aria-expanded="false">Product</a>
                         <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                             <div class="dropdown-grid rounded-custom width-full">
                                 <div class="dropdown-grid-item bg-white radius-left-side">
                                     <h6 class="drop-heading">Our Products</h6>
                                     <a href="{{ url('/Scribeberry') }}" class="dropdown-link px-0">
                                         <span class="me-2">
                                             <i class="flaticon-fingerprint"></i>
                                         </span>
                                         <div class="drop-title">Scribeberry</div>
                                     </a>
                                     <a href="{{ url('/zoho-books') }}" class="dropdown-link px-0">
                                         <span class="me-2">
                                             <i class="flaticon-phone-book"></i>
                                         </span>
                                         <div class="drop-title">Zoho Books</div>
                                     </a>
                                     <a href="{{ url('/E-Commerce') }}" class="dropdown-link">
                                         <span class="me-2">
                                             <i class="flaticon-pie-chart"></i>
                                         </span>
                                         <div class="drop-title">E-Commerce</div>
                                     </a>
                                                                     </div>
                                
                             </div>
                         </div>
                     </li> --}}

                     <li><a href="https://trionova.in/blogs/" class="nav-link">Blogs</a></li>

                     <li><a href="{{ url('contact') }}" class="nav-link">Contact Us</a></li>

                 </ul>
             </div>
             <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">
                 <div class="header-icon">
                     <a class="contact-btn cta-btn">
                         <span class="text">GET STARTED <i class="fa-solid fa-arrow-right"></i> </span>
                     </a>

                     {{-- <a href="{{ url('javascript:void();') }}" class="animated-header" data-toggle="modal" data-target="#contact-us-modal">
                         <span> </span>
                         <span> </span>
                         <span> </span>
                         <span> </span>
                         Get Started <i class="fa-solid fa-arrow-right"></i>
                     </a>
                 </div> --}}
                 </div>
             </div>
     </nav>


     <!--offcanvas menu start-->
     <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBackdrop">
         <div class="offcanvas-header d-flex align-items-center mt-4">
             <a href="{{ url('/') }}" class="d-flex align-items-center mb-md-0 text-decoration-none">
                 <img src="{{ asset('images/logo.png') }}" alt="Trionova LOGO" class="img-fluid ps-2" />
             </a>
             <button type="button" class="close-btn text-danger" data-bs-dismiss="offcanvas" aria-label="Close">
                 <i class="flaticon-cancel"></i>
             </button>
         </div>
         <div class="offcanvas-body z-10">
             <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                 <li><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                 <li><a href="{{ url('/about-us') }}" class="nav-link">About</a></li>
                 <li class="nav-item dropdown">
                     <a class="nav-link" href="javascript:void()" role="button" data-bs-toggle="dropdown"
                         aria-expanded="false">Services</a>
                     <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                         <div class="dropdown-grid rounded-custom width-full-3">
                             <div class="dropdown-grid-item bg-white radius-left-side">
                                 <h6 class="drop-heading">
                                     <a href="javascript:void();">Business Solutions</a>
                                 </h6>

                                 <a href="{{ url('/software-development') }}" class="dropdown-link">
                                     <span class="me-2">
                                         <i class="flaticon-menu"></i>
                                     </span>
                                     <div class="drop-title">Software Development</div>
                                 </a>
                                 <a href="{{ url('/mobile-app-company-in-chennai') }}" class="dropdown-link">
                                     <span class="me-2">
                                         <i class="flaticon-layer"></i>
                                     </span>
                                     <div class="drop-title">Mobile App
                                         Development </div>
                                 </a>
                                 <a href="{{ url('/flutter-app-development-company-in-chennai') }}"
                                     class="dropdown-link">
                                     <span class="me-2">
                                         <i class="flaticon-phone-book"></i>
                                     </span>
                                     <div class="drop-title">Flutter App</div>
                                 </a>
                                 <a href="{{ url('consulting') }}" class="dropdown-link">
                                     <span class="me-2">
                                         <i class="flaticon-flash"></i>
                                     </span>
                                     <div class="drop-title">Consulting</div>
                                 </a>
                                 <a href="{{ url('/Support') }}" class="dropdown-link">
                                     <span class="me-2">
                                         <i class="flaticon-settings"></i>
                                     </span>
                                     <div class="drop-title">Support</div>
                                 </a>

                             </div>
                             <div class="dropdown-grid-item bg-white">
                                 <h6 class="drop-heading">
                                     <a href="javascript:void();">Engineering</a>
                                 </h6>
                                 <a href="{{ url('/cloud-service') }}" class="dropdown-link">
                                     <span class="me-2">
                                         <i class="flaticon-clipboard"></i>
                                     </span>
                                     <div class="drop-title">Cloud Services</div>
                                 </a>
                                 <a href="{{ url('AI') }}" class="dropdown-link">
                                     <span class="me-2">
                                         <i class="flaticon-settings"></i>
                                     </span>
                                     <div class="drop-title">AI</div>
                                 </a>
                                 <a href="{{ url('products') }}" class="dropdown-link">
                                     <span class="me-2">
                                         <i class="flaticon-settings"></i>
                                     </span>
                                     <div class="drop-title">Products</div>
                                 </a>
                                 <a href="{{ url('/Data-Science') }}" class="dropdown-link">
                                     <span class="me-2">
                                         <i class="flaticon-vector"></i>
                                     </span>
                                     <div class="drop-title">Data Science </div>
                                 </a>

                             </div>
                             {{-- <div class="dropdown-grid-item bg-white">
                                 <h6 class="drop-heading">
                                     <a href="{{ url('/Engineering') }}">Engineering</a>
                                 </h6>
                                 <a href="{{ url('cloud-service') }}" class="dropdown-link">
                                     <span class="me-2">
                                         <i class="flaticon-clipboard"></i>
                                     </span>
                                     <div class="drop-title">Cloud Services</div>
                                 </a>
                                 <a href="{{ url('AI') }}" class="dropdown-link">
                                     <span class="me-2">
                                         <i class="flaticon-settings"></i>
                                     </span>
                                     <div class="drop-title">AI</div>
                                 </a>
                                 <a href="{{ url('products') }}" class="dropdown-link">
                                     <span class="me-2">
                                         <i class="flaticon-settings"></i>
                                     </span>
                                     <div class="drop-title">Products</div>
                                 </a>
                                 <a href="{{ url('/Data-Science') }}" class="dropdown-link">
                                     <span class="me-2">
                                         <i class="flaticon-vector"></i>
                                     </span>
                                     <div class="drop-title">Data Science </div>
                                 </a>

                             </div> --}}

                             <div class="dropdown-grid-item bg-white">
                                 <h6 class="drop-heading"> <a href="javascript:void();">Digital
                                         Marketing</a></h6>
                                 <a href="{{ url('ui-ux-design') }}" class="dropdown-link">
                                     <span class="me-2">
                                         <i class="flaticon-clipboard"></i>
                                     </span>
                                     <div class="drop-title">UI/UX designing</div>
                                 </a>
                                 <a href="{{ url('Web-Development') }}" class="dropdown-link">
                                     <span class="me-2">
                                         <i class="flaticon-settings"></i>
                                     </span>
                                     <div class="drop-title">Website Development</div>
                                 </a>
                                 <a href="{{ url('/seo-sem-company-in-chennai') }}" class="dropdown-link">
                                     <span class="me-2">
                                         <i class="flaticon-settings"></i>
                                     </span>
                                     <div class="drop-title">SEO & SMM</div>
                                 </a>
                                 <a href="{{ url('/google-services') }}" class="dropdown-link">
                                     <span class="me-2">
                                         <i class="flaticon-vector"></i>
                                     </span>
                                     <div class="drop-title">Google Services </div>
                                 </a>

                             </div>

                         </div>
                     </div>
                 </li>

                 {{-- <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                         aria-expanded="false">Products</a>
                     <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                         <div class="dropdown-grid rounded-custom width-full">
                             <div class="dropdown-grid-item bg-white radius-left-side">
                                 <a href="{{ url('/zoho-books') }}" class="dropdown-link px-0">
                                     <span class="me-2">
                                         <i class="flaticon-fingerprint"></i>
                                     </span>
                                     <div class="drop-title">ScribeBerry</div>
                                 </a>
                                 <a href="{{ url('/zoho-books') }}" class="dropdown-link px-0">
                                     <span class="me-2">
                                         <i class="flaticon-phone-book"></i>
                                     </span>
                                     <div class="drop-title">Zohobooks</div>
                                 </a>
                                 <a href="{{ url('/zoho-books') }}" class="dropdown-link">
                                     <span class="me-2">
                                         <i class="flaticon-pie-chart"></i>
                                     </span>
                                     <div class="drop-title">E-Commerce</div>
                                 </a>
                               
                             </div>
                            
                         </div>
                     </div>
                 </li> --}}

                 <li><a href="https://trionova.in/blogs/" class="nav-link">Blogs</a></li>
                 <li><a href="{{ url('contact') }}" class="nav-link">Contact Us</a></li>

             </ul>
             {{-- <div class="action-btns mt-4 ps-3">
                 <div class="header-icon">

                     <a href="{{ url('javascript:void();') }}" class="animated-header" data-toggle="modal"
                         data-target="#contact-us-modal">
                         <span> </span>
                         <span> </span>
                         <span> </span>
                         <span> </span>
                         Get Started <i class="fa-solid fa-arrow-right"></i>
                     </a>
                 </div>
             </div> --}}
         </div>
     </div>
     <!--offcanvas menu end-->
 </header>
 <!--header end-->
