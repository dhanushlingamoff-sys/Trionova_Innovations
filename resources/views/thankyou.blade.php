@extends('layouts.app')
@section('title', 'Top Software Development & IT Consulting in Toronto | Trionova Technology')
@section('meta')
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5JZ9G2GT');</script>
<!-- End Google Tag Manager -->


        {{-- <title>Trionova Technology | Top Technology Consulting Company for Innovative Business Solutions</title> --}}
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="description"
            content="Trionova Technology empowers businesses with AI, Mobile App Development, Cloud Services, Data Science, Web Development and product engineering solutions.">
        <!--<link rel="canonical" href="https://www.trionova.in" />-->
        <meta property="og:title"
            content="Trionova Technology | Top Technology Consulting Company for Innovative Business Solutions" />
        <meta property="og:description"
            content="Trionova Technology empowers businesses with AI, Mobile App Development, Cloud Services, Data Science, Web Development and product engineering solutions." />
        <meta name="google-site-verification" content="g4QLPfsh6CFOQSjBhsdbUlC_of7da9t4CHLdCWdCSfA" />
        <!--<meta property="og:url" content="https://www.trionova.in" />-->
        @push('head')
            <meta property="og:image" content="https://www.trionova.in/images/logo.png" />
        @endpush
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="600" />
        <meta property="og:image:type" content="image/jpg" />
        
        <link rel="canonical" href="{{ url()->current() }}" />
        <meta property="og:url" content="{{ url()->current() }}" />
        
        <!-- favicon icon -->


@endsection
@section('content')


    <body>
        <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5JZ9G2GT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

        <div class="container py-5" style="padding-top: 10% !important">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h1 class="display-4 mb-4">Thank You!</h1>
                    <p class="lead mb-3">
                        We appreciate your interest in Trionova Technology.<br>
                        Your message has been received and our team will get back to you soon.
                    </p>
                    <p>
                        If you have any urgent queries, feel free to email us at <a href="mailto:info@trionova.in">info@trionova.in</a>.
                    </p>
                    <a href="{{ url('/') }}" class="btn btn-primary mt-4">Return to Home</a>
                </div>
            </div>
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
    </body>


@endsection