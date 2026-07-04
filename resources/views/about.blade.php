@extends('layouts.app')

@section('title', 'About Trionova Technology - Top IT Solutions Company')

   

 @section('meta')
        <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5JZ9G2GT');</script>
<!-- End Google Tag Manager -->

        <!--<title>About Trionova Technology - Top IT Solutions Company</title>-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="description"
            content="About Trionova Technology – delivering reliable software, mobile app, cloud, and AI solutions with innovation, expertise, and business excellence.">
        <!--<link rel="canonical" href="https://www.trionova.in" />-->
        <meta property="og:title"
            content="Trionova Technology | Top Technology Consulting Company for Innovative Business Solutions" />
        <meta property="og:description"
            content="Trionova Technology empowers businesses with AI, Mobile App Development, Cloud Services, Data Science, Web Development and product engineering solutions." />
        <!--<meta property="og:url" content="https://www.trionova.in" />-->
        <meta property="og:image" content="https://www.trionova.in/images/logo.png" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="600" />
        <meta property="og:image:type" content="image/jpg" />
        
        <link rel="canonical" href="{{ url()->current() }}" />
        <meta property="og:url" content="{{ url()->current() }}" />
        
        <!-- favicon icon -->

        <!-- Swiper CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
@endsection
@section('content')
    <body data-mobile-nav-style="full-screen-menu" data-mobile-nav-bg-color="#252840">



        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5JZ9G2GT" height="0" width="0"
                style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->


        <!-- start page title -->
        {{-- <section class="pt-0 cover-background ipad-top-space-margin sm-pb-0" style="background-image:url('images/images/services_img.jpg');">
           
            <div class="container">
                <div class="row align-items-center justify-content-center h-500px sm-h-300px">
                    <div class="col-12 col-xl-6 col-lg-8 col-md-10 position-relative text-center page-title-extra-large d-flex flex-wrap flex-column align-items-center justify-content-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    
                        <h1 class="mb-20px text-black fw-600 ls-minus-1px">About Us</h1>
                    </div> 
                </div>
            </div>
        </section> --}}
        <!-- end page title -->

        <!-- start breadcrumb -->
        <div class="rs-breadcrumbs about-banner">
            <div class="breadcrumbs-inner text-center">
                <h2 class="page-title">About us</h2>
                <ul>
                    <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                        <a class="active" href="{{ url('/') }}">Home</a>
                    </li>

                    <li>About us</li>
                </ul>
            </div>
        </div>
        <!-- end breadcrumbs -->

        <!-- start section -->
        <section class="pb-4 md-pb-17 xs-pb-28 pt-50">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-9 md-mb-50px text-center text-lg-start"
                        data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <span
                            class="bg-solitude-blue text-uppercase fs-13 ps-25px pe-25px alt-font fw-600 text-light-red lh-40 sm-lh-55 border-radius-30px d-inline-block mb-25px">ABOUT
                            US</span>
                        <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px mb-20px sm-w-85 xs-w-100 mx-auto">We're a
                            creative digital agency.</h3>
                        <p>At Trionova Technology, we are a dynamic IT solutions provider specializing in a wide range of
                            services that help businesses thrive in today’s fast-paced digital landscape. With a team of
                            highly skilled professionals and a passion for innovation, we deliver cutting-edge solutions
                            tailored to your unique business needs.</p>
                            <div class="btn-part">
                                <a class="contact-btn about-btn cta-btn">
                                    <span class="text">GET STARTED <i class="fa-solid fa-arrow-right"></i> </span>
                                </a>
                            </div>

                    </div>
                    <div class="col-xl-6 col-lg-6 offset-xl-1 position-relative">
                        <div class="text-end w-80 md-w-75 ms-auto" data-animation-delay="500" data-shadow-animation="true"
                            data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                            <img src="{{ asset('images/images/CloudServices-abt.webp') }}" alt="Cloud services team at work"
                                class="border-radius-5px">
                        </div>
                        <div class="w-60 md-w-50 xs-w-55 overflow-hidden position-absolute left-15px bottom-minus-50px"
                            data-shadow-animation="true" data-animation-delay="500"
                            data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)">
                            <img src="{{ asset('images/images/MobileAppDevelopment01.webp') }}" alt="Mobile app development"
                                class="border-radius-5px box-shadow-quadruple-large" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->



        <section>
            <div class="container">
                <div class="row align-items-center">
                    {{-- <div class="col-lg-6 md-mb-50px sm-mb-30px">
                        <figure class="position-relative mb-0 overflow-hidden">
                            <img src="images/about.jpg" class="w-100" alt="About Trionova Technology">

                        </figure>
                    </div>
                    <div class="col-xl-5 col-lg-6 offset-xl-1 text-center text-md-start"
                        data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h2 class="text-dark-gray fw-600 alt-font highlight-separator-small">We're a creative digital
                            agency.</h2>
                        <p class="w-85 sm-w-100">At Trionova Technology, we are a dynamic IT solutions provider specializing
                            in a wide range of services that help businesses thrive in today’s fast-paced digital landscape.
                            With a team of highly skilled professionals and a passion for innovation, we deliver
                            cutting-edge solutions tailored to your unique business needs.</p>

                        <div class="d-inline-block w-100 mt-15px sm-mt-0">
                            <div class="btn-part mt-2">
                            <a href="javascript:void(0);" data-toggle="modal" data-target=""
                                class="readon lets-talk">Let's
                                Talk</a>
                        </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-12 mt-3">
                        <p>Trionova Technology is a forward-thinking technology solutions provider dedicated to empowering
                            businesses through innovation and digital transformation. With a team of skilled experts, we
                            offer a broad spectrum of services including software development, mobile app development, cloud
                            solutions, AI integration, data science, UI/UX design, and digital marketing strategies. Our
                            goal is to help businesses stay competitive and achieve sustainable growth by harnessing the
                            latest technological advancements.</p>
                        <p>We also offer specialized courses, aimed at equipping students with the cutting-edge skills
                            necessary for success in the rapidly evolving tech landscape. At Trionova Technology, we believe
                            in building lasting partnerships, providing unparalleled support, and delivering solutions that
                            drive results.</p>
                        <p>Through our deep industry knowledge and customer-focused approach, we ensure that every project,
                            whether for a business or a learner, is executed with excellence. Whether you're a growing
                            startup or an established enterprise, Trionova Technology is here to elevate your brand and your
                            business to new heights.</p>
                    </div>
                </div>

            </div>
        </section>

        <section class="pt-3 bg-very-light-gray sm-pt-50px position-relative">
            <div class="container">
                <div class="row justify-content-center mb-3">
                    <div class="col-xl-7 col-lg-8 col-md-9 text-center appear anime-complete"
                        data-anime="{ &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }"
                        style="">
                        <h3 class="fw-700 text-dark-gray ls-minus-2px sm-ls-minus-1px">Our Expertise</h3>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "translateX": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <!-- start services box style -->
                    <div class="col mb-30px">
                        <div class="services-box-style-03 last-paragraph-no-margin border-radius-6px overflow-hidden">
                            <div class="position-relative">
                                <a href="{{ url('/software-development') }}"><img src="images/images/software.jpg"
                                        alt="Software development service"></a>
                                <a href="#"
                                    class="btn btn-very-small btn-rounded btn-dark-gray text-white btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 position-absolute right-30px top-30px text-uppercase">Business
                                    Solutions</a>
                            </div>
                            <div class="bg-white">
                                <div class="ps-45px pe-45px pt-30px pb-30px text-center">
                                    <a href="{{ url('/software-development') }}"
                                        class="d-inline-block fs-18 fw-700 text-dark-gray mb-5px">Software Development </a>
                                    <p>Our custom software development services are designed to create innovative, scalable,
                                        and secure solutions that drive business growth. Whether you're looking to develop a
                                        new software application or enhance an existing system, we ensure seamless
                                        integration and exceptional user experiences.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col mb-30px">
                        <div class="services-box-style-03 last-paragraph-no-margin border-radius-6px overflow-hidden">
                            <div class="position-relative">
                                <a href="{{ url('/mobile-app-company-in-chennai') }}"><img src="images/images/mobileapp.jpeg"
                                        alt="Mobile app development service" style="max-height: 305px; width: 100%;"></a>
                                <a href="#"
                                    class="btn btn-very-small btn-rounded btn-dark-gray text-white btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 position-absolute right-30px top-30px text-uppercase">Business
                                    Solutions</a>
                            </div>
                            <div class="bg-white">
                                <div class="ps-45px pe-45px pt-30px pb-30px text-center">
                                    <a href="{{ url('/mobile-app-company-in-chennai') }}"
                                        class="d-inline-block fs-18 fw-700 text-dark-gray mb-5px">Mobile App Development
                                    </a>
                                    <p>We specialize in developing high-performance, cross-platform mobile applications that
                                        engage users and elevate your brand. From concept to deployment, our mobile apps are
                                        designed to provide a smooth and intuitive user experience.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col mb-30px">
                        <div class="services-box-style-03 last-paragraph-no-margin border-radius-6px overflow-hidden">
                            <div class="position-relative">
                                <a href="{{ url('/consulting') }}"><img src="images/images/consulting.jpg"
                                        alt="Consulting and support service"></a>
                                <a href="#"
                                    class="btn btn-very-small btn-rounded btn-dark-gray text-white btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 position-absolute right-30px top-30px text-uppercase">Business
                                    Solutions</a>
                            </div>
                            <div class="bg-white">
                                <div class="ps-45px pe-45px pt-30px pb-30px text-center">
                                    <a href="{{ url('/consulting') }}"
                                        class="d-inline-block fs-18 fw-700 text-dark-gray mb-5px">Consulting & Support</a>
                                    <p>Our expert consultants provide invaluable insights and strategies that help
                                        businesses optimize their processes and technology. From IT infrastructure to
                                        digital transformation, we guide you every step of the way, offering ongoing support
                                        to ensure success.</p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col mb-30px">
                        <div class="services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                            <div class="position-relative">
                                <a href="{{ url('/cloud-service') }}"><img
                                        src="images/images/CloudServices.jpg" alt="Cloud services"></a>
                                <a href="#"
                                    class="btn btn-very-small btn-rounded btn-dark-gray text-white btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 position-absolute right-30px top-30px text-uppercase">Engineering</a>
                            </div>
                            <div class="bg-white">
                                <div class="ps-45px pe-45px pt-30px pb-30px text-center">
                                    <a href="{{ url('/cloud-service') }}"
                                        class="d-inline-block fs-18 fw-700 text-dark-gray mb-5px">Cloud Services </a>
                                    <p>Harness the power of the cloud with our secure, scalable, and flexible cloud
                                        solutions. We help businesses migrate to the cloud seamlessly, enabling faster
                                        access to data and applications while minimizing downtime.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col mb-30px">
                        <div class="services-box-style-03 last-paragraph-no-margin border-radius-6px overflow-hidden">
                            <div class="position-relative">
                                <a  href="{{ url('/AI') }}"><img src="images/images/AI.jpg"
                                        alt="AI and data science service"></a>
                                <a href="#"
                                    class="btn btn-very-small btn-rounded btn-dark-gray text-white btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 position-absolute right-30px top-30px text-uppercase">analytics</a>
                            </div>
                            <div class="bg-white">
                                <div class="ps-45px pe-45px pt-30px pb-30px text-center">
                                    <a  href="{{ url('/AI') }}"
                                        class="d-inline-block fs-18 fw-700 text-dark-gray mb-5px">AI & Data Science</a>
                                    <p>We integrate artificial intelligence (AI) and machine learning to help businesses
                                        automate processes, gain actionable insights, and make data-driven decisions. Our
                                        data science solutions are crafted to analyze vast amounts of data, uncover trends,
                                        and help businesses stay ahead of the competition.</p>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="col mb-30px">
                        <div class="services-box-style-03 last-paragraph-no-margin border-radius-6px overflow-hidden">
                            <div class="position-relative">
                                <a  href="{{ url('/ui-ux-design') }}"><img src="images/images/UIdesigning.jpg"
                                        alt="UI/UX designing service"></a>
                                <a href="#"
                                    class="btn btn-very-small btn-rounded btn-dark-gray text-white btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 position-absolute right-30px top-30px text-uppercase">Digital
                                    Marketing</a>
                            </div>
                            <div class="bg-white">
                                <div class="ps-45px pe-45px pt-30px pb-30px text-center">
                                    <a  href="{{ url('/ui-ux-design') }}"
                                        class="d-inline-block fs-18 fw-700 text-dark-gray mb-5px">UI/UX designing </a>
                                    <p>Our UI/UX design team ensures your digital products are user-friendly, visually
                                        appealing, and optimized for conversions. We create designs that not only look great
                                        but also function seamlessly across devices.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col mb-30px">
                        <div class="services-box-style-03 last-paragraph-no-margin border-radius-6px overflow-hidden">
                            <div class="position-relative">
                                <a href="{{ url('/Web-Development') }}"><img
                                        src="images/images/WebsiteDevelopment.jpg" alt="Website development service"></a>
                                <a href="#"
                                    class="btn btn-very-small btn-rounded btn-dark-gray text-white btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 position-absolute right-30px top-30px text-uppercase">Digital
                                    Marketing</a>
                            </div>
                            <div class="bg-white">
                                <div class="ps-45px pe-45px pt-30px pb-30px text-center">
                                    <a href="{{ url('/Web-Development') }}"
                                        class="d-inline-block fs-18 fw-700 text-dark-gray mb-5px">Website Development </a>
                                    <p>We specialize in building responsive, high-performance websites that are optimized
                                        for user experience and search engine rankings. Our websites are designed to boost
                                        your online presence and engage your target audience.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col mb-30px">
                        <div class="services-box-style-03 last-paragraph-no-margin border-radius-6px overflow-hidden">
                            <div class="position-relative">
                                <a href="{{ url('/seo-sem-company-in-chennai') }}"><img src="images/images/SEO.jpg"
                                        alt="SEO and SEM service"></a>
                                <a href="#"
                                    class="btn btn-very-small btn-rounded btn-dark-gray text-white btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 position-absolute right-30px top-30px text-uppercase">Digital
                                    Marketing</a>
                            </div>
                            <div class="bg-white">
                                <div class="ps-45px pe-45px pt-30px pb-30px text-center">
                                    <a href="{{ url('/seo-sem-company-in-chennai') }}"
                                        class="d-inline-block fs-18 fw-700 text-dark-gray mb-5px">SEO & SEM </a>
                                    <p>Our SEO and SEM services ensure your website ranks high on search engines, driving
                                        organic traffic and increasing visibility. We use the latest SEO techniques and
                                        strategies to improve your search engine rankings and boost your business’ growth.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col mb-30px">
                        <div class="services-box-style-03 last-paragraph-no-margin border-radius-6px overflow-hidden">
                            <div class="position-relative">
                                <a href="{{ url('/google-services') }}"><img
                                        src="images/images/GoogleServices.jpg" alt="Google services"></a>
                                <a href="#"
                                    class="btn btn-very-small btn-rounded btn-dark-gray text-white btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 position-absolute right-30px top-30px text-uppercase">Digital
                                    Marketing</a>
                            </div>
                            <div class="bg-white">
                                <div class="ps-45px pe-45px pt-30px pb-30px text-center">
                                    <a href="{{ url('/google-services') }}"
                                        class="d-inline-block fs-18 fw-700 text-dark-gray mb-5px">Google Services </a>
                                    <p>As an expert in Google services, we offer solutions for Google Analytics, Google Ads,
                                        Google Search Console, and more to help businesses gain valuable insights, increase
                                        online visibility, and drive more traffic.</p>
                                </div>

                            </div>
                        </div>
                    </div>



                    <!-- end services box style -->
                </div>
            </div>

        </section>


        {{-- <section>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 md-mb-50px sm-mb-30px">
                        <figure class="position-relative mb-0 overflow-hidden">
                            <img src="images/about.jpg" class="w-100" alt="About Trionova Technology">

                        </figure>
                    </div>
                    <div class="col-xl-5 col-lg-6 offset-xl-1 text-center text-md-start"
                        data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>

                        <p class="w-85 sm-w-100">At Trionova, we believe in empowering the next generation of tech
                            professionals. Our comprehensive courses are designed to equip students with the skills and
                            knowledge needed to excel in the tech world:</p>

                        <div class="icon-with-text-style-08" style="">
                            <div class="feature-box feature-box-left-icon-middle overflow-hidden mb-2">
                                <div
                                    class="feature-box-icon feature-box-icon-rounded w-40px h-40px bg-very-light-gray rounded-circle me-15px">
                                    <i class="fa-solid fa-check fs-14 text-dark-gray"></i>
                                </div>
                                <div class="feature-box-content">
                                    <span class="text-dark-gray fw-500"> Full Stack Development Program</span>
                                </div>
                            </div>
                        </div>
                        <div class="icon-with-text-style-08" style="">
                            <div class="feature-box feature-box-left-icon-middle overflow-hidden mb-2">
                                <div
                                    class="feature-box-icon feature-box-icon-rounded w-40px h-40px bg-very-light-gray rounded-circle me-15px">
                                    <i class="fa-solid fa-check fs-14 text-dark-gray"></i>
                                </div>
                                <div class="feature-box-content">
                                    <span class="text-dark-gray fw-500">Flutter Mobile App Development </span>
                                </div>
                            </div>
                        </div>
                        <div class="icon-with-text-style-08" style="">
                            <div class="feature-box feature-box-left-icon-middle overflow-hidden mb-2">
                                <div
                                    class="feature-box-icon feature-box-icon-rounded w-40px h-40px bg-very-light-gray rounded-circle me-15px">
                                    <i class="fa-solid fa-check fs-14 text-dark-gray"></i>
                                </div>
                                <div class="feature-box-content">
                                    <span class="text-dark-gray fw-500"> Digital Marketing + Website Development</span>
                                </div>
                            </div>
                        </div>
                        <div class="icon-with-text-style-08" style="">
                            <div class="feature-box feature-box-left-icon-middle overflow-hidden mb-2">
                                <div
                                    class="feature-box-icon feature-box-icon-rounded w-40px h-40px bg-very-light-gray rounded-circle me-15px">
                                    <i class="fa-solid fa-check fs-14 text-dark-gray"></i>
                                </div>
                                <div class="feature-box-content">
                                    <span class="text-dark-gray fw-500">AI </span>
                                </div>
                            </div>
                        </div>
                        <div class="icon-with-text-style-08" style="">
                            <div class="feature-box feature-box-left-icon-middle overflow-hidden mb-2">
                                <div
                                    class="feature-box-icon feature-box-icon-rounded w-40px h-40px bg-very-light-gray rounded-circle me-15px">
                                    <i class="fa-solid fa-check fs-14 text-dark-gray"></i>
                                </div>
                                <div class="feature-box-content">
                                    <span class="text-dark-gray fw-500"> Salesforce AI</span>
                                </div>
                            </div>
                        </div>
                        <div class="icon-with-text-style-08" style="">
                            <div class="feature-box feature-box-left-icon-middle overflow-hidden mb-2">
                                <div
                                    class="feature-box-icon feature-box-icon-rounded w-40px h-40px bg-very-light-gray rounded-circle me-15px">
                                    <i class="fa-solid fa-check fs-14 text-dark-gray"></i>
                                </div>
                                <div class="feature-box-content">
                                    <span class="text-dark-gray fw-500"> Salesforce Administrator</span>
                                </div>
                            </div>
                        </div>
                        <div class="icon-with-text-style-08" style="">
                            <div class="feature-box feature-box-left-icon-middle overflow-hidden mb-2">
                                <div
                                    class="feature-box-icon feature-box-icon-rounded w-40px h-40px bg-very-light-gray rounded-circle me-15px">
                                    <i class="fa-solid fa-check fs-14 text-dark-gray"></i>
                                </div>
                                <div class="feature-box-content">
                                    <span class="text-dark-gray fw-500"> Salesforce Business Analyst</span>
                                </div>
                            </div>
                        </div>
                        <div class="icon-with-text-style-08" style="">
                            <div class="feature-box feature-box-left-icon-middle overflow-hidden mb-2">
                                <div
                                    class="feature-box-icon feature-box-icon-rounded w-40px h-40px bg-very-light-gray rounded-circle me-15px">
                                    <i class="fa-solid fa-check fs-14 text-dark-gray"></i>
                                </div>
                                <div class="feature-box-content">
                                    <span class="text-dark-gray fw-500"> Power BI</span>
                                </div>
                            </div>
                        </div>
                        <div class="icon-with-text-style-08" style="">
                            <div class="feature-box feature-box-left-icon-middle overflow-hidden mb-2">
                                <div
                                    class="feature-box-icon feature-box-icon-rounded w-40px h-40px bg-very-light-gray rounded-circle me-15px">
                                    <i class="fa-solid fa-check fs-14 text-dark-gray"></i>
                                </div>
                                <div class="feature-box-content">
                                    <span class="text-dark-gray fw-500">Data Science </span>
                                </div>
                            </div>
                        </div>
                        <p class="w-85 sm-w-100">Whether you're a student eager to learn new skills or a business aiming to
                            upskill your workforce, our programs are designed to foster growth, innovation, and success in
                            the tech industry.</p>
                    </div>

                </div>

            </div>
        </section> --}}

        {{-- <section class="pt-0 pb-0">
            <div class="in-service" id="in_home_services">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="h2-title">Why Choose Us?</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-5 s-cta-top">
                            <div class="service-cta">
                                <div class="text-content">
                                     <h5 class="h5-title why-choose-title">Why Choose Us?</h5> 
                                    <p class="p-text">At Trionova Technology, our mission is to help businesses grow through the power of technology. Whether it’s developing the next breakthrough application, designing a user-friendly website, or offering expert courses to develop future tech leaders, we are your trusted partner in innovation.</p>
                                <p class="p-text">Contact us today to learn how we can help your business achieve greater success.</p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-7">
                            <div class="in-service-list">
                                <div
                                    class="swiper in-serv-list-slider swiper-initialized swiper-horizontal swiper-backface-hidden">
                                    <div class="swiper-wrapper why-choose">
                                        <div class="swiper-slide">
                                            <div class="item">
                                                <h3 class="h3-title">Expertise & Innovation:</h3>
                                                <p class="p-text">
                                                   Our team stays at the forefront of technology trends to deliver solutions that are not only functional but future-ready.
                                                </p>
                                                <img src="{{asset('images/demo_images/serv-maintenance.svg')}}"
                                                    alt="Infolyt Digital Maintenance Services - Website Updates, Security &amp; Content Management">
                                                <div class="expand-text">
                                                    <p class="p-text">
                                                      Our team stays at the forefront of technology trends to deliver solutions that are not only functional but future-ready.
                                                    </p>
                                                   

                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-label="2 / 4"
                                            style="width: 277px;">
                                            <div class="item">
                                                <h3 class="h3-title">Tailored Solutions:</h3>
                                                <p class="p-text">
                                                    We understand that each business has its own unique needs, and we craft solutions specifically tailored to your goals.
                                                </p>
                                                <img src="{{asset('images/demo_images/serv-maintenance.svg')}}"
                                                    alt="Infolyt Third-Party App Integration - Payment Gateways, CRM &amp; API Connectivity">
                                                <div class="expand-text">
                                                    <p class="p-text">
                                                        We understand that each business has its own unique needs, and we craft solutions specifically tailored to your goals.
                                                    </p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-label="3 / 4"
                                            style="width: 277px;">
                                            <div class="item">
                                                <h3 class="h3-title">Comprehensive Support:</h3>
                                                <p class="p-text">
                                                    From consultation to ongoing support, we are with you every step of the way to ensure your success.


                                                </p>
                                                <img src="{{asset('images/demo_images/serv-maintenance.svg')}}"
                                                    alt="Infolyt Code Migration Services - Seamless Website &amp; Application Upgrades">
                                                <div class="expand-text">
                                                    <p class="p-text">
                                                        From consultation to ongoing support, we are with you every step of the way to ensure your success.


                                                    </p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-label="4 / 4"
                                            style="width: 277px;">
                                            <div class="item">
                                                <h3 class="h3-title">Global Reach:</h3>
                                                <p class="p-text">
                                                   With clients from various industries across the globe, we have a proven track record of delivering exceptional results.
                                                </p>
                                                <img src="{{asset('images/demo_images/serv-maintenance.svg')}}"
                                                    alt="Infolyt User Experience (UX) Design - Improve Website Usability &amp; Engagement">
                                                <div class="expand-text">
                                                    <p class="p-text">
                                                       With clients from various industries across the globe, we have a proven track record of delivering exceptional results.
                                                    </p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <!-- start section -->
        <section class="pt-0 position-relative">
            <!--<div-->
            <!--    class="position-absolute top-minus-70px lg-top-minus-50px left-minus-80px xxl-left-minus-40px lg-left-30px lg-w-300px opacity-1 w-350px z-index-1 d-none d-lg-inline-block">-->
            <!--    <img src="images/demo-medical-pattern.svg" alt="" data-bottom-top="transform: translateY(-50px)"-->
            <!--        data-top-bottom="transform: translateY(50px)">-->
            <!--</div>-->
            <div
                class="bg-light-turquoise-blue border-radius-8px lg-no-border-radius pt-6 md-pt-50px md-pb-50px overflow-hidden position-relative">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-5 md-mb-30px"
                            data-anime='{"el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                            <span
                                class="bg-solitude-blue text-uppercase fs-13 ps-25px pe-25px alt-font fw-600 text-light-red lh-40 sm-lh-55 border-radius-30px d-inline-block mb-25px">
                                At Trionova </span>
                            <h2 class="fw-800 text-dark-gray ls-minus-2px">Why Choose Us?</h2>
                            <p class="mb-10px">At Trionova Technology, our mission is to help businesses grow through the
                                power of technology. Whether it’s developing the next breakthrough application, designing a
                                user-friendly website, or offering expert courses to develop future tech leaders, we are
                                your trusted partner in innovation.</p>
                            <p class="mb-10px">Contact us today to learn how we can help your business achieve greater
                                success.</p>
                        </div>
                        <div class="col-xl-8 ps-5 col-lg-7">
                            <div class="outside-box-right-25 sm-outside-box-right-0"
                                data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                <div class="swiper magic-cursor ps-15px md-ps-0"
                                    data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true,  "pagination": { "el": ".slider-four-slide-pagination-1", "clickable": true, "dynamicBullets": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                                    <div class="swiper-wrapper pt-30px pb-20px">
                                        {{-- "autoplay": { "delay": 4000, "disableOnInteraction": false }, --}}
                                        <!-- start slider item -->
                                        <div class="swiper-slide">
                                            <!-- start features box item -->
                                            <div class="icon-with-text-style-02 transition-inner-all">
                                                <div
                                                    class="feature-box bg-white text-start hover-box dark-hover border-radius-6px p-15 xl-p-12 box-shadow-medium">
                                                    <div
                                                        class="feature-box-icon feature-box-icon-rounded w-110px h-110px bg-light-turquoise-blue rounded-circle mb-20px">
                                                        <img src="{{asset('images/about-us/expertise.png')}}" class="w-50px"
                                                            alt="Expertise and innovation icon">
                                                    </div>
                                                    <div class="feature-box-content">
                                                        <span class="d-block text-dark-gray fs-19 fw-700 mb-5px">Expertise
                                                            & Innovation:</span>
                                                        <p class="text-light-opacity">Our team stays at the forefront of
                                                            technology trends to deliver solutions that are not only
                                                            functional but future-ready.</p>
                                                        {{-- <a href="demo-medical-treatments.html" class="btn btn-extra-large btn-link text-dark-gray border-bottom-0 left-icon fw-700"><i class="feather icon-feather-plus-circle icon-extra-medium ms-0"></i>Know more</a> --}}
                                                    </div>
                                                    <div class="feature-box-overlay bg-base-color border-radius-6px"></div>
                                                </div>
                                            </div>
                                            <!-- end features box item -->
                                        </div>
                                        <!-- end slider item -->
                                        <!-- start slider item -->
                                        <div class="swiper-slide">
                                            <!-- start features box item -->
                                            <div class="icon-with-text-style-02 transition-inner-all">
                                                <div
                                                    class="feature-box bg-white text-start hover-box dark-hover border-radius-6px p-15 xl-p-12 box-shadow-medium">
                                                    <div
                                                        class="feature-box-icon feature-box-icon-rounded w-110px h-110px bg-light-turquoise-blue rounded-circle mb-20px">
                                                        <img src="{{asset('images/about-us/solution.png')}}" class="w-50px"
                                                            alt="Tailored solutions icon">
                                                    </div>
                                                    <div class="feature-box-content">
                                                        <span class="d-block text-dark-gray fs-19 fw-700 mb-5px">Tailored
                                                            Solutions:</span>
                                                        <p class="text-light-opacity">We understand that each business has
                                                            its own unique needs, and we craft solutions specifically
                                                            tailored to your goals.</p>
                                                        {{-- <a href="demo-medical-treatments.html" class="btn btn-extra-large btn-link text-dark-gray border-bottom-0 left-icon fw-700"><i class="feather icon-feather-plus-circle icon-extra-medium ms-0"></i>Know more</a> --}}
                                                    </div>
                                                    <div class="feature-box-overlay bg-base-color border-radius-6px"></div>
                                                </div>
                                            </div>
                                            <!-- end features box item -->  
                                        </div>
                                        <!-- end slider item -->
                                        <!-- start slider item -->
                                        <div class="swiper-slide">
                                            <!-- start features box item -->
                                            <div class="icon-with-text-style-02 transition-inner-all">
                                                <div
                                                    class="feature-box bg-white text-start hover-box dark-hover border-radius-6px p-15 xl-p-12 box-shadow-medium">
                                                    <div
                                                        class="feature-box-icon feature-box-icon-rounded w-110px h-110px bg-light-turquoise-blue rounded-circle mb-20px">
                                                        <img src="{{asset('images/about-us/message.png')}}" class="w-50px"
                                                            alt="Comprehensive support icon">
                                                    </div>
                                                    <div class="feature-box-content">
                                                        <span
                                                            class="d-block text-dark-gray fs-19 fw-700 mb-5px">Comprehensive
                                                            Support:</span>
                                                        <p class="text-light-opacity">From consultation to ongoing support,
                                                            we are with you every step of the way to ensure your success.
                                                        </p>
                                                        {{-- <a href="demo-medical-treatments.html" class="btn btn-extra-large btn-link text-dark-gray border-bottom-0 left-icon fw-700"><i class="feather icon-feather-plus-circle icon-extra-medium ms-0"></i>Know more</a> --}}
                                                    </div>
                                                    <div class="feature-box-overlay bg-base-color border-radius-6px"></div>
                                                </div>
                                            </div>
                                            <!-- end features box item -->
                                        </div>
                                        <!-- end slider item -->
                                        <!-- start slider item -->
                                        <div class="swiper-slide">
                                            <!-- start features box item -->
                                            <div class="icon-with-text-style-02 transition-inner-all">
                                                <div
                                                    class="feature-box bg-white text-start hover-box dark-hover border-radius-6px p-15 xl-p-12 box-shadow-medium">
                                                    <div
                                                        class="feature-box-icon feature-box-icon-rounded w-110px h-110px bg-light-turquoise-blue rounded-circle mb-20px">
                                                        <img src="{{asset('images/about-us/global-network.png')}}" class="w-50px"
                                                            alt="Global reach icon">
                                                    </div>
                                                    <div class="feature-box-content">
                                                        <span class="d-block text-dark-gray fs-19 fw-700 mb-5px">Global
                                                            Reach:</span>
                                                        <p class="text-light-opacity">With clients from various industries
                                                            across the globe, we have a proven track record of delivering
                                                            exceptional results.</p>
                                                        {{-- <a href="demo-medical-treatments.html" class="btn btn-extra-large btn-link text-dark-gray border-bottom-0 left-icon fw-700"><i class="feather icon-feather-plus-circle icon-extra-medium ms-0"></i>Know more</a> --}}
                                                    </div>
                                                    <div class="feature-box-overlay bg-base-color border-radius-6px"></div>
                                                </div>
                                            </div>
                                            <!-- end features box item -->
                                        </div>
                                        <!-- start slider item -->


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- end section -->

        {{-- <section class=" pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 md-mb-20px sm-mb-0 appear anime-child anime-complete"
                        data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [15, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                        <h3 class="text-dark-gray fw-600 ls-minus-2px alt-font" style="">Why Choose Us?</h3>
                        <p>At Trionova Technology, our mission is to help businesses grow through the power of technology.
                            Whether it’s developing the next breakthrough application, designing a user-friendly website, or
                            offering expert courses to develop future tech leaders, we are your trusted partner in
                            innovation.</p>
                        <p>Contact us today to learn how we can help your business achieve greater success.</p>
                    </div>
                    <div class="col-lg-7 appear anime-child anime-complete"
                        data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [15, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                        <div class="row" style="">
                            <div class="col-md-5">
                                <div class="fs-19 fw-600 text-dark-gray w-90 xl-w-100 sm-mb-10px">Expertise & Innovation:
                                </div>
                            </div>
                            <div class="col-md-7 last-paragraph-no-margin">
                                <p>Our team stays at the forefront of technology trends to deliver solutions that are not
                                    only functional but future-ready.</p>
                            </div>
                        </div>
                        <div class="separator-line-1px border-bottom border-color-extra-medium-gray mt-35px mb-35px"
                            style=""></div>
                        <div class="row" style="">
                            <div class="col-md-5">
                                <div class="fs-19 fw-600 text-dark-gray w-90 xl-w-100 sm-mb-10px">Tailored Solutions:
                                </div>
                            </div>
                            <div class="col-md-7 last-paragraph-no-margin">
                                <p>We understand that each business has its own unique needs, and we craft solutions
                                    specifically tailored to your goals.</p>
                            </div>
                        </div>
                        <div class="separator-line-1px border-bottom border-color-extra-medium-gray mt-35px mb-35px"
                            style=""></div>
                        <div class="row" style="">
                            <div class="col-md-5">
                                <div class="fs-19 fw-600 text-dark-gray w-90 xl-w-100 sm-mb-10px">Comprehensive Support:
                                </div>
                            </div>
                            <div class="col-md-7 last-paragraph-no-margin">
                                <p>From consultation to ongoing support, we are with you every step of the way to ensure
                                    your success.</p>
                            </div>
                        </div>
                        <div class="separator-line-1px border-bottom border-color-extra-medium-gray mt-35px mb-35px"
                            style=""></div>
                        <div class="row" style="">
                            <div class="col-md-5">
                                <div class="fs-19 fw-600 text-dark-gray w-90 xl-w-100 sm-mb-10px">Global Reach:</div>
                            </div>
                            <div class="col-md-7 last-paragraph-no-margin">
                                <p>With clients from various industries across the globe, we have a proven track record of
                                    delivering exceptional results.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <section class="background-position-center-top pb-6 sm-background-image-none"
            style="background-image: url('images/vertical-line-bg.svg')">
            <div class="container">
                <div class="row position-relative clients-style-08">
                    <div class="col swiper text-center feather-shadow"
                        data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed": 4000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 4 }, "768": { "slidesPerView": 3 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper marquee-slide">
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/images/client1.jpg" class="clientLogo"
                                        alt="Client logo" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/images/client2.jpg" class="clientLogo"
                                        alt="Client logo" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/images/client3.jpg" class="clientLogo"
                                        alt="Client logo" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/images/client4.jpg" class="clientLogo"
                                        alt="Client logo" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/images/client5.jpg" class="clientLogo"
                                        alt="Client logo" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/images/client6.jpg" class="clientLogo"
                                        alt="Client logo" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/images/client7.jpg" class="clientLogo"
                                        alt="Client logo" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/images/client8.jpg" class="clientLogo"
                                        alt="Client logo" /></a>
                            </div>
                            <!-- end client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/images/client9.jpg" class="clientLogo"
                                        alt="Client logo" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#"><img src="images/images/client10.jpg" class="clientLogo"
                                        alt="Client logo" /></a>
                            </div>

                            <!-- start client item -->
                                    <div class="swiper-slide">
                                        <a href="#"><img src="images/images/client11.webp" class="clientLogo"
                                                alt="Client logo" /></a>
                                    </div>
                                    <!-- end client item -->
                                     <!-- start client item -->
                                    <div class="swiper-slide">
                                        <a href="#"><img src="images/images/client16.webp" class="clientLogo"
                                                alt="Client logo" /></a>
                                    </div>
                                    <!-- end client item -->
                                     <!-- start client item -->
                                    <div class="swiper-slide">
                                        <a href="#"><img src="images/images/client17.png" class="clientLogo"
                                                alt="Client logo" /></a>
                                    </div>
                                    <!-- end client item -->
                                     <!-- start client item -->
                                    <div class="swiper-slide">
                                        <a href="#"><img src="images/images/client18.png" class="clientLogo"
                                                alt="Client logo" /></a>
                                    </div>
                                    <!-- end client item -->
                                     
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- start scroll progress -->
        <div class="scroll-progress d-none d-xxl-block">
            <a href="#" class="scroll-top" aria-label="scroll">
                <span class="scroll-text">Scroll</span><span class="scroll-line"><span
                        class="scroll-point"></span></span>
            </a>
        </div>
        <!-- end scroll progress -->

        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


         {{-- Popup Form --}}

        {{-- <div id="call-to-action"
            class="container subscribe-popup contact-form-style-01 position-relative text-center mfp-hide">
            <div class="row g-0 align-items-stretch ">

                <!-- Left Side: Image -->
                <div class="col-lg-6 col-md-12 br-17px">
                    <img src="{{ asset('images/mobile-app/cta.webp') }}" alt="App Promo"
                        class="img-fluid w-100 h-100 object-fit-cover br-17px">
                </div>

                <!-- Right Side: Form -->
                <div class="col-lg-6 col-md-12 bg-white align-items-center bl-17px">
                    <h5 class="text-dark pt-5  pb-1">start your business</h5>
                    <!-- <h3 class="text-dark pt-1  pb-1"><span class="text-blue">Mobile App
                        </span>Development</h3> -->
                    <div class="w-100">

                        <!-- HubSpot form container -->
                        <div id="hubspot-form-container"></div>

                        <!-- HubSpot script -->

                    </div>
                </div>

            </div>
        </div> --}}

        <div id="call-to-action"
            class="container subscribe-popup contact-form-style-01 position-relative text-center mfp-hide">

            <div class="row g-0 bg-white align-items-stretch" style="position: relative; border-radius: 17px;">

                <div class="form-bg"></div>

                <!-- Left Image -->
                <div class="col-lg-6 col-md-12 br-17px" style="z-index: 1;">
                    <div class="form-part1-container">
                        <div>
                            <h1>Let's get you set up.</h1>
                            <p>
                                We specialize in building scalable, secure, and high-performance software solutions that help businesses streamline operations and stay ahead of the competition. Whether you need a custom web application, enterprise system, or mobile solution, our team is ready to deliver excellence at every stage. Share your project requirements with us, and let’s create something exceptional that drives measurable results.
                            </p>
                        </div>

                        <div class="margin-contain">
                            <h1>More than four million businesses around the world.</h1>

                            {{-- swiper --}}

                            <div class="sponsor-slider">
                <div class="slider-track">

                    <!-- ===== SET 1 ===== -->
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum"><img
                                src="{{asset('images/images/ride.webp')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client2.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client3.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client4.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client5.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client6.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client7.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client8.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client9.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client10.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client11.webp')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client16.webp')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client17.png')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client18.png')}}"></div>
                    </div>

                    <!-- ===== SET 2 (DUPLICATE) ===== -->
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum"><img
                                src="{{asset('images/images/ride.webp')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client2.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client3.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client4.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client5.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client6.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client7.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client8.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client9.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client10.jpg')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client11.webp')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client16.webp')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client17.png')}}"></div>
                    </div>
                    <div class="sponsor">
                        <div class="sponsor-card sponsor-platinum  "><img
                                src="{{asset('images/images/client18.png')}}"></div>
                    </div>

                </div>
            </div>

                        </div>

                    </div>
                </div>

                <!-- Right Form -->
                <div class="col-lg-6 col-md-12 align-items-center bl-17px" style="z-index: 1;">

                    <div class="form-part2-container">
                        <h5 class="text-dark pb-1">
                            Start your business
                        </h5>

                        @include('common.contact-form')
                    </div>

                </div>

            </div>

        </div>

        {{-- Popup Form --}}

        <script>
            var swiper = new Swiper(".in-serv-list-slider", {
                slidesPerView: 3,
                autoplay: {
                    delay: 3000,
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                    },
                    480: {
                        slidesPerView: 1,
                    },
                    992: {
                        slidesPerView: 3,
                    }
                }
            });
        </script>





    </body>

    </html>
@endsection
