@extends('layouts.app')
@section('title', 'Software Development Company in Chennai | Custom & Enterprise Solutions – Trionova')

@section('meta')
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

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="Trionova Technology">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="description"
            content="Trionova is a leading software development company in Chennai delivering custom & AI-powered enterprise solutions. Get a free quote today.">
        <meta property="og:title"
            content="Trionova Technology | Custom Software Development Company in Chennai" />
        <meta property="og:description"
            content="Innovative software development solutions customized to meet your business needs. Delivering scalable, efficient software designed to foster growth and success in the digital era." />
        <!-- favicon icon -->

        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:image"
            content="{{ asset('images/software-development/Software-Development-Company-in-Chennai.webp') }}">
        <meta property="og:image"
            content="{{ asset('images/software-development/Software-Development-Company-in-Chennai.webp') }}">
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="600" />
        <meta property="og:image:type" content="image/webp" />

        <meta property="og:url" content="{{ url()->current() }}">
        <meta name="twitter:url" content="{{ url()->current() }}">
        <link rel="canonical" href="{{ url()->current() }}" />

        <!-- google fonts preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- style sheets and font icons -->

        <link rel="stylesheet" href="{{ asset('css/mobile.css') }}" />




        <script type="application/ld+json">
{
"@context":"https://schema.org",
"@graph":[
{
"@type":"Service",
"name":"Software Development Company in Chennai",
"description":"Trionova Technology provides custom software development services including web applications, enterprise solutions, and scalable digital platforms.",
"url":"https://trionova.in/software-development",
"provider":{
"@type":"Organization",
"name":"Trionova Technology",
"url":"https://trionova.in"
}
}
]
}
</script>

<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"LocalBusiness",
  "name":"Trionova Technology",
  "url":"https://trionova.in",
  "telephone":"+91-9442132694",
  "address":{
    "@type":"PostalAddress",
    "streetAddress":"128, 2nd Floor",
    "addressLocality":"Chromepet",
    "addressRegion":"Tamil Nadu",
    "postalCode":"600044",
    "addressCountry":"IN"
  },
  "areaServed": {
  "@type": "City",
  "name": "Chennai"
}
}
</script>

        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is Enterprise Software Development, and how can it benefit my business?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Enterprise Software Development involves creating custom software solutions that cater to the specific needs of large organizations. It helps streamline operations, improve efficiency, automate workflows, and support business growth by offering scalable, integrated solutions tailored to your enterprise."
      }
    },
    {
      "@type": "Question",
      "name": "How do you determine the right technology stack for my enterprise software?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We carefully analyze your business requirements, industry specifics, and scalability needs to choose the best-suited technologies. Factors such as security, performance, future expansion, and ease of integration with existing systems play a crucial role in selecting the right tech stack."
      }
    },
    {
      "@type": "Question",
      "name": "Can enterprise software be customized for my specific industry needs?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, enterprise software is fully customizable. We work closely with your team to understand your industry’s unique challenges and requirements, creating tailored solutions that address those pain points and help you achieve your strategic goals."
      }
    },
    {
      "@type": "Question",
      "name": "How long does it take to develop enterprise software?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The timeline for custom software development in Chennai depends on the project’s complexity, scope, and number of features. Most projects run between 3 to 12 months, and we share a clear milestone plan after understanding what you need to build."
      }
    },
    {
      "@type": "Question",
      "name": "How do you ensure the security of enterprise software?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Security is a top priority in enterprise software development. We implement robust security protocols such as data encryption, access controls, regular security audits, and compliance with industry standards to safeguard your sensitive business information."
      }
    },
    {
      "@type": "Question",
      "name": "What is the cost of developing enterprise software?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The cost varies depending on factors like the scope of the project, features required, technology stack, and ongoing maintenance needs. We provide a detailed cost estimate after assessing your unique business needs and project complexity."
      }
    },
    {
      "@type": "Question",
      "name": "Can enterprise software integrate with my existing systems?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Absolutely. Integration is a key aspect of enterprise software development. Our solutions are designed to seamlessly integrate with your existing platforms, databases, and third-party tools to ensure a smooth and efficient transition."
      }
    },
    {
      "@type": "Question",
      "name": "How do you handle software updates and maintenance after deployment?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We offer continuous support and maintenance services, including regular updates, performance monitoring, and troubleshooting to ensure your enterprise software remains optimized, secure, and aligned with your evolving business needs."
      }
    },
    {
      "@type": "Question",
      "name": "What role does data play in enterprise software development?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Data plays a crucial role in shaping intelligent, efficient software solutions. We use data-driven insights to develop software that helps with decision-making, process automation, and performance optimization, ensuring that your software evolves alongside your business."
      }
    },
    {
      "@type": "Question",
      "name": "What makes Trionova Technology’s enterprise software development services unique?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "At Trionova Technology, we offer end-to-end, fully customized software solutions tailored to your business goals. Our team combines industry expertise, cutting-edge technologies, and a customer-centric approach to deliver scalable, future-proof software that drives long-term success for your enterprise."
      }
    },
    {
      "@type": "Question",
      "name": "Why should I choose a software development company in Chennai over a remote vendor?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Proximity matters more than people expect. A Chennai-based software partner means same-timezone communication, the ability to run on-site workshops when requirements are complex, and a team that understands how Indian enterprises actually use software. At Trionova, most of our Chennai clients tell us that working with a local team made the requirements phase alone significantly faster and more accurate."
      }
    },
    {
      "@type": "Question",
      "name": "What industries does Trionova serve as a software development company in Chennai?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We have active project experience in healthcare, logistics, real estate, education, retail, finance, and corporate travel — with clients both in Chennai and across India. Each of these sectors has specific workflow and compliance needs, and our team has built systems that address them directly rather than adapting generic templates."
      }
    }
  ]
}
</script>

        <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
    {
    "@type": "ListItem",
    "position": 1,
    "name": "Home",
    "item": "{{ url('/') }}"
    },
    {
    "@type": "ListItem",
    "position": 2,
    "name": "Software Development",
    "item": "{{ url()->current() }}"
    }
    ]
    }
    </script>
@endsection

@section('content')
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5JZ9G2GT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->




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
                                    <img src="{{ asset('images/software-development/software-banner.webp') }}"
                                        alt="Software Development Banner">
                                    <div class="mobile-bg-black"></div>
                                </div>
                            </div>

                            <div class="container">
                                <div class="parent-text app-chennai">
                                    <div class="info-text">

                                        <h1 class="title wow fadeinup">
                                            {{-- <span class="base-blue clr-one ml2">Software Development Company </span> --}}
                                            Custom Software Development Company in Chennai
                                        </h1>
                                        <div class="desc wow fadeinup text-white">
                                            Trionova is a Chennai-based software development company trusted by 100+ businesses to build systems that actually hold up — from day-to-day operations to high-growth scale. We combine cloud infrastructure, AI, and engineering depth to deliver software that fits how your business actually works.
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


        <!-- end page title -->

        {{-- start --}}

        <section class="software-about-section">
            <div class="container">
                <div class="row align-items-center">

                    <!-- IMAGE SIDE -->
                    <div class="col-lg-6 position-relative">
                        <div class="about-image-wrapper">
                            <div class="about-overlay"></div>
                            <img src="{{ asset('images/software-development/section2.png') }}" alt="Software Development"
                                class="main-image">

                            <div class="experience-badge">
                                <h3>10+</h3>
                                <span>Years of Experience</span>
                            </div>

                            <img src="{{ asset('images/software-development/section22.png') }}" class="small-image" alt="Team Working">
                        </div>
                    </div>

                    <!-- CONTENT SIDE -->
                    <div class="col-lg-6">
                        <div class="cont">
                            {{-- <span class="section-label">WHAT WE DO</span>

                        <h2 class="section-title">
                            Building scalable software for
                            <span>modern businesses</span>
                        </h2> --}}

                            <div class="row mb-3 align-items-end">
                                <div class="col-xl-10 col-lg-8 md-mb-20px appear anime-child anime-complete"
                                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                                    <div class="bg-base-color fw-600 lh-30 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-11 mb-25px d-inline-block"
                                        style="">WHAT WE DO</div>
                                    <h3 class="fw-700 text-dark-gray ls-minus-1px mb-0 w-90 md-w-100" style="">
                                        Building Scalable Software for Modern Businesses</h3>
                                </div>

                            </div>

                            {{-- custom software --}}
                            <div class="software-content">

                                <!-- Custom Software -->
                                <div class="content-box active" id="software">
                                    <p class="section-desc">
                                        Trionova Technology is a custom software development company in Chennai that has spent over a decade solving real operational problems for businesses — not just writing code to a spec. We build secure, scalable enterprise applications that handle the kind of complexity your business actually faces: multi-branch workflows, high transaction loads, and systems that need to talk to each other. Our team works across cloud platforms, AI systems, and data tools to get that done properly.
                                    </p>

                                    <p class="section-desc">
                                        Whether you're a Chennai startup building your first product or an established enterprise that needs to replace a system your team has outgrown — we work with you from the first conversation to post-launch support.
                                    </p>
                                </div>

                                <!-- AI & Automation -->
                                <div class="content-box" id="ai">
                                    <p class="section-desc">
                                        Businesses across Chennai come to us when they need software that doesn't just look good in a demo but handles real-world pressure. We bring together AI, automation, and solid engineering to build platforms that reduce manual effort, improve decision-making, and give your team data they can actually act on.
                                    </p>

                                </div>

                            </div>


                            <div class="about-features">

                                <div class="features-box active" data-target="software">
                                    <img src="{{ asset('images/images/software/item-1.svg') }}" class="img" loading="lazy" alt="Custom Software Development Icon">
                                    <h5>Custom Software Development</h5>
                                </div>

                                <div class="features-box" data-target="ai">
                                    <img src="{{ asset('images/images/software/item-2.svg') }}" class="img" loading="lazy" alt="AI & Automation Solutions Icon">
                                    <h5>AI & Automation Solutions</h5>
                                </div>

                            </div>

                            {{-- <ul class="about-list">
                            <li>Custom web & enterprise software</li>
                            <li>Secure, scalable architecture</li>
                            <li>AI-powered & automation-ready solutions</li>
                        </ul> --}}

                            {{-- <div class="about-features">
                            <div class="features-box">
                                <img src="images/images/software/item-1.svg" class="img" loading="lazy" alt="">
                                <h5>Custom Software Development</h5>
                            </div>
                            <div class="features-box">
                                <img src="images/images/software/item-2.svg" class="img" loading="lazy" alt="">
                                <h5>AI & Automation Solutions</h5>
                            </div>
                        </div> --}}
                        </div>
                    </div>

                </div>
            </div>
        </section>


        {{-- end --}}


        <!-- Cta section start -->
        <div class="rs-cta style1 bg7 pt-70px pb-70px">
            <div class="container">
                <div class="cta-wrap">
                    <div class="row align-items-center mb-4" style="text-align: center">
                        <div class="col-12 md-pr-0 pr-148 md-pl-15 md-mb-30 md-center">
                            <div class="title-wrap">
                                <h3 class="epx-title">Custom Software Development Cost in Chennai</h3>
                                {{-- <div class="text-white">At our Mobile App Development Company in Chennai, we provide
                                custom
                                app development
                                services using the latest technologies like Flutter, React Native, Angular, and Node.js.
                                Below is a cost breakdown for different development requirements to help you understand
                                how pricing is estimated. </div> --}}

                                <div class="text-white">
                                    Software development costs in Chennai vary widely — and we believe you should know the range before getting on a call. Below is our transparent pricing across service types, from basic automation tools to full enterprise platforms. Whether you're a growing business or a large organisation modernising old systems, we size the engagement to what you actually need.
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

                                <button class="arrow open-subscribe-popup" id="open-subscribe-popup" aria-label="View pricing details" data-popup-target="#subscribe-popup">
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



        {{-- Nav & Taps --}}

        <section class="section-soft">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-12 col-md-5">
                        <div class="soft-title-container">
                            <div class="title text-dark-gray">
                                {{-- <span class="title-bold">Software Development</span>  --}}
                                Software Development Services We Offer At Trionova Technologies
                            </div>

                            <p class="mt-2">
                                At Trionova, we've worked with businesses across Chennai and other cities long enough to know that every industry has its own version of "the problem that's been slowing us down for years." Our custom software development services in Chennai are built to tackle exactly those situations — with a team that asks the right questions first and writes code second.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-7">
                        <div class="accordion accordion-style-02" id="software-accordion"
                            data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">

                            <!-- ITEM 1 -->
                            <div class="accordion-item active-accordion">
                                <div class="accordion-header border-bottom border-color-extra-medium-gray pt-0">
                                    <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#software-accordion-01"
                                        data-bs-parent="#software-accordion" class="collapsed">

                                        <div class="accordion-title mb-0 position-relative text-dark-gray">
                                            <i class="feather icon-feather-minus"></i>
                                            <span class="fw-700 fs-22">
                                                (01) Software Consulting Services
                                            </span>
                                        </div>

                                    </a>
                                </div>

                                <div id="software-accordion-01" class="accordion-collapse collapse show"
                                    data-bs-parent="#software-accordion">

                                    <div
                                        class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">

                                        <p class="">
                                            Our software consulting services help organizations define the right technology
                                            strategy before development begins. We analyze your existing systems, identify
                                            operational challenges, and design a strategic roadmap aligned with your
                                            long-term business objectives.
                                        </p>

                                        <p class="">
                                            Our consulting approach focuses on:
                                        </p>

                                        <ul class="ul-new">
                                            <li>Technology assessment and system analysis </li>
                                            <li>Identifying business process inefficiencies </li>
                                            <li>Architecture planning and scalability strategies </li>
                                            <li>Selecting the right technology stack for your project </li>
                                        </ul>

                                        <p class="">
                                            This ensures your software solution is built on a strong foundation that
                                            supports future growth and innovation.
                                        </p>

                                    </div>
                                </div>
                            </div>

                            <!-- ITEM 2 -->
                            <div class="accordion-item">
                                <div class="accordion-header border-bottom border-color-extra-medium-gray">

                                    <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#software-accordion-02"
                                        data-bs-parent="#software-accordion" class="collapsed">

                                        <div class="accordion-title mb-0 position-relative text-dark-gray">
                                            <i class="feather icon-feather-plus"></i>
                                            <span class="fw-700 fs-22">
                                                (02) Custom Software Product Development
                                            </span>
                                        </div>

                                    </a>
                                </div>

                                <div id="software-accordion-02" class="accordion-collapse collapse"
                                    data-bs-parent="#software-accordion">

                                    <div
                                        class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">

                                        <p class="">
                                            We specialize in custom software product development designed to meet specific
                                            business requirements. Our team builds scalable, secure, and high-performance
                                            software solutions using modern development frameworks and cloud technologies.
                                        </p>

                                        <p class="">
                                            Our software product development services include:
                                        </p>

                                        <ul class="ul-new">
                                            <li>SaaS product development </li>
                                            <li>Enterprise software solutions </li>
                                            <li>Business automation platforms </li>
                                            <li>AI-powered applications </li>
                                            <li>Cloud-based software systems </li>
                                        </ul>

                                        <p class="">
                                            Each solution is designed to improve operational efficiency and deliver
                                            long-term business value.
                                        </p>

                                    </div>
                                </div>
                            </div>

                            <!-- ITEM 3 -->
                            <div class="accordion-item">
                                <div class="accordion-header border-bottom border-color-light-medium-gray">

                                    <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#software-accordion-03"
                                        data-bs-parent="#software-accordion" class="collapsed">

                                        <div class="accordion-title mb-0 position-relative text-dark-gray">
                                            <i class="feather icon-feather-plus"></i>
                                            <span class="fw-700 fs-22">
                                                (03) Software Integration Services
                                            </span>
                                        </div>

                                    </a>
                                </div>

                                <div id="software-accordion-03" class="accordion-collapse collapse"
                                    data-bs-parent="#software-accordion">

                                    <div
                                        class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                        <p class="">
                                            Modern businesses rely on multiple digital tools and platforms. Our software
                                            integration services connect your applications, APIs, and third-party systems to
                                            create a seamless and efficient technology ecosystem.
                                        </p>

                                        <p class="">
                                            Our integration capabilities include:
                                        </p>

                                        <ul class="ul-new">
                                            <li>Third-party API integration </li>
                                            <li>Payment gateway integration </li>
                                            <li>CRM and ERP system integration </li>
                                            <li>Cloud and database integration </li>
                                            <li>Legacy system modernization </li>
                                        </ul>

                                        <p class="">
                                            By integrating your systems effectively, we help businesses reduce manual work,
                                            improve data accuracy, and enhance productivity.
                                        </p>

                                    </div>
                                </div>
                            </div>

                            <!-- ITEM 4 -->
                            <div class="accordion-item">
                                <div class="accordion-header border-bottom border-color-light-medium-gray">

                                    <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#software-accordion-04"
                                        data-bs-parent="#software-accordion" class="collapsed">

                                        <div class="accordion-title mb-0 position-relative text-dark-gray">
                                            <i class="feather icon-feather-plus"></i>
                                            <span class="fw-700 fs-22">
                                                (04) Web Application Development
                                            </span>
                                        </div>

                                    </a>
                                </div>

                                <div id="software-accordion-04" class="accordion-collapse collapse"
                                    data-bs-parent="#software-accordion">

                                    <div
                                        class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">

                                        <p class="">
                                            Our web application development services focus on building secure, scalable, and
                                            high-performance applications that deliver exceptional user experiences. We
                                            develop modern web applications for startups, enterprises, and growing
                                            businesses using advanced technologies and frameworks.
                                        </p>

                                        <p class="">
                                            Our web app development solutions include:
                                        </p>

                                        <ul class="ul-new">
                                            <li>Custom business web applications </li>
                                            <li>Enterprise web platforms </li>
                                            <li>SaaS web applications </li>
                                            <li>AI-powered web solutions </li>
                                            <li>Progressive web applications (PWA) </li>
                                        </ul>

                                        <p class="">
                                            Each application is designed with a user-centric approach, responsive design,
                                            and robust security architecture to ensure optimal performance and scalability.
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

        {{-- Approach --}}

        <section class="approach-section">
            <div class="container">

                <div class="row align-items-end mb-5">

                    <div class="col-lg-8">
                        <h2 class="approach-title text-dark-gray">
                            Our Software Development Approach
                        </h2>

                        <p class="approach-desc">
                            As a trusted software development company in Chennai, we've refined this process across 100+ projects — so you're not paying for us to figure things out. Every stage is structured to keep you informed, avoid mid-project surprises, and deliver something your team actually wants to use.
                        </p>

                        <span class="step-count">
                            <span id="current">01</span>-<span id="total">07</span>
                        </span>
                    </div>

                    <div class="col-lg-4 text-end">

                        <div class="approach-controls">


                            <button class="nav-btn prev-btn" aria-label="Previous slide">
                                <i class="fas fa-arrow-left"></i>
                            </button>

                            <button class="nav-btn next-btn" aria-label="Next slide">
                                <i class="fas fa-arrow-right"></i>
                            </button>

                        </div>

                    </div>
                </div>

                <div class="owl-carousel approach-carousel">

                    <div class="approach-card">
                        <img src="{{ asset('images/software-development/one.png') }}" width="50px" alt="Ideation phase icon">
                        <h4>Ideation</h4>
                        <p>
                            At Trionova Technologies, every project starts with a detailed ideation phase where we
                            understand your goals, analyze challenges, and identify the right technology solutions—ensuring
                            alignment with your long-term objectives.
                        </p>
                    </div>

                    <div class="approach-card">
                        <img src="{{ asset('images/software-development/two.png') }}" width="50px" alt="Project planning phase icon">
                        <h4>Project Planning </h4>
                        <p>
                            Once the concept is finalized, we create a clear project roadmap outlining timelines,
                            milestones, and scope. We define cost estimates and allocate resources efficiently for smooth
                            execution.
                        </p>
                    </div>

                    <div class="approach-card">
                        <img src="{{ asset('images/software-development/three.png') }}" width="50px" alt="Design and architecture phase icon">
                        <h4>Design & Architecture </h4>
                        <p>
                            In the design phase, we define software architecture, database structures, and scalable system
                            frameworks. At the same time, our UI/UX team creates intuitive, user-friendly interfaces for a
                            seamless experience.
                        </p>
                    </div>

                    <div class="approach-card">
                        <img src="{{ asset('images/software-development/four.png') }}" width="50px" alt="Development phase icon">
                        <h4>Development </h4>
                        <p>
                            During development, our engineers build core features using modern technologies and best
                            practices. We collaborate continuously with clients to ensure the software aligns with evolving
                            business needs.
                        </p>
                    </div>


                    <div class="approach-card">
                        <img src="{{ asset('images/software-development/five.png') }}" width="50px" alt="Testing and quality assurance phase icon">
                        <h4>Testing & Quality Assurance </h4>
                        <p>
                            Our quality assurance process ensures the software performs reliably and securely. We conduct
                            rigorous testing, including unit, integration, and performance testing. This guarantees a
                            stable, efficient, and deployment-ready product.
                        </p>
                    </div>

                    <div class="approach-card">
                        <img src="{{ asset('images/software-development/six.png') }}" width="50px" alt="Support and maintenance phase icon">
                        <h4>Support & Maintenance </h4>
                        <p>
                            After deployment, we provide continuous support and maintenance to keep your software secure and
                            up to date. We monitor performance, apply regular updates, and implement improvements. This
                            ensures your system stays aligned with evolving business needs.
                        </p>
                    </div>

                    <div class="approach-card">
                        <img src="{{ asset('images/software-development/seven.png') }}" width="50px" alt="Consulting phase icon">
                        <h4>Consulting</h4>
                        <p>
                            Our software consulting services help businesses choose the right technology solutions. Through
                            strategic discussions and planning, we guide the development of scalable, future-ready products.
                        </p>
                    </div>

                </div>

            </div>
        </section>

        {{-- Approach --}}

        {{-- Project --}}

        <section class="project-section">
            <div class="container">

                <div class="row align-items-end justify-content-center">
                    <div class="col-xl-9 col-lg-9 md-mb-20px appear anime-child anime-complete text-center"
                        data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                        <div class="bg-base-color fw-600 lh-30 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-11 mb-25px d-inline-block"
                            style="">Featured Projects</div>
                        <h3 class="fw-700 text-dark-gray ls-minus-1px md-w-100" style="">Integrating the Latest
                            Technologies to Give Your Business a Competitive Edge
                        </h3>

                        <p>
                            At Trionova Technologies, we leverage the latest advanced technologies to help businesses
                            innovate, automate processes, and stay ahead in a rapidly evolving digital landscape. By
                            integrating modern tools, intelligent systems, and scalable architectures, we build solutions
                            that improve efficiency, enhance decision-making, and drive sustainable business growth.
                        </p>
                    </div>
                </div>

                {{--  --}}

                {{-- <div class="projects-container">
            <div class="owl-carousel projects-carousel">

            <!-- Project 1 -->
            <div class="Project-card">
                            <img src="images/images/softwaredevelopment_abt.webp" class="main-img" alt="Software development project"
                                loading="lazy">
                            <div class="small-main">
                                <i class="fa-solid fa-users-gear"></i>
                            </div>
                            <div class="project-overlay"></div>
                            <div class="project-content">
                                <h2 class="text-white mb-4">AI & Machine Learning (ML) </h2>
                                <p class="text-white">
                                    Artificial Intelligence and Machine Learning are transforming the way businesses operate. Our team develops AI-powered software solutions that enable data-driven insights, predictive analytics, and intelligent automation. By leveraging AI and ML technologies, we help organizations reduce manual effort, optimize operations, and unlock valuable insights from their data. 
                                </p>
                                <a class="project-btn" href="javascript:void(0);">Read More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>

            <!-- Project 2 -->
            <div class="Project-card">
                            <img src="images/images/softwaredevelopment_abt.webp" class="main-img" alt="Software development project"
                                loading="lazy">
                            <div class="small-main">
                                <i class="fa-solid fa-hand-holding-dollar"></i>
                            </div>
                            <div class="project-overlay"></div>
                            <div class="project-content">
                                <h2 class="text-white mb-4">Internet of Things (IoT) </h2>
                                <p class="text-white">
                                    Our IoT solutions connect devices, systems, and sensors to create intelligent ecosystems capable of collecting and analyzing real-time data. This enables businesses to monitor operations, improve efficiency, and make smarter decisions. IoT technology is widely used across industries such as healthcare, manufacturing, logistics, and smart infrastructure. 
                                </p>
                                <a class="project-btn" href="javascript:void(0);">Read More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>

            <!-- Project 3 -->
            <div class="Project-card">
                            <img src="images/images/softwaredevelopment_abt.webp" class="main-img" alt="Software development project"
                                loading="lazy">
                            <div class="small-main">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <div class="project-overlay"></div>
                            <div class="project-content">
                                <h2 class="text-white mb-4">Augmented Reality & Virtual Reality </h2>
                                <p class="text-white">
                                    We build immersive digital experiences using Augmented Reality and Virtual Reality technologies. By combining AR/VR with advanced computer vision and interactive design, our solutions help businesses create engaging applications for training, product visualization, remote assistance, and interactive customer experiences. 
                                </p>
                                <a class="project-btn" href="javascript:void(0);">Read More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>

            <!-- Project 4 -->
            <div class="Project-card">
                            <img src="images/images/softwaredevelopment_abt.webp" class="main-img" alt="Software development project"
                                loading="lazy">
                            <div class="small-main">
                                <i class="fa-solid fa-users-gear"></i>
                            </div>
                            <div class="project-overlay"></div>
                            <div class="project-content">
                                <h2 class="text-white mb-4">Blockchain Technology </h2>
                                <p class="text-white">
                                    Our developers use blockchain technology to build secure, transparent, and tamper-proof digital systems. Blockchain solutions are ideal for industries that require high levels of data integrity and security, such as finance, healthcare, supply chain management, and digital identity systems. 
                                </p>
                                <a class="project-btn" href="javascript:void(0);">Read More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>

                        <!-- Project 5 -->
            <div class="Project-card">
                            <img src="images/images/softwaredevelopment_abt.webp" class="main-img" alt="Software development project"
                                loading="lazy">
                            <div class="small-main"> 
                                <i class="fa-solid fa-users-gear"></i>
                            </div>
                            <div class="project-overlay"></div>
                            <div class="project-content">
                                <h2 class="text-white mb-4">Robotic Process Automation (RPA) </h2>
                                <p class="text-white">
                                    We implement Robotic Process Automation (RPA) to automate repetitive and rule-based business processes. RPA helps organizations reduce human errors, increase operational efficiency, and free up valuable resources for higher-value tasks. Our RPA solutions are widely used in sectors such as healthcare, finance, and manufacturing. 
                                </p>
                                <a class="project-btn" href="javascript:void(0);">Read More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>

        </div>
        </div> --}}

                {{--  --}}

                <div class="projects-container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 col-lg-4 mb-5">
                            <div class="Project-card">
                                <img src="{{ asset('images/software-development/projects/AI.jpg') }}" class="main-img" alt="AI development project"
                                    loading="lazy">
                                <div class="small-main">
                                    <i class="fa-solid fa-robot"></i>
                                </div>
                                <div class="project-overlay"></div>
                                <div class="project-content">
                                    <h2 class="text-white mb-4">Artificial Intelligence & Machine Learning</h2>
                                    <p class="text-white">
                                        Artificial Intelligence and Machine Learning are transforming the way businesses
                                        operate. Our team develops AI-powered software solutions that enable data-driven
                                        insights, predictive analytics, and intelligent automation. By leveraging AI and ML
                                        technologies, we help organizations reduce manual effort, optimize operations, and
                                        unlock valuable insights from their data.
                                    </p>
                                    {{-- <a class="project-btn" href="javascript:void(0);">Read More <i class="fa-solid fa-arrow-right"></i></a> --}}
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mb-5">
                            <div class="Project-card">
                                <img src="{{ asset('images/software-development/projects/IOT.png') }}" class="main-img" alt="IoT development project"
                                    loading="lazy">
                                <div class="small-main">
                                    <i class="bi bi-diagram-3"></i>
                                </div>
                                <div class="project-overlay"></div>
                                <div class="project-content">
                                    <h2 class="text-white mb-4">Internet of Things</h2>
                                    <p class="text-white">
                                        Our IoT solutions connect devices, systems, and sensors to create intelligent
                                        ecosystems capable of collecting and analyzing real-time data. This enables
                                        businesses to monitor operations, improve efficiency, and make smarter decisions.
                                        IoT technology is widely used across industries such as healthcare, manufacturing,
                                        logistics, and smart infrastructure.
                                    </p>
                                    {{-- <a class="project-btn" href="javascript:void(0);">Read More <i class="fa-solid fa-arrow-right"></i></a> --}}
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mb-5">
                            <div class="Project-card">
                                <img src="{{ asset('images/software-development/projects/VR.png') }}" class="main-img" alt="VR development project"
                                    loading="lazy">
                                <div class="small-main">
                                    <i class="fa-solid fa-vr-cardboard"></i>
                                </div>
                                <div class="project-overlay"></div>
                                <div class="project-content">
                                    <h2 class="text-white mb-4">Augmented Reality & Virtual Reality</h2>
                                    <p class="text-white">
                                        We build immersive digital experiences using Augmented Reality and Virtual Reality
                                        technologies. By combining AR/VR with advanced computer vision and interactive
                                        design, our solutions help businesses create engaging applications for training,
                                        product visualization, remote assistance, and interactive customer experiences.
                                    </p>
                                    {{-- <a class="project-btn" href="javascript:void(0);">Read More <i class="fa-solid fa-arrow-right"></i></a> --}}
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mb-5">
                            <div class="Project-card">
                                <img src="{{ asset('images/software-development/projects/block.png') }}" class="main-img" alt="Blockchain development project"
                                    loading="lazy">
                                <div class="small-main">
                                    <i class="fa-solid fa-link"></i>
                                </div>
                                <div class="project-overlay"></div>
                                <div class="project-content">
                                    <h2 class="text-white mb-4">Blockchain Technology </h2>
                                    <p class="text-white">
                                        Our developers use blockchain technology to build secure, transparent, and
                                        tamper-proof digital systems. Blockchain solutions are ideal for industries that
                                        require high levels of data integrity and security, such as finance, healthcare,
                                        supply chain management, and digital identity systems.
                                    </p>
                                    {{-- <a class="project-btn" href="javascript:void(0);">Read More <i class="fa-solid fa-arrow-right"></i></a> --}}
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mb-5">
                            <div class="Project-card">
                                <img src="{{ asset('images/software-development/projects/robot.png') }}" class="main-img" alt="Robotics development project"
                                    loading="lazy">
                                <div class="small-main">
                                    <i class="bi bi-gear-wide-connected"></i>
                                </div>
                                <div class="project-overlay"></div>
                                <div class="project-content">
                                    <h2 class="text-white mb-4">Robotic Process Automation</h2>
                                    <p class="text-white">
                                        We implement Robotic Process Automation (RPA) to automate repetitive and rule-based
                                        business processes. RPA helps organizations reduce human errors, increase
                                        operational efficiency, and free up valuable resources for higher-value tasks. Our
                                        RPA solutions are widely used in sectors such as healthcare, finance, and
                                        manufacturing.
                                    </p>
                                    {{-- <a class="project-btn" href="javascript:void(0);">Read More <i class="fa-solid fa-arrow-right"></i></a> --}}
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>

        {{-- Project --}}


        <!-- Cta section start -->
        <div class="rs-cta style1 bg7 pt-70px pb-70px">
            <div class="container">
                <div class="cta-wrap">
                    <div class="row align-items-center mb-4" style="text-align: center">
                        <div class="col-12 md-pr-0 pr-148 md-pl-15 md-mb-30 md-center">
                            <div class="title-wrap">
                                <h3 class="epx-title">Looking for a Reliable Software Development Company? </h3>
                                {{-- <div class="text-white">At our Mobile App Development Company in Chennai, we provide
                                custom
                                app development
                                services using the latest technologies like Flutter, React Native, Angular, and Node.js.
                                Below is a cost breakdown for different development requirements to help you understand
                                how pricing is estimated. </div> --}}

                                <div class="text-white">
                                    Trionova Technologies delivers custom software development, enterprise applications, and
                                    scalable digital solutions designed to help businesses innovate and grow.
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-12">
                            <div class="button-wrapt md-center d-flex justify-content-center">
                                <a class=" title-btn cta-btn" href="javascript:void(0);">
                                    <span class="text m-0">Request a Free Project Quote</span>
                                </a>

                                <button class="arrow open-subscribe-popup" id="open-subscribe-popup2" aria-label="Request a free project quote" data-popup-target="#subscribe-popup2">
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


        <!-- Slider Section Start -->
        <section class="gray-bg2">
            <div class="rs-slider style3 pt-50px pb-50px md-pt-40px md-pb-40px">
                <div class="container">

                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0"
                        data-autoplay="true" data-hoverpause="false" data-autoplay-timeout="3000" data-smart-speed="800"
                        data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false"
                        data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false"
                        data-ipad-device="1" data-ipad-device-nav="true" data-ipad-device-dots="false"
                        data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false"
                        data-md-device="1" data-md-device-nav="true" data-md-device-dots="false">
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
                                            alt="Case study project logo" class="case-study-logo">
                                        <p><i>Simplifying Healthcare Access for Patients</i></p>
                                        <div class="pt-2 pb-2 mt-1 d-flex">
                                            <button class="button-12 mr-20px" role="button">Mobile App
                                                Development</button>
                                            <button class="button-12" role="button">UIUX Design</button>
                                        </div>
                                        <h3>Overview</h3>
                                        <p class="desc2">The Abhi Hospital app is designed to deliver a seamless digital
                                            healthcare experience, connecting patients with hospital services at their
                                            fingertips.
                                            Built with a focus on <strong>convenience, accuracy, and security</strong> , the
                                            app
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
                                            <button class="button-12 mr-20px" role="button">Mobile App
                                                Development</button>
                                            <button class="button-12" role="button">UIUX Design</button>
                                        </div>
                                        <h3>Overview</h3>
                                        <p class="desc2"> The <strong>ATeam app</strong> is a modern social media platform
                                            designed to keep users connected with what’s happening around them in real time.
                                            Built
                                            for <strong>sharing live updates, photos, and videos</strong>, it also offers
                                            users a
                                            <strong>personal gallery</strong> to manage their content — creating an engaging
                                            community experience similar to Facebook but tailored for <strong>instant news
                                                and
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
                                        alt="Ride mobile app case study">
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
                                            <button class="button-12 mr-20px" role="button">Mobile App
                                                Development</button>
                                            <button class="button-12" role="button">UIUX Design</button>
                                        </div>
                                        <h3>Overview</h3>
                                        <p class="desc2"> The Ride Yellow app is a cutting-edge corporate travel solution
                                            designed to streamline employee transportation while ensuring <strong>top-tier
                                                safety
                                                and efficiency.</strong> Built with<b> AI-driven travel booking features</b>
                                            and an
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
                                    <img src="{{ asset('images/slides/gan-slide2.webp') }}" alt="Ganesh Electricals AI-powered billing software">
                                </div>
                            </div>
                            <div class="col-lg-7 pl-50 md-pl-15">
                                <div class="slider-content">
                                    <div class="sec-title5 mb-2">
                                        <h2 class="title title2 pb-2">Ganesh Electricals – AI-Powered Billing Software</h2>
                                        <img src="{{ asset('images/mobile-app-chennai/clients-2/ganesh.webp') }}"
                                            alt="Case study project logo" class="case-study-logo">
                                        <p><i>Streamlining Electrical Services with AI-Powered Billing</i></p>
                                        <div class="pt-2 pb-2 mt-1 d-flex">
                                            <button class="button-12 mr-20px" role="button">Mobile App
                                                Development</button>
                                            <button class="button-12" role="button">UIUX Design</button>
                                        </div>
                                        <h3>Overview</h3>
                                        <p class="desc2"> The <strong>Ganesh Electrical</strong> app is designed to
                                            provide a seamless digital experience for managing electrical services and
                                            customer interactions. Built with a focus on efficiency, reliability, and ease
                                            of use, the app enables service requests, job tracking, billing, and customer
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
                                        alt="Dots case study">
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
                                            <button class="button-12 mr-20px" role="button">Mobile App
                                                Development</button>
                                            <button class="button-12" role="button">UI/UX Design</button>
                                        </div>
                                        <h3>Overview</h3>
                                        <p class="desc2"> The <b>Dots app</b> is an innovative classified platform
                                            designed to
                                            help users <b>discover, book, and advertise on-demand services</b> in their
                                            local area.
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
        </section>
        <!-- Slider Section End -->



        {{-- Tech Stack --}}

        <section>
            <div class="container background-no-repeat background-position-top">
                <div class="row justify-content-center mb-2">
                    <div class="col-xxl-6 col-lg-8 col-md-9 text-center"
                        data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>

                        <h3 class="text-dark-gray fw-700 ls-minus-2px">Our Tech Stack</h3>
                        <p>We use modern, industry-proven technologies to build secure and scalable enterprise software
                            solutions. Our team works with reliable programming languages, frameworks, cloud platforms, and
                            data tools to ensure performance, security, and long-term maintainability. </p>

                    </div>
                </div>

                @include('common.tech-stock')

            </div>
        </section>

        {{-- Tech Stack --}}


        <section class="bg-dark-gray">
            <div class="container">
                <div class="row justify-content-center mb-5 sm-mb-30px">
                    <div class="col-xl-6 col-lg-8 col-md-10 text-center"
                        data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="bg-base-color fw-600 lh-30 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-11 mb-25px d-inline-block"
                            style="">Industries We Serve</div>
                        <h3 class="text-white mb-0 fw-600">Serving businesses across multiple industries</h3>
                    </div>
                </div>
                <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6 g-0"
                    data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 300, "delay":0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all">
                        <div
                            class="feature-box hover-box h-100 transition dark-hover pt-25 pb-25 xs-p-12 last-paragraph-no-margin overflow-hidden border-bottom border-end border-1 border-color-transparent-white-light  ">
                            <div class="feature-box-icon">
                                <i class="line-icon-Microphone-4 icon-extra-large text-white mb-15px"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block text-white fw-600 fs-14 text-uppercase">Publishing</span>
                            </div>
                            <div class="feature-box-overlay bg-base-color"></div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all">
                        <div
                            class="feature-box hover-box h-100 transition dark-hover pt-25 pb-25 xs-p-12 last-paragraph-no-margin overflow-hidden border-bottom border-end border-1 sm-border-end-0 border-color-transparent-white-light  ">
                            <div class="feature-box-icon">
                                <i class="line-icon-Basket-Coins icon-extra-large text-white mb-15px"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block text-white fw-600 fs-14 text-uppercase">Finance</span>
                            </div>
                            <div class="feature-box-overlay bg-base-color"></div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all">
                        <div
                            class="feature-box hover-box h-100 transition dark-hover pt-25 pb-25 xs-p-12 last-paragraph-no-margin overflow-hidden border-bottom border-end border-1 border-color-transparent-white-light  ">
                            <div class="feature-box-icon">
                                <i class="line-icon-Bee icon-extra-large text-white mb-15px"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block text-white fw-600 fs-14 text-uppercase">Sciences</span>
                            </div>
                            <div class="feature-box-overlay bg-base-color"></div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all">
                        <div
                            class="feature-box hover-box h-100 transition dark-hover pt-25 pb-25 xs-p-12 last-paragraph-no-margin overflow-hidden border-bottom border-end border-1 md-border-end-0 border-color-transparent-white-light  ">
                            <div class="feature-box-icon">
                                <i class="line-icon-Management icon-extra-large text-white mb-15px"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block text-white fw-600 fs-14 text-uppercase">Consultant</span>
                            </div>
                            <div class="feature-box-overlay bg-base-color"></div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all">
                        <div
                            class="feature-box hover-box h-100 transition dark-hover pt-25 pb-25 xs-p-12 last-paragraph-no-margin overflow-hidden border-bottom border-end border-1 border-color-transparent-white-light  ">
                            <div class="feature-box-icon">
                                <i class="line-icon-French-Fries icon-extra-large text-white mb-15px"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block text-white fw-600 fs-14 text-uppercase">Food</span>
                            </div>
                            <div class="feature-box-overlay bg-base-color"></div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all">
                        <div
                            class="feature-box hover-box h-100 transition dark-hover pt-25 pb-25 xs-p-12 last-paragraph-no-margin overflow-hidden border-bottom border-1 md-border-end sm-border-end-0 border-color-transparent-white-light  ">
                            <div class="feature-box-icon">
                                <i class="line-icon-Road-3 icon-extra-large text-white mb-15px"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block text-white fw-600 fs-14 text-uppercase">Travel</span>
                            </div>
                            <div class="feature-box-overlay bg-base-color"></div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all">
                        <div
                            class="feature-box hover-box h-100 transition dark-hover pt-25 pb-25 xs-p-12 last-paragraph-no-margin overflow-hidden border-end border-1 md-border-bottom border-color-transparent-white-light  ">
                            <div class="feature-box-icon">
                                <i class="line-icon-Cow icon-extra-large text-white mb-15px"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block text-white fw-600 fs-14 text-uppercase">Dairy</span>
                            </div>
                            <div class="feature-box-overlay bg-base-color"></div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all">
                        <div
                            class="feature-box hover-box h-100 transition dark-hover pt-25 pb-25 xs-p-12 last-paragraph-no-margin overflow-hidden border-end border-1 md-border-end-0 md-border-bottom border-color-transparent-white-light  ">
                            <div class="feature-box-icon">
                                <i class="line-icon-Diamond icon-extra-large text-white mb-15px"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block text-white fw-600 fs-14 text-uppercase">Jewellery</span>
                            </div>
                            <div class="feature-box-overlay bg-base-color"></div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all">
                        <div
                            class="feature-box hover-box h-100 transition dark-hover pt-25 pb-25 xs-p-12 last-paragraph-no-margin overflow-hidden border-end border-1 sm-border-bottom border-color-transparent-white-light  ">
                            <div class="feature-box-icon">
                                <i class="line-icon-Drop icon-extra-large text-white mb-15px"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block text-white fw-600 fs-14 text-uppercase">Energy</span>
                            </div>
                            <div class="feature-box-overlay bg-base-color"></div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all">
                        <div
                            class="feature-box hover-box h-100 transition dark-hover pt-25 pb-25 xs-p-12 last-paragraph-no-margin overflow-hidden border-end border-1 sm-border-end-0 sm-border-bottom border-color-transparent-white-light  ">
                            <div class="feature-box-icon">
                                <i class="line-icon-Environmental-3 icon-extra-large text-white mb-15px"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block text-white fw-600 fs-14 text-uppercase">Farming</span>
                            </div>
                            <div class="feature-box-overlay bg-base-color"></div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all">
                        <div
                            class="feature-box hover-box h-100 transition dark-hover pt-25 pb-25 xs-p-12 last-paragraph-no-margin overflow-hidden border-end border-1 border-color-transparent-white-light  ">
                            <div class="feature-box-icon">
                                <i class="line-icon-Gear icon-extra-large text-white mb-15px"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block text-white fw-600 fs-14 text-uppercase">Industries</span>
                            </div>
                            <div class="feature-box-overlay bg-base-color"></div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all">
                        <div
                            class="feature-box hover-box h-100 transition dark-hover pt-25 pb-25 xs-p-12 last-paragraph-no-margin overflow-hidden border-1 border-color-transparent-white-light  ">
                            <div class="feature-box-icon">
                                <i class="line-icon-Environmental-3 icon-extra-large text-white mb-15px"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block text-white fw-600 fs-14 text-uppercase">Events</span>
                            </div>
                            <div class="feature-box-overlay bg-base-color"></div>
                        </div>
                    </div>
                    <!-- end features box item -->
                </div>
            </div>
        </section>
        <section class="background-position-center-top  sm-background-image-none"
            style="background-image: url('images/vertical-line-bg.svg')">
            <div class="container">
                <div class="row position-relative clients-style-08">
                    <div class="col swiper text-center feather-shadow"
                        data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed": 4000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 4 }, "768": { "slidesPerView": 3 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper marquee-slide">
                            <div class="swiper-slide">
                                <a href="javascript:void(0);"><img src="{{ asset('images/mobile-app-chennai/clients-2/ride.webp') }}" class="clientLogo"
                                        alt="Ride Yellow logo" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0);"><img src="{{ asset('images/images/client2.jpg') }}" class="clientLogo"
                                        alt="Spectrum Life School logo" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0);"><img src="{{ asset('images/images/client3.jpg') }}" class="clientLogo"
                                        alt="CapsoVision logo" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0);"><img src="{{ asset('images/images/client4.jpg') }}" class="clientLogo"
                                        alt="WFB Baird & Company Ltd. logo" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0);"><img src="{{ asset('images/images/client5.jpg') }}" class="clientLogo"
                                        alt="Cliff School logo" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0);"><img src="{{ asset('images/images/client6.jpg') }}" class="clientLogo"
                                        alt="Nova Cosmetic Surgery Centre logo" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0);"><img src="{{ asset('images/images/client7.jpg') }}" class="clientLogo"
                                        alt="Madura Polymers logo" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0);"><img src="{{ asset('images/images/client8.jpg') }}" class="clientLogo"
                                        alt="aTeam Soft Solutions logo" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0);"><img src="{{ asset('images/images/client9.jpg') }}" class="clientLogo"
                                        alt="Mirakle logo" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0);"><img src="{{ asset('images/images/client10.jpg') }}" class="clientLogo"
                                        alt="KS Builders logo" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0);"><img src="{{ asset('images/images/client11.webp') }}" class="clientLogo"
                                        alt="Cinema Karan logo" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0);"><img src="{{ asset('images/images/client16.webp') }}" class="clientLogo"
                                        alt="HP logo" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0);"><img src="{{ asset('images/images/client17.png') }}" class="clientLogo"
                                        alt="SRDV Technologies logo" /></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0);"><img src="{{ asset('images/images/client18.png') }}" class="clientLogo"
                                        alt="MakeMy Trip logo" /></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        {{-- Why Choose --}}

        <section class="pt-0 pb-0">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-6 col-lg-7 md-mb-20px appear anime-child anime-complete"
                        data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                        <div class="bg-base-color fw-600 lh-30 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-11 mb-25px d-inline-block"
                            style="">Exploring the Unseen Potential</div>
                        <!--<h3 class="fw-700 text-dark-gray ls-minus-1px mb-0 w-90 md-w-100" style="">Why Choose Trionova-->
                        <!--    Technology – Leading the Way in Enterprise Software Development</h3>-->

                        <h3 class="fw-700 text-dark-gray ls-minus-1px mb-0 w-90 md-w-100" style="">Why Chennai Businesses Choose Trionova for Enterprise Software Development</h3>

                    </div>

                </div>
                <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2 justify-content-center mt-4 mb-4 sm-mb-8 appear anime-child anime-complete"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 800, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-03" style="">
                        <div class="feature-box p-8 overflow-hidden">
                            <div class="feature-box-icon mb-25px">
                                <img src="{{ asset('images/software-development/demo-marketing-about-02.jpg') }}"
                                    class="h-100px" alt="Team member photo" data-no-retina="">
                            </div>
                            <!--<div class="feature-box-content last-paragraph-no-margin">-->
                            <!--    <span class="d-block fs-18 fw-600 text-dark-gray mb-5px ls-minus-05px">Unleashing-->
                            <!--        Operational Mastery</span>-->
                            <!--    <p>At Trionova Technology, we specialize in sculpting bespoke software architectures that-->
                            <!--        seamlessly blend with your operations. Our solutions simplify complexities, elevate-->
                            <!--        efficiency, and optimize ROI by embedding cost-conscious, strategic frameworks into your-->
                            <!--        workflow.</p>-->
                            <!--</div>-->

                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="d-block fs-18 fw-600 text-dark-gray mb-5px ls-minus-05px">Operational
                                    Efficiency That Drives Results</span>
                                <p>We've built enterprise software for hospitals in Chennai, logistics companies managing city-wide fleets, and retail brands running operations across Tamil Nadu. When we say we understand complex workflows, we mean the kind that are hard to explain to someone who hasn't seen them firsthand.</p>
                            </div>

                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-03" style="">
                        <div class="feature-box p-8 overflow-hidden">
                            <div class="feature-box-icon mb-25px">
                                <img src="{{ asset('images/software-development/demo-marketing-about-03.jpg') }}"
                                    class="h-100px" alt="Team member photo" data-no-retina="">
                            </div>
                            <!--<div class="feature-box-content last-paragraph-no-margin">-->
                            <!--    <span class="d-block fs-18 fw-600 text-dark-gray mb-5px ls-minus-05px">A Proven Legacy of-->
                            <!--        Excellence</span>-->
                            <!--    <p>With over 100 organizations entrusting their digital evolution to us, Trionova stands as-->
                            <!--        a beacon of transformation. Our diverse industry experience empowers us to deliver-->
                            <!--        impactful software solutions that drive success across varied sectors.</p>-->
                            <!--</div>-->

                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="d-block fs-18 fw-600 text-dark-gray mb-5px ls-minus-05px">Trusted by 100+
                                    Organizations</span>
                                <p>Over 100 businesses — from Chennai startups to multi-city enterprises — have trusted Trionova with systems they run their operations on every day. That kind of trust takes consistency, and we take it seriously.</p>
                            </div>

                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-03" style="">
                        <div class="feature-box p-8 overflow-hidden">
                            <div class="feature-box-icon mb-25px">
                                <img src="{{ asset('images/software-development/demo-marketing-about-04.jpg') }}"
                                    class="h-100px" alt="Team member photo" data-no-retina="">
                            </div>

                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="d-block fs-18 fw-600 text-dark-gray mb-5px ls-minus-05px">Built for
                                    Innovation and Scalability</span>
                                <p>We integrate modern technologies such as AI, machine learning, and IoT to create
                                    intelligent, future-ready applications. Our solutions are designed to scale as your
                                    business grows.
                                <p>
                            </div>

                        </div>
                    </div>
                    <!-- end features box item -->

                </div>

            </div>
        </section>

        {{-- Why Choose --}}

        {{-- Testimonial --}}

        <section class="testimonials-section" style="background-image: url('images/images/software/map2.png')">
            <div class="container">


                <div class="row align-items-end justify-content-center mb-5">
                    <div class="col-xl-6 col-lg-7 md-mb-20px appear anime-child anime-complete text-center"
                        data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                        <div class="bg-base-color fw-600 lh-30 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-11 mb-25px d-inline-block"
                            style="">TESTIMONIALS</div>
                        <h3 class="fw-700 text-white mb-2 ls-minus-1px mb-0 md-w-100" style="">What people are
                            saying about us</h3>
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

                        <p class="testimonial-text">
                            “Trionova Technologies delivered an exceptional mobile app that perfectly aligned with our
                            business needs. Their team demonstrated strong technical expertise, clear communication, and a
                            commitment to quality.”
                        </p>

                        <div class="client-info">
                            <img src="{{ asset('images/mobile-app-chennai/clients/Dots.webp') }}" class="client-img" alt="Client">
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

                        <p class="testimonial-text">
                            “Working with Trionova was a great experience. They built a robust and scalable mobile
                            application that enhanced our service delivery. Their professionalism, timely execution, and
                            attention to detail truly set them apart.”
                        </p>

                        <div class="client-info">
                            <img src="{{ asset('images/mobile-app-chennai/clients/ride.webp') }}" class="client-img" alt="Client">
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


                        <p class="testimonial-text">
                            “Trionova Technologies created a modern and highly functional website for us. Their
                            understanding of UI/UX and business requirements was impressive. The website not only looks
                            great but also performs seamlessly.”
                        </p>

                        <div class="client-info">
                            <img src="{{ asset('images/mobile-app-chennai/clients/Capsovision.webp') }}" class="client-img"
                                alt="Client">
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
                            <img src="{{ asset('images/mobile-app-chennai/clients-2/ganesh.webp') }}"
                                class="client-img" alt="Client">
                            <div>
                                <h4>Ganesh Electrical (Chennai)</h4>
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
                            <img src="{{ asset('images/mobile-app-chennai/clients/ABHI-SK-HOSPITAL.webp') }}" class="client-img"
                                alt="Client">
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
                                alt="Client">
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
                            <img src="{{ asset('images/mobile-app-chennai/clients/Spectrum-Life-School.webp') }}" class="client-img"
                                alt="Client">
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
                            <img src="{{ asset('images/mobile-app-chennai/clients/Nova-Cosmetic.webp') }}" class="client-img"
                                alt="Client">
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
                            <img src="{{ asset('images/mobile-app-chennai/clients/Madura-Polymers.webp') }}" class="client-img"
                                alt="Client">
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
                                alt="Client">
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


        {{-- <section class="pt-0">
            <div class="container background-no-repeat background-position-top"
                style="background-image: url('images/demo-it-business-testimonial-bg.png')">
                <div class="row justify-content-center mb-2">
                    <div class="col-xxl-6 col-lg-8 col-md-9 text-center"
                        data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h3 class="text-dark-gray fw-700 ls-minus-2px">Testimonials</h3>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center mb-6 sm-mb-8">
                    <div class="col-xl-10 position-relative">
                        <div class="swiper magic-cursor testimonials-style-06"
                            data-slider-options='{ "loop": true, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav", "effect": "fade" } }'>
                            <div class="swiper-wrapper">
                                <!-- start testimonial item -->
                                <div class="swiper-slide ">
                                    <div class="row align-items-center justify-content-center">

                                        <div
                                            class="col-lg-12 col-md-12 cusWidth last-paragraph-no-margin text-center text-md-start">
                                            <span class="fw-800 text-dark-gray">"Outstanding software solutions!"</span>
                                            <span class="mb-5px d-table fs-18 lh-30 fw-500 text-dark-gray">Trionova
                                                Technology's custom software has completely streamlined our operations.
                                                Their team took the time to understand our unique business needs, and the
                                                result has been nothing short of amazing. We're seeing higher productivity
                                                and smoother workflows across the board." </span>
                                            <span class="fs-15 text-uppercase fw-800 text-dark-gray ls-05px">Sarah L.,
                                                Operations Manager</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- end testimonial item -->
                                <div class="swiper-slide ">
                                    <div class="row align-items-center justify-content-center">

                                        <div
                                            class="col-lg-12 col-md-12 cusWidth last-paragraph-no-margin text-center text-md-start">
                                            <span class="fw-800 text-dark-gray">A game changer for our business</span>
                                            <span class="mb-5px d-table fs-18 lh-30 fw-500 text-dark-gray">The software
                                                Trionova developed for us has been a true game changer. From automating
                                                processes to improving overall efficiency, we couldn't be happier. Their
                                                support team is also incredibly responsive, making sure everything works
                                                seamlessly. </span>
                                            <span class="fs-15 text-uppercase fw-800 text-dark-gray ls-05px">John M.,
                                                CEO</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide ">
                                    <div class="row align-items-center justify-content-center">

                                        <div
                                            class="col-lg-12 col-md-12 cusWidth last-paragraph-no-margin text-center text-md-start">
                                            <span class="fw-800 text-dark-gray">Improved decision-making and
                                                efficiency</span>
                                            <span class="mb-5px d-table fs-18 lh-30 fw-500 text-dark-gray">The software
                                                solution provided by Trionova Technology has significantly improved our
                                                decision-making process. It has allowed us to analyze data more effectively,
                                                leading to smarter business decisions and increased efficiency. We can't
                                                recommend them enough!</span>
                                            <span class="fs-15 text-uppercase fw-800 text-dark-gray ls-05px">Emily R.,
                                                Business Analyst</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide ">
                                    <div class="row align-items-center justify-content-center">

                                        <div
                                            class="col-lg-12 col-md-12 cusWidth last-paragraph-no-margin text-center text-md-start">
                                            <span class="fw-800 text-dark-gray">Flexible and scalable solutions"</span>
                                            <span class="mb-5px d-table fs-18 lh-30 fw-500 text-dark-gray">Our business
                                                has been growing rapidly, and Trionova's software has scaled effortlessly to
                                                meet our expanding needs. It's incredibly flexible and has adapted well to
                                                our dynamic environment. Their expertise truly helped us unlock new
                                                potential."</span>
                                            <span class="fs-15 text-uppercase fw-800 text-dark-gray ls-05px">Michael S.,
                                                CTO</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide ">
                                    <div class="row align-items-center justify-content-center">

                                        <div
                                            class="col-lg-12 col-md-12 cusWidth last-paragraph-no-margin text-center text-md-start">
                                            <span class="fw-800 text-dark-gray">Enhanced customer experience and
                                                engagement</span>
                                            <span class="mb-5px d-table fs-18 lh-30 fw-500 text-dark-gray">Trionova's
                                                software not only helped us internally but also greatly improved the
                                                experience for our customers. The user-friendly interface and seamless
                                                integration have made it easy for our clients to engage with us. We’ve
                                                received excellent feedback!</span>
                                            <span class="fs-15 text-uppercase fw-800 text-dark-gray ls-05px">Jessica T.,
                                                Marketing Director</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- start slider navigation -->
                            <div class="testi-btn-main">
                                <div class="swiper-button-previous-nav swiper-button-next rounded-circle testi-button-prev bg-color-btn md-left-0px"><i
                                    class="feather icon-feather-arrow-left icon-extra-medium text-white"></i></div>
                                <div class="swiper-button-next-nav swiper-button-next rounded-circle testi-button-next bg-color-btn md-right-0px"><i
                                    class="feather icon-feather-arrow-right icon-extra-medium text-white"></i></div>
                            </div>
                            <!-- end slider pagination -->
                        </div>
                    </div>
                </div>

            </div>
        </section> --}}


        <!-- Contact section -->

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
                            <img src="{{ asset('images/ui-ux-design/contact-us.svg') }}" class="w-100" loading="lazy"
                                alt="Contact us illustration">
                        </div>
                        <div class="middle-image2">
                            <img class="dance3" src="assets/images/about/effect-1.png" loading="lazy" alt="Decorative background element">
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
                        <h3 class="fw-700 text-dark-gray ls-minus-1px  md-w-100 mb-25px" style="">Do you have any
                            question? Feel free to contact us.</h3>
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

        <!-- Contact section -->


        <section class="si-devprocess">
            <div class="container background-no-repeat background-position-top">
                <div class="row justify-content-center mb-2">
                    <div class="col-xxl-6 col-lg-8 col-md-9 text-center"
                        data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h3 class="text-dark-gray fw-700 ls-minus-2px">Our Process for Enterprise Software Development
                        </h3>
                    </div>
                </div>
                <div class="si-devprocess-content text-center">
                    <div class="row about-icons si-devprocess-top">
                        <div class="col-md-3 col-sm-12 workhover">
                            <img src="{{ asset('images/images/Process1.svg') }}" width="30%" height="30%" loading="lazy"
                                class="img-fluid wow pulse animated animated" data-wow-iteration="infinite"
                                data-wow-duration="3500ms" alt="img" data-pagespeed-url-hash="3079468150"
                                style="visibility: visible; animation-duration: 3500ms; animation-iteration-count: infinite; animation-name: pulse;">
                            <h3 class=" fw-700 text-dark-gray mb-5px fs-19">Defining the Objective</h3>
                            <p></p>
                            <p>We delve deep into understanding the client’s core aspirations, ensuring alignment with the
                                broader organizational vision and long-term goals.</p>
                            <p></p>
                        </div>
                        <div class="col-md-3 col-sm-12 workhover">
                            <img src="{{ asset('images/images/Process2.svg') }}" width="30%" height="30%"
                                class="img-fluid wow pulse animated animated" loading="lazy"
                                data-wow-iteration="infinite" data-wow-duration="3500ms" alt="img"
                                data-pagespeed-url-hash="3701106198"
                                style="visibility: visible; animation-duration: 3500ms; animation-iteration-count: infinite; animation-name: pulse;">
                            <h3 class=" fw-700 text-dark-gray mb-5px fs-19">Business Blueprint Exploration</h3>
                            <p></p>
                            <p>Our seasoned industry specialists immerse themselves in your business model, working to
                                harmonize operational efficiency with economic feasibility, creating solutions that resonate
                                with your enterprise.</p>
                            <p></p>
                        </div>
                        <div class="col-md-3 col-sm-12 workhover">
                            <img src="{{ asset('images/images/Process3.svg') }}" width="30%" height="30%"
                                class="img-fluid wow pulse animated animated" loading="lazy"
                                data-wow-iteration="infinite" data-wow-duration="3500ms" alt="img"
                                data-pagespeed-url-hash="1201167129"
                                style="visibility: visible; animation-duration: 3500ms; animation-iteration-count: infinite; animation-name: pulse;">
                            <h3 class=" fw-700 text-dark-gray mb-5px fs-19">Data-Driven Methodology</h3>
                            <p></p>
                            <p>We employ a holistic, data-centric approach, ensuring comprehensive analysis and
                                multi-dimensional problem-solving to address challenges from all angles.</p>
                            <p></p>
                        </div>
                        <div class="col-md-3 col-sm-12 workhover">
                            <img src="{{ asset('images/images/Process4.svg') }}" width="30%" height="30%"
                                class="img-fluid wow pulse animated animated" loading="lazy"
                                data-wow-iteration="infinite" data-wow-duration="3500ms" alt="img"
                                data-pagespeed-url-hash="3403017459"
                                style="visibility: visible; animation-duration: 3500ms; animation-iteration-count: infinite; animation-name: pulse;">
                            <h3 class=" fw-700 text-dark-gray mb-5px fs-19">Strategic Synergy</h3>
                            <p></p>
                            <p>Our approach seamlessly blends technological innovation, enhanced productivity, and
                                streamlined simplicity, ensuring each step is meticulously crafted for optimal results.</p>
                            <p></p>
                        </div>
                    </div>
                    <div class="row about-icons si-devprocess-bottom">
                        <div class="row sm-reverse-row">
                            <div class="offset-3 col-md-9 col-sm-12">
                                <div class="row sm-reverse-row">
                                    <div class="col-md-4 col-sm-12 workhover">
                                        <img src="{{ asset('images/images/Process5.svg') }}" width="30%" height="30%"
                                            loading="lazy" class="img-fluid wow pulse animated animated"
                                            data-wow-iteration="infinite" data-wow-duration="3500ms" alt="img"
                                            data-pagespeed-url-hash="977385119"
                                            style="visibility: visible; animation-duration: 3500ms; animation-iteration-count: infinite; animation-name: pulse;">
                                        <h3 class=" fw-700 text-dark-gray mb-5px fs-19">Development Execution</h3>
                                        <p></p>
                                        <p>Our skilled development team breathes life into this collaborative vision,
                                            leveraging cutting-edge technologies to create transformative software
                                            solutions.</p>
                                        <p></p>
                                    </div>
                                    <div class="col-md-4 col-sm-12 workhover">
                                        <img src="{{ asset('images/images/Process6.svg') }}" width="30%" height="30%"
                                            loading="lazy" class="img-fluid wow pulse animated animated"
                                            data-wow-iteration="infinite" data-wow-duration="3500ms" alt="img"
                                            data-pagespeed-url-hash="249411906"
                                            style="visibility: visible; animation-duration: 3500ms; animation-iteration-count: infinite; animation-name: pulse;">
                                        <h3 class=" fw-700 text-dark-gray mb-5px fs-19">Ongoing Maintenance & Enhancement
                                        </h3>
                                        <p></p>
                                        <p>We remain vigilant post-deployment, continuously monitoring and refining our
                                            enterprise solutions to ensure peak performance and alignment with evolving
                                            business needs.</p>
                                        <p></p>
                                    </div>
                                    <div class="col-md-4 col-sm-12 dev-process-arrow">
                                        <img src="{{ asset('images/images/dev-process-arrow-4.svg') }}" width="100%" height="100%"
                                            loading="lazy" class="img-fluid wow pulse animated  animated"
                                            data-wow-iteration="infinite" data-wow-duration="3500ms" alt="img"
                                            data-pagespeed-url-hash="3877246794"
                                            style="visibility: visible; animation-duration: 3500ms; animation-iteration-count: infinite; animation-name: pulse;">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <section class="pt-0">
            <div class="container background-no-repeat background-position-top">
                <div class="row justify-content-center mb-2">
                    <div class="col-xxl-6 col-lg-8 col-md-9 text-center"
                        data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h3 class="text-dark-gray fw-700 ls-minus-2px">FAQ</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="accordion accordion-style-02" id="accordion-style-01"
                            data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                            <!-- start accordion item -->
                            <div class="accordion-item active-accordion">
                                <div class="accordion-header border-bottom border-color-extra-medium-gray pt-0">
                                    <a href="javascript:void(0);" data-bs-toggle="collapse"
                                        data-bs-target="#accordion-style-01-01" aria-expanded="false"
                                        data-bs-parent="#accordion-style-01" class="collapsed">
                                        <div class="accordion-title mb-0 position-relative text-dark-gray">
                                            <i class="feather icon-feather-minus"></i><span class="fw-500 fs-18">What is
                                                Enterprise Software Development, and how can it benefit my business?</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-01-01" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordion-style-01" style="">
                                    <div
                                        class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                        <p>Enterprise Software Development involves creating custom software solutions that
                                            cater to the specific needs of large organizations. It helps streamline
                                            operations, improve efficiency, automate workflows, and support business growth
                                            by offering scalable, integrated solutions tailored to your enterprise.</p>

                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="accordion-item">
                                <div class="accordion-header border-bottom border-color-extra-medium-gray">
                                    <a href="javascript:void(0);" data-bs-toggle="collapse"
                                        data-bs-target="#accordion-style-01-02" aria-expanded="false"
                                        data-bs-parent="#accordion-style-01" class="collapsed">
                                        <div class="accordion-title mb-0 position-relative text-dark-gray">
                                            <i class="feather icon-feather-plus"></i><span class="fw-500 fs-17">How do
                                                you determine the right technology stack for my enterprise software?</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-01-02" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion-style-01" style="">
                                    <div
                                        class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                        <p>We carefully analyze your business requirements, industry specifics, and
                                            scalability needs to choose the best-suited technologies. Factors such as
                                            security, performance, future expansion, and ease of integration with existing
                                            systems play a crucial role in selecting the right tech stack.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="accordion-item">
                                <div class="accordion-header border-bottom border-color-light-medium-gray">
                                    <a href="javascript:void(0);" data-bs-toggle="collapse"
                                        data-bs-target="#accordion-style-01-03" aria-expanded="true"
                                        data-bs-parent="#accordion-style-01" class="">
                                        <div class="accordion-title mb-0 position-relative text-dark-gray">
                                            <i class="feather icon-feather-plus"></i><span class="fw-500 fs-17">Can
                                                enterprise software be customized for my specific industry needs?</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-01-03" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion-style-01" style="">
                                    <div
                                        class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                        <p>Yes, enterprise software is fully customizable. We work closely with your team to
                                            understand your industry’s unique challenges and requirements, creating tailored
                                            solutions that address those pain points and help you achieve your strategic
                                            goals.</p>

                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="accordion-item">
                                <div class="accordion-header border-bottom border-color-light-medium-gray">
                                    <a href="javascript:void(0);" data-bs-toggle="collapse"
                                        data-bs-target="#accordion-style-01-04" aria-expanded="false"
                                        data-bs-parent="#accordion-style-01" class="collapsed">
                                        <div class="accordion-title mb-0 position-relative text-dark-gray">
                                            <i class="feather icon-feather-plus"></i><span class="fw-500 fs-17">How long
                                                does it take to develop enterprise software?</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-01-04" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion-style-01">
                                    <div
                                        class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                        <p>The timeline for custom software development in Chennai depends on the project's complexity, scope, and number of features. Most projects run between 3 to 12 months, and we share a clear milestone plan after understanding what you need to build.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="accordion-item">
                                <div class="accordion-header border-bottom border-color-light-medium-gray">
                                    <a href="javascript:void(0);" data-bs-toggle="collapse"
                                        data-bs-target="#accordion-style-01-05" aria-expanded="false"
                                        data-bs-parent="#accordion-style-01" class="collapsed">
                                        <div class="accordion-title mb-0 position-relative text-dark-gray">
                                            <i class="feather icon-feather-plus"></i><span class="fw-500 fs-17">How do
                                                you ensure the security of enterprise software?</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-01-05" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion-style-01">
                                    <div
                                        class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                        <p>Security is a top priority in enterprise software development. We implement
                                            robust security protocols such as data encryption, access controls, regular
                                            security audits, and compliance with industry standards to safeguard your
                                            sensitive business information.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="accordion-item">
                                <div class="accordion-header border-bottom border-color-light-medium-gray">
                                    <a href="javascript:void(0);" data-bs-toggle="collapse"
                                        data-bs-target="#accordion-style-01-06" aria-expanded="false"
                                        data-bs-parent="#accordion-style-01" class="collapsed">
                                        <div class="accordion-title mb-0 position-relative text-dark-gray">
                                            <i class="feather icon-feather-plus"></i><span class="fw-500 fs-17">What is
                                                the cost of developing enterprise software?</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-01-06" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion-style-01">
                                    <div
                                        class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                        <p>The cost varies depending on factors like the scope of the project, features
                                            required, technology stack, and ongoing maintenance needs. We provide a detailed
                                            cost estimate after assessing your unique business needs and project complexity.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header border-bottom border-color-light-medium-gray">
                                    <a href="javascript:void(0);" data-bs-toggle="collapse"
                                        data-bs-target="#accordion-style-01-07" aria-expanded="false"
                                        data-bs-parent="#accordion-style-01" class="collapsed">
                                        <div class="accordion-title mb-0 position-relative text-dark-gray">
                                            <i class="feather icon-feather-plus"></i><span class="fw-500 fs-17">Can
                                                enterprise software integrate with my existing systems?</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-01-07" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion-style-01">
                                    <div
                                        class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                        <p>Absolutely. Integration is a key aspect of enterprise software development. Our
                                            solutions are designed to seamlessly integrate with your existing platforms,
                                            databases, and third-party tools to ensure a smooth and efficient transition.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header border-bottom border-color-light-medium-gray">
                                    <a href="javascript:void(0);" data-bs-toggle="collapse"
                                        data-bs-target="#accordion-style-01-08" aria-expanded="false"
                                        data-bs-parent="#accordion-style-01" class="collapsed">
                                        <div class="accordion-title mb-0 position-relative text-dark-gray">
                                            <i class="feather icon-feather-plus"></i><span class="fw-500 fs-17">How do
                                                you handle software updates and maintenance after deployment?</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-01-08" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion-style-01">
                                    <div
                                        class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                        <p>We offer continuous support and maintenance services, including regular updates,
                                            performance monitoring, and troubleshooting to ensure your enterprise software
                                            remains optimized, secure, and aligned with your evolving business needs.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header border-bottom border-color-light-medium-gray">
                                    <a href="javascript:void(0);" data-bs-toggle="collapse"
                                        data-bs-target="#accordion-style-01-09" aria-expanded="false"
                                        data-bs-parent="#accordion-style-01" class="collapsed">
                                        <div class="accordion-title mb-0 position-relative text-dark-gray">
                                            <i class="feather icon-feather-plus"></i><span class="fw-500 fs-17">What
                                                role does data play in enterprise software development?</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-01-09" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion-style-01">
                                    <div
                                        class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                        <p>Data plays a crucial role in shaping intelligent, efficient software solutions.
                                            We use data-driven insights to develop software that helps with decision-making,
                                            process automation, and performance optimization, ensuring that your software
                                            evolves alongside your business.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header border-bottom border-color-light-medium-gray">
                                    <a href="javascript:void(0);" data-bs-toggle="collapse"
                                        data-bs-target="#accordion-style-01-10" aria-expanded="false"
                                        data-bs-parent="#accordion-style-01" class="collapsed">
                                        <div class="accordion-title mb-0 position-relative text-dark-gray">
                                            <i class="feather icon-feather-plus"></i><span class="fw-500 fs-17">What
                                                makes Trionova Technology’s enterprise software development services
                                                unique?</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-01-10" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion-style-01">
                                    <div
                                        class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                        <p>At Trionova Technology, we offer end-to-end, fully customized software solutions
                                            tailored to your business goals. Our team combines industry expertise,
                                            cutting-edge technologies, and a customer-centric approach to deliver scalable,
                                            future-proof software that drives long-term success for your enterprise.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header border-bottom border-color-light-medium-gray">
                                    <a href="javascript:void(0);" data-bs-toggle="collapse"
                                        data-bs-target="#accordion-style-01-11" aria-expanded="false"
                                        data-bs-parent="#accordion-style-01" class="collapsed">
                                        <div class="accordion-title mb-0 position-relative text-dark-gray">
                                            <i class="feather icon-feather-plus"></i><span class="fw-500 fs-17">Why should I choose a software development company in Chennai over a remote vendor?</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-01-11" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion-style-01">
                                    <div
                                        class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                        <p>Proximity matters more than people expect. A Chennai-based software partner means same-timezone communication, the ability to run on-site workshops when requirements are complex, and a team that understands how Indian enterprises actually use software. At Trionova, most of our Chennai clients tell us that working with a local team made the requirements phase alone significantly faster and more accurate.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header border-bottom border-color-light-medium-gray">
                                    <a href="javascript:void(0);" data-bs-toggle="collapse"
                                        data-bs-target="#accordion-style-01-12" aria-expanded="false"
                                        data-bs-parent="#accordion-style-01" class="collapsed">
                                        <div class="accordion-title mb-0 position-relative text-dark-gray">
                                            <i class="feather icon-feather-plus"></i><span class="fw-500 fs-17">What industries does Trionova serve as a software development company in Chennai?</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-01-12" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion-style-01">
                                    <div
                                        class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                        <p>We have active project experience in healthcare, logistics, real estate, education, retail, finance, and corporate travel — with clients both in Chennai and across India. Each of these sectors has specific workflow and compliance needs, and our team has built systems that address them directly rather than adapting generic templates.</p>
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


        <!-- start scroll progress -->
        <div class="scroll-progress d-none d-xxl-block">
            <a href="javascript:void(0);" class="scroll-top" aria-label="scroll">
                <span class="scroll-text">Scroll</span><span class="scroll-line"><span
                        class="scroll-point"></span></span>
            </a>
        </div>
        <!-- end scroll progress -->

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
                                If you're a business in Chennai looking for a software team that takes ownership from day one — or a company outside India that wants a technically strong, reliable development partner — we're ready to talk. Tell us what you're trying to build and we'll give you a straight answer about how we can help, what it will take, and what a realistic timeline looks like.
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
                                        <th>Basic Software </th>
                                        <th>Medium Software </th>
                                        <th>Advanced Software </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Business Automation Software (Basic Workflow Systems) </td>
                                        <td>Rs 80,000 </td>
                                        <td>Rs 1,50,000 </td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Custom Business Management Software (CRM / ERP Lite) </td>
                                        <td>Rs 1,20,000 </td>
                                        <td>Rs 2,50,000 </td>
                                        <td>Rs 4,00,000 </td>
                                    </tr>
                                    <tr>
                                        <td>Enterprise Software Application (Multi-Module System) </td>
                                        <td>Rs 2,50,000 </td>
                                        <td>Rs 5,00,000 </td>
                                        <td>Rs 8,50,000+</td>
                                    </tr>
                                    <tr>
                                        <td>UI/UX Design (Software Dashboards & Prototypes) </td>
                                        <td>Rs 30,000 </td>
                                        <td>Rs 60,000 </td>
                                        <td>Rs 1,00,000+</td>
                                    </tr>
                                    <tr>
                                        <td>SaaS Product Development </td>
                                        <td>Rs 3,00,000</td>
                                        <td>Rs 6,50,000 </td>
                                        <td>Rs 12,00,000 </td>
                                    </tr>
                                    <tr>
                                        <td>Custom Software Development (Node.js / Python / Java / .NET) </td>
                                        <td>Rs 2,00,000 </td>
                                        <td>Rs 4,50,000 </td>
                                        <td>Rs 9,00,000+</td>
                                    </tr>
                                    <tr>
                                        <td>API Development & Third-Party Integrations </td>
                                        <td>Rs 50,000 </td>
                                        <td>Rs 1,20,000 </td>
                                        <td>Rs 2,00,000</td>
                                    </tr>
                                    <tr>
                                        <td>Cloud Deployment & DevOps Setup </td>
                                        <td>Rs 40,000 </td>
                                        <td>Rs 80,000 </td>
                                        <td>Rs 1,50,000 </td>
                                    </tr>
                                    <tr>
                                        <td>Software Security Implementation </td>
                                        <td>Rs 50,000 </td>
                                        <td>Rs 1,00,000 </td>
                                        <td>Rs 2,00,000 </td>
                                    </tr>
                                    <tr>
                                        <td>Annual Maintenance & Support </td>
                                        <td>Rs 60,000 p.a </td>
                                        <td>Rs 1,00,000 p.a </td>
                                        <td>Rs 2,00,000 p.a</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <div class="desc">Note: The above prices are indicative estimates. Final costing depends on software
                    complexity, number of modules, integrations, user roles, scalability requirements, and chosen technology
                    stack. </div>
            </div>
            <!-- end contact form -->
        </div>

        <div id="subscribe-popup2"
            class="container subscribe-popup contact-form-style-01 position-relative text-center xs-p-0 mfp-hide">
            <!-- start contact form -->
            <div class="cost-popup bg-white">
                <h2 class="mb-4">Industry-Wise Software Development Cost & Timelines</h2>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Business Category </th>
                                        <th>Basic Software Cost (Approx) </th>
                                        <th>Advanced Software Cost (Approx) </th>
                                        <th>Time to Launch (Avg) </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Retail & E-commerce Management Software </td>
                                        <td>Rs 3,00,000 </td>
                                        <td>Rs 10,00,000 </td>
                                        <td>3 – 6 Months </td>
                                    </tr>
                                    <tr>
                                        <td>Healthcare Management Software (HMS / EMR) </td>
                                        <td>Rs 4,00,000 </td>
                                        <td>Rs 12,00,000 </td>
                                        <td>4 – 7 Months </td>
                                    </tr>
                                    <tr>
                                        <td>Financial & Banking Software </td>
                                        <td>Rs 5,00,000 </td>
                                        <td>Rs 15,00,000 </td>
                                        <td>5 – 8 Months </td>
                                    </tr>
                                    <tr>
                                        <td>Logistics & Fleet Management Software </td>
                                        <td>Rs 3,50,000 </td>
                                        <td>Rs 11,00,000 </td>
                                        <td>4 – 7 Months </td>
                                    </tr>
                                    <tr>
                                        <td>Real Estate CRM & Property Management Software </td>
                                        <td>Rs 3,00,000 </td>
                                        <td>Rs 9,50,000 </td>
                                        <td>3 – 6 Months </td>
                                    </tr>
                                    <tr>
                                        <td>Education & Learning Management Software (LMS) </td>
                                        <td>Rs 3,20,000 </td>
                                        <td>Rs 10,50,000 </td>
                                        <td>3 – 6 Months </td>
                                    </tr>
                                    <tr>
                                        <td>Hospitality & Restaurant Management Software </td>
                                        <td>Rs 2,50,000 </td>
                                        <td>Rs 8,00,000 </td>
                                        <td>2 – 5 Months </td>
                                    </tr>
                                    <tr>
                                        <td>Corporate Enterprise Management Software </td>
                                        <td>Rs 3,50,000 </td>
                                        <td>Rs 12,00,000 </td>
                                        <td>4 – 7 Months </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <h4 class="text-start">Key Features Influencing Website Development Cost </h4>
                <div class="desc text-start">
                    <ul>
                        <li><b>Technology Stack: </b> Node.js, Python, Java, .NET, React.js, Angular, Microservices
                            Architecture</li>
                        <li><b>Software Type:</b> Enterprise Software, SaaS Products, Business Automation Systems, CRM / ERP
                            Platforms
                        </li>
                        <li><b>Features Required: </b> Multi-user dashboards, Workflow automation, Role-based access
                            control, Reporting & analytics systems</li>

                        <li><b>Industry-Specific Requirements: </b> Healthcare data compliance (HIPAA-like standards),
                            Financial transaction security, Logistics tracking systems </li>

                        <li><b>System Complexity:</b> Multi-module architecture, Real-time data processing, AI-driven
                            automation, Advanced reporting systems.</li>

                        <li><b>Integrations:</b> ERP systems, CRM platforms, Payment gateways, Third-party APIs, AI &
                            Machine Learning models</li>
                    </ul>
                </div>
            </div>
            <!-- end contact form -->
        </div>

        <!-- javascript libraries -->
        {{-- <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/vendors.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        <script>
            $('#header').load('header.html')
           </script> --}}

        {{-- jQuery and Owl Carousel are already loaded by layouts/app.blade.php — CDN duplicates removed --}}
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> --}}

@endsection

@section('scripts')
        <script>
            $(document).ready(function() {

                var owl = $(".approach-carousel");

                owl.owlCarousel({
                    loop: true,
                    margin: 25,
                    nav: false,
                    dots: false,
                    autoplay: true, // automatic sliding
                    autoplayTimeout: 3500, // slide every 3.5 seconds
                    autoplayHoverPause: true, // pause when mouse hover
                    smartSpeed: 800, // smooth transition
                    responsive: {
                        0: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        1200: {
                            items: 3
                        }
                    }
                });

                /* arrows */

                $(".next-btn").click(function() {
                    owl.trigger("next.owl.carousel");
                });

                $(".prev-btn").click(function() {
                    owl.trigger("prev.owl.carousel");
                });

                /* step counter */

                owl.on("changed.owl.carousel", function(event) {

                    var index = event.item.index - event.relatedTarget._clones.length / 2;
                    var count = event.item.count;

                    if (index < 0) {
                        index = count + index;
                    }

                    index = index + 1;

                    $("#current").text(("0" + index).slice(-2));
                    $("#total").text(("0" + count).slice(-2));

                });

            });
        </script>

        <script>
            document.querySelectorAll(".features-box").forEach(box => {

                box.addEventListener("click", function() {

                    let target = this.getAttribute("data-target");

                    // remove active from content
                    document.querySelectorAll(".content-box").forEach(content => {
                        content.classList.remove("active");
                    });

                    // show selected content
                    document.getElementById(target).classList.add("active");

                    // remove active from boxes
                    document.querySelectorAll(".features-box").forEach(b => {
                        b.classList.remove("active");
                    });

                    // add active to clicked box
                    this.classList.add("active");

                });

            });
        </script>
@endsection
