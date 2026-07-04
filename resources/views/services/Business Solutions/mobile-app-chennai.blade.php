@extends('layouts.landing')

@section('title', 'Mobile App Development Company in Chennai | Trionova')

@section('meta')
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5JZ9G2GT');</script>
<!-- End Google Tag Manager -->
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/icon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mobile-chennai.css') }}?v=1.0.3">
@endpush

@section('content')
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5JZ9G2GT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <!-- ============ HEADER ============ -->
    <header id="hdr">
        <div class="mc-wrap mc-nav mx-0">
            <a class="mc-logo" href="{{ url('/') }}">
                <img src="{{ asset('images/trionova/head-logo.png') }}" alt="Trionova Logo">
            </a>
            <div class="mc-nav-right">
                <a class="mc-nav-call" href="tel:+919442132694">Call +91 94421 32694</a>
                <a class="mc-btn-pill mc-pulse cta-btn">Free Consultation</a>
            </div>
        </div>
    </header>

    <!-- ============ HERO ============ -->
    <section class="mc-hero" id="top">
        <h1 class="mc-reveal mc-in">Mobile App Development<br>Company in Chennai</h1>
        <p class="mc-sub mc-reveal mc-in d1">Build, Launch, and Grow with Trionova &mdash; Chennai&rsquo;s trusted mobile app development team for iOS, Android, and Flutter apps.</p>
        <video class="mc-hero-video" autoplay muted loop playsinline
            src="{{ asset('images/mobile-app-ad/hero-video.webm') }}"></video>
    </section>

    <!-- ============ STATS (phones parallax behind) ============ -->
    <section class="mc-stats">

        <!-- Background image layer -->
        <div class="mc-stats-bgs" aria-hidden="true">
            <div class="mc-stat-bg mc-bg-1"></div>
            <div class="mc-stat-bg mc-bg-2"></div>
            <div class="mc-stat-bg mc-bg-3"></div>
            <div class="mc-stat-bg mc-bg-4"></div>
        </div>

        <!-- Dark overlay for readability -->
        <div class="mc-stats-overlay" aria-hidden="true"></div>

        <div class="mc-wrap mc-stats-inner">
            <div class="mc-stat">
                <div class="mc-num" data-count="50" data-suffix="+">0</div>
                <div class="label">Apps Launched</div>
            </div>
            <div class="mc-stat">
                <div class="mc-num" data-count="100" data-suffix="+">0</div>
                <div class="label">Happy Clients</div>
            </div>
            <div class="mc-stat">
                <div class="mc-num" data-count="6" data-suffix="+">0</div>
                <div class="label">Years in Chennai</div>
            </div>
            <div class="mc-stat">
                <div class="mc-num" data-count="98" data-suffix="%">0</div>
                <div class="label">Client Satisfaction</div>
            </div>
        </div>
    </section>

    <!-- ============ GLOBAL SUCCESS + LOGO MARQUEE ============ -->
    <section class="mc-section">
        <div class="mc-wrap mc-center">
            <p class="eyebrow mc-reveal">Chennai-Based App Developers <b>Building Apps That Work</b></p>
        </div>
        <div class="mc-marquee mc-reveal d1">
            <div class="mc-marquee-track">
                {{-- Set 1 --}}
                <div class="mc-client-logo"><img src="{{ asset('images/mobile-app-chennai/clients/A-Team.webp') }}"
                        alt="A-Team" loading="lazy"></div>
                <div class="mc-client-logo"><img src="{{ asset('images/mobile-app-chennai/clients/ride.webp') }}"
                        alt="Ride" loading="lazy"></div>
                <div class="mc-client-logo"><img src="{{ asset('images/mobile-app-chennai/clients/Capsovision.webp') }}"
                        alt="Capsovision" loading="lazy"></div>
                <div class="mc-client-logo"><img src="{{ asset('images/mobile-app-chennai/clients/Cinemakaran.webp') }}"
                        alt="Cinemakaran" loading="lazy"></div>
                <div class="mc-client-logo"><img src="{{ asset('images/mobile-app-chennai/clients/Cliff-School.webp') }}"
                        alt="Cliff School" loading="lazy"></div>
                <div class="mc-client-logo"><img src="{{ asset('images/mobile-app-chennai/clients/Dots.webp') }}"
                        alt="Dots" loading="lazy"></div>
                <div class="mc-client-logo"><img src="{{ asset('images/mobile-app-chennai/clients/KS-Builders.webp') }}"
                        alt="KS Builders" loading="lazy"></div>
                <div class="mc-client-logo"><img
                        src="{{ asset('images/mobile-app-chennai/clients/Madura-Polymers.webp') }}"
                        alt="Madura Polymers" loading="lazy"></div>
                <div class="mc-client-logo"><img src="{{ asset('images/mobile-app-chennai/clients/Mirakle.webp') }}"
                        alt="Mirakle" loading="lazy"></div>
                <div class="mc-client-logo"><img
                        src="{{ asset('images/mobile-app-chennai/clients/Nova-Cosmetic.webp') }}" alt="Nova Cosmetic"
                        loading="lazy"></div>
                <div class="mc-client-logo"><img
                        src="{{ asset('images/mobile-app-chennai/clients/Spectrum-Life-School.webp') }}"
                        alt="Spectrum Life School" loading="lazy"></div>
                <div class="mc-client-logo"><img src="{{ asset('images/mobile-app-chennai/clients/WFB.webp') }}"
                        alt="WFB" loading="lazy"></div>
                <div class="mc-client-logo"><img
                        src="{{ asset('images/mobile-app-chennai/clients/ABHI-SK-HOSPITAL.webp') }}"
                        alt="Abhi SK Hospital" loading="lazy"></div>
                <div class="mc-client-logo"><img src="{{ asset('images/mobile-app-chennai/clients-2/ganesh.webp') }}"
                        alt="Ganesh" loading="lazy"></div>
                <div class="mc-client-logo"><img src="{{ asset('images/mobile-app-chennai/clients/mygate.svg') }}"
                        alt="MyGate" loading="lazy"></div>
                <div class="mc-client-logo"><img src="{{ asset('images/mobile-app-chennai/clients/hp.webp') }}"
                        alt="HP" loading="lazy"></div>
                <div class="mc-client-logo"><img src="{{ asset('images/mobile-app-chennai/clients/srdv.png') }}"
                        alt="SRDV" loading="lazy"></div>
                <div class="mc-client-logo"><img src="{{ asset('images/mobile-app-chennai/clients/make-my-trip.png') }}"
                        alt="MakeMyTrip" loading="lazy"></div>
                {{-- Duplicate set for seamless loop --}}
                <div class="mc-client-logo"><img src="{{ asset('images/mobile-app-chennai/clients/A-Team.webp') }}"
                        alt="A-Team" loading="lazy"></div>
                <div class="mc-client-logo"><img src="{{ asset('images/mobile-app-chennai/clients/ride.webp') }}"
                        alt="Ride" loading="lazy"></div>
                <div class="mc-client-logo"><img src="{{ asset('images/mobile-app-chennai/clients/Capsovision.webp') }}"
                        alt="Capsovision" loading="lazy"></div>
                <div class="mc-client-logo"><img src="{{ asset('images/mobile-app-chennai/clients/Cinemakaran.webp') }}"
                        alt="Cinemakaran" loading="lazy"></div>
                <div class="mc-client-logo"><img
                        src="{{ asset('images/mobile-app-chennai/clients/Cliff-School.webp') }}" alt="Cliff School"
                        loading="lazy"></div>
                <div class="mc-client-logo"><img src="{{ asset('images/mobile-app-chennai/clients/Dots.webp') }}"
                        alt="Dots" loading="lazy"></div>
                <div class="mc-client-logo"><img src="{{ asset('images/mobile-app-chennai/clients/KS-Builders.webp') }}"
                        alt="KS Builders" loading="lazy"></div>
                <div class="mc-client-logo"><img
                        src="{{ asset('images/mobile-app-chennai/clients/Madura-Polymers.webp') }}"
                        alt="Madura Polymers" loading="lazy"></div>
                <div class="mc-client-logo"><img src="{{ asset('images/mobile-app-chennai/clients/Mirakle.webp') }}"
                        alt="Mirakle" loading="lazy"></div>
                <div class="mc-client-logo"><img
                        src="{{ asset('images/mobile-app-chennai/clients/Nova-Cosmetic.webp') }}" alt="Nova Cosmetic"
                        loading="lazy"></div>
                <div class="mc-client-logo"><img
                        src="{{ asset('images/mobile-app-chennai/clients/Spectrum-Life-School.webp') }}"
                        alt="Spectrum Life School" loading="lazy"></div>
                <div class="mc-client-logo"><img src="{{ asset('images/mobile-app-chennai/clients/WFB.webp') }}"
                        alt="WFB" loading="lazy"></div>
                <div class="mc-client-logo"><img
                        src="{{ asset('images/mobile-app-chennai/clients/ABHI-SK-HOSPITAL.webp') }}"
                        alt="Abhi SK Hospital" loading="lazy"></div>
                <div class="mc-client-logo"><img src="{{ asset('images/mobile-app-chennai/clients-2/ganesh.webp') }}"
                        alt="Ganesh" loading="lazy"></div>
                <div class="mc-client-logo"><img src="{{ asset('images/mobile-app-chennai/clients/mygate.svg') }}"
                        alt="MyGate" loading="lazy"></div>
                <div class="mc-client-logo"><img src="{{ asset('images/mobile-app-chennai/clients/hp.webp') }}"
                        alt="HP" loading="lazy"></div>
                <div class="mc-client-logo"><img src="{{ asset('images/mobile-app-chennai/clients/srdv.png') }}"
                        alt="SRDV" loading="lazy"></div>
                <div class="mc-client-logo"><img
                        src="{{ asset('images/mobile-app-chennai/clients/make-my-trip.png') }}    " alt="MakeMyTrip"
                        loading="lazy"></div>
            </div>
        </div>
    </section>

    <!-- ============ APP SUCCESS (diagonal cards) ============ -->
    <section class="mc-section mc-section-cards">
        <div class="mc-wrap mc-center">
            <p class="eyebrow mc-reveal">Your 3 Factors for <b>App Success</b></p>
            <div class="mc-cards">
                <div class="mc-card">
                    <h3>Technology</h3>
                    <p>We build native iOS, Android, and Flutter apps using the latest frameworks. Our Chennai team has delivered 50+ mobile apps &mdash; you are in experienced hands from day one.</p>
                    <div class="art"><img
                            src="{{ asset('images/mobile-app-ad/app_success_technology_desktop.webp') }}"
                            alt="iOS, Android, Flutter"></div>
                </div>
                <div class="mc-card">
                    <h3>Design</h3>
                    <p>Great apps start with great design. Trionova&rsquo;s UI/UX team creates intuitive, visually polished app interfaces that keep users engaged and drive better App Store ratings.</p>
                    <div class="art"><img
                            src="{{ asset('images/mobile-app-ad/success-design.webp') }}"
                            alt="UI/UX Design"></div>
                </div>
                <div class="mc-card">
                    <h3>Delivery</h3>
                    <p>We follow an agile process with weekly progress demos. Your app is delivered on time, within budget, with full transparency at every sprint &mdash; no surprises at the end.</p>
                    <div class="art"><img
                            src="{{ asset('images/mobile-app-ad/success-delivery.webp') }}"
                            alt="On-time delivery"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ SUCCESS START BANNER ============ -->
    <section class="success-img-banner mc-reveal zoom">
        <img src="{{ asset('images/mobile-app-ad/app-success-img1.webp') }}"
            alt="">
    </section>

    <!-- ============ KEN BURNS BANNER (Quality) ============ -->
    <section class="quality-banner">
        <div class="mc-wrap mc-center">
            <h2 class="quality-title mc-reveal">Trionova&rsquo;s Quality is<br>Your App&rsquo;s Success Strategy</h2>
            <p class="quality-body mc-reveal d1">Every mobile app we build at Trionova goes through a rigorous quality process &mdash; from UI/UX design reviews and code audits to multi-device testing and security checks. We do not ship until it is right. That commitment to quality is why Chennai businesses keep coming back to us and why our apps consistently earn high ratings on the App Store and Play Store.</p>
        </div>
        <div class="quality-img pt-5 mc-reveal zoom d1">
            <img src="{{ asset('images/mobile-app-ad/app-success-img2.webp') }}"
                alt="Trionova Quality">
        </div>
    </section>

    <!-- ============ PORTFOLIO ============ -->
    <section class="portfolio" id="portfolio">
        <div class="mc-wrap">
            <h2 class="bigtitle mc-reveal mc-center">Portfolio</h2>
            <p class="mc-reveal d1 mc-center mc-port-intro">
                Trionova&rsquo;s mobile app portfolio includes startups, local businesses, and growing enterprises across Chennai and beyond. Every app below was built by our in-house team &mdash; designed, developed, and delivered to real users.</p>

            <div class="owl-carousel mc-portfolio-owl mc-reveal d1">

                {{-- Case 1: Madhura Polymers --}}
                <div class="mc-case-card">
                    <div class="mc-case-img">
                        <img src="{{ asset('images/mobile-app-chennai/case-study/Madhura-Polymers.webp') }}" alt="Madhura Polymers">
                    </div>
                    <div class="mc-case-content">
                        <h3 class="mc-case-title">Madhura Polymers</h3>
                        <img src="{{ asset('images/mobile-app-ad/clients/madura-polymers.webp') }}" alt="Madhura Polymers logo" class="mc-case-logo">
                        <p class="mc-case-tag"><em>Streamlining Sales, Finance, and Operations for Greater Business Efficiency</em></p>
                        <div class="mc-case-stack">
                            <span class="mc-stack-pill" style="background:#0d47a1">Flutter</span>
                            <span class="mc-stack-pill" style="background:#e23a70">MSSQL</span>
                            <span class="mc-stack-pill" style="background:#0b3632">Amazon</span>
                            <span class="mc-stack-pill" style="background:#724dbe">RDS</span>
                            <span class="mc-stack-pill" style="background:#4a90e2">PostgreSQL</span>
                        </div>
                        <h4 class="mc-case-overview-title">Overview</h4>
                        <p class="mc-case-overview">The ERP application developed for <strong>Madhura Polymers</strong> is a <strong>comprehensive business management solution</strong> designed to unify their sales, finance, and operational processes. From <strong>profit and loss tracking to pending payments, transportation costs, and billing,</strong> this single platform provides real-time insights, helping the company <strong>improve decision-making and operational control.</strong></p>
                    </div>
                </div>

                {{-- Case 2: Abhi Hospitals --}}
                <div class="mc-case-card">
                    <div class="mc-case-img">
                        <img src="{{ asset('images/mobile-app-chennai/case-study/Abhi-Hospitals.webp') }}" alt="Abhi Hospitals">
                    </div>
                    <div class="mc-case-content">
                        <h3 class="mc-case-title">Abhi Hospitals</h3>
                        <img src="{{ asset('images/mobile-app-ad/clients/abhi-hospital.webp') }}" alt="Abhi Hospitals logo" class="mc-case-logo">
                        <p class="mc-case-tag"><em>Simplifying Healthcare Access for Patients</em></p>
                        <div class="mc-case-stack">
                            <span class="mc-stack-pill" style="background:#ffc702;color:#000">MongoDB</span>
                            <span class="mc-stack-pill" style="background:#0b3632">AngularJS</span>
                            <span class="mc-stack-pill" style="background:#724dbe">Node.js</span>
                        </div>
                        <h4 class="mc-case-overview-title">Overview</h4>
                        <p class="mc-case-overview">The Abhi Hospital app is designed to deliver a seamless digital healthcare experience, connecting patients with hospital services at their fingertips. Built with a focus on <strong>convenience, accuracy, and security</strong>, the app caters to appointment scheduling, medical records access, and pharmacy billing — ensuring both patients and hospital staff benefit from an efficient system.</p>
                    </div>
                </div>

                {{-- Case 3: ATeam --}}
                <div class="mc-case-card">
                    <div class="mc-case-img">
                        <img src="{{ asset('images/mobile-app-chennai/case-study/A-Team.webp') }}" alt="ATeam">
                    </div>
                    <div class="mc-case-content">
                        <h3 class="mc-case-title">ATeam &ndash; Real-Time Social Media Platform</h3>
                        <img src="{{ asset('images/mobile-app-ad/clients/ateam.webp') }}" alt="ATeam logo" class="mc-case-logo">
                        <p class="mc-case-tag"><em>Connecting People Through Live News, Photos, and Videos</em></p>
                        <div class="mc-case-stack">
                            <span class="mc-stack-pill" style="background:#e23a70">Machine Learning &amp; AI</span>
                            <span class="mc-stack-pill" style="background:#0b3632">Elasticsearch</span>
                            <span class="mc-stack-pill" style="background:#724dbe">Redis</span>
                            <span class="mc-stack-pill" style="background:#4a90e2">DevOps</span>
                        </div>
                        <h4 class="mc-case-overview-title">Overview</h4>
                        <p class="mc-case-overview">The <strong>ATeam app</strong> is a modern social media platform designed to keep users connected with what is happening around them in real time. Built for <strong>sharing live updates, photos, and videos</strong>, it also offers users a <strong>personal gallery</strong> to manage their content — creating an engaging community experience tailored for <strong>instant news and personal storytelling.</strong></p>
                    </div>
                </div>

                {{-- Case 4: Ride Yellow --}}
                <div class="mc-case-card">
                    <div class="mc-case-img">
                        <img src="{{ asset('images/mobile-app-chennai/case-study/Ride-mob.webp') }}" alt="Ride Yellow">
                    </div>
                    <div class="mc-case-content">
                        <h3 class="mc-case-title">Ride Yellow &ndash; AI-Powered Corporate Travel App</h3>
                        <img src="{{ asset('images/mobile-app-ad/clients/ride-yellow.webp') }}" alt="Ride Yellow logo" class="mc-case-logo">
                        <p class="mc-case-tag"><em>Reimagining Employee Travel with Security and Intelligence</em></p>
                        <div class="mc-case-stack">
                            <span class="mc-stack-pill" style="background:#e23a70">PHP</span>
                            <span class="mc-stack-pill" style="background:#0b3632">MongoDB</span>
                            <span class="mc-stack-pill" style="background:#724dbe">CodeIgniter</span>
                        </div>
                        <h4 class="mc-case-overview-title">Overview</h4>
                        <p class="mc-case-overview">The Ride Yellow app is a cutting-edge corporate travel solution designed to streamline employee transportation while ensuring <strong>top-tier safety and efficiency.</strong> Built with <strong>AI-driven travel booking features</strong> and an <strong>AI camera security system</strong> for in-vehicle monitoring, the platform enables companies to manage daily commute operations with unparalleled convenience and reliability.</p>
                    </div>
                </div>

                {{-- Case 5: Dots --}}
                <div class="mc-case-card">
                    <div class="mc-case-img">
                        <img src="{{ asset('images/mobile-app-chennai/case-study/Dots.webp') }}" alt="Dots">
                    </div>
                    <div class="mc-case-content">
                        <h3 class="mc-case-title">Dots &ndash; On-Demand Classified &amp; Services App</h3>
                        <img src="{{ asset('images/mobile-app-ad/clients/dots.webp') }}" alt="Dots logo" class="mc-case-logo">
                        <p class="mc-case-tag"><em>Connecting Users to Nearby Services and Opportunities Instantly</em></p>
                        <div class="mc-case-stack">
                            <span class="mc-stack-pill" style="background:#e23a70">Node.js</span>
                            <span class="mc-stack-pill" style="background:#0b3632">React JS</span>
                            <span class="mc-stack-pill" style="background:#724dbe">MongoDB</span>
                            <span class="mc-stack-pill" style="background:#4a90e2">AWS CloudFront</span>
                        </div>
                        <h4 class="mc-case-overview-title">Overview</h4>
                        <p class="mc-case-overview">The <strong>Dots app</strong> is an innovative classified platform designed to help users <strong>discover, book, and advertise on-demand services</strong> in their local area. Whether it is finding a handyman, booking a beauty service, or promoting a local business, Dots creates a <strong>seamless bridge between service providers and customers,</strong> all in one easy-to-use mobile application.</p>
                    </div>
                </div>

                {{-- Case 6: Ganesh Electricals --}}
                <div class="mc-case-card">
                    <div class="mc-case-img">
                        <img src="{{ asset('images/mobile-app-chennai/case-study/Ganesh-Electricals.webp') }}" alt="Ganesh Electricals">
                    </div>
                    <div class="mc-case-content">
                        <h3 class="mc-case-title">Ganesh Electricals &ndash; AI-Powered Billing Software</h3>
                        <img src="{{ asset('images/mobile-app-ad/clients/ganesh-electricals.webp') }}" alt="Ganesh Electricals logo" class="mc-case-logo">
                        <p class="mc-case-tag"><em>Streamlining Purchase Orders and Invoice Billing Operations</em></p>
                        <div class="mc-case-stack">
                            <span class="mc-stack-pill" style="background:#e23a70">Node.js</span>
                            <span class="mc-stack-pill" style="background:#0b3632">MongoDB</span>
                            <span class="mc-stack-pill" style="background:#724dbe">Socket.IO</span>
                            <span class="mc-stack-pill" style="background:#4a90e2">Angular</span>
                        </div>
                        <h4 class="mc-case-overview-title">Overview</h4>
                        <p class="mc-case-overview">The <strong>Ganesh Electricals system</strong> is designed to streamline purchase order and invoice billing operations, delivering a seamless digital experience for finance and operations teams. Built with a focus on accuracy, automation, and financial control, the platform simplifies billing workflows, reduces manual errors, and ensures efficient transaction management — helping businesses operate faster and smarter.</p>
                    </div>
                </div>

            </div>

            <p class="mc-reveal mc-center mc-port-closing">
                From healthcare and logistics to social platforms, retail, and education &mdash; we build mobile apps for the industries that matter to Chennai businesses.</p>
            <div class="mc-center"><a class="mc-btn-pill mc-reveal cta-btn" href="#">Free Consultation</a></div>
        </div>
    </section>

    <!-- ============ PORTFOLIO BANNER (Ken Burns) ============ -->
    <section class="banner">
        <div class="bg kenburns kenburns-portfolio"></div>
    </section>

    <!-- ============ RAPID AGILE ============ -->
    <section class="band agile-centered">
        <div class="mc-wrap mc-center">

            <h2 class="mc-reveal">Rapid Agile Development</h2>
            <p class="agile-sub mc-reveal d1">App ideas are only valuable when they reach users fast. With Trionova&rsquo;s agile development process, your project moves in focused 2-week sprints &mdash; each one ending with a working demo you can see, test, and give feedback on. You are never left waiting months to see your first result. Every week, there is tangible progress.</p>

            <div class="agile-centered-media mc-reveal fade-right d1">
                <video autoplay muted loop playsinline
                    src="{{ asset('images/mobile-app-ad/flip-animation.mp4') }}"></video>
            </div>

            <h2 class="mc-reveal mc-h2-comm">Outstanding Communication</h2>
            <p class="agile-sub mc-reveal d1">Your mobile app is only as good as the communication between you and the team building it. At Trionova, you speak directly with the developers and designers working on your project &mdash; not account managers or middlemen. You get honest updates, fast responses, and a team that genuinely understands what you are trying to build.</p>
            <a class="mc-btn-pill mc-reveal d1 cta-btn" >Free Consultation</a>

        </div>
    </section>

    <!-- ============ OUTSTANDING COMMUNICATION IMAGE ============ -->
    <section class="fullwidth-img-banner mc-reveal zoom">
        <img src="{{ asset('images/mobile-app-ad/outstanding-communication.webp') }}"
            alt="">
    </section>

    <!-- ============ PROVEN INNOVATION (phone fan) ============ -->
    <section class="band">
        <div class="mc-wrap">
            <h2 class="mc-reveal mc-h2-proven">Proven Innovation</h2>
            <p class="mc-reveal d1 mc-proven-desc" style="max-width: 100%;">
                Trionova is one of the few mobile app development companies in Chennai that can back up claims of innovation with real products. From AI-powered corporate travel management to real-time social platforms and smart billing systems &mdash; we have built apps that solve real problems in ways that have not been done before in our clients&rsquo; industries.</p>
            <div class="mc-awards-grid mc-reveal d1">
                <div class="mc-award-card">
                    <img src="{{ asset('images/mobile-app/app-development-01.webp') }}" alt="SoftwareWorld Top Rated">
                    <p>App Development Company of the Year</p>
                </div>
                <div class="mc-award-card">
                    <img src="{{ asset('images/mobile-app/app-development-03.webp') }}" alt="SuperbCompanies Top Mobile App Development">
                    <p>Best Mobile App Developers in Chennai</p>
                </div>
                <div class="mc-award-card">
                    <img src="{{ asset('images/mobile-app/app-development-05.webp') }}" alt="Mobile App Daily Featured">
                    <p>Top Mobile App Development Company</p>
                </div>
                <div class="mc-award-card">
                    <img src="{{ asset('images/mobile-app/app-development-02.webp') }}" alt="TopDevelopers Top Mobile App Developers">
                    <p>Top Mobile App Development Company in Chennai</p>
                </div>
                <div class="mc-award-card">
                    <img src="{{ asset('images/mobile-app/app-development-04.webp') }}" alt="Clutch Top App Development Company">
                    <p>Best Mobile App Development Services Provider</p>
                </div>
                <div class="mc-award-card">
                    <img src="{{ asset('images/mobile-app/app-development-06.webp') }}" alt="GoodFirms Leading Mobile App Company">
                    <p>Leading Mobile App Development Company in Chennai</p>
                </div>
            </div>

            {{-- Cascading phone stack --}}
            <div class="mc-pstack">
                <div class="mc-pstack-ph ps1"><img src="{{ asset('images/mobile-app-ad/mobile-7.webp') }}"
                        alt="iTrackit screen 1"></div>
                <div class="mc-pstack-ph ps2"><img src="{{ asset('images/mobile-app-ad/mobile-8.webp') }}"
                        alt="iTrackit screen 2"></div>
                <div class="mc-pstack-ph ps3"><img src="{{ asset('images/mobile-app-ad/mobile-9.webp') }}"
                        alt="Vello screen 1"></div>
                <div class="mc-pstack-ph ps4"><img src="{{ asset('images/mobile-app-ad/mobile-10.webp') }}"
                        alt="Vello screen 2"></div>
            </div>

            <h2 class="mc-reveal mc-h2-patent">
                We Built an AI Security System That Enterprises Now Depend On.</h2>
            <p class="mc-reveal d1 mc-patent-desc">For Ride Yellow, Trionova developed an in-vehicle AI camera security system that monitors driver and passenger safety in real time. This was a first-of-its-kind feature for corporate travel management in Chennai &mdash; built entirely in-house by our team. It is now actively used across 12 enterprise clients managing 8,000+ employee trips every month.</p>

            {{-- Cascading phone stack 2 --}}
            <div class="mc-pstack">
                <div class="mc-pstack-ph ps1"><img src="{{ asset('images/mobile-app-ad/mobile-3.webp') }}"
                        alt="Dimers screen 1"></div>
                <div class="mc-pstack-ph ps2"><img src="{{ asset('images/mobile-app-ad/mobile-4.webp') }}"
                        alt="Dimers screen 2"></div>
                <div class="mc-pstack-ph ps3"><img src="{{ asset('images/mobile-app-ad/mobile-5.webp') }}"
                        alt="MyDeal screen 1"></div>
                <div class="mc-pstack-ph ps4"><img src="{{ asset('images/mobile-app-ad/mobile-6.webp') }}"
                        alt="MyDeal screen 2"></div>
            </div>
        </div>
    </section>


    <!-- ============ TESTIMONIALS ============ -->
    <section class="mc-section">
        <div class="mc-wrap mc-center">
            <h2 class="bigtitle mc-reveal mc-h2-testimonials">Clients Love Trionova!</h2>
            <div class="mc-testimonial-owl owl-carousel mc-reveal d1">
                <div class="mc-quote">
                    <div class="mc-logo-tag">Dots</div>
                    <p>&ldquo;Trionova Technologies delivered an exceptional mobile app that perfectly aligned with our business needs. Their team demonstrated strong technical expertise, clear communication, and a commitment to quality.&rdquo;</p>
                    <div class="by">
                        <div class="av"><img src="{{ asset('images/mobile-app-chennai/clients/Dots.webp') }}" alt="Dots"></div>
                        <div>
                            <div class="n">Panner Selvam</div>
                            <div class="r">CEO, Dots</div>
                        </div>
                    </div>
                </div>
                <div class="mc-quote">
                    <div class="mc-logo-tag">Ride Yellow</div>
                    <p>&ldquo;Working with Trionova was a great experience. They built a robust and scalable mobile application that enhanced our service delivery. Their professionalism, timely execution, and attention to detail truly set them apart.&rdquo;</p>
                    <div class="by">
                        <div class="av"><img src="{{ asset('images/mobile-app-chennai/clients/ride.webp') }}" alt="Ride Yellow"></div>
                        <div>
                            <div class="n">Jackson Fraser</div>
                            <div class="r">Director, Ride Yellow</div>
                        </div>
                    </div>
                </div>
                <div class="mc-quote">
                    <div class="mc-logo-tag">Capsovision</div>
                    <p>&ldquo;Trionova Technologies created a modern and highly functional website for us. Their understanding of UI/UX and business requirements was impressive. The website not only looks great but also performs seamlessly.&rdquo;</p>
                    <div class="by">
                        <div class="av"><img src="{{ asset('images/mobile-app-chennai/clients/Capsovision.webp') }}" alt="Capsovision"></div>
                        <div>
                            <div class="n">Kang-Huai</div>
                            <div class="r">Director, Capsovision</div>
                        </div>
                    </div>
                </div>
                <div class="mc-quote">
                    <div class="mc-logo-tag">Ganesh Electricals</div>
                    <p>&ldquo;The AI-integrated software developed by Trionova has transformed our operations. Automation and smart insights have helped us save time and improve efficiency. Their team delivered exactly what we needed with excellent support.&rdquo;</p>
                    <div class="by">
                        <div class="av"><img src="{{ asset('images/mobile-app-chennai/clients-2/ganesh.webp') }}" alt="Ganesh Electricals"></div>
                        <div>
                            <div class="n">B. Kumareson</div>
                            <div class="r">Founder, Ganesh Electricals</div>
                        </div>
                    </div>
                </div>
                <div class="mc-quote">
                    <div class="mc-logo-tag">Abhi SK Hospital</div>
                    <p>&ldquo;Trionova Technologies developed a highly efficient and secure AI-powered system for our hospital. It streamlined our workflow, reduced manual effort, and improved patient management. We are extremely satisfied with their work.&rdquo;</p>
                    <div class="by">
                        <div class="av"><img src="{{ asset('images/mobile-app-chennai/clients/ABHI-SK-HOSPITAL.webp') }}" alt="Abhi SK Hospital"></div>
                        <div>
                            <div class="n">Dr. Nanditha R</div>
                            <div class="r">Chief Doctor &amp; Director, Abhi SK Hospital</div>
                        </div>
                    </div>
                </div>
                <div class="mc-quote">
                    <div class="mc-logo-tag">Cliff School</div>
                    <p>&ldquo;The website developed by Trionova perfectly represents our institution. It is user-friendly, informative, and visually appealing. Their team was professional and ensured timely delivery.&rdquo;</p>
                    <div class="by">
                        <div class="av"><img src="{{ asset('images/mobile-app-chennai/clients/Cliff-School.webp') }}" alt="Cliff School"></div>
                        <div>
                            <div class="n">Mr. Alexander Barnabas</div>
                            <div class="r">Principal, Cliff School</div>
                        </div>
                    </div>
                </div>
                <div class="mc-quote">
                    <div class="mc-logo-tag">Spectrum Life School</div>
                    <p>&ldquo;Trionova delivered a well-structured and engaging website for our school. Their attention to detail and ability to understand our requirements made the entire process smooth and efficient.&rdquo;</p>
                    <div class="by">
                        <div class="av"><img src="{{ asset('images/mobile-app-chennai/clients/Spectrum-Life-School.webp') }}" alt="Spectrum Life School"></div>
                        <div>
                            <div class="n">Anipriya Vignesh</div>
                            <div class="r">Academic Director, Spectrum Life School</div>
                        </div>
                    </div>
                </div>
                <div class="mc-quote">
                    <div class="mc-logo-tag">Nova Cosmetic</div>
                    <p>&ldquo;Trionova Technologies provided end-to-end digital solutions for our business. From mobile apps to web platforms, everything was delivered with precision and quality. Their expertise has helped us scale efficiently.&rdquo;</p>
                    <div class="by">
                        <div class="av"><img src="{{ asset('images/mobile-app-chennai/clients/Nova-Cosmetic.webp') }}" alt="Nova Cosmetic"></div>
                        <div>
                            <div class="n">Dr. V. Raja</div>
                            <div class="r">Director, Nova Cosmetic</div>
                        </div>
                    </div>
                </div>
                <div class="mc-quote">
                    <div class="mc-logo-tag">Madura Polymers</div>
                    <p>&ldquo;The team at Trionova developed powerful and scalable digital solutions for our company. Their technical strength and commitment to delivering value made a significant impact on our business operations.&rdquo;</p>
                    <div class="by">
                        <div class="av"><img src="{{ asset('images/mobile-app-chennai/clients/Madura-Polymers.webp') }}" alt="Madura Polymers"></div>
                        <div>
                            <div class="n">Shah NM</div>
                            <div class="r">CEO, Madura Polymers</div>
                        </div>
                    </div>
                </div>
                <div class="mc-quote">
                    <div class="mc-logo-tag">Mirakle</div>
                    <p>&ldquo;Trionova Technologies exceeded our expectations with their comprehensive development services. Their innovative approach and dedication to quality helped us achieve our digital transformation goals successfully.&rdquo;</p>
                    <div class="by">
                        <div class="av"><img src="{{ asset('images/mobile-app-chennai/clients/Mirakle.webp') }}" alt="Mirakle"></div>
                        <div>
                            <div class="n">Minackam</div>
                            <div class="r">CEO, Mirakle</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ CONTACT ============ -->
    <section class="mc-contact" id="contact">
        <div class="mc-contact-network" aria-hidden="true"></div>
        <div class="mc-wrap">
            <span class="contact-badge mc-reveal">Get to Know Trionova</span>
            <h2 class="mc-reveal d1">Have a Mobile App Idea?<br>Let&rsquo;s Talk.</h2>
            <div class="mc-reveal d2 mc-contact-cta">
                <a class="mc-contact-btn" href="{{ url('/contact') }}">
                    Contact Us
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5" aria-hidden="true">
                        <line x1="5" y1="12" x2="19" y2="12" />
                        <polyline points="12 5 19 12 12 19" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- ============ FOOTER ============ -->
    <footer class="footer-hp">
        <div class="container">
            <div class="row justify-content-center footer-link mc-stagger">

                <!-- Quick Links -->
                <div class="col-6 col-lg-2 col-sm-12 mb-2">
                    <div class="footer-section-title">Quick Links</div>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/about-us') }}">About Us</a></li>
                        <li><a href="{{ url('/blogs/') }}">Blogs</a></li>
                        <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                    </ul>
                    <div class="elements-social">
                        <a class="facebook" href="https://www.facebook.com/trionovatechnologies/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                        <a class="linkedin" href="https://www.linkedin.com/company/trionova-technologies-private-limited/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                        <a class="twitter" href="https://x.com/TrionovaTech" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                        <a class="instagram" href="https://www.instagram.com/trionova_technologies/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>

                <!-- Business Solutions -->
                <div class="col-6 col-lg-3 col-sm-12 mb-2">
                    <div class="footer-section-title">Business Solutions</div>
                    <ul>
                        <li><a href="{{ url('/software-development') }}">Software Development</a></li>
                        <li><a href="{{ url('/mobile-app-company-in-chennai') }}">Mobile App Development</a></li>
                        <li><a href="{{ url('/consulting') }}">Consulting</a></li>
                        <li><a href="{{ url('/Support') }}">Support</a></li>
                        <li><a href="{{ url('/flutter-app-development-company-in-chennai') }}">Flutter App Development</a></li>
                    </ul>
                </div>

                <!-- Engineering -->
                <div class="col-6 col-lg-2 col-sm-12 mb-2">
                    <div class="footer-section-title">Engineering</div>
                    <ul>
                        <li><a href="{{ url('/cloud-service') }}">Cloud Service</a></li>
                        <li><a href="{{ url('/AI') }}">AI Development</a></li>
                        <li><a href="{{ url('/products') }}">Products</a></li>
                        <li><a href="{{ url('/Data-Science') }}">Data Science</a></li>
                    </ul>
                </div>

                <!-- Digital Marketing -->
                <div class="col-6 col-lg-2 col-sm-12 mb-2">
                    <div class="footer-section-title">Digital Marketing</div>
                    <ul>
                        <li><a href="{{ url('/ui-ux-design') }}">UI UX Design</a></li>
                        <li><a href="{{ url('/Web-Development') }}">Web Development</a></li>
                        <li><a href="{{ url('/seo-sem-company-in-chennai') }}">SEO &amp; SEM</a></li>
                        <li><a href="{{ url('/google-services') }}">Google Services</a></li>
                    </ul>
                </div>

                <!-- Address -->
                <div class="col-lg-3 col-sm-12 mb-2">
                    <div class="footer-section-title">Our Address</div>
                    <p class="mb-2 footer-flex"><i class="feather icon-feather-map-pin fs-18 me-2"></i>
                        128, 2nd Floor, Second Street, Shanthi Nagar, Chromepet, Chennai 600044
                    </p>
                    <p class="mb-2 footer-flex"><i class="feather icon-feather-map-pin fs-18 me-2"></i>
                        829 birchmount Rd, Scarborough Ontario Canada M1K1R9.
                    </p>
                    <p class="mb-2"><i class="feather icon-feather-phone-call fs-18 me-2"></i>
                        <a href="tel:+919442132694">+91 94421 32694</a>
                    </p>
                    <p class="mb-2"><i class="feather icon-feather-phone-call fs-18 me-2"></i>
                        <a href="tel:+16473265103">+1 647-326-5103</a>
                    </p>
                    <p><i class="feather icon-feather-mail fs-18 me-2"></i>
                        <a href="mailto:info@trionova.in">info@trionova.in</a>
                    </p>
                </div>

            </div>
            <div class="footer-divider"></div>
            <div class="footer-bottom">
                <div>© Copyright 2026. All Rights Reserved by Trionova</div>
                <ul class="footer-navbar">
                    <li><a href="{{ url('/privacypolicy') }}">Privacy policy</a></li>
                    <li><a href="{{ url('/termsandconditions') }}">Terms and conditions</a></li>
                    <li><a href="{{ url('/copy-rights') }}">Copyright</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <div id="call-to-action"
        class="container subscribe-popup contact-form-style-01 position-relative text-center mfp-hide">

        <div class="row g-0 align-items-stretch mc-popup-row">

            <div class="form-bg"></div>

            <!-- Left Image -->
            <div class="col-lg-6 col-md-12 br-17px mc-popup-col">
                <div class="form-part1-container">
                    <div>
                        <h1>Let&rsquo;s Build Your Mobile App.</h1>
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
            <div class="col-lg-6 col-md-12 align-items-center bl-17px mc-popup-col">

                <div class="form-part2-container">
                    <h5 class="text-dark pb-1">
                        Start your business
                    </h5>

                    @include('common.contact-form')
                </div>

            </div>

        </div>

    </div>


@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="{{ asset('js/mobile-chennai.js') }}?v=1.0.3"></script>
    <script>
    window.addEventListener('load', function () {

        /* ---- Popup ---- */
        var captchaWidgetId = null;

        $('.cta-btn').magnificPopup({
            items: { src: '#call-to-action', type: 'inline' },
            mainClass: 'my-mfp-zoom-in',
            fixedContentPos: true,
            callbacks: {
                open: function () {
                    var captchaEl = document.querySelector('#call-to-action .g-recaptcha');
                    if (!captchaEl || typeof grecaptcha === 'undefined') return;
                    if (captchaWidgetId === null) {
                        captchaWidgetId = grecaptcha.render(captchaEl, {
                            sitekey: captchaEl.getAttribute('data-sitekey')
                        });
                    } else {
                        grecaptcha.reset(captchaWidgetId);
                    }
                }
            }
        });

        /* ---- Form validation ---- */
        $(document).on('submit', '.Contact-Form', function (e) {
            var form = this;
            var valid = true;

            form.querySelectorAll('.error').forEach(function (el) { el.innerText = ''; });

            var name     = form.querySelector('.name-field').value.trim();
            var email    = form.querySelector('.email-field').value.trim();
            var phone    = form.querySelector('.phone-field').value.trim();
            var business = form.querySelector('.business-field').value.trim();

            if (!name || name.length < 3) {
                form.querySelector('.name-error').innerText = name ? 'Name must be at least 3 characters.' : 'Please complete this required field.';
                valid = false;
            }
            var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/i;
            if (!email) {
                form.querySelector('.email-error').innerText = 'Please complete this required field.';
                valid = false;
            } else if (!emailPattern.test(email)) {
                form.querySelector('.email-error').innerText = 'Enter a valid email address.';
                valid = false;
            }
            var phonePattern = /^[6-9]\d{9}$/;
            if (!phone) {
                form.querySelector('.phone-error').innerText = 'Please complete this required field.';
                valid = false;
            } else if (!phonePattern.test(phone)) {
                form.querySelector('.phone-error').innerText = 'Enter a valid 10-digit phone number.';
                valid = false;
            }
            if (!business) {
                form.querySelector('.business-error').innerText = 'Please complete this required field.';
                valid = false;
            }
            if (captchaWidgetId !== null && !grecaptcha.getResponse(captchaWidgetId)) {
                form.querySelector('.captcha-error').innerText = 'Please verify that you are not a robot.';
                valid = false;
            }

            if (!valid) { e.preventDefault(); return; }

            var btn = form.querySelector('#submitBtn');
            if (btn) {
                btn.disabled = true;
                var t = btn.querySelector('.btn-text'),
                    l = btn.querySelector('.btn-loader');
                if (t) t.style.display = 'none';
                if (l) l.style.display = 'inline-block';
            }
        });

        /* ---- UTM / gclid passthrough ---- */
        ['gclid','utm_source','utm_medium','utm_campaign'].forEach(function (key) {
            var el = document.getElementById(key);
            if (el) el.value = new URLSearchParams(window.location.search).get(key) || '';
        });

    });
    </script>
@endpush

