@extends('layouts.app')

@section('title', 'Trionova Technology | Top Tech Consulting Company')


@section('meta')

    {{-- <title>Trionova Technology | Top Tech Consulting Company</title> --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <!--<meta name="title" content="Trionova - Top Technology Consulting Company in Chennai ">-->
    <meta name="Language" content="English">
    <meta name="Copyright" content="
    ">
    <meta name="Designer" content="Trionova Technologies">
    <meta name="Publisher" content="Trionova Technologies">
    <meta name="distribution" content="Global">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="author" content="Trionova Technologies">
    <meta name="geo.region" content="IN-TN">
    <meta name="geo.placename" content="Chennai">
    <meta name="geo.position" content="12.8112567;80.2260762">
    <meta name="ICBM" content="12.8112567,80.2260762">
    <meta name="description"
        content="Trionova Technology empowers businesses with AI, Mobile App Development, Cloud Services, Data Science, Web Development and product engineering solutions.">
    <!--<link rel="canonical" href="https://www.trionova.in" />-->
    <meta property="og:title" content="Trionova Technology | Top Tech Consulting Company" />
    <meta property="og:description"
        content="Trionova Technology empowers businesses with AI, Mobile App Development, Cloud Services, Data Science, Web Development and product engineering solutions." />
    <meta name="google-site-verification" content="g4QLPfsh6CFOQSjBhsdbUlC_of7da9t4CHLdCWdCSfA" />
    <!--<meta property="og:url" content="https://www.trionova.in" />-->
    <meta name="keywords"
        content="AI solutions, Mobile App Development, Cloud Services, Data Science, Web Development, Product Engineering, Business Technology Solutions, Trionova Technology, Artificial Intelligence, Cloud Computing, App Developers, Software Engineering, Tech Services, Digital Transformation, IT Services">

    <meta property="og:image" content="https://www.trionova.in/images/logo.png" />

    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="600" />
    <meta property="og:image:type" content="image/jpg" />
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="trionova.in">
    <!--<meta property="twitter:url" content="https://www.trionova.in">-->
    <meta name="twitter:title" content="Trionova Technology | Top Tech Consulting Company">
    <meta name="twitter:description"
        content="Trionova Technology empowers businesses with AI, Mobile App Development, Cloud Services, Data Science, Web Development and product engineering solutions.">
    <meta name="twitter:image"
        content="https://www.trionova.in/images/flutter/images/mobile-app/mobile-app-development-company-chennai.jpg">

    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="twitter:url" content="{{ url()->current() }}">


    <link rel="stylesheet" href="{{ asset('css/mobile.css') }}" />

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5JZ9G2GT');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-244KHB99SM"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-244KHB99SM');
    </script>


<!-- Schema 1: Organization + LocalBusiness -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": ["Organization", "LocalBusiness"],
  "name": "Trionova Technologies",
  "url": "https://trionova.in",
  "logo": {
    "@type": "ImageObject",
    "url": "https://trionova.in/images/logo.png",
    "width": 200,
    "height": 60
  },
  "description": "Trionova Technology is a dynamic IT solutions provider offering software and mobile app development, cloud services, AI & data science, web development, digital marketing, and product engineering.",
  "email": "info@trionova.in",
  "telephone": "+919442132694",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "128, 2nd Floor, Second Street, Shanthi Nagar, Chromepet",
    "addressLocality": "Chennai",
    "addressRegion": "Tamil Nadu",
    "postalCode": "600044",
    "addressCountry": "IN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 12.8112567,
    "longitude": 80.2260762
  },
  "contactPoint": {
    "@type": "ContactPoint",
    "contactType": "customer support",
    "telephone": "+919442132694",
    "availableLanguage": ["English", "Tamil"]
  },
  "sameAs": [
    "https://www.facebook.com/trionovatechnologies/",
    "https://www.linkedin.com/company/trionova-technologies-private-limited/",
    "https://x.com/TrionovaTech",
    "https://www.instagram.com/trionova_technologies/"
  ]
}
</script>

<!-- Schema 2: FAQPage (keep yours as-is — it's correct) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What AI solutions does Trionova Technology offer for businesses?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Trionova Technology provides advanced AI services including machine learning, natural language processing, predictive analytics, and intelligent automation. These solutions help businesses improve efficiency, customer experience, and data-driven decision-making."
      }
    },
    {
      "@type": "Question",
      "name": "Why choose Trionova for mobile app development?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Trionova specializes in creating high-performance mobile applications using technologies like Flutter, React Native, and native iOS/Android. We focus on user-friendly design, scalability, and seamless cross-platform functionality."
      }
    },
    {
      "@type": "Question",
      "name": "How do Trionova's cloud services support digital transformation?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We offer cloud migration, DevOps automation, and cloud-native app development on platforms like AWS, Azure, and Google Cloud. Our cloud solutions enhance security, scalability, and operational efficiency for businesses."
      }
    },
    {
      "@type": "Question",
      "name": "What industries does Trionova serve with web development solutions?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Trionova delivers tailored web development services to industries such as healthcare, education, fintech, e-commerce, and logistics. We build secure, fast, and responsive websites using modern tech stacks like Angular, React, and Node.js."
      }
    },
    {
      "@type": "Question",
      "name": "What is Trionova's approach to product engineering?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Our product engineering process includes ideation, prototyping, MVP development, testing, and deployment. We use agile methodologies to ensure your product is scalable, reliable, and aligned with market needs."
      }
    }
  ]
}
</script>

<!-- Schema 3: WebSite (new — add this) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "Trionova Technology",
  "url": "https://trionova.in"
}
</script>


@endsection


@section('content')

    <body data-mobile-nav-style="full-screen-menu" data-mobile-nav-bg-color="#252840">
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5JZ9G2GT" height="0" width="0"
                style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->




        <!-- start header -->
        <!-- end header -->
        <!-- start hero section -->
        <section
            class="cover-background banner_sec main-banner-video full-screen ipad-top-space-margin py-0 md-h-740px sm-h-540px">
            <video autoplay muted loop playsinline class="trionova-banner-lap">
                <source src="{{ asset('images/trionova/trio-vdo.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <video autoplay muted loop playsinline class="trionova-banner-mobile">
                <source src="{{ asset('images/trionova/trio-mob.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>


            <div class="opacity-very-light bg-black"></div>
            <div class="shape-image-animation bottom-0 p-0 w-100 d-none d-md-block">
                <svg xmlns="http://www.w3.org/2000/svg" widht="3000" height="400" viewBox="0 180 2500 200"
                    fill="#ffffff">
                    <path class="st1" d="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250">
                        <animate attributeName="d" dur="5s"
                            values="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250;
                            M 0 250 C 400 50 400 400 3000 250 L 3000 550 L 0 550 L 0 250;
                            M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250"
                            repeatCount="indefinite" />
                    </path>
                </svg>
            </div>

        </section>
        <!-- end hero section -->

        {{-- <div class="wrapper-slider rs-banner">
            <div class="swiper main-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="item">
                            <!--<div class="video">-->
                            <!--    <video autoplay loop muted playsinline class="w-full h-full object-cover absolute inset-0"-->
                            <!--        poster="">-->
                            <!--        <source src="{{ asset('images/mobile-app/Untitled-design.mp4') }}"type="video/mp4">-->
                            <!--        Tu navegador no admite la reproducción de video.-->
                            <!--    </video>-->
                            <!--</div>-->

                            <div class="mobile-banner-bg">
                                <div class="mobile-banner">
                                    <img src="{{ asset('images/software-development/banner-img-1.png') }}"
                                        alt="Mobile App Development Banner">
                                    <div class="mobile-bg-black"></div>
                                </div>
                            </div>

                            <div class="container">
                                <div class="parent-text app-chennai">
                                    <div class="info-text">
                                        <!--<h1 class="title wow fadeinup">Empowering Ideas with Leading <span-->
                                        <!--        class="base-blue clr-one ml2">Mobile App Development Company</span> in Chennai-->
                                        <!--</h1>-->
                                        <!--<div class="desc wow fadeinup text-white">-->
                                        <!--    Our expert team in Chennai transforms your vision into feature-rich, scalable, and-->
                                        <!--    user-centric mobile applications that drive real business growth. Partner with us to-->
                                        <!--    build apps your customers will love and your business.-->
                                        <!--</div>-->

                                        <h1 class="title wow fadeinup">
                                            <span class="base-blue clr-one ml2">Software Development Company </span>
                                            Transforming Businesses Through Technology & AI
                                        </h1>
                                        <div class="desc wow fadeinup text-white">
                                            At Trionova, we build intelligent software, AI-powered solutions, and digital
                                            experiences that help businesses innovate faster, operate smarter, and scale
                                            confidently in a rapidly evolving world.
                                        </div>

                                        <a class=" title-btn wow mt-3 fadeinup cta-btn" href="javascript:void();">
                                            <span class="text m-0">Schedule a Consultation</span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div> --}}


        <!-- end page title -->

        <section class="pt-50px pb-50px">
            <div class="container">
                <div class="row">
                    <div class=" col-lg-12 col-md-12 text-center"
                        data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    </div>
                    <div class="box-googleplay index-business aos-init aos-animate" data-aos="fade-left">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="g-store grow-business  mb-25px">
                                    <span
                                        class="animated-banner wow zoomIn  d-flex ps-25px pe-25px pt-5px pb-5px mb-25px text-uppercase wow fadeInRight animated text-dark fs-12 ls-1px fw-600 border-radius-30px bg-gradient-dark-gray-transparent d-flex w-70 sm-w-100"
                                        data-aos="zoom-in-up">
                                        <i class="bi bi-megaphone text-light-red icon-small me-10px"
                                            data-wow-delay="1.9s"></i>
                                        <span class="word-group">
                                            <span class="word" style="animation-delay: 0s;">Grow</span>
                                            <span class="word" style="animation-delay: 0.2s;">your</span>
                                            <span class="word" style="animation-delay: 0.4s;">business</span>
                                            <span class="word" style="animation-delay: 0.6s;">with</span>
                                            <span class="word" style="animation-delay: 0.8s;">us</span>
                                        </span>
                                    </span>
                                    <h1 class="text-dark fw-600 ls-minus-2px mb-25px word-group">
                                        <span class="clr-one ml2">We
                                            bring
                                            your
                                            vision</span>
                                        <span class="word">life,</span>
                                        <span class="word">transforming</span>
                                        <span class="word">it</span>
                                        <span class="word">into</span>
                                        <span class="word">a</span>
                                        <span class="word">flourishing</span>
                                        <span class="word">enterprise.</span>
                                    </h1>

                                    <p class="fw-400 fs-18 w-85 sm-w-95 text-black word-group" data-aos="zoom-in-up">
                                        <span class="word" style="animation-delay: 3.5s;">Harness</span>
                                        <span class="word" style="animation-delay: 3.7s;">the</span>
                                        <span class="word" style="animation-delay: 3.9s;">unparalleled</span>
                                        <span class="word" style="animation-delay: 4.1s;">strength</span>
                                        <span class="word" style="animation-delay: 4.3s;">of</span>
                                        <span class="word" style="animation-delay: 4.5s;">top-tier</span>
                                        <span class="word" style="animation-delay: 4.7s;">business</span>
                                        <span class="word" style="animation-delay: 4.9s;">solutions</span>
                                        <span class="word" style="animation-delay: 5.1s;">to</span>
                                        <span class="word" style="animation-delay: 5.3s;">revolutionize</span>
                                        <span class="word" style="animation-delay: 5.5s;">your</span>
                                        <span class="word" style="animation-delay: 5.7s;">organization</span>
                                        <span class="word" style="animation-delay: 5.9s;">and</span>
                                        <span class="word" style="animation-delay: 6.1s;">unlock</span>
                                        <span class="word" style="animation-delay: 6.3s;">its</span>
                                        <span class="word" style="animation-delay: 6.5s;">full</span>
                                        <span class="word" style="animation-delay: 6.7s;">potential.</span>
                                    </p>
                                    <a href="{{ url('/about-us') }}"
                                        class="btn   btn-large btn-dark-gray btn-switch-text btn-rounded me-10px ls-0px mt-15px">
                                        <span>
                                            <span class="btn-double-text" data-text="Explore Trionova">Explore
                                                Trionova</span>
                                            <span><i class="fa-solid fa-arrow-right"></i></span>
                                        </span>
                                    </a>
                                    <a href="{{ url('/contact') }}"
                                        class="btn btn-large btn-switch-text btn-transparent-white-light btn-rounded border-1 ls-0px mt-15px">
                                        <span>
                                            <span class="btn-double-text" data-text="Contact us">Contact us</span>
                                            <span><i class="fa-regular fa-envelope"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="app-store-img-main">
                                    <video class="app-store-img video-grow" data-aos="zoom-in-up" data-wow-delay="2.3s"
                                        autoplay muted loop playsinline>
                                        <source src="{{ asset('images/trionova/We-bring-our-vision.mp4') }}"
                                            alt="Software Development Company in Chennai" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>



        {{-- <section class="cover-background banner_sec full-screen ipad-top-space-margin py-0 md-h-740px sm-h-540px"
            style=  "background-image: url('images/demo-it-business-banner-bg.jpg');">



            <div class="opacity-very-light bg-black"></div>

            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-xl-8 col-lg-8 col-md-10 position-relative z-index-1"
                        data-anime='{ "el": "childs", "translateY": [0, 0], "perspective": [1200,1200], "scale": [1.05, 1], "rotateX": [30, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <!-- Span with Icon and Words -->
                        <span
                            class="animated-banner wow fadeInRight d-flex ps-25px pe-25px pt-5px pb-5px mb-25px text-uppercase wow fadeInRight animated text-light-red fs-12 ls-1px fw-600 border-radius-30px bg-gradient-dark-gray-transparent d-flex w-70 sm-w-100">
                            <i class="bi bi-megaphone text-light-red icon-small me-10px" data-wow-delay="1.9s"></i>
                            <span class="word-group">
                                <span class="word" style="animation-delay: 0s;">Grow</span>
                                <span class="word" style="animation-delay: 0.2s;">your</span>
                                <span class="word" style="animation-delay: 0.4s;">business</span>
                                <span class="word" style="animation-delay: 0.6s;">with</span>
                                <span class="word" style="animation-delay: 0.8s;">us</span>
                            </span>
                        </span>

                        <!-- Heading -->
                        <h1 class="text-white fw-600 ls-minus-2px mb-25px word-group">
                            <span class="word" style="animation-delay: 1s;">We</span>
                            <span class="word" style="animation-delay: 1.2s;">bring</span>
                            <span class="word" style="animation-delay: 1.4s;">your</span>
                            <span class="word" style="animation-delay: 1.6s;">vision</span>
                            <span class="word" style="animation-delay: 1.8s;">to</span>
                            <span class="word" style="animation-delay: 2s;">life,</span>
                            <span class="word" style="animation-delay: 2.2s;">transforming</span>
                            <span class="word" style="animation-delay: 2.4s;">it</span>
                            <span class="word" style="animation-delay: 2.6s;">into</span>
                            <span class="word" style="animation-delay: 2.8s;">a</span>
                            <span class="word" style="animation-delay: 3s;">flourishing</span>
                            <span class="word" style="animation-delay: 3.2s;">enterprise.</span>
                        </h1>

                        <!-- Paragraph -->
                        <p class="fw-300 fs-18 w-85 sm-w-95 text-white word-group">
                            <span class="word" style="animation-delay: 3.5s;">Harness</span>
                            <span class="word" style="animation-delay: 3.7s;">the</span>
                            <span class="word" style="animation-delay: 3.9s;">unparalleled</span>
                            <span class="word" style="animation-delay: 4.1s;">strength</span>
                            <span class="word" style="animation-delay: 4.3s;">of</span>
                            <span class="word" style="animation-delay: 4.5s;">top-tier</span>
                            <span class="word" style="animation-delay: 4.7s;">business</span>
                            <span class="word" style="animation-delay: 4.9s;">solutions</span>
                            <span class="word" style="animation-delay: 5.1s;">to</span>
                            <span class="word" style="animation-delay: 5.3s;">revolutionize</span>
                            <span class="word" style="animation-delay: 5.5s;">your</span>
                            <span class="word" style="animation-delay: 5.7s;">organization</span>
                            <span class="word" style="animation-delay: 5.9s;">and</span>
                            <span class="word" style="animation-delay: 6.1s;">unlock</span>
                            <span class="word" style="animation-delay: 6.3s;">its</span>
                            <span class="word" style="animation-delay: 6.5s;">full</span>
                            <span class="word" style="animation-delay: 6.7s;">potential.</span>
                        </p>

                        <a href="{{ url('/about-us') }}"
                            class="btn   btn-large btn-dark-gray btn-switch-text btn-rounded me-10px ls-0px mt-15px">
                            <span>
                                <span class="btn-double-text" data-text="Explore Trionova">Explore Trionova</span>
                                <span><i class="fa-solid fa-arrow-right"></i></span>
                            </span>
                        </a>
                        <a href="{{ url('/contact') }}"
                            class="btn btn-large btn-switch-text btn-transparent-white-light btn-rounded border-1 ls-0px mt-15px">
                            <span>
                                <span class="btn-double-text" data-text="Contact us">Contact us</span>
                                <span><i class="fa-regular fa-envelope"></i></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section> --}}


        <!-- start section -->
        {{-- <section class="position-relative pt-50px pb-50px"> 
            <div class="container">
                <div class="row align-items-center mb-4" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="col-xl-5 lg-mb-30px text-center text-xl-start">
                        <h3 class="text-dark-gray fw-700 mb-0 ls-minus-2px">Trinova Tech School</h3>
                    </div>
                    <div class="col-xl-7 tab-style-04 text-center text-xl-end">
                        <!-- filter navigation -->
                        <ul class="portfolio-filter nav nav-tabs justify-content-center justify-content-xl-end border-0 fw-500">
                            <li class="nav active"><a data-filter="*" href="#">All</a></li>
                            <!-- <li class="nav"><a data-filter=".selected" href="#">Selected</a></li>
                            <li class="nav"><a data-filter=".digital" href="#">Digital</a></li>
                            <li class="nav"><a data-filter=".branding" href="#">Branding</a></li>
                            <li class="nav"><a data-filter=".web" href="#">Web</a></li> -->
                        </ul>
                        <!-- end filter navigation --> 
                    </div>
                </div> 
                <div class="row" data-anime='{  "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="col-12 filter-content p-md-0">
                        <ul class="portfolio-modern portfolio-wrapper grid-loading grid grid-3col xxl-grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                            <li class="grid-sizer"></li>
                            <!-- start portfolio item -->
                            <li class="grid-item selected digital transition-inner-all">
                                <a href="">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image border-radius-4px">
                                            <img src="images/images/TrinovaTech10.jpg" alt="Full Stack Development Program" />
                                        </div>
                                        <div class="portfolio-hover box-shadow-extra-large">
                                            <div class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                                <div class="me-auto">
                                                
                                                    <div class="fw-700 text-dark-gray text-uppercase lh-initial">Full Stack Development Program </div>
                                                </div>
                                                <div class="ms-auto"><i class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i></div> 
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item web branding transition-inner-all">
                                <a href="">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image border-radius-6px">
                                            <img src="images/images/TrinovaTech9.jpg" alt="Flutter Mobile App Development" />
                                        </div>
                                        <div class="portfolio-hover box-shadow-extra-large">
                                            <div class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                                <div class="me-auto">
                                                    
                                                    <div class="fw-700 text-dark-gray text-uppercase lh-initial">Flutter Mobile APP Dev</div>
                                                </div>
                                                <div class="ms-auto"><i class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i></div> 
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item web branding transition-inner-all">
                                <a href="">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image border-radius-6px">
                                            <img src="images/images/TrinovaTech8.jpg" alt="Digital Marketing and Website Development" />
                                        </div>
                                        <div class="portfolio-hover box-shadow-extra-large">
                                            <div class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                                <div class="me-auto">
                                                
                                                    <div class="fw-700 text-dark-gray text-uppercase lh-initial">Digital Marketing + Website Development </div>
                                                </div>
                                                <div class="ms-auto"><i class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i></div> 
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item selected digital transition-inner-all">
                                <a href="">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image border-radius-6px">
                                            <img src="images/images/TrinovaTech7.jpg" alt="AI Development" />
                                        </div>
                                        <div class="portfolio-hover box-shadow-extra-large">
                                            <div class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                                <div class="me-auto">
                                                    
                                                    <div class="fw-700 text-dark-gray text-uppercase lh-initial">AI</div>
                                                </div>
                                                <div class="ms-auto"><i class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i></div> 
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item selected branding transition-inner-all">
                                <a href="">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image border-radius-6px">
                                            <img src="images/images/TrinovaTech6.jpg" alt="Salesforce AI" />
                                        </div>
                                        <div class="portfolio-hover box-shadow-extra-large">
                                            <div class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                                <div class="me-auto">
                                                    
                                                    <div class="fw-700 text-dark-gray text-uppercase lh-initial">Salesforce AI</div>
                                                </div>
                                                <div class="ms-auto"><i class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i></div> 
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="grid-item selected branding transition-inner-all">
                                <a href="">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image border-radius-6px">
                                            <img src="images/images/TrinovaTech5.jpg" alt="Salesforce Administrator" />
                                        </div>
                                        <div class="portfolio-hover box-shadow-extra-large">
                                            <div class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                                <div class="me-auto">
                                                    
                                                    <div class="fw-700 text-dark-gray text-uppercase lh-initial">Salesforce Administrator</div>
                                                </div>
                                                <div class="ms-auto"><i class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i></div> 
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item digital web transition-inner-all">
                                <a href="">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image border-radius-6px">
                                            <img src="images/images/TrinovaTech4.jpg" alt="Salesforce Business Analyst" />
                                        </div>
                                        <div class="portfolio-hover box-shadow-extra-large">
                                            <div class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                                <div class="me-auto">
                                                   
                                                    <div class="fw-700 text-dark-gray text-uppercase lh-initial">Salesforce BA</div>
                                                </div>
                                                <div class="ms-auto"><i class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i></div> 
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="grid-item digital web transition-inner-all">
                                <a href="">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image border-radius-6px">
                                            <img src="images/images/TrinovaTech3.jpg" alt="Power BI" />
                                        </div>
                                        <div class="portfolio-hover box-shadow-extra-large">
                                            <div class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                                <div class="me-auto">
                                                   
                                                    <div class="fw-700 text-dark-gray text-uppercase lh-initial"> Power BI</div>
                                                </div>
                                                <div class="ms-auto"><i class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i></div> 
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- <li class="grid-item digital web transition-inner-all">
                                <a href="">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image border-radius-6px">
                                            <img src="images/images/TrinovaTech2.jpg" alt="Trionova technology portfolio" />
                                        </div>
                                        <div class="portfolio-hover box-shadow-extra-large">
                                            <div class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                                <div class="me-auto">
                                                   
                                                    <div class="fw-700 text-dark-gray text-uppercase lh-initial"> Data Science</div>
                                                </div>
                                                <div class="ms-auto"><i class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i></div> 
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="grid-item digital web transition-inner-all">
                                <a href="">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image border-radius-6px">
                                            <img src="images/images/TrinovaTech1.jpg" alt="Trionova technology portfolio" />
                                        </div>
                                        <div class="portfolio-hover box-shadow-extra-large">
                                            <div class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                                <div class="me-auto">
                                                   
                                                    <div class="fw-700 text-dark-gray text-uppercase lh-initial">Workshops - School and College Students - 3 days 5 days</div>
                                                </div>
                                                <div class="ms-auto"><i class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i></div> 
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li> -->
                            <!-- end portfolio item --> 
                        </ul>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center mt-3">
                            <a href="trinova-tech-school.html" class="btn btn-large btn-dark-gray btn-hover-animation-switch btn-round-edge btn-box-shadow me-30px" style="">
                                <span> 
                                    <span class="btn-text">View More Service</span>
                                    <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- end section -->


        <!-- start about section -->

        {{-- <section id="down-section" class="pt-50px pb-50px">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-5 col-md-10 position-relative z-index-1 md-mb-40px">
                        <div class="atropos">
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner">
                                        <div>
                                            <img src="images/trionova/home-about.png" class="border-radius-6px w-100"
                                                alt="about us">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-5 col-lg-6 offset-lg-1 col-md-9 text-center text-lg-start "
                        data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <span
                            class="bg-solitude-blue text-uppercase fs-13 ps-25px pe-25px alt-font fw-600 text-light-red lh-40 sm-lh-55 border-radius-30px d-inline-block mb-25px">Welcome
                            to</span>
                        <h3 class="fw-600 text-dark-gray ls-minus-2px alt-font sm-w-80 xs-w-100 mx-auto sm-mb-20px">
                            Trionova
                            Technologies</h3>
                        <p>At Trionova Technology, we are a dynamic IT solutions provider specializing in a wide range of
                            services that help businesses thrive in today’s fast-paced digital landscape. </p>
                        <p>With a team of highly skilled professionals and a passion for innovation, we deliver cutting-edge
                            solutions tailored to your unique business needs.</p>
                        <a href="{{ url('/about-us') }}"
                            class="btn btn-large btn-dark-gray btn-box-shadow btn-rounded mt-15px sm-mt-10px">About Us<i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

            </div>
        </section> --}}

        <!-- End About Section -->



        <!-- About Section Start -->
        <div class="rs-about  pt-20px pb-50px md-pt-80 md-pb-80">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 md-mb-50">
                        <div class="atropos">
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner">
                                        <div class="welcome-img">
                                            <img src="{{ asset('images/trionova/Welcome-Trionova.webp') }}"
                                                class="border-radius-10px w-100" alt="Mobile App Development Services">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pl-60 md-pl-15">
                        <div class="contact-wrap">
                            <div class="sec-title mb-3">
                                <span
                                    class="bg-solitude-blue text-uppercase fs-13 ps-25px pe-25px alt-font fw-600 text-light-red lh-40 sm-lh-55 border-radius-30px d-inline-block mb-25px">Welcome
                                    to</span>
                                <h2 class="title pb-3">
                                    Trionova Technologies
                                </h2>
                                <!--<div class="desc pb-3">-->
                                <!--    At Trionova Technologies, we are more than just an IT solutions provider — we are a-->
                                <!--    trusted partner in transforming businesses for the digital era. Headquartered in India,-->
                                <!--    we specialize in delivering end-to-end technology services that empower enterprises,-->
                                <!--    startups, and entrepreneurs to innovate, scale, and succeed in today’s highly-->
                                <!--    competitive market.-->
                                <!--</div>-->
                                <!--<div class="desc pb-3">-->
                                <!--    With years of industry experience, our team of skilled professionals, strategists,-->
                                <!--    designers, and developers works collaboratively to craft customized solutions that align-->
                                <!--    perfectly with your unique business objectives. Our passion lies in leveraging-->
                                <!--    cutting-edge technologies and innovative strategies to help our clients achieve-->
                                <!--    measurable growth and operational excellence.-->
                                <!--</div>-->

                                <div class="desc pb-3">
                                    Trionova Technologies is a trusted IT solutions partner helping businesses navigate and
                                    succeed in the digital era. Headquartered in India, we specialize in delivering
                                    end-to-end technology services that enable enterprises, startups, and entrepreneurs to
                                    innovate, scale, and stay competitive.
                                </div>
                                <div class="desc pb-3">
                                    Our experienced team of strategists, designers, and developers collaborate closely with
                                    clients to build customized, future-ready solutions. By combining advanced technologies
                                    with strategic insight, we drive measurable growth, operational efficiency, and
                                    long-term success.
                                </div>

                            </div>
                            <div class="btn-part">
                                <a
                                    class="btn btn-large btn-dark-gray btn-box-shadow btn-rounded mt-15px sm-mt-10px cta-btn">
                                    Get in Touch<i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End -->


        <section class="pt-0 pb-50px">
            <div class="container">

                <div class="row">
                    <div class="col-lg-3  mb-3">
                        <div id="card1" class="card card-section  wow fadeInDown" data-wow-delay="1.8s"
                            style="visibility: visible; animation-delay: 1.8s; animation-name: fadeInDown;">
                            <img src="images/trionova/Icons 2/Scope.png" alt="Defined Scope Engagement">
                            <p class="card__title frt">Defined Scope Engagement</p>
                            <div class="card__content">
                                <p class="card__title">Defined Scope Engagement</p>
                                <p class="card__description">
                                    We provide a fixed quote covering budget and delivery timelines for initiatives with an
                                    established architecture and end objectives, ensuring a predictable and transparent
                                    process.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3">
                        <div id="card1" class="card card-bl card-section  wow fadeInDown" data-wow-delay="1.4s"
                            style="visibility: visible; animation-delay: 1.4s; animation-name: fadeInDown;">
                            <img src="images/trionova/Icons 2/AdaptiveResourceAllocation.png"
                                alt="Adaptive Resource Allocation">
                            <p class="card__title frt">Adaptive Resource Allocation</p>
                            <div class="card__content">
                                <p class="card__title">Adaptive Resource Allocation</p>
                                <p class="card__description">For projects where the scope may fluctuate, either expanding
                                    or
                                    contracting, we offer a flexible billing structure that accounts for only the actual
                                    time and effort dedicated by the assigned team.
                                    for what we do.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div id="card1" class="card card-section  wow fadeInDown" data-wow-delay="1s"
                            style="visibility: visible; animation-delay: 1s; animation-name: fadeInDown;">
                            <img src="images/trionova/Icons 2/On-Demand-Talent-Augmentation.png" alt="On-Demand Talent">
                            <p class="card__title frt">On-Demand Talent Augmentation</p>
                            <div class="card__content">
                                <p class="card__title">On-Demand Talent Augmentation</p>
                                <p class="card__description">We provide access to a pool of skilled professionals, ranging
                                    from UX designers to developers and project managers, proficient in technologies such as
                                    React, Flutter, and Angular, ready to integrate with your team and project requirements
                                    seamlessly.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 ">
                        <div id="card1" class="card card-bl card-section  wow fadeInDown" data-wow-delay=".7s"
                            style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInDown;">
                            <img src="images/trionova/Icons 2/Best-in-business.png" alt="Best in Business">
                            <p class="card__title frt">
                                Best in Business</p>
                            <div class="card__content">
                                <p class="card__title">
                                    Best in Business</p>
                                <p class="card__description">Your project demands uniqueness and adaptability. Why
                                    constrain
                                    it to fit traditional processes? At Trionova, we present three distinct engagement
                                    models, each finely tuned to accommodate diverse project scopes and dynamic
                                    requirements.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- start section -->
        <section class="in-industry overflow-hidden">
            <div class="container pb-5 xs-pb-8">
                <div class="row justify-content-center text-center text-lg-start">
                    <div class="col-lg-6 col-md-9 col-sm-8 md-mb-4">
                        {{-- <span
                            class="bg-solitude-blue text-uppercase fs-13 ps-25px pe-25px alt-font fw-600 text-light-red lh-40 sm-lh-55 border-radius-30px d-inline-block mb-25px">
                            Our Services</span> --}}

                        <!--<h3 class="alt-font fw-700 light-black w-80 lg-w-100 m-0 ls-minus-1px"-->
                        <!--    data-anime='{ "el": "lines", "translateY": [30, 0], "translateX": [30, 0], "opacity": [0,1], "delay": 0, "staggervalue": 250, "easing": "easeOutQuad" }'>-->
                        <!--    Industries We Serve</h3>-->
                        <h3 class="alt-font fw-700 light-black w-80 lg-w-100 m-0 ls-minus-1px"
                            data-anime='{ "el": "lines", "translateY": [30, 0], "translateX": [30, 0], "opacity": [0,1], "delay": 0, "staggervalue": 250, "easing": "easeOutQuad" }'>
                            Our Wide Range of Services</h3>
                    </div>
                    <div class="col-lg-6 col-md-9 last-paragraph-no-margin">
                        <p class="w-90 lg-w-100"
                            data-anime='{ "el": "lines", "translateY": [30, 0], "translateX": [30, 0], "opacity": [0,1], "delay": 100, "staggervalue": 250, "easing": "easeOutQuad" }'>
                            Our dedicated team of skilled developers focuses on crafting state-of-the-art solutions tailored
                            to the distinct demands of each industry. We emphasize delivering outstanding user experiences,
                            ensuring our clients receive unparalleled service and innovation.</p>
                        {{-- <a href="{{ url('/services') }}"
                            class="btn btn-large btn-dark-gray btn-box-shadow btn-rounded mt-15px sm-mt-10px"> Explore
                            Services<i class="fa-solid fa-arrow-right"></i></a> --}}
                    </div>
                </div>
            </div>
            <div class="container-fluid ps-10 pe-10 xxl-ps-5 xxl-pe-5 xl-px-0">
                <div class="row justify-content-center">
                    <div class="col-12 sliding-box-style-03 sliding-box justify-content-center d-flex lg-flex-nowrap flex-wrap"
                        data-anime='{ "el": "childs", "translateY": [30, 0], "translateX": [30, 0], "opacity": [0,1], "duration": 800, "delay":200, "staggervalue": 300, "easing": "easeOutQuad" }'>


                        <!-- start interactive banners item -->
                        <div class="sliding-box-item box-shadow-extra-large h-250 md-mb-30px mb-3 active">
                            <div class="sliding-box-img position-relative">
                                <img src="{{ asset('images/trionova/SoftwareDevelopement.webp') }}"
                                    alt="software development " class="w-100 h-250" />
                                <div
                                    class="overlay-contnet w-100 h-100 d-flex flex-column align-items-center justify-content-center z-index-2 text-center">
                                    <div class="alt-font fw-600 fs-22 lh-30 text-white w-60">Software Development</div>
                                    {{-- <span class="number fs-70 lh-70 fw-300 text-white">01</span> --}}
                                </div>
                                <div class="overlay bg-dark-gray"></div>
                            </div>
                            <div
                                class="text-center d-flex flex-column align-items-center justify-content-center sliding-box-content bg-white p-60px xxl-p-50px xl-p-40px lg-p-35px last-paragraph-no-margin">
                                <div class="content-hover w-100">
                                    <div class="text-dark-gray alt-font fw-700 fs-18 lh-28 m-auto mb-5px">Software
                                        Development </div>
                                    <p>Trionova Technology provides expert software development services tailored to your
                                        business.</p>
                                    <a href="{{ url('/software-development') }}"
                                        class="btn btn-large btn-dark-gray btn-box-shadow btn-rounded mt-15px sm-mt-10px">
                                        Explore<i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end interactive banners item -->

                        <!-- start interactive banners item -->
                        <div class="sliding-box-item h-250 box-shadow-extra-large md-mb-30px mb-3">
                            <div class="sliding-box-img position-relative">
                                <img src="{{ asset('images/trionova/mobile.webp') }}" alt="mobile"
                                    class="w-100 h-250" />
                                <div
                                    class="overlay-contnet w-100 h-100 d-flex flex-column align-items-center justify-content-center z-index-2 text-center">
                                    <div class="alt-font fw-600 fs-22 lh-30 text-white w-60">Mobile App Development</div>
                                    {{-- <span class="number fs-70 lh-70 fw-300 text-white">02</span> --}}
                                </div>
                                <div class="overlay bg-dark-gray"></div>
                            </div>
                            <div
                                class="text-center d-flex flex-column align-items-center justify-content-center sliding-box-content bg-white p-60px xxl-p-50px xl-p-40px lg-p-35px last-paragraph-no-margin">
                                <div class="content-hover w-100">
                                    <div class="text-dark-gray alt-font fw-700 fs-18 lh-28 m-auto mb-5px">Mobile App
                                        Development </div>
                                    <p>We are a leading mobile app development company in Chennai,</p>
                                    <a href="{{ url('/mobile-app-company-in-chennai') }}"
                                        class="btn btn-large btn-dark-gray btn-box-shadow btn-rounded mt-15px sm-mt-10px">
                                        Explore<i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- start interactive banners item -->
                        <div class="sliding-box-item box-shadow-extra-large h-250 md-mb-30px mb-3">
                            <div class="sliding-box-img position-relative">
                                <img src="{{ asset('images/trionova/AI.webp') }}" alt="AI" class="w-100 h-250" />
                                <div
                                    class="overlay-contnet w-100 h-100 d-flex flex-column align-items-center justify-content-center z-index-2 text-center">
                                    <div class="alt-font fw-600 fs-22 lh-30 text-white w-60">AI</div>
                                    {{-- <span class="number fs-70 lh-70 fw-300 text-white">06</span> --}}
                                </div>
                                <div class="overlay bg-dark-gray"></div>
                            </div>
                            <div
                                class="text-center d-flex flex-column align-items-center justify-content-center sliding-box-content bg-white p-60px xxl-p-50px xl-p-40px lg-p-35px last-paragraph-no-margin">
                                <div class="content-hover w-100">
                                    <div class="text-dark-gray alt-font fw-700 fs-18 lh-28 m-auto mb-5px">AI</div>
                                    <p>Artificial Intelligence is fundamentally transforming the dynamics of business
                                        operations</p>
                                    <a href="{{ url('AI') }}"
                                        class="btn btn-large btn-dark-gray btn-box-shadow btn-rounded mt-15px sm-mt-10px">
                                        Explore<i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end interactive banners item -->

                        <!-- end interactive banners item -->


                    </div>

                    {{-- <div class="col-12 sliding-box-style-03 sliding-box pt-2 justify-content-center d-flex lg-flex-nowrap flex-wrap"
                        data-anime='{ "el": "childs", "translateY": [30, 0], "translateX": [30, 0], "opacity": [0,1], "duration": 800, "delay":200, "staggervalue": 300, "easing": "easeOutQuad" }'>


                        <!-- start interactive banners item -->
                        <div class="sliding-box-item h-250 box-shadow-extra-large md-mb-30px">
                            <div class="sliding-box-img position-relative">
                                <img src="{{ asset('images/trionova/Support.png') }}" alt="support"
                                    class="w-100 h-250" />
                                <div
                                    class="overlay-contnet w-100 h-100 d-flex flex-column align-items-center justify-content-center z-index-2 text-center">
                                    <div class="alt-font fw-600 fs-22 lh-30 text-white w-60">Support</div>
                                </div>
                                <div class="overlay bg-dark-gray"></div>
                            </div>
                            <div
                                class="text-center d-flex flex-column align-items-center justify-content-center sliding-box-content bg-white p-60px xxl-p-50px xl-p-40px lg-p-35px last-paragraph-no-margin">
                                <div class="content-hover w-100">
                                    <div class="text-dark-gray alt-font fw-700 fs-18 lh-28 m-auto mb-5px">Support </div>
                                    <p>At Trionova Technology, we take pride in being a top-tier solution provider with a
                                        vision </p>
                                    <a href="{{ url('Support') }}"
                                        class="btn btn-large btn-dark-gray btn-box-shadow btn-rounded mt-15px sm-mt-10px">
                                        Explore<i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end interactive banners item -->

                        <!-- start interactive banners item -->
                        <div class="sliding-box-item box-shadow-extra-large h-250 md-mb-30px ">
                            <div class="sliding-box-img position-relative">
                                <img src="{{ asset('images/trionova/Cloud-Services.png') }}" alt="cloud"
                                    class="w-100 h-250" />
                                <div
                                    class="overlay-contnet w-100 h-100 d-flex flex-column align-items-center justify-content-center z-index-2 text-center">
                                    <div class="alt-font fw-600 fs-22 lh-30 text-white w-60">Cloud Services</div>
                                </div>
                                <div class="overlay bg-dark-gray"></div>
                            </div>
                            <div
                                class="text-center d-flex flex-column align-items-center justify-content-center sliding-box-content bg-white p-60px xxl-p-50px xl-p-40px lg-p-35px last-paragraph-no-margin">
                                <div class="content-hover w-100">
                                    <div class="text-dark-gray alt-font fw-700 fs-18 lh-28 m-auto mb-5px">Cloud Services
                                    </div>
                                    <p>Elevate your enterprise with our distinguished cloud advisory solutions</p>
                                    <a href="{{ url('cloud-service') }}"
                                        class="btn btn-large btn-dark-gray btn-box-shadow btn-rounded mt-15px sm-mt-10px">
                                        Explore<i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end interactive banners item -->

                       
                        <!-- start interactive banners item -->
                        <div class="sliding-box-item box-shadow-extra-large h-250 md-mb-30px">
                            <div class="sliding-box-img position-relative">
                                <img src="{{ asset('images/trionova/consulting.png') }}" alt="consulting"
                                    class="w-100 h-250" />
                                <div
                                    class="overlay-contnet w-100 h-100 d-flex flex-column align-items-center justify-content-center z-index-2 text-center">
                                    <div class="alt-font fw-600 fs-22 lh-30 text-white w-60">Consulting</div>
                                </div>
                                <div class="overlay bg-dark-gray"></div>
                            </div>
                            <div
                                class="text-center d-flex flex-column align-items-center justify-content-center sliding-box-content bg-white p-60px xxl-p-50px xl-p-40px lg-p-35px last-paragraph-no-margin">
                                <div class="content-hover w-100">
                                    <div class="text-dark-gray alt-font fw-700 fs-18 lh-28 m-auto mb-5px">Consulting</div>
                                    <p>At Trionova Technology, we take pride in being a top-tier solution provider with a
                                        vision for building a better</p>
                                    <a href="{{ url('/consulting') }}"
                                        class="btn btn-large btn-dark-gray btn-box-shadow btn-rounded mt-15px sm-mt-10px">
                                        Explore<i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end interactive banners item -->



                    </div> --}}
                    <div class="col-12 sliding-box-style-03 sliding-box pt-2 justify-content-center d-flex lg-flex-nowrap flex-wrap"
                        data-anime='{ "el": "childs", "translateY": [30, 0], "translateX": [30, 0], "opacity": [0,1], "duration": 800, "delay":200, "staggervalue": 300, "easing": "easeOutQuad" }'>


                        <!-- start interactive banners item -->
                        <div class="sliding-box-item box-shadow-extra-large h-250 md-mb-30px mb-3">
                            <div class="sliding-box-img position-relative">
                                <img src="{{ asset('images/trionova/services/Flutter-Development.webp') }}"
                                    alt="AI" class="w-100 h-250" />
                                <div
                                    class="overlay-contnet w-100 h-100 d-flex flex-column align-items-center justify-content-center z-index-2 text-center">
                                    <div class="alt-font fw-600 fs-22 lh-30 text-white w-60">Flutter App Development
                                    </div>
                                    {{-- <span class="number fs-70 lh-70 fw-300 text-white">06</span> --}}
                                </div>
                                <div class="overlay bg-dark-gray"></div>
                            </div>
                            <div
                                class="text-center d-flex flex-column align-items-center justify-content-center sliding-box-content bg-white p-60px xxl-p-50px xl-p-40px lg-p-35px last-paragraph-no-margin">
                                <div class="content-hover w-100">
                                    <div class="text-dark-gray alt-font fw-700 fs-18 lh-28 m-auto mb-5px">Flutter App
                                        Development
                                    </div>
                                    <p> Empower your business with high-performance, cross-platform mobile solutions crafted
                                        using Flutter.</p>
                                    <a href="{{ url('/flutter-app-development-company-in-chennai') }}"
                                        class="btn btn-large btn-dark-gray btn-box-shadow btn-rounded mt-15px sm-mt-10px">
                                        Explore<i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end interactive banners item -->

                        <!-- start interactive banners item -->
                        <div class="sliding-box-item box-shadow-extra-large h-250 md-mb-30px active mb-3">
                            <div class="sliding-box-img position-relative">
                                <img src="{{ asset('images/trionova/services/Product-Development.webp') }}"
                                    alt="cloud" class="w-100 h-250" />
                                <div
                                    class="overlay-contnet w-100 h-100 d-flex flex-column align-items-center justify-content-center z-index-2 text-center">
                                    <div class="alt-font fw-600 fs-22 lh-30 text-white w-60">Products</div>
                                    {{-- <span class="number fs-70 lh-70 fw-300 text-white">05</span> --}}
                                </div>
                                <div class="overlay bg-dark-gray"></div>
                            </div>
                            <div
                                class="text-center d-flex flex-column align-items-center justify-content-center sliding-box-content bg-white p-60px xxl-p-50px xl-p-40px lg-p-35px last-paragraph-no-margin">
                                <div class="content-hover w-100">
                                    <div class="text-dark-gray alt-font fw-700 fs-18 lh-28 m-auto mb-5px">Products
                                    </div>
                                    <p>Drive innovation and growth with scalable digital products tailored to your business
                                        goals. </p>
                                    <a href="{{ url('/products') }}"
                                        class="btn btn-large btn-dark-gray btn-box-shadow btn-rounded mt-15px sm-mt-10px">
                                        Explore<i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end interactive banners item -->

                        <!-- start interactive banners item -->
                        <div class="sliding-box-item box-shadow-extra-large h-250 md-mb-30px mb-3">
                            <div class="sliding-box-img position-relative">
                                <img src="{{ asset('images/trionova/services/UI-UX-Design.webp') }}" alt="AI"
                                    class="w-100 h-250" />
                                <div
                                    class="overlay-contnet w-100 h-100 d-flex flex-column align-items-center justify-content-center z-index-2 text-center">
                                    <div class="alt-font fw-600 fs-22 lh-30 text-white w-60">UI/UX Design</div>
                                    {{-- <span class="number fs-70 lh-70 fw-300 text-white">06</span> --}}
                                </div>
                                <div class="overlay bg-dark-gray"></div>
                            </div>
                            <div
                                class="text-center d-flex flex-column align-items-center justify-content-center sliding-box-content bg-white p-60px xxl-p-50px xl-p-40px lg-p-35px last-paragraph-no-margin">
                                <div class="content-hover w-100">
                                    <div class="text-dark-gray alt-font fw-700 fs-18 lh-28 m-auto mb-5px">UI/UX Design
                                    </div>
                                    <p>Transform user experiences with Trionova’s intuitive and purpose-driven design
                                        solutions. </p>
                                    <a href="{{ url('/ui-ux-design') }}"
                                        class="btn btn-large btn-dark-gray btn-box-shadow btn-rounded mt-15px sm-mt-10px">
                                        Explore<i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end interactive banners item -->


                    </div>
                    <div class="col-12 sliding-box-style-03 sliding-box pt-2 justify-content-center d-flex lg-flex-nowrap flex-wrap"
                        data-anime='{ "el": "childs", "translateY": [30, 0], "translateX": [30, 0], "opacity": [0,1], "duration": 800, "delay":200, "staggervalue": 300, "easing": "easeOutQuad" }'>


                        <!-- start interactive banners item -->
                        <div class="sliding-box-item h-250 box-shadow-extra-large md-mb-30px mb-3">
                            <div class="sliding-box-img position-relative">
                                <img src="{{ asset('images/trionova/services/Web-Development.webp') }}" alt="support"
                                    class="w-100 h-250" />
                                <div
                                    class="overlay-contnet w-100 h-100 d-flex flex-column align-items-center justify-content-center z-index-2 text-center">
                                    <div class="alt-font fw-600 fs-22 lh-30 text-white w-60">Website Development</div>
                                    {{-- <span class="number fs-70 lh-70 fw-300 text-white">04</span> --}}
                                </div>
                                <div class="overlay bg-dark-gray"></div>
                            </div>
                            <div
                                class="text-center d-flex flex-column align-items-center justify-content-center sliding-box-content bg-white p-60px xxl-p-50px xl-p-40px lg-p-35px last-paragraph-no-margin">
                                <div class="content-hover w-100">
                                    <div class="text-dark-gray alt-font fw-700 fs-18 lh-28 m-auto mb-5px">Website
                                        Development </div>
                                    <p>Build impactful digital presence with Trionova’s robust, responsive, and scalable web
                                        solutions. </p>
                                    <a href="{{ url('/Web-Development') }}"
                                        class="btn btn-large btn-dark-gray btn-box-shadow btn-rounded mt-15px sm-mt-10px">
                                        Explore<i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end interactive banners item -->

                        <!-- start interactive banners item -->
                        <div class="sliding-box-item box-shadow-extra-large h-250 md-mb-30px mb-3">
                            <div class="sliding-box-img position-relative">
                                <img src="{{ asset('images/trionova/services/Search-Engine-Optimization.webp') }}"
                                    alt="cloud" class="w-100 h-250" />
                                <div
                                    class="overlay-contnet w-100 h-100 d-flex flex-column align-items-center justify-content-center z-index-2 text-center">
                                    <div class="alt-font fw-600 fs-22 lh-30 text-white w-60">SEO & SMM</div>
                                    {{-- <span class="number fs-70 lh-70 fw-300 text-white">05</span> --}}
                                </div>
                                <div class="overlay bg-dark-gray"></div>
                            </div>
                            <div
                                class="text-center d-flex flex-column align-items-center justify-content-center sliding-box-content bg-white p-60px xxl-p-50px xl-p-40px lg-p-35px last-paragraph-no-margin">
                                <div class="content-hover w-100">
                                    <div class="text-dark-gray alt-font fw-700 fs-18 lh-28 m-auto mb-5px">SEO & SMM
                                    </div>
                                    <p> Enhance your digital reach with performance-driven SEO and impactful social media
                                        marketing strategies. </p>
                                    <a href="{{ url('/seo-sem-company-in-chennai') }}"
                                        class="btn btn-large btn-dark-gray btn-box-shadow btn-rounded mt-15px sm-mt-10px">
                                        Explore<i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end interactive banners item -->

                        <!-- start interactive banners item -->
                        <div class="sliding-box-item box-shadow-extra-large h-250 md-mb-30px active mb-3">
                            <div class="sliding-box-img position-relative">
                                <img src="{{ asset('images/trionova/services/Google-Services.webp') }}" alt="AI"
                                    class="w-100 h-250" />
                                <div
                                    class="overlay-contnet w-100 h-100 d-flex flex-column align-items-center justify-content-center z-index-2 text-center">
                                    <div class="alt-font fw-600 fs-22 lh-30 text-white w-60">Google Services</div>
                                    {{-- <span class="number fs-70 lh-70 fw-300 text-white">06</span> --}}
                                </div>
                                <div class="overlay bg-dark-gray"></div>
                            </div>
                            <div
                                class="text-center d-flex flex-column align-items-center justify-content-center sliding-box-content bg-white p-60px xxl-p-50px xl-p-40px lg-p-35px last-paragraph-no-margin">
                                <div class="content-hover w-100">
                                    <div class="text-dark-gray alt-font fw-700 fs-18 lh-28 m-auto mb-5px">Google Services
                                    </div>
                                    <p>Maximize business efficiency with integrated Google solutions for productivity,
                                        marketing, and cloud management. </p>
                                    <a href="{{ url('/google-services') }}"
                                        class="btn btn-large btn-dark-gray btn-box-shadow btn-rounded mt-15px sm-mt-10px">
                                        Explore<i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end interactive banners item -->


                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="pt-50px pb-5-px">
            <div class="container">
                <div class="row justify-content-center mb-1">
                    <div class="col-xl-8 col-lg-10 text-center">
                        {{-- <span
                            class="bg-solitude-blue text-uppercase fs-13 ps-25px pe-25px alt-font fw-600 text-light-red lh-40 sm-lh-55 border-radius-30px d-inline-block mb-25px">
                            Technologies</span> --}}
                        <!--<h2 class="text-dark-gray fw-600 ls-minus-1px"-->
                        <!--    data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>-->
                        <!--    Technologies we work with</h2>-->
                        <h2 class="text-dark-gray fw-600 ls-minus-1px"
                            data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            Our Technology Stack</h2>
                    </div>
                </div>
                <div class="row align-items-center"
                    data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 150, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="col-xl-3 col-lg-4 col-md-12 tab-style-05 md-mb-30px sm-mb-20px">
                        <!-- start tab navigation -->
                        <ul class="nav nav-tabs justify-content-center border-0 text-left fw-500 fs-18 alt-font">
                            <li class="nav-item"><a data-bs-toggle="tab" href="#tab_four1"
                                    class="nav-link d-flex align-items-center active"><span>Mobile
                                        App</span></a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab_four2"><span>Front
                                        End</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                    href="#tab_four3"><span>Database</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                    href="#tab_four6"><span>BackEnd</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                    href="#tab_four4"><span>CMS</span></a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab_four5"><span>Infra
                                        &amp; Devops</span></a></li>
                        </ul>
                        <!-- end tab navigation -->
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-12">
                        <div class="tab-content">
                            <!-- start tab content -->
                            <div class="tab-pane fade in active show" id="tab_four1">
                                <div class="row align-items-center">

                                    <div class="col-xl-9 col-md-9 offset-xl-1 text-center text-md-start">
                                        {{-- <span
                                        class="fs-18 fw-500 text-base-color mb-25px d-flex align-items-center justify-content-center justify-content-md-start">Technologies</span>
                                    --}}
                                        <div class="skills sklpad">
                                            <div class="skills-container">
                                                <div class="skills-flex-container">
                                                    <div class="row  wow fadeInRight animated" data-wow-delay="1.3s"
                                                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;">
                                                        <div class="col-md-3 col-sm-2 mob-t mb-4">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/Mobile-icons/ios.png') }}"
                                                                        alt="ios" class="">
                                                                    <p class="fs-12 mb-0">ios</p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/Mobile-icons/Android.png') }}"
                                                                        alt="Android" class="">
                                                                    <p class="fs-12 mb-0">Android</p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/Mobile-icons/React-Native.png') }}"
                                                                        alt="Android" class="">
                                                                    <p class="fs-12 mb-0">React-Native</p>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="col-md-3 col-sm-2 mob-t ">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/Mobile-icons/flutter.png') }}"
                                                                        alt="Android">
                                                                    <p class="fs-12 mb-0">flutter</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-2 mob-t mb-4">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/Mobile-icons/Ionic.png') }}"
                                                                        alt="Ionic">
                                                                    <p class="fs-12 mb-0">Ionic</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/Mobile-icons/Swift.png') }}"
                                                                        alt="Swift">
                                                                    <p class="fs-12 mb-0">Swift</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/Mobile-icons/kotlin.png') }}"
                                                                        alt="kotlin">
                                                                    <p class="fs-12 mb-0">kotlin</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/Mobile-icons/C.png') }}"
                                                                        alt="C#">
                                                                    <p class="fs-12 mb-0">C#</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/Mobile-icons/python.png') }}"
                                                                        alt="python">
                                                                    <p class="fs-12 mb-0">python</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/Mobile-icons/dart.png') }}"
                                                                        alt="Dart">
                                                                    <p class="fs-12 mb-0">Dart</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/Mobile-icons/RX_Java.png') }}"
                                                                        alt="RX Java">
                                                                    <p class="fs-12 mb-0">RX Java</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/Mobile-icons/Reative_Cocoa.png') }}"
                                                                        alt="Reative Cocoa">
                                                                    <p class="fs-12 mb-0">Reative Cocoa</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-4 offset-xl-1 sm-mb-30px">
                                        <img src="{{ asset('images/trionova/Technologies/MobileApp.jpg') }}"
                                            alt="" class="border-radius-6px w-100" style="height: 300px" />
                                    </div> --}}
                                </div>
                            </div>
                            <!-- end tab content -->
                            <!-- start tab content -->
                            <div class="tab-pane fade in" id="tab_four2">
                                <div class="row align-items-center">
                                    <div class="col-xl-9 col-md-9 offset-xl-1 text-center text-md-start">
                                        {{-- <span
                                            class="fs-18 fw-500 text-base-color mb-25px d-flex align-items-center justify-content-center justify-content-md-start"></span> --}}
                                        <div class="skills sklpad">
                                            <div class="skills-container">
                                                <div class="skills-flex-container">
                                                    <div class="row  wow fadeInRight animated" data-wow-delay="1.3s"
                                                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;">
                                                        <div class="col-md-4 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/frontend/angularjs.png') }}"
                                                                        alt="Angular JS" class="">
                                                                    <p class="fs-12 mb-0">Angular JS</p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/frontend/react.png') }}"
                                                                        alt="React Native" class="">
                                                                    <p class="fs-12 mb-0">React Native</p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/frontend/typescript.png') }}"
                                                                        alt="Type Script" class="">
                                                                    <p class="fs-12 mb-0">Type Script</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- <div class="col-md-4 col-sm-2 mob-t">
                                                                    <div class="skills-box">
                                                                        <div class="skills-image">
                                                                            <img src="{{ asset('images/trionova/Technologies/frontend/laravel.webp') }}"
                                                                                alt="Laravel" class="">
                                                                            <p class="fs-12 mb-0">Laravel</p>
                                                                        </div>
                                                                    </div>
                                                                </div> -->
                                                        <div class="col-md-4 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/frontend/vue.png') }}"
                                                                        alt="Vue Js" class="">
                                                                    <p class="fs-12 mb-0">Vue Js</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/frontend/Next.png') }}"
                                                                        alt="Next Js" class="">
                                                                    <p class="fs-12 mb-0">Next Js</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/frontend/Vite.js.png') }}"
                                                                        alt="Vite Js" class="">
                                                                    <p class="fs-12 mb-0">Vite Js</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/frontend/YiiFramework.png') }}"
                                                                        alt="Yii Framework" class="">
                                                                    <p class="fs-12 mb-0">Yii Framework</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/frontend/python.png') }}"
                                                                        alt="Python" class="">
                                                                    <p class="fs-12 mb-0">Python</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!-- end tab content -->
                            <!-- start tab content -->
                            <div class="tab-pane fade in" id="tab_four3">
                                <div class="row align-items-center">

                                    <div class="col-xl-9 col-md-9 offset-xl-1 text-center text-md-start">
                                        {{-- <span
                                            class="fs-18 fw-500 text-base-color mb-25px d-flex align-items-center justify-content-center justify-content-md-start"></span> --}}

                                        <div class="skills sklpad">
                                            <div class="skills-container">
                                                <div class="skills-flex-container">
                                                    <div class="row  wow fadeInRight animated" data-wow-delay="1.3s"
                                                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;">
                                                        <div class="col-md-3 col-sm-2  mob-t mb-4">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/database/firebase.png') }}"
                                                                        alt="Fire Base" class="">
                                                                    <p class="fs-12 mb-0">Fire Base</p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/database/microsoft-sql.png') }}"
                                                                        alt="MsSql" class="">
                                                                    <p class="fs-12 mb-0">MsSql</p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/database/mongo.png') }}"
                                                                        alt="Mongo DB" class="">
                                                                    <p class="fs-12 mb-0">Mongo DB</p>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="col-md-3 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/database/mysql.png') }}"
                                                                        alt="MySql" class="">
                                                                    <p class="fs-12 mb-0">MySql</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/database/redis.png') }}"
                                                                        alt="Redis">
                                                                    <p class="fs-12 mb-0">Redis</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-2 mob-t  mb-4">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/database/CouchDB.png') }}"
                                                                        alt="CouchDB">
                                                                    <p class="fs-12 mb-0">CouchDB</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/database/PostgresSQL.png') }}"
                                                                        alt="PostgresSQL">
                                                                    <p class="fs-12 mb-0">PostgresSQL</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/database/Cloudflare.png') }}"
                                                                        alt="Cloud flare">
                                                                    <p class="fs-12 mb-0">Cloud flare</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/database/Liquibase.png') }}"
                                                                        alt="Liquibase">
                                                                    <p class="fs-12 mb-0">Liquibase</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/database/SQLite.png') }}"
                                                                        alt="SQL Lite">
                                                                    <p class="fs-12 mb-0">SQL Lite</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/database/ApacheCassandra.png') }}"
                                                                        alt="Cassandra">
                                                                    <p class="fs-12 mb-0">Cassandra</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/database/AzureSQL.png') }}"
                                                                        alt="Azure SQL">
                                                                    <p class="fs-12 mb-0">Azure SQL</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!-- end tab content -->


                            <!-- start tab content -->
                            <div class="tab-pane fade in" id="tab_four6">
                                <div class="row align-items-center">

                                    <div class="col-xl-9 col-md-9 offset-xl-1 text-center text-md-start">
                                        {{-- <span
                                            class="fs-18 fw-500 text-base-color mb-25px d-flex align-items-center justify-content-center justify-content-md-start"></span> --}}

                                        <div class="skills sklpad">
                                            <div class="skills-container">
                                                <div class="skills-flex-container cms">
                                                    <div class="row  wow fadeInRight animated" data-wow-delay="1.3s"
                                                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;">
                                                        <div class="col-md-4 col-sm-2  mob-t mb-4">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/backend/java.png') }}"
                                                                        alt="Java" class="">
                                                                    <p class="fs-12 mb-0">Java</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/backend/php.png') }}"
                                                                        alt="PHP" class="">
                                                                    <p class="fs-12 mb-0">PHP</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/backend/node-js.png') }}"
                                                                        alt="Node JS" class="">
                                                                    <p class="fs-12 mb-0">Node JS</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-2 mob-t  mb-4">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/backend/python.png') }}"
                                                                        alt="Python" class="">
                                                                    <p class="fs-12 mb-0">Python</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-2 mob-t  mb-4">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/backend/Nest.png') }}"
                                                                        alt="Nest JS" class="">
                                                                    <p class="fs-12 mb-0">Nest JS</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-2 mob-t  mb-4">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/backend/Django.png') }}"
                                                                        alt="Django" class="">
                                                                    <p class="fs-12 mb-0">Django</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-2 mob-t  mb-4">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/backend/NET.png') }}"
                                                                        alt=".NET" class="">
                                                                    <p class="fs-12 mb-0">.NET</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-2 mob-t  mb-4">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/backend/Ruby.png') }}"
                                                                        alt="Ruby" class="">
                                                                    <p class="fs-12 mb-0">Ruby</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-2 mob-t  mb-4">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/backend/Laravel.png') }}"
                                                                        alt="Laravel" class="">
                                                                    <p class="fs-12 mb-0">Laravel</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab content -->


                            <!-- start tab content -->
                            <div class="tab-pane fade in" id="tab_four5">
                                <div class="row align-items-center">

                                    <div class="col-xl-9 col-md-9 offset-xl-1 text-center text-md-start">
                                        {{-- <span
                                            class="fs-18 fw-500 text-base-color mb-25px d-flex align-items-center justify-content-center justify-content-md-start"></span> --}}

                                        <div class="skills sklpad">
                                            <div class="skills-container">
                                                <div class="skills-flex-container cms">
                                                    <div class="row  wow fadeInRight animated" data-wow-delay="1.3s"
                                                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;">
                                                        <div class="col-md-3 col-sm-2  mob-t mb-4">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/backend/aws.png') }}"
                                                                        alt="AWS" class="">
                                                                    <p class="fs-12 mb-0">AWS</p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/Kubernetes.png') }}"
                                                                        alt="Kubernetes" class="">
                                                                    <p class="fs-12 mb-0">Kubernetes</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/Docker.png') }}"
                                                                        alt="Docker" class="">
                                                                    <p class="fs-12 mb-0">Docker</p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/DigitalOcean.png') }}"
                                                                        alt="DigitalOcean" class="">
                                                                    <p class="fs-12 mb-0">DigitalOcean</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/Jenkins.png') }}"
                                                                        alt="Jenkins" class="">
                                                                    <p class="fs-12 mb-0">Jenkins</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/Azure.png') }}"
                                                                        alt="Azure" class="">
                                                                    <p class="fs-12 mb-0">Azure</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/HashiCorp.png') }}"
                                                                        alt="HashiCorp" class="">
                                                                    <p class="fs-12 mb-0">HashiCorp</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/Grafana.png') }}"
                                                                        alt="Grafana" class="">
                                                                    <p class="fs-12 mb-0">Grafana</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab content -->

                            <!-- start tab content -->
                            <div class="tab-pane fade in" id="tab_four4">
                                <div class="row align-items-center">

                                    <div class="col-xl-9 col-md-9 offset-xl-1 text-center text-md-start">
                                        {{-- <span
                                            class="fs-18 fw-500 text-base-color mb-25px d-flex align-items-center justify-content-center justify-content-md-start"></span> --}}

                                        <div class="skills sklpad">
                                            <div class="skills-container">
                                                <div class="skills-flex-container cms">
                                                    <div class="row  wow fadeInRight animated" data-wow-delay="1.3s"
                                                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;">
                                                        <div class="col-md-3 col-sm-2  mob-t mb-4">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/database/wordpress.png') }}"
                                                                        alt="Word Press" class="">
                                                                    <p class="fs-12 mb-0">Word Press</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/database/joomla.png') }}"
                                                                        alt="Joomla" class="">
                                                                    <p class="fs-12 mb-0">Joomla</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/database/Drupal.png') }}"
                                                                        alt="Drupal" class="">
                                                                    <p class="fs-12 mb-0">Drupal</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/database/Ghost.png') }}"
                                                                        alt="Website Design Layout" class="">
                                                                    <p class="fs-12 mb-0">Ghost</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/database/TYPO3.png') }}"
                                                                        alt="TYPO3" class="">
                                                                    <p class="fs-12 mb-0">TYPO3</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/database/shopify.png') }}"
                                                                        alt="Shopify">
                                                                    <p class="fs-12 mb-0">Shopify</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/database/Sanity.png') }}"
                                                                        alt="Sanity" class="">
                                                                    <p class="fs-12 mb-0">Sanity</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-2 mob-t">
                                                            <div class="skills-box">
                                                                <div class="skills-image">
                                                                    <img src="{{ asset('images/trionova/Technologies/database/Magneto.png') }}"
                                                                        alt="Magneto">
                                                                    <p class="fs-12 mb-0">Magneto</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>


        {{-- scribe start --}}

        <section class="pt-50 pb-50 bg-very-light-gray">
            <div class="container">
                <div class="row">
                    <div class=" col-lg-12 col-md-12 text-center"
                        data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <!--<h3 class="text-dark-gray fw-700 ls-minus-2px pb-2">Transform Your Business with India’s Premier App-->
                        <!--    Development Partner!</h3>-->

                        <h3 class="text-dark-gray fw-700 ls-minus-2px pb-2">Our AI Products</h3>

                    </div>
                    <div class="box-googleplay android aos-init aos-animate">
                        <div class="row">
                            <div class="col-lg-7 col-sm-12">
                                <div class="g-store ">
                                    <h1>Billing Software AI-Powered Purchase Order & Invoice</h1>

                                    <p>
                                        Optimize your finances with Trionova AI-Powered Purchase Order & Invoice Billing
                                        Software, an intelligent automation platform that streamlines procurement,
                                        invoicing, and payment management. Powered by AI, it reduces manual work, eliminates
                                        billing errors, ensures GST compliance, and enables real-time reconciliation and
                                        smart analytics—helping businesses make faster, data-driven financial decisions
                                        while improving cash flow control.
                                    </p>


                                    <a
                                        class="btn btn-large btn-dark-gray btn-box-shadow btn-rounded mt-15px sm-mt-10px cta-btn">Connect
                                        With Our Experts<i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-12">
                                {{-- <img src="images/images/g-store-img.webp" class="app-store-img"> --}}

                                <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel"
                                    data-bs-interval="2500">

                                    <!-- Indicators -->

                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0"
                                            class="active"></button>
                                        <button type="button" data-bs-target="#mainCarousel"
                                            data-bs-slide-to="1"></button>
                                        <button type="button" data-bs-target="#mainCarousel"
                                            data-bs-slide-to="2"></button>
                                    </div>

                                    <!-- Slides -->
                                    <div class="carousel-inner">

                                        <div class="carousel-item active">
                                            <a href="{{ url('products') }}">
                                                <img src="images/slides/gan-slide1.webp" class="d-block w-100"
                                                    alt="Slide 1">
                                            </a>
                                        </div>

                                        <div class="carousel-item">
                                            <a href="{{ url('products') }}">
                                                <img src="images/slides/gan-slide2.webp" class="d-block w-100"
                                                    alt="Slide 2">
                                            </a>
                                        </div>

                                        <div class="carousel-item">
                                            <a href="{{ url('products') }}">
                                                <img src="images/slides/gan-slide3.webp" class="d-block w-100"
                                                    alt="Slide 3">
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Controls -->
                                    {{-- <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button> --}}

                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="box-googleplay android aos-init aos-animate">
                        <div class="row">
                            <div class="col-lg-5 col-sm-12">
                                {{-- <img src="images/images/app-store-img.webp" class="app-store-img"> --}}

                                <div id="scribeCarousel" class="carousel slide" data-bs-ride="carousel"
                                    data-bs-interval="2500">

                                    <!-- Indicators -->

                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#scribeCarousel" data-bs-slide-to="0"
                                            class="active"></button>
                                        <button type="button" data-bs-target="#scribeCarousel"
                                            data-bs-slide-to="1"></button>
                                        <button type="button" data-bs-target="#scribeCarousel"
                                            data-bs-slide-to="2"></button>
                                    </div>

                                    <!-- Slides -->
                                    <div class="carousel-inner">

                                        <div class="carousel-item active">
                                            <a href="{{ url('products') }}">
                                                <img src="images/slides/scribe-slide1.webp" class="d-block w-100"
                                                    alt="Slide 1">
                                            </a>
                                        </div>

                                        <div class="carousel-item">
                                            <a href="{{ url('products') }}">
                                                <img src="images/slides/scribe-slide2.webp" class="d-block w-100"
                                                    alt="Slide 2">
                                            </a>
                                        </div>

                                        <div class="carousel-item">
                                            <a href="{{ url('products') }}">
                                                <img src="images/slides/scribe-slide3.webp" class="d-block w-100"
                                                    alt="Slide 3">
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Controls -->
                                    {{-- <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button> --}}

                                </div>

                            </div>
                            <div class="col-lg-7 col-sm-12">
                                <div class="g-store scribeCarousel-content">
                                    <h1>Trionova - Medical Scribe AI</h1>

                                    <p>
                                        Trionova Medical Scribe AI is a secure, AI-powered medical documentation platform
                                        that reduces administrative workload and allows doctors to focus on patient care,
                                        using ambient AI scribing and accurate speech-to-text to generate real-time,
                                        structured, editable, and compliant clinical notes without disrupting consultations.
                                        Designed for the all healthcare ecosystem with global security standards, it
                                        improves clinical efficiency, documentation accuracy, and overall patient
                                        experience.
                                    </p>

                                    <a
                                        class="btn btn-large btn-dark-gray btn-box-shadow btn-rounded mt-15px sm-mt-10px cta-btn">Connect
                                        With Our Experts<i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- scribe end --}}

        <!-- end section -->
        {{-- start serving --}}
        @include('common.industry')
        <!-- end Serving -->

        {{-- start testimonials --}}
        @include('common.testimonial')
        {{-- End Testionials --}}
        <!-- start section -->

        <!--faq section start-->
        <section class="faq-section pt-50px pb-50px bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-12">
                        <div class="section-heading mb-5 text-center">
                            {{-- <h5 class="h6 text-primary">FAQ</h5> --}}
                            <h2>Frequently Asked Questions</h2>
                            {{-- <p>Completely whiteboard top-line channels and fully tested value. Competently generate
                                testing procedures before visionary maintainable growth strategies for maintainable.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-12">
                        <div class="accordion faq-accordion" id="accordionExample">
                            <div class="accordion-item border border-2 active">
                                <h5 class="accordion-header" id="faq-1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-1" aria-expanded="true">
                                        1. What AI solutions does Trionova Technology offer for businesses?
                                    </button>
                                </h5>
                                <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="faq-1"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Trionova Technology provides advanced AI services including machine learning,
                                        natural language processing, predictive analytics, and intelligent automation. These
                                        solutions help businesses improve efficiency, customer experience, and data-driven
                                        decision-making.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border border-2">
                                <h5 class="accordion-header" id="faq-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-2" aria-expanded="false">
                                        2. Why choose Trionova for mobile app development?
                                    </button>
                                </h5>
                                <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Trionova specializes in creating high-performance mobile applications using
                                        technologies like Flutter, React Native, and native iOS/Android. We focus on
                                        user-friendly design, scalability, and seamless cross-platform functionality.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border border-2">
                                <h5 class="accordion-header" id="faq-3">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false">
                                        3. How do Trionova’s cloud services support digital transformation?
                                    </button>
                                </h5>
                                <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        We offer cloud migration, DevOps automation, and cloud-native app development on
                                        platforms like AWS, Azure, and Google Cloud. Our cloud solutions enhance security,
                                        scalability, and operational efficiency for businesses.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item border border-2">
                                <h5 class="accordion-header" id="faq-4">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false">
                                        4. What industries does Trionova serve with web development solutions?
                                    </button>
                                </h5>
                                <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Trionova delivers tailored web development services to industries such as
                                        healthcare, education, fintech, e-commerce, and logistics. We build secure, fast,
                                        and responsive websites using modern tech stacks like Angular, React, and Node.js.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item border border-2">
                                <h5 class="accordion-header" id="faq-5">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false">
                                        5. What is Trionova’s approach to product engineering?
                                    </button>
                                </h5>
                                <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-5"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Our product engineering process includes ideation, prototyping, MVP development,
                                        testing, and deployment. We use agile methodologies to ensure your product is
                                        scalable, reliable, and aligned with market needs
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--faq section end-->

        <!-- end section -->

        {{-- <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script> --}}


        <!-- start subscription popup -->
        <!-- <div id="subscribe-popup" class="mfp-hide subscribe-popup">
                                                                                        <div class="container">
                                                                                            <div class="row justify-content-center">
                                                                                                <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-8 p-60px pt-40px pb-40px xs-p-30px xs-pt-30px xs-pb-30px position-relative box-shadow-quadruple-large bg-white border-radius-10px">
                                                                                                    <div class="row">
                                                                                                        <div class="col-12 text-center mb-20px">
                                                                                                            <img src="https://via.placeholder.com/160x160" alt="Profile photo placeholder"/>
                                                                                                        </div>
                                                                                                        <div class="col-12 newsletter-popup position-relative">
                                                                                                            <h5 class="d-inline-block fw-500 text-dark-gray ls-minus-1px mb-20px">Grow your business with <span class="fw-700">crafto agency.</span></h5>
                                                                                                            <div class="col icon-with-text-style-08 mb-5px" style="">
                                                                                                                <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
                                                                                                                    <div class="feature-box-icon me-15px">
                                                                                                                        <i class="bi bi-wallet2 icon-small text-base-color"></i>
                                                                                                                    </div>
                                                                                                                    <div class="feature-box-content">
                                                                                                                        <span class="text-dark-gray">Increase your conversion rate.</span>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col icon-with-text-style-08 mb-5px" style="">
                                                                                                                    <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
                                                                                                                    <div class="feature-box-icon me-15px">
                                                                                                                        <i class="bi bi-calendar-check icon-small text-base-color"></i>
                                                                                                                    </div>
                                                                                                                    <div class="feature-box-content">
                                                                                                                        <span class="text-dark-gray">Save your time and effort spent.</span>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col icon-with-text-style-08 md-mb-15px" style="">
                                                                                                                <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
                                                                                                                    <div class="feature-box-icon me-15px">
                                                                                                                        <i class="bi bi-clock icon-small text-base-color"></i>
                                                                                                                    </div>
                                                                                                                    <div class="feature-box-content">
                                                                                                                        <span class="text-dark-gray">Make your business stand out.</span>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <a href="demo-it-business-contact.html" class="btn btn-extra-large btn-gradient-purple-pink btn-rounded btn-box-shadow d-block mt-30px">Let's talk now <i class="fa-solid fa-arrow-right"></i></a>
                                                                                                            <button title="Close (Esc)" type="button" class="mfp-close mfp-close-btn text-dark-gray mx-auto mt-10px">No thanks</button>
                                                                                                        </div>
                                                                                                        <button title="Close (Esc)" type="button" class="mfp-close text-dark-gray"></button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div> -->
        <!-- end subscription popup -->
        <!-- start footer -->
        <!-- end footer -->
        <!-- start scroll progress -->
        <div class="scroll-progress d-none d-xxl-block">
            <a href="#" class="scroll-top" aria-label="scroll">
                <span class="scroll-text">Scroll</span><span class="scroll-line"><span
                        class="scroll-point"></span></span>
            </a>
        </div>

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
                                We specialize in building scalable, secure, and high-performance software solutions that
                                help businesses streamline operations and stay ahead of the competition. Whether you need a
                                custom web application, enterprise system, or mobile solution, our team is ready to deliver
                                excellence at every stage. Share your project requirements with us, and let’s create
                                something exceptional that drives measurable results.
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
                                                src="{{ asset('images/images/ride.webp') }}"></div>
                                    </div>
                                    <div class="sponsor">
                                        <div class="sponsor-card sponsor-platinum  "><img
                                                src="{{ asset('images/images/client2.jpg') }}"></div>
                                    </div>
                                    <div class="sponsor">
                                        <div class="sponsor-card sponsor-platinum  "><img
                                                src="{{ asset('images/images/client3.jpg') }}"></div>
                                    </div>
                                    <div class="sponsor">
                                        <div class="sponsor-card sponsor-platinum  "><img
                                                src="{{ asset('images/images/client4.jpg') }}"></div>
                                    </div>
                                    <div class="sponsor">
                                        <div class="sponsor-card sponsor-platinum  "><img
                                                src="{{ asset('images/images/client5.jpg') }}"></div>
                                    </div>
                                    <div class="sponsor">
                                        <div class="sponsor-card sponsor-platinum  "><img
                                                src="{{ asset('images/images/client6.jpg') }}"></div>
                                    </div>
                                    <div class="sponsor">
                                        <div class="sponsor-card sponsor-platinum  "><img
                                                src="{{ asset('images/images/client7.jpg') }}"></div>
                                    </div>
                                    <div class="sponsor">
                                        <div class="sponsor-card sponsor-platinum  "><img
                                                src="{{ asset('images/images/client8.jpg') }}"></div>
                                    </div>
                                    <div class="sponsor">
                                        <div class="sponsor-card sponsor-platinum  "><img
                                                src="{{ asset('images/images/client9.jpg') }}"></div>
                                    </div>
                                    <div class="sponsor">
                                        <div class="sponsor-card sponsor-platinum  "><img
                                                src="{{ asset('images/images/client10.jpg') }}"></div>
                                    </div>
                                    <div class="sponsor">
                                        <div class="sponsor-card sponsor-platinum  "><img
                                                src="{{ asset('images/images/client11.webp') }}"></div>
                                    </div>
                                    <div class="sponsor">
                                        <div class="sponsor-card sponsor-platinum  "><img
                                                src="{{ asset('images/images/client16.webp') }}"></div>
                                    </div>
                                    <div class="sponsor">
                                        <div class="sponsor-card sponsor-platinum  "><img
                                                src="{{ asset('images/images/client17.png') }}"></div>
                                    </div>
                                    <div class="sponsor">
                                        <div class="sponsor-card sponsor-platinum  "><img
                                                src="{{ asset('images/images/client18.png') }}"></div>
                                    </div>

                                    <!-- ===== SET 2 (DUPLICATE) ===== -->
                                    <div class="sponsor">
                                        <div class="sponsor-card sponsor-platinum"><img
                                                src="{{ asset('images/images/ride.webp') }}"></div>
                                    </div>
                                    <div class="sponsor">
                                        <div class="sponsor-card sponsor-platinum  "><img
                                                src="{{ asset('images/images/client2.jpg') }}"></div>
                                    </div>
                                    <div class="sponsor">
                                        <div class="sponsor-card sponsor-platinum  "><img
                                                src="{{ asset('images/images/client3.jpg') }}"></div>
                                    </div>
                                    <div class="sponsor">
                                        <div class="sponsor-card sponsor-platinum  "><img
                                                src="{{ asset('images/images/client4.jpg') }}"></div>
                                    </div>
                                    <div class="sponsor">
                                        <div class="sponsor-card sponsor-platinum  "><img
                                                src="{{ asset('images/images/client5.jpg') }}"></div>
                                    </div>
                                    <div class="sponsor">
                                        <div class="sponsor-card sponsor-platinum  "><img
                                                src="{{ asset('images/images/client6.jpg') }}"></div>
                                    </div>
                                    <div class="sponsor">
                                        <div class="sponsor-card sponsor-platinum  "><img
                                                src="{{ asset('images/images/client7.jpg') }}"></div>
                                    </div>
                                    <div class="sponsor">
                                        <div class="sponsor-card sponsor-platinum  "><img
                                                src="{{ asset('images/images/client8.jpg') }}"></div>
                                    </div>
                                    <div class="sponsor">
                                        <div class="sponsor-card sponsor-platinum  "><img
                                                src="{{ asset('images/images/client9.jpg') }}"></div>
                                    </div>
                                    <div class="sponsor">
                                        <div class="sponsor-card sponsor-platinum  "><img
                                                src="{{ asset('images/images/client10.jpg') }}"></div>
                                    </div>
                                    <div class="sponsor">
                                        <div class="sponsor-card sponsor-platinum  "><img
                                                src="{{ asset('images/images/client11.webp') }}"></div>
                                    </div>
                                    <div class="sponsor">
                                        <div class="sponsor-card sponsor-platinum  "><img
                                                src="{{ asset('images/images/client16.webp') }}"></div>
                                    </div>
                                    <div class="sponsor">
                                        <div class="sponsor-card sponsor-platinum  "><img
                                                src="{{ asset('images/images/client17.png') }}"></div>
                                    </div>
                                    <div class="sponsor">
                                        <div class="sponsor-card sponsor-platinum  "><img
                                                src="{{ asset('images/images/client18.png') }}"></div>
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


        {{-- <!--<script src="{{ asset('js/bootstrap.min.js') }}"></script>--> --}}
        <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js'></script>


        <!--  <a href="https://wa.me/+919442132694" target="_blank" class="float2 float-only" rel="noopener noreferrer"><img src="images/images/whatsapp-3.webp" fetchpriority="high" loading="eager" alt="whatsapp"></a> -->
        <!-- end scroll progress -->
        <!-- javascript libraries -->
        <!-- /  <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js'></script><script src="./script.js"></script> -->
        <script>
            /*
                                                                                                                                                        inspiration
                                                                                                                                                        https://dribbble.com/shots/4684682-Aquatic-Animals
                                                                                                                                                        */
            var swiper = new Swiper(".service-swiper", {
                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: 1, // default for small screens
                loop: true,
                autoplay: {
                    delay: 3000, // change slide every 3 seconds
                    disableOnInteraction: false, // continue autoplay after manual swipe
                },
                coverflowEffect: {
                    rotate: 0,
                    stretch: 0,
                    depth: 100,
                    modifier: 3,
                    slideShadows: true
                },
                keyboard: {
                    enabled: true
                },
                mousewheel: {
                    thresholdDelta: 70
                },
                pagination: {
                    el: ".pagination-service-swiper",
                    clickable: true
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1
                    },
                    640: {
                        slidesPerView: 2
                    },
                    1024: {
                        slidesPerView: 3
                    },
                    1400: {
                        slidesPerView: 4
                    },
                    1600: {
                        slidesPerView: 5
                    }
                }
            });

            console.log(window.innerWidth); // Logs the actual CSS pixel width
        </script>





    </body>
@endsection
