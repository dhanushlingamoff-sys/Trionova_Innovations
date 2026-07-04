@extends('layouts.app')

@section('title', 'Top Mobile App Development Company in Chennai | Trionova')



@section('meta')
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5JZ9G2GT');</script>
<!-- End Google Tag Manager -->
    {{-- Google tag (gtag.js) — disabled: GA4 is already configured inside GTM (GTM-5JZ9G2GT); loading both causes double-fired pageview events. Also async+defer together is redundant — async takes precedence. --}}
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-244KHB99SM"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-244KHB99SM');
    </script> --}}

    {{-- <title>Top Mobile App Development Company - Trionova Technology</title> --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Trionova">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description"
        content="Trionova Technology, a leading mobile app development company in Chennai, delivers top-quality Android, iOS, and Flutter solutions globally.">
    <!--<link rel="canonical" href="https://www.trionova.in/mobile-app-company-in-chennai" />-->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Top Mobile App Development Company in Chennai | Trionova" />
    <meta property="og:description"
        content="Trionova is a leading mobile app development company in Chennai, delivering high-quality Android and iOS applications with custom features, stunning UI/UX design, seamless API integration, and reliable support." />
    <!--<meta property="og:url" content="https://www.trionova.in/mobile-app-company-in-chennai" />-->
    <meta property="og:locale" content="en_IN" />

    <meta name="keywords"
        content="mobile app development company in Chennai, Android app development Chennai, iOS app development Chennai, cross-platform mobile apps Chennai, custom mobile app solutions Chennai, best mobile app company Chennai" />
    <meta name="twitter:image" content="{{ asset('images/mobile-app/Mobile-App-Development-Company-in-chennai.webp') }}">
    <meta property="og:image" content="{{ asset('images/mobile-app/Mobile-App-Development-Company-in-chennai.webp') }}">
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="600" />
    <meta property="og:image:type" content="image/webp" />
    <!--<meta name="twitter:url" content="https://www.trionova.in/mobile-app-company-in-chennai">-->

    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <link rel="canonical" href="{{ url()->current() }}" />


    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="{{ asset('css/mobile.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/flutter-canada.css') }}" />


    {{-- <script type="application/ld+json">
{
 "@context": "https://schema.org",
 "@graph":[
  {
   "@type":"Service",
   "name":"Mobile App Development Company in Chennai",
   "provider":{
     "@type":"Organization",
     "name":"Trionova Technology"
   }
  },
  {
   "@type":"SoftwareApplication",
   "name":"Mobile Application Development",
   "applicationCategory":"BusinessApplication",
   "operatingSystem":"Android, iOS",
   "aggregateRating":{
     "@type":"AggregateRating",
     "ratingValue":"4.7",
     "reviewCount":"110"
   }
  }
 ]
}
</script> --}}

    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://trionova.in/#organization",
      "name": "Trionova Technology",
      "url": "https://trionova.in",
      "logo": "https://trionova.in/images/logo.png"
    },
    {
      "@type": "Service",
      "name": "Mobile App Development Company in Chennai",
      "description": "Trionova Technology provides Android and iOS mobile app development services for startups and businesses.",
      "provider": {
        "@id": "https://trionova.in/#organization"
      },
      "areaServed": [
  { "@type": "Country", "name": "India" },
  { "@type": "City", "name": "Chennai" }
],
      {"@type": "City", "name": "Chennai"},
      "serviceType": "Mobile Application Development",
      "offers": {
        "@type": "Offer",
        "priceCurrency": "INR",
        "price": "4999",
        "availability": "https://schema.org/InStock"
      }
    },
    {
      "@type": "SoftwareApplication",
      "name": "Mobile Application Development",
      "applicationCategory": "BusinessApplication",
      "operatingSystem": "Android, iOS",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.7",
        "reviewCount": "110"
      },
      "offers": {
        "@type": "Offer",
        "price": "4999",
        "priceCurrency": "INR"
      }
    }
  ]
}
</script>

    <script type="application/ld+json">
{
 "@context": "https://schema.org",
 "@type": "FAQPage",
 "mainEntity": [
  {
   "@type": "Question",
   "name": "What is Mobile App Development, and why is it important for businesses?",
   "acceptedAnswer": {
     "@type": "Answer",
     "text": "Mobile app development is the process of creating software applications that run on mobile devices, such as smartphones and tablets. It is crucial for businesses because mobile apps provide a direct channel to engage with customers, enhance user experiences, and boost brand visibility. A well-developed app can help streamline operations, drive sales, and increase customer loyalty."
   }
  },
  {
   "@type": "Question",
   "name": "Should I develop my app for Android, iOS, or both platforms?",
   "acceptedAnswer": {
     "@type": "Answer",
     "text": "The decision depends on your target audience and business goals. Android has a larger global user base, making it ideal for reaching a broad audience. iOS users tend to spend more on apps and services, making it a great platform for premium offerings. Developing for both platforms ensures maximum market reach, but you can also start with one based on your audience's preferences and expand later."
   }
  },
  {
   "@type": "Question",
   "name": "How long does it take to develop a mobile app?",
   "acceptedAnswer": {
     "@type": "Answer",
     "text": "The development timeline varies based on the app's complexity, features, and platforms. A basic app may take 2-3 months, while a feature-rich app could take 6 months or more. Both Android and iOS development involve stages such as planning, design, development, testing, and deployment. An agile development process helps ensure timely delivery and flexibility in making adjustments during the project."
   }
  },
  {
   "@type": "Question",
   "name": "What technologies do you use for Android and iOS app development?",
   "acceptedAnswer": {
     "@type": "Answer",
     "text": "For Android, we typically use Java or Kotlin for native app development, and for iOS, we utilize Swift or Objective-C. We also offer cross-platform development using frameworks like React Native and Flutter, which allows us to build apps for both Android and iOS with a single codebase, ensuring cost-effectiveness and faster delivery times."
   }
  },
  {
   "@type": "Question",
   "name": "How do you ensure the app is secure and protects user data?",
   "acceptedAnswer": {
     "@type": "Answer",
     "text": "Security is a top priority for us during mobile app development. We implement multiple layers of protection, including data encryption, secure APIs, and regular security audits. For both Android and iOS apps, we adhere to platform-specific guidelines and best practices, such as iOS's App Transport Security (ATS) and Android's Network Security Configuration. We also perform penetration testing to identify potential vulnerabilities before launch."
   }
  },
  {
   "@type": "Question",
   "name": "Will my app look and function the same on both Android and iOS devices?",
   "acceptedAnswer": {
     "@type": "Answer",
     "text": "While we aim to provide a consistent user experience across platforms, there are certain design and functional differences between Android and iOS due to platform-specific guidelines. Android follows Material Design principles, whereas iOS apps adhere to Apple's Human Interface Guidelines. Our developers ensure the app is optimized for both platforms, keeping in mind these unique characteristics while maintaining a seamless and intuitive experience for users."
   }
  },
  {
   "@type": "Question",
   "name": "How do you handle app updates and maintenance after launch?",
   "acceptedAnswer": {
     "@type": "Answer",
     "text": "After your app is launched, we offer post-launch support and maintenance services to ensure the app remains updated with new features, security patches, and compatibility improvements. Both Android and iOS apps require regular updates to stay compatible with the latest OS versions, devices, and market trends. We also provide ongoing monitoring and bug fixing to maintain smooth app performance."
   }
  },
  {
   "@type": "Question",
   "name": "What is the cost of developing a mobile app for Android and iOS?",
   "acceptedAnswer": {
     "@type": "Answer",
     "text": "The cost of mobile app development depends on several factors, including the complexity of the app, the number of features, the development platform (Android, iOS, or both), and whether the app requires backend integration. A simple app may cost anywhere from Rs 1,50,000 to Rs 5,00,000, while a more advanced app with complex functionalities could range higher. We provide customized quotes based on the specific requirements of your project."
   }
  },
  {
   "@type": "Question",
   "name": "How do you ensure my mobile app will be successful in app stores?",
   "acceptedAnswer": {
     "@type": "Answer",
     "text": "We follow industry best practices for App Store Optimization (ASO) to enhance your app's visibility and ranking on the Google Play Store and Apple App Store. This includes keyword research, a compelling app description, high-quality screenshots, and attention-grabbing icons. In addition, we perform thorough testing to ensure your app meets both platforms' quality standards and guidelines, improving the chances of approval and success."
   }
  },
  {
   "@type": "Question",
   "name": "Can you integrate third-party services and APIs into my app?",
   "acceptedAnswer": {
     "@type": "Answer",
     "text": "Yes, we can integrate a wide range of third-party services and APIs to enhance the functionality of your mobile app. This includes payment gateways, social media platforms, analytics tools, location services, cloud storage, and more. Whether your app is on Android or iOS, we ensure seamless integration that aligns with your business needs and provides a smooth user experience."
   }
  }
 ]
}
</script>

    <script type="application/ld+json">
{
 "@context": "https://schema.org",
 "@type": "BreadcrumbList",
 "itemListElement": [{
  "@type": "ListItem",
  "position": 1,
  "name": "Home",
  "item": "{{ url('/') }}"
 },{
  "@type": "ListItem",
  "position": 2,
  "name": "Mobile App Development",
  "item": "{{ url()->current() }}"
 }]
}
</script>

@endsection

@section('content')

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5JZ9G2GT" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Banner Section Start -->
    <div class="wrapper-slider rs-banner">
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
                                <img src="{{ asset('images/mobile-app/hero.webp') }}" alt="Mobile App Development Banner">
                                <div class="mobile-bg-black"></div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="parent-text app-chennai">
                                <div class="info-text">

                                    <h1 class="title wow fadeinup">
                                        {{-- <span class="base-blue clr-one ml2">Mobile App Development Company in Chennai</span> --}}
                                        Mobile App Development Company in Chennai | iOS & Android Apps
                                    </h1>
                                    <div class="desc wow fadeinup text-white">
                                        Looking for mobile app development services in Chennai? We turn your app idea
                                        into a product your customers love, with transparent pricing and on-time
                                        delivery.
                                    </div>

                                    <a class=" title-btn wow mt-3 fadeinup cta-btn" href="javascript:void(0);">
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
    </div>

    <!-- About Section Start -->
    <div class="rs-about pt-50px pb-50px md-pt-80 md-pb-80 sm-40px bg-very-light-gray">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 md-mb-3">
                    <div class="rs-animation-shape">
                        <div class="images">
                            <img src="{{ asset('images/mobile-app/mob-section1.jpg') }}"
                                alt="Mobile app development services" loading="lazy"
                                style="
    height: 400px;
    width: 100%;
    object-fit: cover;
    border-radius: 10px;
">
                        </div>
                        <div class="middle-image2">
                            {{-- <img class="dance3" src="{{asset('images/ui-ux-design/effect-1.png')}}" alt="" loading="lazy">  --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl-20 md-pl-7">
                    <div class="contact-wrap">
                        <div class="sec-title mb-3">
                            {{-- <span
                                    class="bg-solitude-blue text-uppercase fs-13 ps-25px pe-25px alt-font fw-600 text-light-red lh-40 sm-lh-55 border-radius-30px d-inline-block mb-25px">Build
                                    Smarter. Launch Faster. </span>
                                <h2 class="title pb-3">
                                    Mobile App Development Company
                                </h2> --}}

                            <div class="row mb-3 align-items-end">
                                <div class="col-12 md-mb-20px appear anime-child anime-complete"
                                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                                    <div class="bg-base-color fw-600 lh-30 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-11 mb-25px d-inline-block"
                                        style="">Build Smarter. Launch Faster.</div>
                                    <h3 class="fw-700 text-dark-gray ls-minus-1px mb-0 w-90 md-w-100" style="">
                                        Mobile App Development Company</h3>
                                </div>
                            </div>

                            <!--<div class="desc pb-3">-->
                            <!--    We are a leading mobile app development company in Chennai, India, equipped with years-->
                            <!--    of front-end and back-end development expertise. </div>-->
                            <!--<div class="desc pb-3">-->
                            <!--    Our full-stack development services are designed to improve your web app's functionality-->
                            <!--    and scalability. By leveraging our technical knowledge, you can digitally transform your-->
                            <!--    business and reach new heights in the competitive marketplace.-->
                            <!--</div>-->

                            <div class="desc pb-3">
                                Trionova is a mobile app development company in Chennai specializing in native iOS,
                                Android, and cross-platform mobile apps. Since 2018, we've delivered 50+ mobile app
                                development projects for businesses across healthcare, retail, logistics, and finance.
                            </div>
                            <div class="desc pb-3">
                                Our mobile app development services include UI/UX design, full-stack development, App
                                Store deployment, and ongoing maintenance.
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="shape-image">
                {{-- <img class="top dance" src="assets/images/about/dotted-3.png" alt="" loading="lazy"> --}}
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- About Section Start -->
    <!--<div class="rs-about pt-50px pb-50px md-pt-80 md-pb-80 sm-40px bg-white">-->
    <!--    <div class="container">-->
    <!--        <div class="row align-items-center">-->

    <!--            <div class="col-lg-6 pl-20 md-pl-7">-->
    <!--                <div class="contact-wrap">-->
    <!--                    <div class="sec-title mb-3">-->
    <!--                        <span data-aos="fade-right"-->
    <!--                            class="bg-solitude-blue text-uppercase fs-13 ps-25px pe-25px alt-font fw-600 text-light-red lh-40 sm-lh-55 border-radius-30px d-inline-block mb-25px">Accelerate-->
    <!--                            Growth: </span>-->
    <!--                        <h2 class="title pb-3">-->
    <!--                            Mobile App Development Solutions-->
    <!--                        </h2>-->
    <!--                        <div class="desc pb-3">-->
    <!--                            In today's digital age, mobile applications have surged in popularity, making them an-->
    <!--                            essential tool for startups and growing businesses. With years of expertise in crafting-->
    <!--                            fully customized, secure, and high-functioning mobile apps, our development services-->
    <!--                            ensure rapid scalability and growth for enterprises. </div>-->
    <!--                        <div class="desc pb-3">-->
    <!--                            Our extensive mobile app development portfolio reflects our proficiency across a wide-->
    <!--                            range of platforms, particularly Android. Our refined process has allowed us to delve-->
    <!--                            deeply into the Android ecosystem, offering exceptional solutions for diverse client-->
    <!--                            needs—from smartphones to wearable technology.-->
    <!--                        </div>-->
    <!--                        <div class="desc pb-3">-->
    <!--                            Leveraging cutting-edge tools for both Android and iOS development, we deliver-->
    <!--                            intuitive, user-friendly applications. The key to creating apps that exceed millions of-->
    <!--                            downloads on Google Play and the App Store lies with our highly skilled developers,-->
    <!--                            whose secret recipe for success consistently brings remarkable results.-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-6 md-mb-3">-->
    <!--                <div class="rs-animation-shape">-->
    <!--                    <div class="images">-->
    <!--                        <img src="{{ asset('images/mobile-app/Accelerate-Growth.webp') }}" alt="" loading="lazy">-->
    <!--                    </div>-->
    <!--                    <div class="middle-image2">-->
    <!--                        {{-- <img class="dance3" src="{{asset('images/ui-ux-design/effect-1.png')}}" alt="" loading="lazy">  --}}-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="shape-image">-->
    <!--            {{-- <img class="top dance" src="assets/images/about/dotted-3.png" alt="" loading="lazy"> --}}-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- About Section End -->



    <!-- start section -->
    <section class="position-relative pt-50px pb-50px bg-very-light-gray">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 position-relative md-mb-50px text-center text-md-center"
                    data-anime='{ "opacity": [0,1], "duration": 1200, "delay":0, "staggervalue": 150, "easing": "easeOutQuad" }'>

                    <div class="rs-animation-shape">
                        <div class="images border-radius-10px">
                            <img src="{{ asset('images/mobile-app/Untitled design.webp') }}"
                                alt="Mobile app development illustration" loading="lazy" style=" border-radius: 10px; ">
                        </div>
                        <div class="middle-image2">
                            {{-- <img class="dance3" src="{{asset('images/ui-ux-design/effect-1.png')}}" alt="" loading="lazy">  --}}
                        </div>
                    </div>
                </div>

                <div class="col-xxl-5 offset-xxl-1 col-lg-6 text-center text-md-start"
                    data-anime='{ "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>

                    {{-- <span 
                            class="bg-solitude-blue text-uppercase fs-13 ps-25px pe-25px alt-font fw-600 text-light-red lh-40 sm-lh-55 border-radius-30px d-inline-block mb-25px">A
                            Leading and Cost-Efficient </span>
                        <h3 class="text-dark-gray fw-700 ls-minus-1px w-90 mb-40px md-mb-30px lg-w-100 alt-font"> Mobile
                            App Development Powerhouse</h3> --}}

                    <div class="row mb-3 align-items-end">
                        <div class="col-12 md-mb-20px appear anime-child anime-complete"
                            data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; ">
                            <div class="bg-base-color fw-600 lh-30 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-11 mb-25px d-inline-block"
                                style="">
                                A Leading and Cost-Efficient
                            </div>
                            <h3 class="fw-700 text-dark-gray ls-minus-1px mb-0 w-90 md-w-100" style="">Mobile
                                App Development Powerhouse
                            </h3>
                        </div>
                    </div>


                    <div class="accordion accordion-style-06 text-start" id="accordion-style-07">
                        <!-- start accordion item -->
                        <div class="accordion-item active-accordion">
                            <div class="accordion-header" z>
                                <a href="javascript:void(0)" data-bs-toggle="collapse"
                                    data-bs-target="#accordion-style-07-01" aria-expanded="true"
                                    data-bs-parent="#accordion-style-07">
                                    <div
                                        class="accordion-title fs-18 position-relative pe-0 alt-font text-dark-gray fw-600 mb-0">
                                        Our Mission</div>
                                </a>
                            </div>
                            <div id="accordion-style-07-01" class="accordion-collapse collapse show"
                                data-bs-parent="#accordion-style-07">
                                <div class="accordion-body last-paragraph-no-margin">
                                    <!--<p>We strive to create digital solutions that unite people, bridging gaps and-->
                                    <!--    fostering stronger connections through innovative technology.</p>-->

                                    <p>Create mobile apps that businesses rely on daily. From internal tools that save
                                        your team hours each week to customer-facing apps that drive revenue, we build
                                        software that matters.</p>

                                    <i class="line-icon-Car-Wheel icon-extra-double-large opacity-2"></i>
                                </div>
                            </div>
                        </div>
                        <!-- end accordion item -->
                        <!-- start accordion item -->
                        <div class="accordion-item active-accordion">
                            <div class="accordion-header">
                                <a href="javascript:void(0)" data-bs-toggle="collapse"
                                    data-bs-target="#accordion-style-07-02" aria-expanded="false"
                                    data-bs-parent="#accordion-style-07">
                                    <!--<div-->
                                    <!--    class="accordion-title fs-18 position-relative pe-0 alt-font text-dark-gray fw-600 mb-0">-->
                                    <!--    Our Elite Experts</div>-->

                                    <div
                                        class="accordion-title fs-18 position-relative pe-0 alt-font text-dark-gray fw-600 mb-0">
                                        Our Vision</div>
                                </a>
                            </div>
                            <div id="accordion-style-07-02" class="accordion-collapse collapse"
                                data-bs-parent="#accordion-style-07">
                                <div class="accordion-body last-paragraph-no-margin">
                                    <!--<p>At Trionova Technology, our team of tech virtuosos excels in developing products-->
                                    <!--    that not only leverage cutting-edge technology but are also built with unmatched-->
                                    <!--    proficiency, robustness, and security.</p>-->

                                    <p>Build mobile apps that help businesses grow. We focus on quality, security, and
                                        delivering what you actually need & not what sounds impressive in a proposal.
                                    </p>

                                    <i class="line-icon-Sand-watch icon-extra-double-large opacity-2"></i>
                                </div>
                            </div>
                        </div>
                        <!-- end accordion item -->
                        <!-- start accordion item -->
                        <div class="accordion-item active-accordion">
                            <div class="accordion-header">
                                <a href="javascript:void(0)" data-bs-toggle="collapse"
                                    data-bs-target="#accordion-style-07-03" aria-expanded="false"
                                    data-bs-parent="#accordion-style-07">
                                    <!--<div-->
                                    <!--    class="accordion-title fs-18 position-relative pe-0 alt-font text-dark-gray fw-600 mb-0">-->
                                    <!--    Our Vision</div>-->

                                    <div
                                        class="accordion-title fs-18 position-relative pe-0 alt-font text-dark-gray fw-600 mb-0">
                                        How We Work</div>
                                </a>
                            </div>
                            <div id="accordion-style-07-03" class="accordion-collapse collapse"
                                data-bs-parent="#accordion-style-07">
                                <div class="accordion-body last-paragraph-no-margin">
                                    <!--<p>We aim to remain a customer-centric tech enterprise, committed to delivering-->
                                    <!--    secure, high-caliber solutions that are tailored to meet the dynamic needs of-->
                                    <!--    our clients.-->
                                    <!--</p>-->

                                    <p>Every project teaches us something new. We don't shy away from complex
                                        requirements. If your app needs custom features or unique integrations, we'll
                                        figure it out.
                                    </p>
                                    <i class="fas fa-eye icon-extra-double-large opacity-2"></i>
                                </div>
                            </div>
                        </div>
                        <!-- end accordion item -->

                        <!-- start accordion item -->
                        <div class="accordion-item active-accordion">
                            <div class="accordion-header">
                                <a href="javascript:void(0)" data-bs-toggle="collapse"
                                    data-bs-target="#accordion-style-07-04" aria-expanded="false"
                                    data-bs-parent="#accordion-style-07">
                                    <!--<div-->
                                    <!--    class="accordion-title fs-18 position-relative pe-0 alt-font text-dark-gray fw-600 mb-0">-->
                                    <!--    Embracing Challenges</div>-->

                                    <div
                                        class="accordion-title fs-18 position-relative pe-0 alt-font text-dark-gray fw-600 mb-0">
                                        Who Builds Your App</div>
                                </a>
                            </div>
                            <div id="accordion-style-07-04" class="accordion-collapse collapse"
                                data-bs-parent="#accordion-style-07">
                                <div class="accordion-body last-paragraph-no-margin">
                                    <!--<p>At Trionova Technology, our relentless drive for growth compels us to treat every-->
                                    <!--    new challenge as an opportunity for learning and innovation.-->
                                    <!--</p>-->

                                    <p>A team of developers with proven experience in React Native, Flutter, Node.js,
                                        and cloud infrastructure. We've launched apps that handle thousands of daily
                                        users and integrate with existing business systems.
                                    </p>

                                    <i class="line-icon-Gear-2 icon-extra-double-large opacity-2"></i>

                                </div>
                            </div>
                        </div>
                        <!-- end accordion item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->



    <!-- Cta section start -->
    <div class="rs-cta style1 bg7 pt-70px pb-70px">
        <div class="container">
            <div class="cta-wrap">
                <div class="row align-items-center mb-4" style="text-align: center">
                    <div class="col-12 md-pr-0 pr-148 md-pl-15 md-mb-30 md-center">
                        <div class="title-wrap">
                            <h3 class="epx-title">Mobile App Development Cost in Chennai</h3>
                            {{-- <div class="text-white">At our Mobile App Development Company in Chennai, we provide
                                custom
                                app development
                                services using the latest technologies like Flutter, React Native, Angular, and Node.js.
                                Below is a cost breakdown for different development requirements to help you understand
                                how pricing is estimated. </div> --}}

                            <div class="text-white">
                                Our mobile app development services use Flutter, React Native, and Node.js to build apps
                                faster and more cost-effectively. See transparent pricing for basic, mid-level, and
                                advanced apps below.
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-12">
                        <div class="button-wrapt md-center d-flex justify-content-center">
                            <a class=" title-btn cta-btn" href="javascript:void(0);">
                                <span class="text m-0">View Detailed Pricing</span>
                            </a>

                            <button class="arrow open-subscribe-popup" id="open-subscribe-popup"
                                aria-label="View pricing details">
                                <div class="arrow-box">
                                    <span class="arrow-elem">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </span>
                                    <span class="button-elem">
                                        <svg viewBox="0 0 46 40">
                                            <path
                                                d="M46 20.038c0-.7-.3-1.5-.8-2.1l-16-17c-1.1-1-3.2-1.4-4.4-.3-1.2 1.1-1.2 3.3 0 4.4l11.3 11.9H3c-1.7 0-3 1.3-3 3s1.3 3 3 3h33.1l-11.3 11.9c-1 1-1.2 3.3 0 4.4 1.2 1.1 3.3.8 4.4-.3l16-17c.5-.5.8-1.1.8-1.9z">
                                            </path>
                                        </svg>
                                    </span>
                                </div>
                            </button>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cta section end -->



    <section class="section-services bg-very-light-gray pt-50px pb-50px">
        <div class="container">
            {{-- <div class="row justify-content-center text-center">
                <div class="col-md-10 col-lg-8">
                    <div class="header-section">
                        <h2 class="title">Our Services</h2>
                    </div>
                </div>
            </div> --}}

            <div class="row align-items-end justify-content-center">
                <div class="col-xl-6 col-lg-7 md-mb-20px appear anime-child anime-complete text-center"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <div class="bg-base-color fw-600 lh-30 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-11 mb-25px d-inline-block"
                        style="">Our Services</div>
                    <h3 class="fw-700 text-dark-gray ls-minus-1px mb-0 md-w-100" style="">Mobile App Development
                        Service We Offer</h3>
                </div>
            </div>

            <div class="row">
                <!-- Single Service -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-service first-row">
                        <div class="content">
                            <span class="service-icon">
                                <img src="{{ asset('images/mobile-app/android-1.webp') }}" alt="Android app development"
                                    loading="lazy" class="main-img" width="65" height="65" srcset="">
                                <img src="{{ asset('images/mobile-app/android.webp') }}" alt="Android app development"
                                    class="hover-img" width="65" height="65" srcset="">
                            </span>
                            <h3 class="title">Android App Development</h3>
                            {{-- <p class="description">Trionova offers Android app development services with an emphasis on
                                intuitive user interfaces and visually captivating designs, ensuring that users are
                                drawn in from the first interaction.</p> --}}

                            <p class="description">We build native Android apps that work smoothly across devices. Our
                                Android app development services include Google Play Store submission, multi-device
                                testing, and performance optimization.</p>

                        </div>
                        <span class="circle-before"></span>
                    </div>
                </div>
                <!-- / End Single Service -->
                <!-- Single Service -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-service first-row">
                        <div class="content">
                            <span class="service-icon">
                                <img src="{{ asset('images/mobile-app/ios-1.webp') }}" alt="iOS app development"
                                    loading="lazy" class="main-img" width="65" height="65" srcset="">
                                <img src="{{ asset('images/mobile-app/ios.webp') }}" alt="iOS app development"
                                    loading="lazy" class="hover-img" width="65" height="65" srcset="">
                            </span>
                            <h3 class="title">iOS App Development</h3>
                            {{-- <p class="description">Providing top-tier iOS app development services in Chennai, Trionova
                                delivers comprehensive solutions for a wide range of iOS devices, from iPhones to
                                watchOS, creating seamless user experiences.</p> --}}

                            <p class="description">Our experts deliver best-in-class iOS app development services in
                                Chennai. We build apps with Apple's latest frameworks, optimize for performance, and
                                ensure smooth App Store approval.</p>

                        </div>
                        <span class="circle-before"></span>
                    </div>
                </div>
                <!-- / End Single Service -->
                <!-- Single Service -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-service first-row">
                        <div class="content">
                            <span class="service-icon">
                                <img src="{{ asset('images/mobile-app/flutter-1.webp') }}" alt="Flutter app development"
                                    loading="lazy" class="main-img" width="65" height="65" srcset="">
                                <img src="{{ asset('images/mobile-app/flutter.webp') }}" alt="Flutter app development"
                                    loading="lazy" class="hover-img" width="65" height="65" srcset="">
                            </span>
                            <h3 class="title">Flutter App Development</h3>
                            {{-- <p class="description">Trionova is at the forefront of Flutter app development in India,
                                utilizing this framework to create native-like apps that boast efficiency and
                                functionality across platforms.</p> --}}

                            <p class="description">Trionova leads Flutter app development in India, delivering
                                high-performance, cross-platform apps that provide native user experiences while
                                reducing development costs.</p>

                        </div>
                        <span class="circle-before"></span>
                    </div>
                </div>
                <!-- / End Single Service -->
                <!-- Single Service -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-service second-row">
                        <div class="content">
                            <span class="service-icon">
                                <img src="{{ asset('images/mobile-app/iot-1.webp') }}" alt="IoT app development"
                                    loading="lazy" class="main-img" width="65" height="65" srcset="">
                                <img src="{{ asset('images/mobile-app/iot.webp') }}" alt="IoT app development"
                                    loading="lazy" class="hover-img" width="65" height="65" srcset="">
                            </span>
                            <h3 class="title">IoT Solutions in Chennai, India</h3>
                            {{-- <p class="description">Specializing in IoT technology, Trionova Technology offers a broad
                                spectrum of products, from smart water management systems to asset tracking solutions,
                                serving industries such as agriculture, energy, and retail.</p> --}}

                            <p class="description">Our IoT solutions in Chennai, India, spans smart water management,
                                asset tracking, etc., for agriculture, energy, and retail sectors. We transform complex
                                industrial challenges into streamlined digital solutions.</p>

                        </div>
                        <span class="circle-before"></span>
                    </div>
                </div>
                <!-- / End Single Service -->
                <!-- Single Service -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-service second-row">
                        <div class="content">
                            <span class="service-icon">
                                <img src="{{ asset('images/mobile-app/mobile-app-development-1.webp') }}"
                                    alt="Mobile app development service" loading="lazy" class="main-img" width="65"
                                    height="65" srcset="">
                                <img src="{{ asset('images/mobile-app/mobile-app-development.webp') }}"
                                    alt="Mobile app development service" loading="lazy" class="hover-img" width="65"
                                    height="65" srcset="">
                            </span>
                            <h3 class="title">Mobile App Development</h3>
                            {{-- <p class="description">Headquartered in Chennai, Trionova Technology excels in mobile app
                                development, transforming your vision into a digital product that simplifies business
                                operations while enhancing customer experiences.</p> --}}

                            <p class="description">Based in Chennai, Trionova transforms business ideas into powerful
                                mobile applications. Our development process focuses on operational efficiency and
                                exceptional user experiences.</p>

                        </div>
                        <span class="circle-before"></span>
                    </div>
                </div>
                <!-- / End Single Service -->
                <!-- Single Service -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-service second-row">
                        <div class="content">
                            <span class="service-icon">
                                <img src="{{ asset('images/mobile-app/react-1.webp') }}"
                                    alt="React Native app development" loading="lazy" class="main-img" width="65"
                                    height="65" srcset="">
                                <img src="{{ asset('images/mobile-app/react.webp') }}" alt="React Native app development"
                                    loading="lazy" class="hover-img" width="65" height="65" srcset="">
                            </span>
                            <h3 class="title">React Native App Development</h3>
                            {{-- <p class="description">At Trionova, we harness the potential of React Native to build
                                cross-platform apps with a native look and feel, delivering optimal performance for both
                                Android and iOS platforms.</p> --}}
                            <p class="description">We leverage React Native capabilities to build cross-platform apps
                                that deliver native performance on both Android and iOS, ensuring consistent user
                                experiences.</p>


                        </div>
                        <span class="circle-before"></span>
                    </div>
                </div>
                <!-- / End Single Service -->
                <!-- Single Service -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-service second-row">
                        <div class="content">
                            <span class="service-icon">
                                <img src="{{ asset('images/mobile-app/cross-platform-1.png') }}"
                                    alt="Cross-platform app development" loading="lazy" class="main-img" width="65"
                                    height="65" srcset="">
                                <img src="{{ asset('images/mobile-app/cross-platform.png') }}"
                                    alt="Cross-platform app development" loading="lazy" class="hover-img" width="65"
                                    height="65" srcset="">
                            </span>
                            <h3 class="title">Cross-Platform App Development</h3>
                            {{-- <p class="description">Specializing in IoT technology, Trionova Technology offers a broad
                                spectrum of products, from smart water management systems to asset tracking solutions,
                                serving industries such as agriculture, energy, and retail.</p> --}}

                            <p class="description">
                                Build your app once and deploy it across multiple platforms with ease. At Trionova
                                Technologies, we use Flutter and React Native to reduce development costs and time while
                                ensuring high performance, quality, and seamless user experiences on both iOS and
                                Android.
                            </p>

                        </div>
                        <span class="circle-before"></span>
                    </div>
                </div>
                <!-- / End Single Service -->
                <!-- Single Service -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-service second-row">
                        <div class="content">
                            <span class="service-icon">
                                <img src="{{ asset('images/mobile-app/ai-enabled-1.png') }}"
                                    alt="AI-enabled app development" loading="lazy" class="main-img" width="65"
                                    height="65" srcset="">
                                <img src="{{ asset('images/mobile-app/ai-enabled.png') }}"
                                    alt="AI-enabled app development" loading="lazy" class="hover-img" width="65"
                                    height="65" srcset="">
                            </span>
                            <h3 class="title">AI-Enabled App Development</h3>
                            {{-- <p class="description">Headquartered in Chennai, Trionova Technology excels in mobile app
                                development, transforming your vision into a digital product that simplifies business
                                operations while enhancing customer experiences.</p> --}}

                            <p class="description">
                                Enhance your mobile apps with AI-powered features like personalization, predictive
                                recommendations, and smart automation. Build intelligent, future-ready applications that
                                boost user engagement and drive business growth.
                            </p>

                        </div>
                        <span class="circle-before"></span>
                    </div>
                </div>
                <!-- / End Single Service -->
                <!-- Single Service -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-service second-row">
                        <div class="content">
                            <span class="service-icon">
                                <img src="{{ asset('images/mobile-app/app-modern-1.png') }}" alt="Modern app development"
                                    loading="lazy" class="main-img" width="65" height="65" srcset="">
                                <img src="{{ asset('images/mobile-app/app-modern.png') }}" alt="Modern app development"
                                    loading="lazy" class="hover-img" width="65" height="65" srcset="">
                            </span>
                            <h3 class="title">App Modernization & Integration</h3>
                            {{-- <p class="description">At Trionova, we harness the potential of React Native to build
                                cross-platform apps with a native look and feel, delivering optimal performance for both
                                Android and iOS platforms.</p> --}}

                            <p class="description">
                                Modernize legacy applications with upgraded technologies, improved architecture, and
                                better performance. Seamlessly integrate with CRMs, ERPs, APIs, and cloud platforms to
                                ensure smooth operations and efficient data flow.
                            </p>

                        </div>
                        <span class="circle-before"></span>
                    </div>
                </div>
                <!-- / End Single Service -->
            </div>
        </div>
    </section>


    <section class="pt-50 pb-50 bg-very-light-gray">
        <div class="container">
            <div class="row">
                <div class=" col-lg-12 col-md-12 text-center"
                    data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <!--<h3 class="text-dark-gray fw-700 ls-minus-2px pb-2">Transform Your Business with India’s Premier App-->
                    <!--    Development Partner!</h3>-->

                    <h3 class="text-dark-gray fw-700 ls-minus-2px pb-2">Leading App Development Company in Chennai for
                        Custom Business Solutions</h3>

                </div>
                <div class="box-googleplay android aos-init aos-animate">
                    <div class="row">
                        <div class="col-lg-7 col-sm-12">
                            <div class="g-store ">
                                <img src="{{ asset('images/images/g-store.webp') }}" alt="Google Play Store badge">
                                <h3>Android App Development</h3>
                                <!--<p>Captivate a wider audience across the most popular Android devices with Weft's-->
                                <!--    comprehensive Android app solutions. From development to seamless integration,-->
                                <!--    implementation, and ongoing support, we provide end-to-end services tailored to your-->
                                <!--    needs.</p>-->

                                <p>Reach millions of users across Android devices with secure, scalable, and
                                    performance-driven Android applications. At Trionova, we design and develop custom
                                    Android apps tailored to your business goals. Whether you're a startup or an
                                    established enterprise, we build apps that are reliable, user-friendly, and ready to
                                    scale.</p>

                                <!--<a href="#"-->
                                <!--    class="btn btn-large btn-dark-gray btn-box-shadow btn-rounded mt-15px sm-mt-10px">Connect-->
                                <!--    with our experts today <i class="fa-solid fa-arrow-right"></i></a>-->

                                <a href="#"
                                    class="btn btn-large btn-dark-gray btn-box-shadow btn-rounded mt-15px sm-mt-10px">Connect
                                    With Our Experts<i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-12">
                            <img src="{{ asset('images/images/g-store-img.webp') }}" class="app-store-img"
                                alt="Android app available on Google Play">
                        </div>
                    </div>
                </div>
                <div class="box-googleplay android aos-init aos-animate">
                    <div class="row">
                        <div class="col-lg-5 col-sm-12">
                            <img src="{{ asset('images/images/app-store-img.webp') }}" class="app-store-img"
                                alt="iOS app available on the App Store">
                        </div>
                        <div class="col-lg-7 col-sm-12">
                            <div class="g-store">
                                <img src="{{ asset('images/images/ios-store.webp') }}" alt="Apple App Store badge">
                                <h3>iOS App Development</h3>
                                <!--<p>Empower your business to surpass objectives through cutting-edge iOS app development.-->
                                <!--    Leverage market-ready solutions, digital transformation tools, bespoke design, and-->
                                <!--    advanced growth services to stay ahead in today’s competitive landscape.</p>-->

                                <p>We develop custom iOS apps for iPhone and iPad that combine intuitive design with
                                    powerful functionality. From concept and UI/UX design to development, App Store
                                    deployment, and post-launch support, we handle the complete development lifecycle.
                                </p>

                                <!--<a href="#"-->
                                <!--    class="btn btn-large btn-dark-gray btn-box-shadow btn-rounded mt-15px sm-mt-10px">Talk-->
                                <!--    to our specialists now <i class="fa-solid fa-arrow-right"></i></a>-->

                                <a href="#"
                                    class="btn btn-large btn-dark-gray btn-box-shadow btn-rounded mt-15px sm-mt-10px">Talk
                                    to Our Experts<i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Slider Section Start -->
    <div class="rs-slider gray-bg2 style3 pt-50px pb-50px md-pt-40px md-pb-40px">
        <div class="container">

            <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true"
                data-hoverpause="false" data-autoplay-timeout="3000" data-smart-speed="800" data-dots="false"
                data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
                data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1"
                data-ipad-device-nav="true" data-ipad-device-dots="false" data-ipad-device2="1"
                data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1"
                data-md-device-nav="true" data-md-device-dots="false">
                <div class="row align-items-center">
                    <div class="col-lg-5 md-mb-2">
                        <div class="image-part">
                            <img src="{{ asset('images/mobile-app-chennai/case-study/Abhi-Hospitals.webp') }}"
                                alt="Abhi Hospitals case study">
                        </div>
                    </div>
                    <div class="col-lg-7 pl-50 md-pl-15">
                        <div class="slider-content">
                            <div class="sec-title5 mb-2">
                                <h2 class="title title2 pb-2">Abhi Hospitals</h2>
                                <img src="{{ asset('images/mobile-app-chennai/clients-2/abi.webp') }}"
                                    alt="Client project logo" class="case-study-logo">
                                <p><i>Simplifying Healthcare Access for Patients</i></p>
                                <div class="pt-2 pb-2 mt-1 d-flex">
                                    <button class="button-12 mr-20px" role="button">Mobile App Development</button>
                                    <button class="button-12" role="button">UIUX Design</button>
                                </div>
                                <h3>Overview</h3>
                                <p class="desc2">The Abhi Hospital app is designed to deliver a seamless digital
                                    healthcare experience, connecting patients with hospital services at their
                                    fingertips.
                                    Built with a focus on <strong>convenience, accuracy, and security</strong> , the app
                                    caters to appointment scheduling, medical records access, and pharmacy billing —
                                    ensuring both patients and hospital staff benefit from an efficient system. </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-5 md-mb-2">
                        <div class="image-part">
                            <img src="{{ asset('images/mobile-app-chennai/case-study/A-Team.webp') }}"
                                alt="A-Team case study">
                        </div>
                    </div>
                    <div class="col-lg-7 pl-50 md-pl-15">
                        <div class="slider-content">
                            <div class="sec-title5 mb-2">
                                <h2 class="title title2 pb-2">ATeam – Real-Time Social Media Platform</h2>
                                <img src="{{ asset('images/mobile-app-chennai/clients-2/ateam.webp') }}"
                                    alt="Case study project logo" class="case-study-logo">
                                <p><i>Connecting People Through Live News, Photos, and Videos</i></p>
                                <div class="pt-2 pb-2 mt-1 d-flex">
                                    <button class="button-12 mr-20px" role="button">Mobile App Development</button>
                                    <button class="button-12" role="button">UIUX Design</button>
                                </div>
                                <h3>Overview</h3>
                                <p class="desc2"> The <strong>ATeam app</strong> is a modern social media platform
                                    designed to keep users connected with what’s happening around them in real time.
                                    Built
                                    for <strong>sharing live updates, photos, and videos</strong>, it also offers users
                                    a
                                    <strong>personal gallery</strong> to manage their content — creating an engaging
                                    community experience similar to Facebook but tailored for <strong>instant news and
                                        personal storytelling.</strong>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-5 md-mb-2">
                        <div class="image-part">
                            <img src="{{ asset('images/mobile-app-chennai/case-study/Ride-mob.webp') }}"
                                alt="Ride Yellow case study">
                        </div>
                    </div>
                    <div class="col-lg-7 pl-50 md-pl-15">
                        <div class="slider-content">
                            <div class="sec-title5 mb-2">
                                <h2 class="title title2 pb-2">Ride Yellow – AI-Powered Corporate Travel App</h2>
                                <img src="{{ asset('images/mobile-app-chennai/clients-2/ride.webp') }}"
                                    alt="Case study project logo" class="case-study-logo">
                                <p><i>Reimagining Employee Travel with Security and Intelligence</i></p>
                                <div class="pt-2 pb-2 mt-1 d-flex">
                                    <button class="button-12 mr-20px" role="button">Mobile App Development</button>
                                    <button class="button-12" role="button">UIUX Design</button>
                                </div>
                                <h3>Overview</h3>
                                <p class="desc2"> The Ride Yellow app is a cutting-edge corporate travel solution
                                    designed to streamline employee transportation while ensuring <strong>top-tier
                                        safety
                                        and efficiency.</strong> Built with<b> AI-driven travel booking features</b> and
                                    an
                                    <b>AI Camera security system</b> for in-vehicle monitoring, the platform enables
                                    companies to manage daily commute operations with unparalleled convenience and
                                    reliability.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-5 md-mb-2">
                        <div class="image-part">
                            <img src="{{ asset('images/slides/gan-slide2.webp') }}"
                                alt="Ganesh Electricals AI-powered billing software">
                        </div>
                    </div>
                    <div class="col-lg-7 pl-50 md-pl-15">
                        <div class="slider-content">
                            <div class="sec-title5 mb-2">
                                <h2 class="title title2 pb-2">Ganesh Electricals – AI-Powered Billing Software</h2>
                                <img src="{{ asset('images/mobile-app-chennai/clients-2/ganesh.webp') }}"
                                    alt="Case study project logo" class="case-study-logo">
                                <p><i>Reimagining Employee Travel with Security and Intelligence</i></p>
                                <div class="pt-2 pb-2 mt-1 d-flex">
                                    <button class="button-12 mr-20px" role="button">Mobile App Development</button>
                                    <button class="button-12" role="button">UIUX Design</button>
                                </div>
                                <h3>Overview</h3>
                                <p class="desc2"> The <strong>Ganesh Electrical</strong> app is designed to provide a
                                    seamless digital experience for managing electrical services and customer
                                    interactions. Built with a focus on efficiency, reliability, and ease of use, the
                                    app enables service requests, job tracking, billing, and customer
                                    management—ensuring both clients and the business benefit from a streamlined and
                                    organized system.

                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-5 md-mb-2">
                        <div class="image-part">
                            <img src="{{ asset('images/mobile-app-chennai/case-study/Dots.webp') }}"
                                alt="Dots on-demand classified and services app">
                        </div>
                    </div>
                    <div class="col-lg-7 pl-50 md-pl-15">
                        <div class="slider-content">
                            <div class="sec-title5 mb-2">
                                <h2 class="title title2 pb-2">Dots – On-Demand Classified & Services App</h2>
                                <img src="{{ asset('images/mobile-app-chennai/clients-2/dots.webp') }}"
                                    alt="Case study project logo" class="case-study-logo">
                                <p><i>Connecting Users to Nearby Services and Opportunities Instantly</i></p>
                                <div class="pt-2 pb-2 mt-1 d-flex">
                                    <button class="button-12 mr-20px" role="button">Mobile App Development</button>
                                    <button class="button-12" role="button">UI/UX Design</button>
                                </div>
                                <h3>Overview</h3>
                                <p class="desc2"> The <b>Dots app</b> is an innovative classified platform designed to
                                    help users <b>discover, book, and advertise on-demand services</b> in their local
                                    area.
                                    Whether it’s finding a handyman, booking a beauty service, or promoting a local
                                    business, Dots creates a <b>seamless bridge between service providers and
                                        customers,</b>
                                    all in one easy-to-use mobile application. </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Section End -->


    <div class="rs-services style6 pt-50px pb-50px md-pt-80 md-pb-80">
        <div class="container">
            <div class="sec-title2 text-center mb-45">

                {{-- <span class="sub-text style-bg">Why Choose Trionova</span> --}}
                {{-- <h2 class="title title2 text-dark">
                        Why Choose Us as Your Mobile App Development Company in Chennai?
                    </h2> --}}

                <div class="row align-items-end justify-content-center">
                    <div class="col-xl-6 col-lg-7 md-mb-20px appear anime-child anime-complete text-center"
                        data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                        <div class="bg-base-color fw-600 lh-30 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-11 mb-25px d-inline-block"
                            style="">Why Trionova</div>
                        <h3 class="fw-700 text-dark-gray ls-minus-1px mb-0 md-w-100" style="">Technology That
                            Delivers Results</h3>
                    </div>
                </div>

            </div>
            <div class="steps-container">
                <!-- Desktop View -->
                <div class="step-card">
                    <div class="step-number">Full-Stack Expertise</div>
                    <div class="step-content">
                        <div class="step-icon">
                            <img src="{{ asset('images/mobile-app/choose-us/Full-Stack-Expertise.webp') }}"
                                alt="Full-Stack-Expertise" srcset="" loading="lazy">
                        </div>
                        <!--<div class="step-text">From <b>UI/UX design</b> to <b>backend API development</b></div>-->

                        <div class="step-text">From UI/UX design to backend API development</div>
                    </div>
                </div>

                <div class="step-card">
                    <div class="step-number">Cross-Platform Specialists</div>
                    <div class="step-content">
                        <div class="step-icon">
                            <img src="{{ asset('images/mobile-app/choose-us/Cross-Platform.webp') }}"
                                alt="Cross-Platform" loading="lazy" srcset="">

                        </div>
                        <!--<div class="step-text">Ironclad security for IP and user data protection</div>-->

                        <div class="step-text">Ironclad security for IP and user data protection</div>

                    </div>
                </div>

                <div class="step-card">
                    <!--<div class="step-number">98% On-Time Delivery</div>-->
                    <div class="step-number">On-Time Delivery</div>
                    <div class="step-content">
                        <div class="step-icon">
                            <img src="{{ asset('images/mobile-app/choose-us/On-Time-Delivery.webp') }}"
                                alt="On-Time-Delivery" loading="lazy" srcset="">

                        </div>
                        <!--<div class="step-text">Build once, deploy on <b>Android & iOS</b> </div>-->

                        <div class="step-text">Build once, deploy on Android & iOS</div>

                    </div>
                </div>

                <div class="step-card">
                    <div class="step-number">Agile Development Process</div>
                    <div class="step-content">
                        <div class="step-icon">
                            <img src="{{ asset('images/mobile-app/choose-us/Agile-Dev.webp') }}" alt="Agile-Dev"
                                loading="lazy" srcset="">

                        </div>
                        <!--<div class="step-text">Faster delivery with iterative milestones </div>-->

                        <div class="step-text">Faster delivery with iterative milestones</div>

                    </div>
                </div>

                <div class="step-card">
                    <div class="step-number">Post-Launch Support</div>
                    <div class="step-content">
                        <div class="step-icon">
                            <img src="{{ asset('images/mobile-app/choose-us/Post-Launch-Support.webp') }}"
                                alt="Post-Launch-Support" loading="lazy" srcset="">

                        </div>
                        <!--<div class="step-text">Maintenance, updates, and feature enhancements </div>-->

                        <div class="step-text">Maintenance, updates, and feature enhancements</div>

                    </div>
                </div>
                <div class="step-card">
                    <div class="step-number">Transparent Pricing</div>
                    <div class="step-content">
                        <div class="step-icon">
                            <img src="{{ asset('images/mobile-app/choose-us/Transparent-Pricing.webp') }}"
                                alt="Transparent-Pricing" loading="lazy" srcset="">

                        </div>
                        <!--<div class="step-text">No hidden costs — detailed proposal with clear deliverables </div>-->

                        <div class="step-text">No hidden costs and detailed proposal with clear deliverables</div>

                    </div>
                </div>


            </div>
        </div>
    </div>

    {{-- Nav & Taps --}}

    <section class="section-soft">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-12 col-md-5">
                    <div class="soft-title-container">
                        <div class="title text-dark-gray fw-700 mb-2">
                            Our Mobile App Solutions by Industry
                        </div>

                        <p>
                            We design and develop Mobile apps across industries, each tailored to how your business
                            actually operates.
                        </p>

                        <a href="#"
                            class="btn btn-large btn-dark-gray btn-box-shadow btn-rounded mt-15px sm-mt-10px">
                            Let’s Discuss Your Use Case<i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <div class="accordion accordion-style-02" id="software-accordion" data-active-icon="bi bi-chevron-up"
                        data-inactive-icon="bi bi-chevron-down">

                        <!-- ITEM 1 -->
                        <div class="accordion-item active-accordion">
                            <div class="accordion-header border-bottom border-color-extra-medium-gray pt-0">
                                <a href="javascript:void(0)" data-bs-toggle="collapse"
                                    data-bs-target="#software-accordion-01" data-bs-parent="#software-accordion"
                                    class="collapsed">

                                    <div class="accordion-title mb-0 position-relative text-dark-gray">
                                        <i class="bi bi-chevron-down"></i>
                                        <span class="fw-700 fs-22">
                                            Mobile App Solutions Across Industries
                                        </span>
                                    </div>

                                </a>
                            </div>

                            <div id="software-accordion-01" class="accordion-collapse collapse show"
                                data-bs-parent="#software-accordion">

                                <div
                                    class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">

                                    <p class="fs-18">
                                        At Trionova Technologies, we design and develop industry-focused mobile
                                        applications tailored to the real operational needs of businesses. Our solutions
                                        are built to improve efficiency, enhance customer engagement, and support
                                        digital transformation across different sectors.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <!-- ITEM 2 -->
                        <div class="accordion-item">
                            <div class="accordion-header border-bottom border-color-extra-medium-gray">

                                <a href="javascript:void(0)" data-bs-toggle="collapse"
                                    data-bs-target="#software-accordion-02" data-bs-parent="#software-accordion"
                                    class="collapsed">

                                    <div class="accordion-title mb-0 position-relative text-dark-gray">
                                        <i class="bi bi-chevron-up"></i>
                                        <span class="fw-700 fs-22">
                                            Software Consulting Services
                                        </span>
                                    </div>

                                </a>
                            </div>

                            <div id="software-accordion-02" class="accordion-collapse collapse"
                                data-bs-parent="#software-accordion">

                                <div
                                    class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">

                                    <p class="fs-18">
                                        Before development begins, our expert consultants work closely with you to
                                        define a clear digital strategy. We evaluate existing systems, identify
                                        operational challenges, and design a technology roadmap that aligns with your
                                        long-term business goals, ensuring the right solutions are implemented for
                                        sustainable growth.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <!-- ITEM 3 -->
                        <div class="accordion-item">
                            <div class="accordion-header border-bottom border-color-light-medium-gray">

                                <a href="javascript:void(0)" data-bs-toggle="collapse"
                                    data-bs-target="#software-accordion-03" data-bs-parent="#software-accordion"
                                    class="collapsed">

                                    <div class="accordion-title mb-0 position-relative text-dark-gray">
                                        <i class="bi bi-chevron-up"></i>
                                        <span class="fw-700 fs-22">
                                            Software Product Development
                                        </span>
                                    </div>

                                </a>
                            </div>

                            <div id="software-accordion-03" class="accordion-collapse collapse"
                                data-bs-parent="#software-accordion">

                                <div
                                    class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">

                                    <p class="fs-18">
                                        We build scalable, secure, and high-performance software products designed to
                                        solve real business problems. From concept to deployment, our development team
                                        uses modern technologies and agile methodologies to create reliable products
                                        that are built for innovation, scalability, and long-term success.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <!-- ITEM 4 -->
                        <div class="accordion-item">
                            <div class="accordion-header border-bottom border-color-light-medium-gray">

                                <a href="javascript:void(0)" data-bs-toggle="collapse"
                                    data-bs-target="#software-accordion-04" data-bs-parent="#software-accordion"
                                    class="collapsed">

                                    <div class="accordion-title mb-0 position-relative text-dark-gray">
                                        <i class="bi bi-chevron-up"></i>
                                        <span class="fw-700 fs-22">
                                            Software Integration Services
                                        </span>
                                    </div>

                                </a>
                            </div>

                            <div id="software-accordion-04" class="accordion-collapse collapse"
                                data-bs-parent="#software-accordion">

                                <div
                                    class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">

                                    <p class="fs-18">
                                        Our integration experts connect APIs, third-party platforms, enterprise tools,
                                        and internal systems to create a unified digital ecosystem. This ensures
                                        seamless communication between systems, improves operational efficiency, and
                                        enables businesses to scale faster with connected technology solutions.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <!-- ITEM 5 -->
                        <div class="accordion-item">
                            <div class="accordion-header border-bottom border-color-light-medium-gray">

                                <a href="javascript:void(0)" data-bs-toggle="collapse"
                                    data-bs-target="#software-accordion-05" data-bs-parent="#software-accordion"
                                    class="collapsed">

                                    <div class="accordion-title mb-0 position-relative text-dark-gray">
                                        <i class="bi bi-chevron-up"></i>
                                        <span class="fw-700 fs-22">
                                            Manufacturing & Industrial Solutions
                                        </span>
                                    </div>

                                </a>
                            </div>

                            <div id="software-accordion-05" class="accordion-collapse collapse"
                                data-bs-parent="#software-accordion">

                                <div
                                    class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">

                                    <p class="fs-18">
                                        We develop robust digital solutions for the manufacturing and industrial sector,
                                        focusing on scalable architecture, operational efficiency, system security, and
                                        intuitive user experiences that help businesses streamline production and
                                        management processes.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <!-- ITEM 6 -->
                        <div class="accordion-item">
                            <div class="accordion-header border-bottom border-color-light-medium-gray">

                                <a href="javascript:void(0)" data-bs-toggle="collapse"
                                    data-bs-target="#software-accordion-06" data-bs-parent="#software-accordion"
                                    class="collapsed">

                                    <div class="accordion-title mb-0 position-relative text-dark-gray">
                                        <i class="bi bi-chevron-up"></i>
                                        <span class="fw-700 fs-22">
                                            Healthcare & HealthTech Solutions
                                        </span>
                                    </div>

                                </a>
                            </div>

                            <div id="software-accordion-06" class="accordion-collapse collapse"
                                data-bs-parent="#software-accordion">

                                <div
                                    class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">

                                    <p class="fs-18">
                                        Our team builds secure and high-performance digital solutions for the healthcare
                                        industry, supporting hospitals, clinics, and healthtech platforms with scalable
                                        systems, compliance-ready infrastructure, and seamless patient and provider
                                        experiences.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <!-- ITEM 7 -->
                        <div class="accordion-item">
                            <div class="accordion-header border-bottom border-color-light-medium-gray">

                                <a href="javascript:void(0)" data-bs-toggle="collapse"
                                    data-bs-target="#software-accordion-07" data-bs-parent="#software-accordion"
                                    class="collapsed">

                                    <div class="accordion-title mb-0 position-relative text-dark-gray">
                                        <i class="bi bi-chevron-up"></i>
                                        <span class="fw-700 fs-22">
                                            Education & eLearning Solutions
                                        </span>
                                    </div>

                                </a>
                            </div>

                            <div id="software-accordion-07" class="accordion-collapse collapse"
                                data-bs-parent="#software-accordion">

                                <div
                                    class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">

                                    <p class="fs-18">
                                        We design and develop powerful eLearning platforms and educational applications
                                        that enable institutions to deliver interactive, scalable, and reliable digital
                                        learning experiences for students, educators, and training organizations.
                                    </p>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Navs & Taps --}}


    <!-- Cta section start -->
    <div class="rs-cta style1 bg7 pt-70px pb-70px">
        <div class="container">
            <div class="cta-wrap">
                <div class="row align-items-center mb-4" style="text-align: center">
                    <div class="col-12 md-pr-0 pr-148 md-pl-15 md-mb-30 md-center">
                        <div class="title-wrap">
                            <h3 class="epx-title">Looking for a Reliable Mobile App Development Company? </h3>
                            {{-- <div class="text-white">At our Mobile App Development Company in Chennai, we provide
                                custom
                                app development
                                services using the latest technologies like Flutter, React Native, Angular, and Node.js.
                                Below is a cost breakdown for different development requirements to help you understand
                                how pricing is estimated. </div> --}}

                            <div class="text-white">
                                Trionova Technologies delivers custom mobile app development, enterprise-grade
                                applications, and scalable digital solutions designed to help businesses innovate,
                                engage users, and grow faster in a mobile-first world.
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-12">
                        <div class="button-wrapt md-center d-flex justify-content-center">
                            <a class=" title-btn cta-btn" href="javascript:void(0);">
                                <span class="text m-0">Request a Free Project Quote </span>
                            </a>

                            <button class="arrow open-subscribe-popup" id="open-subscribe-popup2"
                                aria-label="Request a free project quote">
                                <div class="arrow-box">
                                    <span class="arrow-elem">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </span>
                                    <span class="button-elem">
                                        <svg viewBox="0 0 46 40">
                                            <path
                                                d="M46 20.038c0-.7-.3-1.5-.8-2.1l-16-17c-1.1-1-3.2-1.4-4.4-.3-1.2 1.1-1.2 3.3 0 4.4l11.3 11.9H3c-1.7 0-3 1.3-3 3s1.3 3 3 3h33.1l-11.3 11.9c-1 1-1.2 3.3 0 4.4 1.2 1.1 3.3.8 4.4-.3l16-17c.5-.5.8-1.1.8-1.9z">
                                            </path>
                                        </svg>
                                    </span>
                                </div>
                            </button>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cta section end -->


    <section class="pt-50px pb-50px bg-very-light-gray">
        <div class="container background-no-repeat background-position-top">
            <div class="row justify-content-center mb-2">
                <div class="col-xxl-9 col-lg-12 col-md-12 text-center"
                    data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <!--<h3 class="text-dark-gray fw-700 ls-minus-2px">Our Cutting-Edge Technology Stack for-->
                    <!--    Premier-->
                    <!--    Enterprise Mobile App Development in Chennai</h3>-->

                    <h3 class="text-dark-gray fw-700 ls-minus-2px">Technology Stack for Enterprise Mobile App
                        Development in Chennai</h3>

                    <!--<p>At the forefront of technological innovation, our team of skilled developers leverages-->
                    <!--    the most-->
                    <!--    advanced and evolving technologies reshaping the industry. We empower enterprises to-->
                    <!--    unlock-->
                    <!--    unparalleled functionality and peak performance. With a meticulously curated tech stack,-->
                    <!--    we-->
                    <!--    deliver secure, scalable, and groundbreaking solutions, precisely crafted to meet your-->
                    <!--    unique-->
                    <!--    business requirements.</p>-->

                    <p>A strong mobile application starts with the right technology foundation. As a trusted mobile app
                        development company in Chennai, our development team works with industry-proven frameworks,
                        programming languages, and cloud platforms to ensure high performance, security, and long-term
                        scalability. Every technology we choose is aligned with your business goals, project complexity,
                        and future growth plans.
                    </p>

                </div>
            </div>
            @include('common.tech-stock')
        </div>
    </section>

    @include('common.industry')


    <section class="position-relative overflow-hidden pt-50 pb-50">

        <div class="container position-relative">
            <div class="row justify-content-center mb-1"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-lg-6 text-center position-relative">

                    <!--<h2 class="fw-700 alt-font text-dark-gray ls-minus-1px">Trionova Technology Custom Mobile-->
                    <!--    App-->
                    <!--    Development Roadmap </h2>-->

                    <h2 class="fw-700 alt-font text-dark-gray ls-minus-1px">Trionova’s Custom Mobile App Development
                        Roadmap</h2>

                    <!--<p>We offer a comprehensive roadmap for mobile app development, guiding your project from-->
                    <!--    concept to-->
                    <!--    launch and beyond. Using an agile methodology, we ensure each phase is executed-->
                    <!--    professionally,-->
                    <!--    ensuring seamless transitions and successful outcomes.</p>-->

                    <p>We follow an agile and transparent mobile app development process to turn your app idea into a
                        scalable product.</p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-12 row-cols-sm-12 justify-content-center appear anime-child anime-complete"
                data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <!-- start features box item -->
                <div class="col icon-with-text-style-03" style="">
                    <div class="feature-box">
                        <div class="feature-box-icon">
                            <img src="{{ asset('images/mobile-app/Mobile-App-Roadmap.webp') }}" class="br-15px"
                                alt="Mobile app development roadmap" loading="lazy">
                        </div>

                    </div>
                </div>

                <!-- end features box item -->
            </div>
        </div>
    </section>

    <section class="position-relative overflow-hidden pb-50px pt-50px bg-very-light-gray">

        <div class="container position-relative">

            {{-- <div class="row justify-content-center mb-1"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="col-lg-6 text-center position-relative">

                        <h2 class="fw-700 alt-font text-dark-gray ls-minus-1px">Awards </h2>
                    </div>
                </div> --}}

            <div class="row mb-5 align-items-end justify-content-center">
                <div class="col-xl-6 col-lg-7 md-mb-20px appear anime-child anime-complete text-center"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <div class="bg-base-color fw-600 lh-30 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-11 mb-25px d-inline-block"
                        style="">Recognition</div>
                    <h3 class="fw-700 text-dark-gray ls-minus-1px mb-0 md-w-100" style="">Honors That Define Our
                        Excellence</h3>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2 justify-content-center appear anime-child anime-complete"
                data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <!-- start features box item -->
                <div class="col icon-with-text-style-03" style="">
                    <a href="https://www.softwareworld.co/service/trionova-technologies-pvt-ltd-reviews/" target="_blank">
                        <div class="feature-box p-8 award-card">
                            <div class="feature-box-icon">
                                <img src="{{ asset('images/mobile-app/app-development-01.webp') }}"
                                    alt="Mobile app development">
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="d-inline-block fw-700 text-dark-gray mb-5px fs-19">App Development
                                    Company of
                                    the Year</span>

                            </div>
                        </div>
                    </a>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-03" style="">
                    <a href="#" target="_blank">
                        <div class="feature-box p-8 award-card">
                            <div class="feature-box-icon">
                                <img src="{{ asset('images/mobile-app/app-development-03.webp') }}"
                                    alt="Mobile app development recognition award" loading="lazy">
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="d-inline-block fw-700 text-dark-gray mb-5px fs-19">Best Mobile App
                                    Developers
                                    in Chennai</span>

                            </div>
                        </div>
                    </a>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-03" style="">
                    <a href="https://www.mobileappdaily.com/company/trionova-technologies-pvt-ltd" target="_blank">
                        <div class="feature-box p-8 award-card">
                            <div class="feature-box-icon">
                                <img src="{{ asset('images/mobile-app/app-development-05.webp') }}"
                                    alt="Top mobile app development award" loading="lazy">
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="d-inline-block fw-700 text-dark-gray mb-5px fs-19">Top Mobile App
                                    Development
                                    Company</span>

                            </div>
                        </div>
                    </a>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-03" style="">
                    <a href="#" target="_blank">
                        <div class="feature-box p-8 award-card">
                            <div class="feature-box-icon">
                                <img src="{{ asset('images/mobile-app/app-development-02.webp') }}"
                                    alt="Mobile app development excellence award" loading="lazy">
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="d-inline-block fw-700 text-dark-gray mb-5px fs-19">Top Mobile App
                                    Development
                                    Company in Chennai</span>

                            </div>
                        </div>
                    </a>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-03" style="">
                    <a href="https://clutch.co/profile/trionova-technologies" target="_blank">
                        <div class="feature-box p-8 award-card">
                            <div class="feature-box-icon">
                                <img src="{{ asset('images/mobile-app/app-development-04.webp') }}"
                                    alt="Best mobile app development award" loading="lazy">
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="d-inline-block fw-700 text-dark-gray mb-5px fs-19">Best Mobile App
                                    Development Services Provider</span>

                            </div>
                        </div>
                    </a>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-03" style="">
                    <a href="https://www.goodfirms.co/company/trionova-technologies-pvt-ltd" target="_blank">
                        <div class="feature-box p-8 award-card">
                            <div class="feature-box-icon">
                                <img src="{{ asset('images/mobile-app/app-development-06.webp') }}"
                                    alt="Leading mobile app development award" loading="lazy">
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="d-inline-block fw-700 text-dark-gray mb-5px fs-19">Leading Mobile App
                                    Development Company in Chennai</span>

                            </div>
                        </div>
                    </a>
                </div>
                <!-- end features box item -->
            </div>
        </div>
    </section>

    <!-- Cta section start -->
    <!--<div class="rs-cta style1 bg7 pt-70px pb-70px">-->
    <!--    <div class="container">-->
    <!--        <div class="cta-wrap">-->
    <!--            <div class="row align-items-center">-->
    <!--                <div class="col-lg-9 col-md-12 md-pr-0 pr-148 md-pl-15 md-mb-30 md-center">-->
    <!--                    <div class="title-wrap">-->
    <!--                        <h3 class="epx-title">Mobile App Development Company Charges in Chennai </h3>-->
    <!--                        <div class="text-white">We work with various industries — e-commerce, logistics,-->
    <!--                            healthcare, finance, education, real estate, and more. The table below outlines-->
    <!--                            approximate charges and timelines for building scalable apps with top rankings-->
    <!--                            on app stores and optimized backend performance.-->

    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-lg-3 col-md-12 text-right d-flex">-->
    <!--                    <div class="button-wrapt md-center">-->
    <!--                        <a class="readon learn-more open-popup-link cta-btn" href="javascript:void();">Cost-->
    <!--                            Details</a>-->

    <!--                    </div>-->
    <!-- From Uiverse.io by xopc333 -->
    <!--                    <button class="arrow" id="open-subscribe-popup2">-->
    <!--                        <div class="arrow-box">-->
    <!--                            <span class="arrow-elem">-->
    <!--                                <i class="fa-solid fa-arrow-right"></i>-->
    <!--                            </span>-->
    <!--                            <span class="button-elem">-->
    <!--                                <svg viewBox="0 0 46 40">-->
    <!--                                    <path-->
    <!--                                        d="M46 20.038c0-.7-.3-1.5-.8-2.1l-16-17c-1.1-1-3.2-1.4-4.4-.3-1.2 1.1-1.2 3.3 0 4.4l11.3 11.9H3c-1.7 0-3 1.3-3 3s1.3 3 3 3h33.1l-11.3 11.9c-1 1-1.2 3.3 0 4.4 1.2 1.1 3.3.8 4.4-.3l16-17c.5-.5.8-1.1.8-1.9z">-->
    <!--                                    </path>-->
    <!--                                </svg>-->
    <!--                            </span>-->
    <!--                        </div>-->
    <!--                    </button>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- Cta section end -->


    {{-- Testimonial --}}

    {{-- @include('common.testimonial') --}}


    <section class="testimonials-section" style="background-image: url('images/images/software/map2.png')">
        <div class="container">

            {{-- <div class="section-header text-center">
                <span class="section-tag">TESTIMONIALS</span>
                <h2>What people are saying about us</h2>
                <p>Trusted by startups and enterprises for scalable software solutions.</p>
            </div> --}}

            <div class="row align-items-end justify-content-center mb-5">
                <div class="col-xl-6 col-lg-7 md-mb-20px appear anime-child anime-complete text-center"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <div class="bg-base-color fw-600 lh-30 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-11 mb-25px d-inline-block"
                        style="">TESTIMONIALS</div>
                    <h3 class="fw-700 text-white mb-2 ls-minus-1px mb-0 md-w-100" style="">What people are
                        saying
                        about us</h3>
                    <p class="text-gray">Trusted by startups and enterprises for scalable software solutions.</p>
                </div>
            </div>

            <div class="owl-carousel testimonials-carousel">

                <!-- Testimonial Item -->
                {{-- start 1 --}}
                <div class="testimonial-card">
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>

                    {{-- <h5 class="text-dark-gray">Enhanced customer experience and engagement</h5> --}}
                    <p class="testimonial-text">
                        “Trionova Technologies delivered an exceptional mobile app that perfectly aligned with our
                        business needs. Their team demonstrated strong technical expertise, clear communication, and a
                        commitment to quality.”
                    </p>

                    <div class="client-info">
                        <img src="{{ asset('images/mobile-app-chennai/clients/Dots.webp') }}" class="client-img"
                            alt="Dots app client logo">
                        <div>
                            <h4>Dots</h4>
                            <span>Panner Selvam (CEO)</span>
                        </div>
                    </div>
                </div>
                {{-- end --}}

                {{-- start 2 --}}
                <div class="testimonial-card">
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>

                    {{-- <h5 class="text-dark-gray">Enhanced customer experience and engagement</h5> --}}
                    <p class="testimonial-text">
                        “Working with Trionova was a great experience. They built a robust and scalable mobile
                        application that enhanced our service delivery. Their professionalism, timely execution, and
                        attention to detail truly set them apart.”
                    </p>

                    <div class="client-info">
                        <img src="{{ asset('images/mobile-app-chennai/clients/ride.webp') }}" class="client-img"
                            alt="Ride Yellow client logo">
                        <div>
                            <h4>Ride Yellow</h4>
                            <span>Jackson Fraser (Director)</span>
                        </div>
                    </div>
                </div>
                {{-- end --}}

                {{-- start 3 --}}
                <div class="testimonial-card">
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>

                    {{-- <h5 class="text-dark-gray">Enhanced customer experience and engagement</h5> --}}
                    <p class="testimonial-text">
                        “Trionova Technologies created a modern and highly functional website for us. Their
                        understanding of UI/UX and business requirements was impressive. The website not only looks
                        great but also performs seamlessly.”
                    </p>

                    <div class="client-info">
                        <img src="{{ asset('images/mobile-app-chennai/clients/Capsovision.webp') }}" class="client-img"
                            alt="Capsovision client logo">
                        <div>
                            <h4>Capsovision</h4>
                            <span>Kang-Huai (Director)</span>
                        </div>
                    </div>
                </div>
                {{-- end --}}

                {{-- start 4 --}}
                <div class="testimonial-card">
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>

                    {{-- <h5 class="text-dark-gray">Enhanced customer experience and engagement</h5> --}}
                    <p class="testimonial-text">
                        “The AI-integrated software developed by Trionova has transformed our operations. Automation and
                        smart insights have helped us save time and improve efficiency. Their team delivered exactly
                        what we needed with excellent support.”
                    </p>

                    <div class="client-info">
                        <img src="{{ asset('images/mobile-app-chennai/clients-2/ganesh.webp') }}" class="client-img"
                            alt="Ganesh Electrical client logo">
                        <div>
                            <h4>Ganesh Electrical</h4>
                            <span>B. Kumareson (Founder)</span>
                        </div>
                    </div>
                </div>
                {{-- end --}}

                {{-- start 5 --}}
                <div class="testimonial-card">
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>

                    {{-- <h5 class="text-dark-gray">Enhanced customer experience and engagement</h5> --}}
                    <p class="testimonial-text">
                        “Trionova Technologies developed a highly efficient and secure AI-powered system for our
                        hospital. It streamlined our workflow, reduced manual effort, and improved patient management.
                        We are extremely satisfied with their work.”
                    </p>

                    <div class="client-info">
                        <img src="{{ asset('images/mobile-app-chennai/clients/ABHI-SK-HOSPITAL.webp') }}"
                            class="client-img" alt="Abhi SK Hospital client logo">
                        <div>
                            <h4>Abhi SK Hospital</h4>
                            <span>Dr. Nanditha R (Chief Doctor & Director)</span>
                        </div>
                    </div>
                </div>
                {{-- end --}}

                {{-- start 6 --}}
                <div class="testimonial-card">
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>

                    {{-- <h5 class="text-dark-gray">Enhanced customer experience and engagement</h5> --}}
                    <p class="testimonial-text">
                        “The website developed by Trionova perfectly represents our institution. It is user-friendly,
                        informative, and visually appealing. Their team was professional and ensured timely delivery.”
                    </p>

                    <div class="client-info">
                        <img src="{{ asset('images/mobile-app-chennai/clients/Cliff-School.webp') }}" class="client-img"
                            alt="Cliff School client logo">
                        <div>
                            <h4>Cliff School</h4>
                            <span>Mr. Alexander Barnabas (Principal)</span>
                        </div>
                    </div>
                </div>
                {{-- end --}}

                {{-- start 7 --}}
                <div class="testimonial-card">
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>

                    {{-- <h5 class="text-dark-gray">Enhanced customer experience and engagement</h5> --}}
                    <p class="testimonial-text">
                        “Trionova delivered a well-structured and engaging website for our school. Their attention to
                        detail and ability to understand our requirements made the entire process smooth and efficient.”
                    </p>

                    <div class="client-info">
                        <img src="{{ asset('images/mobile-app-chennai/clients/Spectrum-Life-School.webp') }}"
                            class="client-img" alt="Spectrum Life School client logo">
                        <div>
                            <h4>Spectrum Life School</h4>
                            <span> Anipriya Vignesh (Academic Director)</span>
                        </div>
                    </div>
                </div>
                {{-- end --}}

                {{-- start 8 --}}
                <div class="testimonial-card">
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>

                    {{-- <h5 class="text-dark-gray">Enhanced customer experience and engagement</h5> --}}
                    <p class="testimonial-text">
                        “Trionova Technologies provided end-to-end digital solutions for our business. From mobile apps
                        to web platforms, everything was delivered with precision and quality. Their expertise has
                        helped us scale efficiently.”
                    </p>

                    <div class="client-info">
                        <img src="{{ asset('images/mobile-app-chennai/clients/Nova-Cosmetic.webp') }}"
                            class="client-img" alt="Nova Cosmetic client logo">
                        <div>
                            <h4> Nova Cosmetic</h4>
                            <span>Dr. V. Raja (Director)</span>
                        </div>
                    </div>
                </div>
                {{-- end --}}


                {{-- start 9 --}}
                <div class="testimonial-card">
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>

                    {{-- <h5 class="text-dark-gray">Enhanced customer experience and engagement</h5> --}}
                    <p class="testimonial-text">
                        “The team at Trionova developed powerful and scalable digital solutions for our company. Their
                        technical strength and commitment to delivering value made a significant impact on our business
                        operations.”
                    </p>

                    <div class="client-info">
                        <img src="{{ asset('images/mobile-app-chennai/clients/Madura-Polymers.webp') }}"
                            class="client-img" alt="Madura Polymers client logo">
                        <div>
                            <h4>Mathura Polimers</h4>
                            <span>Shah NM (CEO)</span>
                        </div>
                    </div>
                </div>
                {{-- end --}}

                {{-- start 10 --}}
                <div class="testimonial-card">
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>

                    {{-- <h5 class="text-dark-gray">Enhanced customer experience and engagement</h5> --}}
                    <p class="testimonial-text">
                        “Trionova Technologies exceeded our expectations with their comprehensive development services.
                        Their innovative approach and dedication to quality helped us achieve our digital transformation
                        goals successfully.”
                    </p>

                    <div class="client-info">
                        <img src="{{ asset('images/mobile-app-chennai/clients/Mirakle.webp') }}" class="client-img"
                            alt="Mirakle client logo">
                        <div>
                            <h4>Mirakle</h4>
                            <span>Minackam (CEO)</span>
                        </div>
                    </div>
                </div>
                {{-- end --}}


            </div>
        </div>
    </section>


    {{-- Testimonial --}}


    {{-- Contact us --}}

    {{-- <section class="bg-white position-relative z-index-0 sm-pt-0">

        <div class="container-fluid overflow-hidden position-relative sm-pt-40px">

            <div class="row justify-content-center mb-2 sm-mb-3">
                <div class="col-lg-6 text-center"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span
                        class="ps-25px pe-25px mb-15px text-uppercase text-base-color fs-14 lh-42px fw-700 border-radius-100px bg-gradient-quartz-light-transparent d-inline-block">Get
                        in touch with us</span>
                    <h3 class="text-dark-gray fw-700 ls-minus-1px">How we can help you?</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-6 colmd-6 col-lg-6 col-sm-12">
                    <div class="rs-animation-shape">
                        <div class="images">
                            <img src="{{ asset('images/ui-ux-design/contact-us.svg') }}" class="w-100" alt="Contact us">
                        </div>
                        <div class="middle-image2">
                            <img class="dance3" src="assets/images/about/effect-1.png" alt="Decorative background element">
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    @include('common.contact-form')
                </div>
            </div>
        </div>
    </section> --}}

    <section id="register" class="section">
        <div class="hero-pattern-overlay"></div>

        <div class="hackathon-register">
            <div class="hackathon-overlay"></div>

            <div class="hackathon-content">
                <div class="section-header mb-2">
                    <div class="bg-base-color fw-600 lh-30 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-11 mb-2  d-inline-block"
                        style="">Get to Know Trionova</div>
                    {{-- <h2>Get to Know <span class="gradient-text">Trionova</span></h2> --}}
                    <h2 class="text-white">Do you have any question? Feel free to contact us.</h2>
                </div>

                {{-- <div class="row align-items-end justify-content-center">
                <div class="col-12 md-mb-20px appear anime-child anime-complete text-center"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <div class="bg-base-color fw-600 lh-30 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-11 mb-2  d-inline-block"
                        style="">Get to Know Trionova</div>
                    <h3 class="fw-700 text-dark-gray ls-minus-1px  md-w-100 mb-25px" style="">Do you have any question? Feel free to contact us.</h3>
                </div>
            </div> --}}

                {{-- <p class="text-white">
                    Join 500+ developers, designers, and innovators for an intense 48-hour
                    hackathon. Compete, collaborate, and win exciting prizes.
                </p> --}}

                {{-- <a href="/contact" class="btn btn-primary btn-lg glow-box">
                    Contact Us
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                </a> --}}
                <a href="/contact" class="contact-btn">
                    <span class="text">CONTACT US <i class="fa-solid fa-arrow-right"></i> </span>
                </a>
            </div>
        </div>
    </section>


    {{-- Contact us --}}



    <!--faq section start-->
    <section class="faq-section pt-50px pb-50px bg-white">
        <div class="container">
            {{-- <div class="row justify-content-center">
                    <div class="col-lg-7 col-12">
                        <div class="section-heading mb-5 text-center">
                            <h5 class="h6 text-primary">FAQ</h5>
                            <h2>Do You Have Any Questions?</h2>
                           
                        </div>
                    </div>
                </div> --}}

            <div class="row mb-5 align-items-end justify-content-center">
                <div class="col-xl-6 col-lg-7 md-mb-20px appear anime-child anime-complete text-center"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <div class="bg-base-color fw-600 lh-30 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-11 mb-25px d-inline-block"
                        style="">FAQ</div>
                    <h3 class="fw-700 text-dark-gray ls-minus-1px mb-0 md-w-100" style="">Do You Have Any
                        Questions?</h3>
                </div>
            </div>

            <div class="accordion faq-accordion" id="accordionExample">
                <div class="row justify-content-center">

                    <div class="col-lg-6 col-12">

                        <div class="accordion-item border border-2 active">
                            <h5 class="accordion-header" id="faq-1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-1" aria-expanded="true">
                                    1.What is Mobile App Development, and why is it important for businesses?
                                </button>
                            </h5>
                            <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="faq-1"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Mobile app development is the process of creating software applications that
                                    run on
                                    mobile devices, such as smartphones and tablets. It is crucial for
                                    businesses
                                    because mobile apps provide a direct channel to engage with customers,
                                    enhance user
                                    experiences, and boost brand visibility. A well-developed app can help
                                    streamline
                                    operations, drive sales, and increase customer loyalty.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border border-2">
                            <h5 class="accordion-header" id="faq-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-2" aria-expanded="false">
                                    2.Should I develop my app for Android, iOS, or both platforms?
                                </button>
                            </h5>
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    The decision depends on your target audience and business goals. Android has
                                    a
                                    larger global user base, making it ideal for reaching a broad audience. iOS
                                    users
                                    tend to spend more on apps and services, making it a great platform for
                                    premium
                                    offerings. Developing for both platforms ensures maximum market reach, but
                                    you can
                                    also start with one based on your audience's preferences and expand later.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border border-2">
                            <h5 class="accordion-header" id="faq-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-3" aria-expanded="false">
                                    3.How long does it take to develop a mobile app?
                                </button>
                            </h5>
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    The development timeline varies based on the app’s complexity, features, and
                                    platforms. A basic app may take 2-3 months, while a feature-rich app could
                                    take 6
                                    months or more. Both Android and iOS development involve stages such as
                                    planning,
                                    design, development, testing, and deployment. An agile development process
                                    helps
                                    ensure timely delivery and flexibility in making adjustments during the
                                    project.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border border-2">
                            <h5 class="accordion-header" id="faq-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-4" aria-expanded="false">
                                    4.What technologies do you use for Android and iOS app development?
                                </button>
                            </h5>
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    For Android, we typically use Java or Kotlin for native app development, and
                                    for
                                    iOS, we utilize Swift or Objective-C. We also offer cross-platform
                                    development using
                                    frameworks like React Native and Flutter, which allows us to build apps for
                                    both
                                    Android and iOS with a single codebase, ensuring cost-effectiveness and
                                    faster
                                    delivery times.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border border-2">
                            <h5 class="accordion-header" id="faq-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-5" aria-expanded="false">
                                    5. How do you ensure the app is secure and protects user data?
                                </button>
                            </h5>
                            <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-5"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Security is a top priority for us during mobile app development. We
                                    implement
                                    multiple layers of protection, including data encryption, secure APIs, and
                                    regular
                                    security audits. For both Android and iOS apps, we adhere to
                                    platform-specific
                                    guidelines and best practices, such as iOS’s App Transport Security (ATS)
                                    and
                                    Android’s Network Security Configuration. We also perform penetration
                                    testing to
                                    identify potential vulnerabilities before launch.
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="accordion-item border border-2">
                            <h5 class="accordion-header" id="faq-6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-6" aria-expanded="false">
                                    6.Will my app look and function the same on both Android and iOS devices?
                                </button>
                            </h5>
                            <div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-6"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    While we aim to provide a consistent user experience across platforms, there
                                    are
                                    certain design and functional differences between Android and iOS due to
                                    platform-specific guidelines. Android follows Material Design principles,
                                    whereas
                                    iOS apps adhere to Apple’s Human Interface Guidelines. Our developers ensure
                                    the app
                                    is optimized for both platforms, keeping in mind these unique
                                    characteristics while
                                    maintaining a seamless and intuitive experience for users.

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border border-2">
                            <h5 class="accordion-header" id="faq-7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-7" aria-expanded="false">
                                    7. How do you handle app updates and maintenance after launch?
                                </button>
                            </h5>
                            <div id="collapse-7" class="accordion-collapse collapse" aria-labelledby="faq-7"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    After your app is launched, we offer post-launch support and maintenance
                                    services to
                                    ensure the app remains updated with new features, security patches, and
                                    compatibility improvements. Both Android and iOS apps require regular
                                    updates to
                                    stay compatible with the latest OS versions, devices, and market trends. We
                                    also
                                    provide ongoing monitoring and bug fixing to maintain smooth app
                                    performance.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border border-2">
                            <h5 class="accordion-header" id="faq-8">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-8" aria-expanded="false">
                                    8. What is the cost of developing a mobile app for Android and iOS?
                                </button>
                            </h5>
                            <div id="collapse-8" class="accordion-collapse collapse" aria-labelledby="faq-8"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    The cost of mobile app development depends on several factors, including the
                                    complexity of the app, the number of features, the development platform
                                    (Android,
                                    iOS, or both), and whether the app requires backend integration. A simple
                                    app may
                                    cost anywhere from $10,000 to $50,000, while a more advanced app with
                                    complex
                                    functionalities could range from $50,000 to $200,000 or more. We provide
                                    customized
                                    quotes based on the specific requirements of your project. </div>
                            </div>
                        </div>
                        <div class="accordion-item border border-2">
                            <h5 class="accordion-header" id="faq-9">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-9" aria-expanded="false">
                                    9.How do you ensure my mobile app will be successful in app stores?
                                </button>
                            </h5>
                            <div id="collapse-9" class="accordion-collapse collapse" aria-labelledby="faq-9"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We follow industry best practices for App Store Optimization (ASO) to
                                    enhance your
                                    app’s visibility and ranking on the Google Play Store and Apple App Store.
                                    This
                                    includes keyword research, a compelling app description, high-quality
                                    screenshots,
                                    and attention-grabbing icons. In addition, we perform thorough testing to
                                    ensure
                                    your app meets both platforms' quality standards and guidelines, improving
                                    the
                                    chances of approval and success.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border border-2">
                            <h5 class="accordion-header" id="faq-10">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-10" aria-expanded="false">
                                    10. Can you integrate third-party services and APIs into my app?
                                </button>
                            </h5>
                            <div id="collapse-10" class="accordion-collapse collapse" aria-labelledby="faq-10"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, we can integrate a wide range of third-party services and APIs to
                                    enhance the
                                    functionality of your mobile app. This includes payment gateways, social
                                    media
                                    platforms, analytics tools, location services, cloud storage, and more.
                                    Whether your
                                    app is on Android or iOS, we ensure seamless integration that aligns with
                                    your
                                    business needs and provides a smooth user experience.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- end section -->


    <div id="subscribe-popup"
        class="container subscribe-popup contact-form-style-01 position-relative text-center xs-p-0 mfp-hide">
        <!-- start contact form -->
        <div class="cost-popup bg-white">
            <h2 class="mb-4">Service Details and Costing in Chennai </h2>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped text-center">
                            <thead class="table-dark">
                                <tr>
                                    <th>Service Details</th>
                                    <th>Basic App (5 Screens)</th>
                                    <th>Medium App (10 Screens)</th>
                                    <th>Advanced App (15+ Screens)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>UI/UX Design (Wireframes & Prototypes)</td>
                                    <td>Rs 30,000</td>
                                    <td>Rs 45,000</td>
                                    <td>Rs 70,000</td>
                                </tr>
                                <tr>
                                    <td>Hybrid App Development (Flutter/React Native)</td>
                                    <td>Rs 1,50,000</td>
                                    <td>Rs 2,50,000</td>
                                    <td>Rs 4,00,000</td>
                                </tr>
                                <tr>
                                    <td>Native App Development (Android/iOS)</td>
                                    <td>Rs 2,00,000</td>
                                    <td>Rs 3,50,000</td>
                                    <td>Rs 5,00,000</td>
                                </tr>
                                <tr>
                                    <td>Backend Development (Node.js / Firebase / PHP)</td>
                                    <td>Rs 80,000</td>
                                    <td>Rs 1,50,000</td>
                                    <td>Rs 2,50,000</td>
                                </tr>
                                <tr>
                                    <td>API Integration & Third-Party Services</td>
                                    <td>Rs 40,000</td>
                                    <td>Rs 70,000</td>
                                    <td>Rs 1,20,000</td>
                                </tr>
                                <tr>
                                    <td>Web Admin Panel Development (Angular / React.js)</td>
                                    <td>Rs 1,00,000</td>
                                    <td>Rs 1,80,000</td>
                                    <td>Rs 2,50,000</td>
                                </tr>
                                <tr>
                                    <td>App Deployment (Google Play / App Store)</td>
                                    <td>Rs 20,000</td>
                                    <td>Rs 25,000</td>
                                    <td>Rs 30,000</td>
                                </tr>
                                <tr>
                                    <td>Annual Maintenance & Support</td>
                                    <td>Rs 50,000 p.a</td>
                                    <td>Rs 75,000 p.a</td>
                                    <td>Rs 1,00,000 p.a</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="desc">Note: These figures are indicative; final costing depends on features,
                industry,
                complexity, and technology stack choosen. </div>
        </div>
        <!-- end contact form -->
    </div>
    <div id="subscribe-popup2"
        class="container subscribe-popup contact-form-style-01 position-relative text-center xs-p-0 mfp-hide">
        <!-- start contact form -->
        <div class="cost-popup bg-white">
            <h2 class="mb-4">Industry-Wise Mobile App Development Cost & Timelines </h2>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped text-center">
                            <thead class="table-dark">
                                <tr>
                                    <th>Business Category </th>
                                    <th>Basic App Cost (Approx) </th>
                                    <th>Advanced App Cost (Approx)</th>
                                    <th>Time to Launch (Avg) </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>E-commerce & Retail Apps </td>
                                    <td>Rs 3,50,000 </td>
                                    <td>Rs 12,00,000 </td>
                                    <td>3 – 6 Months </td>
                                </tr>
                                <tr>
                                    <td>Healthcare & Telemedicine Apps </td>
                                    <td>Rs 4,50,000 </td>
                                    <td>Rs 15,00,000 </td>
                                    <td>4 – 7 Months</td>
                                </tr>
                                <tr>
                                    <td>FinTech & Banking Apps </td>
                                    <td>Rs 5,00,000 </td>
                                    <td>Rs 18,00,000 </td>
                                    <td>5 – 8 Months </td>
                                </tr>
                                <tr>
                                    <td>Logistics & Delivery Apps </td>
                                    <td>Rs 4,00,000 </td>
                                    <td>Rs 14,00,000 </td>
                                    <td>4 – 7 Months </td>
                                </tr>
                                <tr>
                                    <td>Real Estate & Property Apps </td>
                                    <td>Rs 3,50,000 </td>
                                    <td>Rs 12,50,000 </td>
                                    <td>3 – 6 Months </td>
                                </tr>
                                <tr>
                                    <td>Education & eLearning Apps </td>
                                    <td>Rs 3,80,000 </td>
                                    <td>Rs 13,00,000 </td>
                                    <td>3 – 6 Months </td>
                                </tr>
                                <tr>
                                    <td>FFood Delivery & Restaurant Apps </td>
                                    <td>Rs 3,50,000 </td>
                                    <td>Rs 11,00,000 </td>
                                    <td>3 – 5 Months </td>
                                </tr>
                                <tr>
                                    <td>Corporate & Business Apps </td>
                                    <td>Rs 3,00,000 </td>
                                    <td>Rs 10,00,000 </td>
                                    <td>2 – 5 Months</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <h4 class="text-start">Key Factors Influencing App Development Cost </h4>
            <div class="desc text-start">
                <ul>
                    <li><b>Technology Stack:</b> Flutter, React Native, Kotlin (Android), Swift (iOS), Node.js /
                        Firebase (Backend), Cloud (AWS / Azure / GCP)</li>

                    <li><b>App Type:</b> Native Apps (iOS / Android), Cross-Platform Apps, Enterprise Mobile
                        Applications, On-Demand & Marketplace Apps.
                    </li>

                    <li><b>Features Required:</b> User authentication & profiles, Real-time chat & notifications,
                        Payment gateway integration, GPS tracking & maps, Admin dashboards.
                    </li>

                    <li><b>Industry-Specific Requirements: </b> Healthcare compliance & data security, Secure financial
                        transactions (FinTech), Real-time tracking (logistics & delivery)</li>

                    <li><b>App Complexity: </b> T Multi-role systems (Admin / User / Vendor), Real-time data
                        synchronization, AI-based recommendations & automation. Advanced analytics & reporting. </li>

                    <li><b>Integrations:</b> Payment gateways (Razorpay, Stripe), CRM / ERP systems, Third-party APIs,
                        AI & Machine Learning models, Cloud services & push notifications </li>
                </ul>
            </div>
        </div>
        <!-- end contact form -->
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
@endsection
