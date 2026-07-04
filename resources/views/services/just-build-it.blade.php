<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Just Build It | Trionova — Mobile App Development Company in Chennai</title>
<meta name="description" content="Design, develop and launch your mobile app with Trionova — Chennai's award-winning app development studio. Android, iOS & Flutter apps built for growth.">
<meta property="og:title" content="Just Build It | Trionova Technology">
<meta property="og:image" content="{{ asset('images/mobile-app-chennai/mob-dev-banner.webp') }}">
<link rel="canonical" href="{{ url()->current() }}">
<link rel="icon" href="{{ asset('images/trionova/favicon1.png') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/just-build-it/css/style.css') }}">
</head>
<body class="jbi-body">

{{-- ═══ HEADER ══════════════════════════════════════════════════════════════════════ --}}
<header class="jbi-header" id="jbi-header">
    <div class="jbi-header__wrap">
        <a href="/" class="jbi-header__logo">
            <img src="{{ asset('images/logo.png') }}" alt="Trionova Technology" width="150" height="40">
        </a>
        <nav class="jbi-nav" id="jbi-nav">
            <ul class="jbi-nav__list">
                <li><a href="#jbi-factors"   class="jbi-nav__link">Technology</a></li>
                <li><a href="#jbi-portfolio"  class="jbi-nav__link">Portfolio</a></li>
                <li><a href="#jbi-agile"      class="jbi-nav__link">Process</a></li>
                <li><a href="#jbi-innov"      class="jbi-nav__link">Innovation</a></li>
                <li><a href="#jbi-contact"    class="jbi-nav__link">Contact</a></li>
            </ul>
        </nav>
        <div class="jbi-header__right">
            <a href="#jbi-contact" class="jbi-btn jbi-btn--fill jbi-header__cta">Start Now</a>
            <button class="jbi-hamburger" id="jbi-hamburger" aria-label="Menu" aria-expanded="false">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</header>

{{-- ═══ §1 HERO ════════════════════════════════════════════════════════════════════ --}}
<section class="jbi-hero" id="jbi-hero">
    <video class="jbi-hero__vid" autoplay muted loop playsinline
           poster="{{ asset('images/mobile-app-chennai/mob-dev-banner.webp') }}">
        <source src="{{ asset('images/mobile-app-chennai/Untitled-design.mp4') }}" type="video/mp4">
    </video>
    <div class="jbi-hero__ov"></div>

    <div class="jbi-wrap jbi-hero__inner">
        <div class="jbi-hero__copy">
            <div class="jbi-badge" id="jbi-anim-badge">
                <span class="jbi-badge__dot"></span>
                Chennai&rsquo;s #1 Award-Winning App Studio
            </div>
            <h1 class="jbi-hero__h" id="jbi-anim-h">Just<br>Build It.</h1>
            <p class="jbi-hero__sub" id="jbi-anim-sub">Design, Develop &amp; Launch in 90 Days</p>
            <p class="jbi-hero__desc" id="jbi-anim-desc">Android, iOS &amp; Flutter apps built in Chennai for startups, SMEs and enterprises across India and Canada.</p>
            <div class="jbi-hero__btns" id="jbi-anim-btns">
                <a href="#jbi-contact" class="jbi-btn jbi-btn--fill">Start Now</a>
                <a href="#jbi-portfolio" class="jbi-btn jbi-btn--ghost">View Portfolio</a>
            </div>
        </div>
        <div class="jbi-hero__phones" id="jbi-anim-phones">
            <div class="jbi-ph jbi-ph--1"><div class="jbi-fone"><img src="{{ asset('images/mobile-app-chennai/case-study/Abhi-Hospitals.webp') }}" alt="" loading="eager"></div></div>
            <div class="jbi-ph jbi-ph--2"><div class="jbi-fone"><img src="{{ asset('images/mobile-app-chennai/case-study/Madhura-Polymers.webp') }}" alt="" loading="eager"></div></div>
            <div class="jbi-ph jbi-ph--3"><div class="jbi-fone"><img src="{{ asset('images/mobile-app-chennai/case-study/Ride-mob.webp') }}" alt="" loading="lazy"></div></div>
            <div class="jbi-ph jbi-ph--4"><div class="jbi-fone"><img src="{{ asset('images/mobile-app-chennai/case-study/Dots.webp') }}" alt="" loading="lazy"></div></div>
        </div>
    </div>
    <div class="jbi-hero__cue" aria-hidden="true"><span></span><span></span><span></span></div>
</section>

{{-- ═══ §2 STATS ═══════════════════════════════════════════════════════════════════ --}}
<section class="jbi-stats" id="jbi-stats">
    <div class="jbi-wrap">
        <div class="jbi-stats__grid">
            <div class="jbi-stat">
                <span class="jbi-stat__n" data-target="50" data-suffix="+">0</span>
                <span class="jbi-stat__l">Apps Delivered</span>
            </div>
            <div class="jbi-stat">
                <span class="jbi-stat__n" data-target="300" data-suffix="+">0</span>
                <span class="jbi-stat__l">Happy Clients</span>
            </div>
            <div class="jbi-stat">
                <span class="jbi-stat__n" data-prefix="₹" data-target="50" data-suffix="Cr+">0</span>
                <span class="jbi-stat__l">Business Value Created</span>
            </div>
            <div class="jbi-stat">
                <span class="jbi-stat__n" data-target="100" data-suffix="+">0</span>
                <span class="jbi-stat__l">Expert Developers</span>
            </div>
        </div>
    </div>
</section>

{{-- ═══ §3 GLOBAL SUCCESS ══════════════════════════════════════════════════════════ --}}
<section class="jbi-global" id="jbi-global">
    <div class="jbi-wrap">
        <div class="jbi-global__row">
            <div class="jbi-global__left">
                <h2 class="jbi-global__h">Global<br>Success</h2>
                <p class="jbi-global__sub">Recognised across the tech ecosystem.</p>
            </div>
            <div class="jbi-global__logos">
                <img src="{{ asset('images/trionova/Technologies/Mobile-icons/flutter.png') }}"   alt="Flutter"       loading="lazy">
                <img src="{{ asset('images/trionova/Technologies/Mobile-icons/kotlin.png') }}"    alt="Kotlin"        loading="lazy">
                <img src="{{ asset('images/trionova/Technologies/Mobile-icons/Swift.png') }}"     alt="Swift"         loading="lazy">
                <img src="{{ asset('images/trionova/Technologies/Mobile-icons/React-Native.png') }}" alt="React Native" loading="lazy">
                <img src="{{ asset('images/trionova/Technologies/Mobile-icons/firebase.png') }}"  alt="Firebase"      loading="lazy">
                <img src="{{ asset('images/trionova/Technologies/Mobile-icons/Android.png') }}"   alt="Android"       loading="lazy">
                <img src="{{ asset('images/trionova/Technologies/Mobile-icons/ios.png') }}"       alt="iOS"           loading="lazy">
                <img src="{{ asset('images/trionova/Technologies/Mobile-icons/mongo.png') }}"     alt="MongoDB"       loading="lazy">
            </div>
        </div>
    </div>
</section>

{{-- ═══ §4 THREE FACTORS / APP SUCCESS ════════════════════════════════════════════ --}}
<section class="jbi-factors" id="jbi-factors">
    <div class="jbi-wrap">
        <div class="jbi-sh">
            <p class="jbi-label">The Trionova Advantage</p>
            <h2 class="jbi-sh__h">Your 3 Factors for App Success</h2>
            <p class="jbi-sh__sub">At Trionova we believe that a successful app is the result of 3 key pillars working in perfect harmony.</p>
        </div>
        <div class="jbi-factors__grid">
            <div class="jbi-factor">
                <div class="jbi-factor__ico">
                    <img src="{{ asset('images/trionova/Technologies/Mobile-icons/flutter.png') }}" alt="Technology" loading="lazy">
                </div>
                <span class="jbi-factor__n">01</span>
                <h3 class="jbi-factor__t">Technology</h3>
                <p class="jbi-factor__b">iPhone, Android and Flutter app development. Feel safe and work with a team that has launched 50+ apps using Swift, Kotlin, React Native and Flutter.</p>
            </div>
            <div class="jbi-factor">
                <div class="jbi-factor__ico">
                    <img src="{{ asset('images/trionova/Technologies/Mobile-icons/react.png') }}" alt="Marketing" loading="lazy">
                </div>
                <span class="jbi-factor__n">02</span>
                <h3 class="jbi-factor__t">Marketing</h3>
                <p class="jbi-factor__b">Partner with experts who have grown apps from zero to multi-crore revenue platforms. ASO, analytics and growth loops baked in from day one.</p>
            </div>
            <div class="jbi-factor">
                <div class="jbi-factor__ico">
                    <img src="{{ asset('images/trionova/UIUXDesign.webp') }}" alt="Design" loading="lazy">
                </div>
                <span class="jbi-factor__n">03</span>
                <h3 class="jbi-factor__t">Design</h3>
                <p class="jbi-factor__b">Trionova is recognised for award-winning app design. UI/UX built on real user research — pixel-perfect screens that win five-star ratings.</p>
            </div>
        </div>
    </div>
</section>

{{-- ═══ §5 QUALITY BANNER ═══════════════════════════════════════════════════════════ --}}
<section class="jbi-quality" id="jbi-quality">
    <div class="jbi-quality__bg" aria-hidden="true">
        <div class="jbi-qph jbi-qph--a"><div class="jbi-fone"><img src="{{ asset('images/mobile-app-chennai/case-study/Ride-mob.webp') }}" alt="" loading="lazy"></div></div>
        <div class="jbi-qph jbi-qph--b"><div class="jbi-fone"><img src="{{ asset('images/mobile-app-chennai/case-study/A-Team.webp') }}" alt="" loading="lazy"></div></div>
        <div class="jbi-qph jbi-qph--c"><div class="jbi-fone"><img src="{{ asset('images/mobile-app-chennai/case-study/Dots.webp') }}" alt="" loading="lazy"></div></div>
        <div class="jbi-qph jbi-qph--d"><div class="jbi-fone"><img src="{{ asset('images/mobile-app-chennai/case-study/Ganesh-Electricals.webp') }}" alt="" loading="lazy"></div></div>
        <div class="jbi-qph jbi-qph--e"><div class="jbi-fone"><img src="{{ asset('images/mobile-app-chennai/case-study/Abhi-Hospitals.webp') }}" alt="" loading="lazy"></div></div>
    </div>
    <div class="jbi-quality__body">
        <h2 class="jbi-quality__h">Trionova&rsquo;s Quality is<br>Your <em>Success Strategy.</em></h2>
        <p class="jbi-quality__p">We don&rsquo;t deliver code — we deliver measurable outcomes. Every app is benchmarked against your business KPIs, not just technical checklists.</p>
        <a href="#jbi-contact" class="jbi-btn jbi-btn--fill">Free Consultation</a>
    </div>
</section>

{{-- ═══ §6 PORTFOLIO ════════════════════════════════════════════════════════════════ --}}
<section class="jbi-port" id="jbi-portfolio">
    <div class="jbi-wrap">
        <div class="jbi-sh">
            <p class="jbi-label jbi-label--lt">Our Work</p>
            <h2 class="jbi-sh__h jbi-sh__h--lt">Portfolio</h2>
            <p class="jbi-sh__sub jbi-sh__sub--lt">From iOS to Android to web applications — we&rsquo;ve developed apps for healthcare, manufacturing, logistics and more.</p>
        </div>

        {{-- Card 1 --}}
        <div class="jbi-pcard">
            <div class="jbi-pcard__header" style="--pc:#0ea5e9">
                <span class="jbi-pcard__tag">Healthcare Platform</span>
                <h3 class="jbi-pcard__name">Abhi Hospitals</h3>
                <p class="jbi-pcard__desc">Chennai&rsquo;s patient-first digital health platform, enabling online appointments, medical records, and teleconsultations.</p>
            </div>
            <div class="jbi-pcard__screen">
                <div class="jbi-fone jbi-fone--lg"><img src="{{ asset('images/mobile-app-chennai/case-study/Abhi-Hospitals.webp') }}" alt="Abhi Hospitals app" loading="lazy"></div>
            </div>
            <div class="jbi-pcard__meta">
                <div class="jbi-pm"><strong>5.0 ★</strong><span>App Rating</span></div>
                <div class="jbi-pm"><strong>Node.js + MongoDB</strong><span>Tech Stack</span></div>
                <div class="jbi-pm"><strong>3 Months</strong><span>Time to Launch</span></div>
            </div>
            <a href="#jbi-contact" class="jbi-btn jbi-btn--fill">View Portfolio</a>
        </div>

        {{-- Card 2 --}}
        <div class="jbi-pcard">
            <div class="jbi-pcard__header" style="--pc:#7c3aed">
                <span class="jbi-pcard__tag">Enterprise ERP</span>
                <h3 class="jbi-pcard__name">Madhura Polymers</h3>
                <p class="jbi-pcard__desc">Tamil Nadu&rsquo;s leading manufacturing ERP & billing platform — real-time P&amp;L, inventory, billing, and GPS tracking in a single Flutter app.</p>
            </div>
            <div class="jbi-pcard__screen">
                <div class="jbi-fone jbi-fone--lg"><img src="{{ asset('images/mobile-app-chennai/case-study/Madhura-Polymers.webp') }}" alt="Madhura Polymers app" loading="lazy"></div>
            </div>
            <div class="jbi-pcard__meta">
                <div class="jbi-pm"><strong>5.0 ★</strong><span>App Rating</span></div>
                <div class="jbi-pm"><strong>Flutter + MSSQL</strong><span>Tech Stack</span></div>
                <div class="jbi-pm"><strong>4 Months</strong><span>Time to Launch</span></div>
            </div>
            <a href="#jbi-contact" class="jbi-btn jbi-btn--fill">View Portfolio</a>
        </div>

        {{-- Card 3 --}}
        <div class="jbi-pcard">
            <div class="jbi-pcard__header" style="--pc:#f59e0b">
                <span class="jbi-pcard__tag">Corporate Transport</span>
                <h3 class="jbi-pcard__name">Ride Yellow</h3>
                <p class="jbi-pcard__desc">AI-powered corporate fleet management with real-time driver tracking, route optimisation and automated billing.</p>
            </div>
            <div class="jbi-pcard__screen">
                <div class="jbi-fone jbi-fone--lg"><img src="{{ asset('images/mobile-app-chennai/case-study/Ride-mob.webp') }}" alt="Ride Yellow app" loading="lazy"></div>
            </div>
            <div class="jbi-pcard__meta">
                <div class="jbi-pm"><strong>5.0 ★</strong><span>App Rating</span></div>
                <div class="jbi-pm"><strong>PHP + MongoDB</strong><span>Tech Stack</span></div>
                <div class="jbi-pm"><strong>6 Months</strong><span>Time to Launch</span></div>
            </div>
            <a href="#jbi-contact" class="jbi-btn jbi-btn--fill">View Portfolio</a>
        </div>
    </div>
</section>

{{-- ═══ §7 RAPID AGILE DEVELOPMENT ════════════════════════════════════════════════ --}}
<section class="jbi-feat jbi-feat--lt" id="jbi-agile">
    <div class="jbi-wrap jbi-feat__row">
        <div class="jbi-feat__copy">
            <p class="jbi-label">Development Process</p>
            <h2 class="jbi-feat__h">Rapid Agile<br>Development</h2>
            <p class="jbi-feat__b">Ideas are unique, but being first to market matters. Trionova&rsquo;s step-by-step agile process means tangible progress every single week — 2-week sprints, daily stand-ups and zero six-month black boxes.</p>
            <a href="#jbi-contact" class="jbi-btn jbi-btn--fill">Free Consultation</a>
        </div>
        <div class="jbi-feat__media">
            <div class="jbi-feat__img-wrap">
                <img src="{{ asset('images/mobile-app-chennai/mobile-app-dev/2.png') }}" alt="Rapid agile development" loading="lazy" class="jbi-pximg">
                <div class="jbi-feat__badge">
                    <span class="jbi-feat__badge-icon">⚡</span>
                    <div>
                        <strong>2-Week Sprints</strong>
                        <span>Always on schedule</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══ §8 OUTSTANDING COMMUNICATION ══════════════════════════════════════════════ --}}
<section class="jbi-feat jbi-feat--gr" id="jbi-comms">
    <div class="jbi-wrap jbi-feat__row jbi-feat__row--rev">
        <div class="jbi-feat__media">
            <div class="jbi-feat__img-wrap">
                <img src="{{ asset('images/mobile-app-chennai/mobile-app-dev/3.png') }}" alt="Team communication" loading="lazy" class="jbi-pximg">
                <div class="jbi-feat__float">
                    <div class="jbi-feat__float-dot"></div>
                    <div>
                        <strong>Daily Standups</strong>
                        <span>Direct dev access, no middlemen</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="jbi-feat__copy">
            <p class="jbi-label">Client Partnership</p>
            <h2 class="jbi-feat__h">Outstanding<br>Communication</h2>
            <p class="jbi-feat__b">Your app can only be as good as the communication between you and your team. At Trionova you speak directly to your developers and designers. No middleman. No delayed responses. No surprises.</p>
            <a href="#jbi-contact" class="jbi-btn jbi-btn--fill">Free Consultation</a>
        </div>
    </div>
</section>

{{-- ═══ §9 PROVEN INNOVATION ═══════════════════════════════════════════════════════ --}}
<section class="jbi-innov" id="jbi-innov">
    <div class="jbi-wrap jbi-feat__row jbi-feat__row--top">
        <div class="jbi-feat__copy">
            <p class="jbi-label">Recognition & Awards</p>
            <h2 class="jbi-feat__h">Proven<br>Innovation</h2>
            <p class="jbi-feat__b">Trionova is one of the only app development studios in South India that can truly claim innovation — and we can prove it. Recognised by leading technology bodies for excellence in mobile engineering and UX design.</p>
            <a href="#jbi-contact" class="jbi-btn jbi-btn--fill">Free Consultation</a>
        </div>
        <div class="jbi-innov__awards">
            <img src="{{ asset('images/mobile-app/app-development-01.webp') }}" alt="Award" loading="lazy">
            <img src="{{ asset('images/mobile-app/app-development-02.webp') }}" alt="Award" loading="lazy">
            <img src="{{ asset('images/mobile-app/app-development-03.webp') }}" alt="Award" loading="lazy">
            <img src="{{ asset('images/mobile-app/app-development-04.webp') }}" alt="Award" loading="lazy">
            <img src="{{ asset('images/mobile-app/app-development-05.webp') }}" alt="Award" loading="lazy">
            <img src="{{ asset('images/mobile-app/app-development-06.webp') }}" alt="Award" loading="lazy">
        </div>
    </div>
    {{-- Phone marquee --}}
    <div class="jbi-marquee" aria-hidden="true">
        <div class="jbi-marquee__track">
            <div class="jbi-marquee__item"><div class="jbi-fone"><img src="{{ asset('images/mobile-app-chennai/case-study/Abhi-Hospitals.webp') }}" alt="" loading="lazy"></div></div>
            <div class="jbi-marquee__item jbi-marquee__item--up"><div class="jbi-fone"><img src="{{ asset('images/mobile-app-chennai/case-study/Madhura-Polymers.webp') }}" alt="" loading="lazy"></div></div>
            <div class="jbi-marquee__item"><div class="jbi-fone"><img src="{{ asset('images/mobile-app-chennai/case-study/A-Team.webp') }}" alt="" loading="lazy"></div></div>
            <div class="jbi-marquee__item jbi-marquee__item--up"><div class="jbi-fone"><img src="{{ asset('images/mobile-app-chennai/case-study/Ride-mob.webp') }}" alt="" loading="lazy"></div></div>
            <div class="jbi-marquee__item"><div class="jbi-fone"><img src="{{ asset('images/mobile-app-chennai/case-study/Dots.webp') }}" alt="" loading="lazy"></div></div>
            <div class="jbi-marquee__item jbi-marquee__item--up"><div class="jbi-fone"><img src="{{ asset('images/mobile-app-chennai/case-study/Ganesh-Electricals.webp') }}" alt="" loading="lazy"></div></div>
            {{-- duplicate --}}
            <div class="jbi-marquee__item" aria-hidden="true"><div class="jbi-fone"><img src="{{ asset('images/mobile-app-chennai/case-study/Abhi-Hospitals.webp') }}" alt="" loading="lazy"></div></div>
            <div class="jbi-marquee__item jbi-marquee__item--up" aria-hidden="true"><div class="jbi-fone"><img src="{{ asset('images/mobile-app-chennai/case-study/Madhura-Polymers.webp') }}" alt="" loading="lazy"></div></div>
            <div class="jbi-marquee__item" aria-hidden="true"><div class="jbi-fone"><img src="{{ asset('images/mobile-app-chennai/case-study/A-Team.webp') }}" alt="" loading="lazy"></div></div>
            <div class="jbi-marquee__item jbi-marquee__item--up" aria-hidden="true"><div class="jbi-fone"><img src="{{ asset('images/mobile-app-chennai/case-study/Ride-mob.webp') }}" alt="" loading="lazy"></div></div>
            <div class="jbi-marquee__item" aria-hidden="true"><div class="jbi-fone"><img src="{{ asset('images/mobile-app-chennai/case-study/Dots.webp') }}" alt="" loading="lazy"></div></div>
            <div class="jbi-marquee__item jbi-marquee__item--up" aria-hidden="true"><div class="jbi-fone"><img src="{{ asset('images/mobile-app-chennai/case-study/Ganesh-Electricals.webp') }}" alt="" loading="lazy"></div></div>
        </div>
    </div>
</section>

{{-- ═══ §10 BIG STATEMENT (Telstra equivalent) ════════════════════════════════════ --}}
<section class="jbi-telstra" id="jbi-telstra">
    <div class="jbi-wrap">
        <p class="jbi-label jbi-label--ctr">Our Impact</p>
        <h2 class="jbi-telstra__h">We built app technology<br>trusted by <em>300+ businesses</em><br>across India and Canada.</h2>
        <p class="jbi-telstra__sub">From solo founders to enterprise teams — Trionova has delivered 50+ apps that power real businesses and drive measurable growth.</p>
        <a href="#jbi-contact" class="jbi-btn jbi-btn--fill">Start Your Project</a>
    </div>
</section>

{{-- ═══ §11 BUILD AND GROW ═══════════════════════════════════════════════════════════ --}}
<section class="jbi-bgrow" id="jbi-bgrow">
    <video class="jbi-bgrow__vid" autoplay muted loop playsinline
           poster="{{ asset('images/mobile-app-chennai/mob-dev-banner.webp') }}">
        <source src="{{ asset('images/mobile-app/Untitled-design1.mp4') }}" type="video/mp4">
    </video>
    <div class="jbi-bgrow__ov"></div>
    <div class="jbi-wrap jbi-bgrow__inner">
        <div class="jbi-bgrow__media">
            <img src="{{ asset('images/mobile-app-chennai/mob-dev-banner.webp') }}" alt="Trionova team" loading="lazy">
            <div class="jbi-bgrow__quote">
                <p>&ldquo;Trionova didn&rsquo;t just build our app — they became a strategic partner who genuinely cares about our growth.&rdquo;</p>
                <footer>&mdash; Rajesh Kumar, Madhura Polymers</footer>
            </div>
        </div>
        <div class="jbi-bgrow__copy">
            <p class="jbi-label jbi-label--lt">Your Growth Partner</p>
            <h2 class="jbi-bgrow__h">Build and Grow</h2>
            <p class="jbi-bgrow__b">Trionova doesn&rsquo;t disappear after launch. We monitor performance, push iterative updates and evolve your app alongside your business. Our post-launch support means your app grows with you — forever.</p>
            <a href="#jbi-contact" class="jbi-btn jbi-btn--fill">Get Started Now</a>
        </div>
    </div>
</section>

{{-- ═══ §12 APP DOWNLOAD CTA ════════════════════════════════════════════════════════ --}}
<section class="jbi-appcta" id="jbi-appcta">
    <div class="jbi-wrap">
        <div class="jbi-appcta__card">
            <div class="jbi-appcta__phone">
                <div class="jbi-fone jbi-fone--lg">
                    <img src="{{ asset('images/mobile-app-chennai/case-study/Madhura-Polymers.webp') }}" alt="Madhura Polymers App" loading="lazy">
                </div>
            </div>
            <div class="jbi-appcta__copy">
                <p class="jbi-appcta__eyebrow">Featured App</p>
                <h3 class="jbi-appcta__h">Learn how Trionova&rsquo;s Madhura Polymers app achieved a 5.0 rating on the App Store</h3>
                <p class="jbi-appcta__sub">A Flutter app that replaced an entire legacy ERP system — delivering real-time manufacturing intelligence from mobile, anywhere.</p>
                <div class="jbi-appcta__btns">
                    <a href="#jbi-contact" class="jbi-appcta__store">
                        <img src="{{ asset('images/mobile-app/ios-store.webp') }}" alt="Download on the App Store" loading="lazy">
                    </a>
                    <a href="#jbi-contact" class="jbi-appcta__store">
                        <img src="{{ asset('images/mobile-app/g-store.webp') }}" alt="Get it on Google Play" loading="lazy">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══ §13 TESTIMONIALS ════════════════════════════════════════════════════════════ --}}
<section class="jbi-testi" id="jbi-testi">
    <div class="jbi-wrap">
        <div class="jbi-sh">
            <h2 class="jbi-sh__h">Clients Love Trionova!</h2>
        </div>
        <div class="jbi-testi__grid">
            <div class="jbi-tc">
                <div class="jbi-tc__header">
                    <div class="jbi-tc__av"><div class="jbi-fone jbi-fone--sm"><img src="{{ asset('images/mobile-app-chennai/case-study/Abhi-Hospitals.webp') }}" alt="" loading="lazy"></div></div>
                    <div class="jbi-tc__meta">
                        <strong>Dr. Anand Suresh</strong>
                        <span>Digital Health Manager, Abhi Hospitals</span>
                        <div class="jbi-stars">★★★★★</div>
                    </div>
                </div>
                <p class="jbi-tc__q">&ldquo;The quality of the designs and end product are exceptional! Trionova delivered our healthcare platform on time and on budget. Would highly recommend and look forward to an ongoing relationship.&rdquo;</p>
            </div>
            <div class="jbi-tc">
                <div class="jbi-tc__header">
                    <div class="jbi-tc__av"><div class="jbi-fone jbi-fone--sm"><img src="{{ asset('images/mobile-app-chennai/case-study/Madhura-Polymers.webp') }}" alt="" loading="lazy"></div></div>
                    <div class="jbi-tc__meta">
                        <strong>Rajesh Kumar</strong>
                        <span>Operations Manager, Madhura Polymers</span>
                        <div class="jbi-stars">★★★★★</div>
                    </div>
                </div>
                <p class="jbi-tc__q">&ldquo;Trionova replaced our entire paper-based workflow with a single Flutter app. Their communication and transparency throughout the project exceeded every expectation. We continue to work alongside them.&rdquo;</p>
            </div>
        </div>
    </div>
</section>

{{-- ═══ §14 CONTACT FORM ════════════════════════════════════════════════════════════ --}}
<section class="jbi-contact" id="jbi-contact">
    <div class="jbi-wrap jbi-contact__row">
        <div class="jbi-contact__copy">
            <p class="jbi-label">Get In Touch</p>
            <h2 class="jbi-contact__h">Let&rsquo;s Talk About<br>Your Idea.</h2>
            <p class="jbi-contact__sub">Tell us about your project. We&rsquo;ll respond within 24 hours with a free consultation and no-obligation estimate.</p>
            <div class="jbi-contact__info">
                <a href="tel:+919442132694" class="jbi-contact__phone">+91 94421 32694</a>
                <a href="mailto:hello@trionova.in" class="jbi-contact__email">hello@trionova.in</a>
            </div>
            <ul class="jbi-trust">
                <li><span>✓</span> NDA signed on every project</li>
                <li><span>✓</span> Response within 24 hours</li>
                <li><span>✓</span> No-commitment consultation</li>
            </ul>
        </div>
        <div class="jbi-contact__form">
            <form action="#" method="POST" class="jbi-form">
                @csrf
                <div class="jbi-form__row">
                    <div class="jbi-form__field">
                        <label for="jbi_name">Full Name *</label>
                        <input id="jbi_name" name="name" type="text" placeholder="Your name" required>
                    </div>
                    <div class="jbi-form__field">
                        <label for="jbi_email">Email Address *</label>
                        <input id="jbi_email" name="email" type="email" placeholder="you@company.com" required>
                    </div>
                </div>
                <div class="jbi-form__field">
                    <label for="jbi_phone">Phone Number</label>
                    <input id="jbi_phone" name="phone" type="tel" placeholder="+91 00000 00000">
                </div>
                <div class="jbi-form__field">
                    <label for="jbi_msg">Tell Us About Your Project *</label>
                    <textarea id="jbi_msg" name="message" rows="5" placeholder="Describe your app idea, budget, and timeline..." required></textarea>
                </div>
                <button type="submit" class="jbi-btn jbi-btn--fill jbi-form__submit">Send My Message &rarr;</button>
            </form>
        </div>
    </div>
</section>

{{-- ═══ §15 FOOTER ══════════════════════════════════════════════════════════════════ --}}
<footer class="jbi-footer" id="jbi-footer">
    <div class="jbi-wrap jbi-footer__top">
        <div class="jbi-footer__brand">
            <img src="{{ asset('images/logo.png') }}" alt="Trionova" class="jbi-footer__logo" width="140" height="38" loading="lazy">
            <p class="jbi-footer__tagline">At Trionova we believe innovative people solve everyday problems. We help businesses design, develop and grow successful apps.</p>
        </div>
        <div class="jbi-footer__col">
            <h4>Services</h4>
            <ul>
                <li><a href="/mobile-app-development">Mobile App Development</a></li>
                <li><a href="/ios-app-development">iOS Apps</a></li>
                <li><a href="/android-app-development">Android Apps</a></li>
                <li><a href="/flutter-app-development">Flutter Apps</a></li>
                <li><a href="/web-development">Web Development</a></li>
                <li><a href="/ui-ux-design">UI / UX Design</a></li>
            </ul>
        </div>
        <div class="jbi-footer__col">
            <h4>Industries</h4>
            <ul>
                <li><a href="/healthcare">Healthcare</a></li>
                <li><a href="/ecommerce">E-Commerce</a></li>
                <li><a href="/manufacturing">Manufacturing</a></li>
                <li><a href="/transport">Transport & Logistics</a></li>
                <li><a href="/education">Education</a></li>
                <li><a href="/fintech">Fintech</a></li>
            </ul>
        </div>
        <div class="jbi-footer__col">
            <h4>Locations</h4>
            <ul>
                <li><a href="/mobile-app-development-company-in-chennai">Chennai</a></li>
                <li><a href="/mobile-app-development-company-in-coimbatore">Coimbatore</a></li>
                <li><a href="/mobile-app-development-company-in-tamilnadu">Tamil Nadu</a></li>
                <li><a href="/mobile-app-development-company-in-dubai">Dubai</a></li>
                <li><a href="/mobile-app-development-company-in-canada">Canada</a></li>
                <li><a href="/mobile-app-development-company-in-uae">UAE</a></li>
            </ul>
        </div>
        <div class="jbi-footer__col">
            <h4>Company</h4>
            <ul>
                <li><a href="/about">About Us</a></li>
                <li><a href="/portfolio">Portfolio</a></li>
                <li><a href="/blog">Blog</a></li>
                <li><a href="/careers">Careers</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
    </div>
    <div class="jbi-wrap jbi-footer__bottom">
        <p>&copy; {{ date('Y') }} Trionova Technology Private Limited. All rights reserved.</p>
        <div class="jbi-footer__links">
            <a href="/privacy-policy">Privacy</a>
            <a href="/terms">Terms</a>
        </div>
    </div>
</footer>

{{-- Floating call button --}}
<a href="tel:+919442132694" class="jbi-fab" aria-label="Call Trionova">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="20" height="20">
        <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 014.69 12a19.79 19.79 0 01-3.07-8.67A2 2 0 013.6 1.18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L7.91 8.37a16 16 0 006.29 6.29l1.46-1.46a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7a2 2 0 011.72 2.02z"/>
    </svg>
</a>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script src="{{ asset('assets/just-build-it/js/main.js') }}"></script>
</body>
</html>
