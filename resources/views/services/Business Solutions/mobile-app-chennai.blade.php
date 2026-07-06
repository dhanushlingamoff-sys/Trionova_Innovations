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

@push('styles')
<style>
/* =====================================================================
   NEW HERO  ·  .tn-hero  (self-contained, namespaced to avoid collisions)
   ===================================================================== */
.tn-hero{
    position:relative;
    overflow:hidden;
    background:linear-gradient(160deg,#0E1017 0%,#181B26 52%,#10131A 100%);
    color:#eef1f8;
    padding:118px 24px 40px;
    isolation:isolate;
    font-family:var(--font,Helvetica,"Helvetica Neue",Arial,sans-serif);
}
.tn-hero *{box-sizing:border-box;}

/* ---------- background layers ---------- */
.tn-hero-bg{position:absolute;inset:0;z-index:0;pointer-events:none;}
.tn-orb{position:absolute;border-radius:50%;filter:blur(70px);opacity:.5;will-change:transform;}
.tn-orb-a{width:520px;height:520px;top:-140px;left:-120px;background:radial-gradient(circle,#ff2d55 0%,transparent 70%);opacity:.28;animation:tn-orb 22s ease-in-out infinite;}
.tn-orb-b{width:560px;height:560px;top:8%;right:-160px;background:radial-gradient(circle,#6c4dff 0%,transparent 70%);opacity:.3;animation:tn-orb 26s ease-in-out infinite reverse;}
.tn-orb-c{width:600px;height:600px;bottom:-220px;left:38%;background:radial-gradient(circle,#1e6bff 0%,transparent 70%);opacity:.22;animation:tn-orb 30s ease-in-out infinite;}
@keyframes tn-orb{0%,100%{transform:translate(0,0) scale(1);}50%{transform:translate(30px,-24px) scale(1.08);}}
.tn-grid{position:absolute;inset:0;
    background-image:linear-gradient(rgba(255,255,255,.04) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.04) 1px,transparent 1px);
    background-size:54px 54px;
    mask-image:radial-gradient(ellipse 80% 60% at 50% 40%,#000 30%,transparent 78%);
    -webkit-mask-image:radial-gradient(ellipse 80% 60% at 50% 40%,#000 30%,transparent 78%);
    opacity:.6;}
.tn-particles{position:absolute;inset:0;}
.tn-particles .tn-p{position:absolute;width:3px;height:3px;border-radius:50%;background:rgba(255,255,255,.55);box-shadow:0 0 6px rgba(255,255,255,.5);animation:tn-drift linear infinite;}
@keyframes tn-drift{0%{transform:translateY(0);opacity:0;}10%{opacity:.8;}90%{opacity:.8;}100%{transform:translateY(-120px);opacity:0;}}

/* ---------- faint background wordmarks ---------- */
.tn-bg-words{position:absolute;left:14px;bottom:6px;z-index:0;pointer-events:none;
    display:flex;flex-direction:column;line-height:.92;font-weight:800;letter-spacing:2px;
    color:rgba(255,255,255,.028);font-size:clamp(38px,7vw,104px);text-transform:uppercase;}

/* ---------- layout ---------- */
.tn-hero-inner{position:relative;z-index:2;max-width:1320px;margin:0 auto;
    display:grid;grid-template-columns:minmax(0,1fr) minmax(320px,.9fr) minmax(0,.42fr);
    gap:24px;align-items:center;min-height:560px;}

/* ---------- LEFT ---------- */
.tn-hero-left{max-width:560px;}
.tn-eyebrow{color:#ff375f;font-weight:700;letter-spacing:2.4px;text-transform:uppercase;
    font-size:13.5px;margin:0 0 18px;opacity:0;animation:tn-fade .7s .1s forwards;}
.tn-title{font-weight:800;line-height:1.03;letter-spacing:-1px;margin:0 0 22px;
    font-size:clamp(38px,4.6vw,62px);}
.tn-title .tn-line{display:block;}
.tn-title .tn-grad .w{background:linear-gradient(92deg,#ff375f 0%,#ff6a9a 55%,#ff9d76 100%);
    -webkit-background-clip:text;background-clip:text;-webkit-text-fill-color:transparent;color:transparent;}
.tn-title .w{display:inline-block;opacity:0;transform:translateY(22px);filter:blur(4px);}
.tn-title.tn-in .w{animation:tn-word .6s cubic-bezier(.2,.7,.2,1) forwards;}
@keyframes tn-word{to{opacity:1;transform:translateY(0);filter:blur(0);}}
.tn-sub{color:#aab1c4;font-size:17px;line-height:1.66;margin:0 0 32px;max-width:500px;
    opacity:0;animation:tn-fade .7s .5s forwards;}

.tn-cta-row{display:flex;flex-wrap:wrap;gap:14px;margin-bottom:30px;
    opacity:0;animation:tn-fade .7s .7s forwards;}
.tn-btn{display:inline-flex;align-items:center;gap:9px;font-weight:700;font-size:15.5px;
    padding:16px 26px;border-radius:14px;cursor:pointer;text-decoration:none;
    transition:transform .25s cubic-bezier(.2,.7,.2,1),box-shadow .25s,background .25s;will-change:transform;}
.tn-btn svg{width:18px;height:18px;}
.tn-btn-primary{background:linear-gradient(92deg,#ff2d55,#ff5470);color:#fff;
    box-shadow:0 12px 30px -8px rgba(255,45,85,.6);}
.tn-btn-primary:hover{box-shadow:0 18px 42px -8px rgba(255,45,85,.75);color:#fff;}
.tn-btn-ghost{background:rgba(255,255,255,.04);color:#eef1f8;border:1px solid rgba(255,255,255,.16);
    backdrop-filter:blur(6px);}
.tn-btn-ghost:hover{background:rgba(255,255,255,.09);color:#fff;}

.tn-rating{display:flex;align-items:center;gap:14px;opacity:0;animation:tn-fade .7s .9s forwards;}
.tn-stars{display:inline-flex;gap:3px;}
.tn-stars svg{width:19px;height:19px;fill:#ffb400;}
.tn-rating-txt{font-size:14px;color:#c7cdda;line-height:1.35;}
.tn-rating-txt strong{color:#fff;font-weight:800;margin-right:4px;}
.tn-rating-txt span{display:block;color:#8b93a7;font-size:13px;}

/* ---------- CENTER: phone + orbit ---------- */
.tn-hero-center{position:relative;display:flex;justify-content:center;align-items:center;min-height:540px;}
.tn-stage{position:relative;width:340px;height:540px;perspective:1400px;}

.tn-orbit{position:absolute;inset:-60px;z-index:1;animation:tn-spin 30s linear infinite;}
@keyframes tn-spin{to{transform:rotate(360deg);}}
.tn-tech{position:absolute;width:60px;height:60px;border-radius:16px;
    display:flex;align-items:center;justify-content:center;
    background:rgba(20,24,34,.72);border:1px solid rgba(255,255,255,.1);
    box-shadow:0 10px 30px -10px rgba(0,0,0,.7);backdrop-filter:blur(6px);
    animation:tn-spin-rev 30s linear infinite;}
@keyframes tn-spin-rev{to{transform:rotate(-360deg);}}
.tn-tech img{width:32px;height:32px;object-fit:contain;}
.tn-tech-1{top:-4%;left:50%;margin-left:-30px;}
.tn-tech-2{top:22%;left:-10%;}
.tn-tech-3{top:22%;right:-10%;}
.tn-tech-4{bottom:20%;left:-12%;}
.tn-tech-5{bottom:20%;right:-12%;}
.tn-tech-6{bottom:-4%;left:50%;margin-left:-30px;}

.tn-phone{position:absolute;top:50%;left:50%;width:288px;height:588px;
    transform:translate(-50%,-50%);z-index:3;
    border-radius:44px;padding:13px;
    background:linear-gradient(160deg,#2a2f3d,#141821 60%);
    border:1px solid rgba(255,255,255,.12);
    box-shadow:0 40px 90px -30px rgba(0,0,0,.85),0 0 0 2px rgba(0,0,0,.4) inset;
    animation:tn-float 6s ease-in-out infinite;will-change:transform;}
@keyframes tn-float{0%,100%{transform:translate(-50%,-50%) translateY(0) rotate(-1.4deg);}50%{transform:translate(-50%,-50%) translateY(-16px) rotate(1.4deg);}}
.tn-phone-notch{position:absolute;top:14px;left:50%;transform:translateX(-50%);
    width:104px;height:22px;background:#0a0c12;border-radius:0 0 14px 14px;z-index:5;}
.tn-phone-screen{position:relative;width:100%;height:100%;border-radius:32px;overflow:hidden;
    background:#0b0e16;}
.tn-phone-tag{position:absolute;bottom:-34px;left:50%;transform:translateX(-50%);
    font-size:12.5px;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;
    color:#ff6a8a;background:rgba(255,45,85,.1);border:1px solid rgba(255,45,85,.3);
    padding:5px 14px;border-radius:20px;white-space:nowrap;}

/* rotating screens */
.tn-screen{position:absolute;inset:0;padding:34px 16px 16px;
    display:flex;flex-direction:column;gap:11px;
    opacity:0;transform:translateX(26px) scale(.97);
    transition:opacity .6s ease,transform .6s cubic-bezier(.2,.7,.2,1);pointer-events:none;}
.tn-screen.is-active{opacity:1;transform:translateX(0) scale(1);}
.tn-scr-top{display:flex;justify-content:space-between;align-items:center;padding:0 4px;font-size:11px;color:#cfd5e4;}
.tn-scr-time{font-weight:700;}
.tn-scr-dots{display:inline-flex;gap:3px;}
.tn-scr-dots i{width:5px;height:5px;border-radius:50%;background:#cfd5e4;display:block;opacity:.7;}
.tn-scr-hi{font-size:12px;color:#8b93a7;line-height:1.5;}
.tn-scr-hi b{display:block;font-size:18px;color:#fff;font-weight:800;}

/* finance */
.tn-scr-rev{position:relative;border-radius:18px;padding:14px 15px;overflow:hidden;
    background:linear-gradient(120deg,#6c3bff,#a24bff);color:#fff;box-shadow:0 12px 26px -12px rgba(108,59,255,.8);}
.tn-scr-rev-lbl{font-size:11px;opacity:.85;}
.tn-scr-rev-amt{display:block;font-size:26px;font-weight:800;margin:2px 0 2px;letter-spacing:-.5px;}
.tn-scr-rev-up{font-size:11px;background:rgba(255,255,255,.2);padding:2px 8px;border-radius:20px;}
.tn-scr-spark{position:absolute;right:0;bottom:0;width:70%;height:40px;opacity:.55;}
.tn-scr-cats{display:grid;grid-template-columns:repeat(4,1fr);gap:8px;}
.tn-scr-cats span{height:44px;border-radius:12px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.05);}
.tn-scr-list{display:flex;flex-direction:column;gap:8px;}
.tn-scr-row{display:flex;align-items:center;gap:9px;background:rgba(255,255,255,.04);border-radius:12px;padding:9px 11px;}
.tn-scr-row i{width:26px;height:26px;border-radius:8px;background:rgba(255,255,255,.1);flex:none;}
.tn-scr-row em{flex:1;height:8px;border-radius:6px;background:rgba(255,255,255,.14);}
.tn-scr-row b{font-size:12px;font-weight:700;color:#fff;}

/* healthcare */
.tn-screen-health .tn-scr-rev{display:none;}
.tn-scr-doc{display:flex;align-items:center;gap:10px;border-radius:16px;padding:12px;
    background:linear-gradient(120deg,#0aa06e,#12c98a);color:#fff;box-shadow:0 12px 26px -12px rgba(10,160,110,.8);}
.tn-scr-doc-av{width:40px;height:40px;border-radius:12px;background:rgba(255,255,255,.28);flex:none;}
.tn-scr-doc-info{flex:1;line-height:1.4;}
.tn-scr-doc-info b{font-size:14px;}
.tn-scr-doc-info em{display:block;font-size:11px;opacity:.9;font-style:normal;}
.tn-scr-doc-ok{width:26px;height:26px;border-radius:50%;background:rgba(255,255,255,.28);display:flex;align-items:center;justify-content:center;font-size:14px;}
.tn-scr-pills{display:grid;grid-template-columns:repeat(3,1fr);gap:8px;}
.tn-scr-pills span{height:52px;border-radius:14px;background:rgba(18,201,138,.12);border:1px solid rgba(18,201,138,.2);}

/* food */
.tn-screen-food .tn-scr-track{border-radius:16px;padding:13px 14px;background:linear-gradient(120deg,#ff7a18,#ffb32c);color:#3a1d00;box-shadow:0 12px 26px -12px rgba(255,122,24,.75);}
.tn-scr-track-bar{display:block;height:8px;border-radius:6px;background:rgba(255,255,255,.5);overflow:hidden;margin-bottom:8px;}
.tn-scr-track-bar i{display:block;height:100%;width:66%;border-radius:6px;background:#3a1d00;}
.tn-scr-track-eta{font-size:12px;font-weight:700;}
.tn-scr-track-eta b{font-size:13px;}

/* ecommerce */
.tn-scr-grid{display:grid;grid-template-columns:1fr 1fr;gap:9px;}
.tn-scr-grid span{height:74px;border-radius:14px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.06);
    background-image:linear-gradient(135deg,rgba(30,107,255,.28),rgba(255,45,85,.2));}
.tn-scr-cart{margin-top:auto;display:flex;align-items:center;gap:8px;border-radius:16px;padding:12px 14px;
    background:linear-gradient(120deg,#1e6bff,#4b8bff);color:#fff;box-shadow:0 12px 26px -12px rgba(30,107,255,.8);}
.tn-scr-cart-lbl{font-size:11px;opacity:.85;}
.tn-scr-cart-amt{font-size:20px;font-weight:800;margin-right:auto;}
.tn-scr-cart-btn{font-size:12px;font-weight:700;background:rgba(255,255,255,.22);padding:8px 14px;border-radius:12px;}

/* ---------- RIGHT: glass cards ---------- */
.tn-hero-right{display:flex;flex-direction:column;gap:16px;}
.tn-card{display:flex;align-items:center;gap:13px;padding:16px 18px;border-radius:18px;
    background:linear-gradient(135deg,rgba(255,255,255,.07),rgba(255,255,255,.02));
    border:1px solid rgba(255,255,255,.1);backdrop-filter:blur(10px);
    box-shadow:0 18px 40px -22px rgba(0,0,0,.8);will-change:transform;
    opacity:0;animation:tn-fade .7s forwards,tn-cardfloat 7s ease-in-out infinite;}
.tn-card-f1{animation-delay:1s,0s;}
.tn-card-f2{animation-delay:1.15s,-1.4s;}
.tn-card-f3{animation-delay:1.3s,-2.8s;}
.tn-card-f4{animation-delay:1.45s,-4.2s;}
@keyframes tn-cardfloat{0%,100%{transform:translateY(0);}50%{transform:translateY(-9px);}}
.tn-card:hover{border-color:rgba(255,255,255,.24);}
.tn-card-ic{width:46px;height:46px;border-radius:13px;flex:none;display:flex;align-items:center;justify-content:center;
    background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.08);}
.tn-card-ic img{width:26px;height:26px;object-fit:contain;}
.tn-card-ic-ai{color:#c08bff;background:rgba(140,80,255,.14);border-color:rgba(140,80,255,.3);}
.tn-card-ic-ai svg{width:24px;height:24px;}
.tn-card-tx{line-height:1.35;}
.tn-card-tx b{display:block;font-size:15.5px;font-weight:800;color:#fff;}
.tn-card-tx em{font-style:normal;font-size:12.5px;color:#98a0b3;}

/* ---------- STATS BAR ---------- */
.tn-statbar{position:relative;z-index:2;max-width:1320px;margin:36px auto 0;
    display:grid;grid-template-columns:repeat(4,1fr);gap:18px;
    padding:22px 26px;border-radius:22px;
    background:linear-gradient(135deg,rgba(255,255,255,.05),rgba(255,255,255,.015));
    border:1px solid rgba(255,255,255,.08);backdrop-filter:blur(10px);
    box-shadow:0 24px 60px -30px rgba(0,0,0,.8);}
.tn-stat{display:flex;align-items:center;gap:14px;}
.tn-stat-ic{width:52px;height:52px;border-radius:15px;flex:none;display:flex;align-items:center;justify-content:center;color:#ff6a8a;
    background:rgba(255,45,85,.1);border:1px solid rgba(255,45,85,.2);}
.tn-stat:nth-child(2) .tn-stat-ic{color:#a884ff;background:rgba(140,80,255,.12);border-color:rgba(140,80,255,.22);}
.tn-stat:nth-child(3) .tn-stat-ic{color:#5aa0ff;background:rgba(30,107,255,.12);border-color:rgba(30,107,255,.22);}
.tn-stat:nth-child(4) .tn-stat-ic{color:#ffb454;background:rgba(255,150,20,.12);border-color:rgba(255,150,20,.22);}
.tn-stat-ic svg{width:24px;height:24px;}
.tn-stat-tx b{display:block;font-size:26px;font-weight:800;color:#fff;letter-spacing:-.5px;line-height:1;}
.tn-stat-tx em{font-style:normal;font-size:12.5px;color:#98a0b3;line-height:1.35;display:block;margin-top:4px;}

@keyframes tn-fade{to{opacity:1;}}

/* ---------- responsive ---------- */
@media(max-width:1100px){
    .tn-hero-inner{grid-template-columns:1fr 1fr;}
    .tn-hero-right{grid-column:1/-1;flex-direction:row;flex-wrap:wrap;}
    .tn-card{flex:1 1 220px;}
}
@media(max-width:820px){
    .tn-hero{padding:96px 18px 34px;}
    .tn-hero-inner{grid-template-columns:1fr;text-align:center;gap:40px;}
    .tn-hero-left{max-width:none;margin:0 auto;}
    .tn-sub{margin-left:auto;margin-right:auto;}
    .tn-cta-row,.tn-rating{justify-content:center;}
    .tn-hero-center{min-height:600px;}
    .tn-statbar{grid-template-columns:1fr 1fr;gap:20px 14px;}
    .tn-bg-words{font-size:clamp(30px,12vw,72px);opacity:1;}
}
@media(max-width:520px){
    .tn-title{font-size:34px;}
    .tn-orbit{inset:-24px;}
    .tn-tech{width:48px;height:48px;}
    .tn-tech img{width:26px;height:26px;}
    .tn-card{flex:1 1 100%;}
    .tn-statbar{grid-template-columns:1fr;}
    .tn-stat-tx b{font-size:23px;}
}
@media(prefers-reduced-motion:reduce){
    .tn-orb,.tn-orbit,.tn-tech,.tn-phone,.tn-card,.tn-particles .tn-p{animation:none!important;}
    .tn-phone{transform:translate(-50%,-50%);}
}
</style>
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

    {{-- ============ HERO (OLD — commented out, replaced by new hero below) ============
    <section class="mc-hero" id="top">
        <h1 class="mc-reveal mc-in">Mobile App Development<br>Company in Chennai</h1>
        <p class="mc-sub mc-reveal mc-in d1">Build, Launch, and Grow with Trionova &mdash; Chennai&rsquo;s trusted mobile app development team for iOS, Android, and Flutter apps.</p>
        <video class="mc-hero-video" autoplay muted loop playsinline
            src="{{ asset('images/mobile-app-ad/hero-video.webm') }}"></video>
    </section>
    ============ END OLD HERO ============ --}}

    <!-- ============ HERO (NEW) ============ -->
    <section class="tn-hero" id="top">

        <!-- Background layers -->
        <div class="tn-hero-bg" aria-hidden="true">
            <div class="tn-orb tn-orb-a"></div>
            <div class="tn-orb tn-orb-b"></div>
            <div class="tn-orb tn-orb-c"></div>
            <div class="tn-grid"></div>
            <div class="tn-particles" id="tnParticles"></div>
        </div>

        <!-- Faint oversized background wordmarks -->
        <div class="tn-bg-words" aria-hidden="true">
            <span>ANDROID</span>
            <span>iOS</span>
            <span>FLUTTER</span>
            <span>REACT NATIVE</span>
            <span>APP DEVELOPMENT</span>
        </div>

        <div class="tn-hero-inner">

            <!-- ===== LEFT: copy + CTA + rating ===== -->
            <div class="tn-hero-left">
                <p class="tn-eyebrow">Mobile App Development Company in Chennai</p>
                <h1 class="tn-title" data-reveal>
                    <span class="tn-line"><span class="w">Building</span> <span class="w">Powerful</span></span>
                    <span class="tn-line"><span class="w">Mobile</span> <span class="w">Apps</span> <span class="w">That</span></span>
                    <span class="tn-line tn-grad"><span class="w">Drive</span> <span class="w">Real</span> <span class="w">Growth</span></span>
                </h1>
                <p class="tn-sub">We design and develop high-performance Android, iOS, Flutter and React Native apps that help startups and enterprises scale faster and deliver exceptional user experiences.</p>

                <div class="tn-cta-row">
                    <a class="tn-btn tn-btn-primary cta-btn" data-magnetic>
                        Get Free Consultation
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                    <a class="tn-btn tn-btn-ghost" href="#portfolio" data-magnetic>
                        View Our Work
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg>
                    </a>
                </div>

                <div class="tn-rating">
                    <div class="tn-stars" aria-label="4.9 out of 5 stars">
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    </div>
                    <div class="tn-rating-txt"><strong>4.9/5</strong> Average Rating<span>Trusted by 50+ Businesses Worldwide</span></div>
                </div>
            </div>

            <!-- ===== CENTER: floating phone + orbiting tech ===== -->
            <div class="tn-hero-center">
                <div class="tn-stage">
                    <!-- orbiting tech logos -->
                    <div class="tn-orbit" aria-hidden="true">
                        <span class="tn-tech tn-tech-1"><img src="{{ asset('images/trionova/Technologies/Mobile-icons/flutter.png') }}" alt="Flutter"></span>
                        <span class="tn-tech tn-tech-2"><img src="{{ asset('images/trionova/Technologies/Mobile-icons/Android.png') }}" alt="Android"></span>
                        <span class="tn-tech tn-tech-3"><img src="{{ asset('images/trionova/Technologies/Mobile-icons/ios.png') }}" alt="iOS"></span>
                        <span class="tn-tech tn-tech-4"><img src="{{ asset('images/trionova/Technologies/Mobile-icons/React-Native.png') }}" alt="React Native"></span>
                        <span class="tn-tech tn-tech-5"><img src="{{ asset('images/trionova/Technologies/Mobile-icons/node-js.png') }}" alt="Node.js"></span>
                        <span class="tn-tech tn-tech-6"><img src="{{ asset('images/trionova/Technologies/Mobile-icons/firebase.png') }}" alt="Firebase"></span>
                    </div>

                    <!-- phone -->
                    <div class="tn-phone">
                        <div class="tn-phone-notch"></div>
                        <div class="tn-phone-screen" id="tnPhoneScreen">

                            <!-- Screen 1: Finance / Dashboard -->
                            <div class="tn-screen is-active" data-label="Finance">
                                <div class="tn-scr-top">
                                    <span class="tn-scr-time">9:41</span>
                                    <span class="tn-scr-dots"><i></i><i></i><i></i></span>
                                </div>
                                <div class="tn-scr-hi">Hello, John 👋<b>Good Morning</b></div>
                                <div class="tn-scr-rev">
                                    <span class="tn-scr-rev-lbl">Total Revenue</span>
                                    <span class="tn-scr-rev-amt">$24,780</span>
                                    <span class="tn-scr-rev-up">▲ 12.5% this month</span>
                                    <svg class="tn-scr-spark" viewBox="0 0 120 40" preserveAspectRatio="none"><polyline points="0,32 20,26 40,30 60,16 80,20 100,8 120,4" fill="none" stroke="#fff" stroke-width="2.2"/></svg>
                                </div>
                                <div class="tn-scr-cats">
                                    <span></span><span></span><span></span><span></span>
                                </div>
                                <div class="tn-scr-list">
                                    <div class="tn-scr-row"><i></i><em></em><b>$999</b></div>
                                    <div class="tn-scr-row"><i></i><em></em><b>$1,299</b></div>
                                    <div class="tn-scr-row"><i></i><em></em><b>$249</b></div>
                                </div>
                            </div>

                            <!-- Screen 2: Healthcare -->
                            <div class="tn-screen tn-screen-health" data-label="Healthcare">
                                <div class="tn-scr-top">
                                    <span class="tn-scr-time">9:41</span>
                                    <span class="tn-scr-dots"><i></i><i></i><i></i></span>
                                </div>
                                <div class="tn-scr-hi">Good Health 🩺<b>Your Appointments</b></div>
                                <div class="tn-scr-doc">
                                    <span class="tn-scr-doc-av"></span>
                                    <span class="tn-scr-doc-info"><b>Dr. Nanditha R</b><em>Cardiologist · Today 4:30 PM</em></span>
                                    <span class="tn-scr-doc-ok">✓</span>
                                </div>
                                <div class="tn-scr-pills">
                                    <span></span><span></span><span></span>
                                </div>
                                <div class="tn-scr-list">
                                    <div class="tn-scr-row"><i></i><em></em><b>10:00</b></div>
                                    <div class="tn-scr-row"><i></i><em></em><b>01:30</b></div>
                                    <div class="tn-scr-row"><i></i><em></em><b>05:15</b></div>
                                </div>
                            </div>

                            <!-- Screen 3: Food Delivery -->
                            <div class="tn-screen tn-screen-food" data-label="Food Delivery">
                                <div class="tn-scr-top">
                                    <span class="tn-scr-time">9:41</span>
                                    <span class="tn-scr-dots"><i></i><i></i><i></i></span>
                                </div>
                                <div class="tn-scr-hi">Order #4821 🍔<b>On the way</b></div>
                                <div class="tn-scr-track">
                                    <span class="tn-scr-track-bar"><i></i></span>
                                    <span class="tn-scr-track-eta">Arriving in <b>12 min</b></span>
                                </div>
                                <div class="tn-scr-cats">
                                    <span></span><span></span><span></span><span></span>
                                </div>
                                <div class="tn-scr-list">
                                    <div class="tn-scr-row"><i></i><em></em><b>$14</b></div>
                                    <div class="tn-scr-row"><i></i><em></em><b>$9</b></div>
                                    <div class="tn-scr-row"><i></i><em></em><b>$22</b></div>
                                </div>
                            </div>

                            <!-- Screen 4: Ecommerce -->
                            <div class="tn-screen tn-screen-shop" data-label="Ecommerce">
                                <div class="tn-scr-top">
                                    <span class="tn-scr-time">9:41</span>
                                    <span class="tn-scr-dots"><i></i><i></i><i></i></span>
                                </div>
                                <div class="tn-scr-hi">New Arrivals 🛍️<b>Shop the Drop</b></div>
                                <div class="tn-scr-grid">
                                    <span></span><span></span><span></span><span></span>
                                </div>
                                <div class="tn-scr-cart">
                                    <span class="tn-scr-cart-lbl">Cart Total</span>
                                    <span class="tn-scr-cart-amt">$389</span>
                                    <span class="tn-scr-cart-btn">Checkout</span>
                                </div>
                            </div>

                        </div>
                        <!-- rotating label -->
                        <div class="tn-phone-tag" id="tnPhoneTag">Finance</div>
                    </div>
                </div>
            </div>

            <!-- ===== RIGHT: floating glass feature cards ===== -->
            <div class="tn-hero-right">
                <div class="tn-card tn-card-f1">
                    <span class="tn-card-ic"><img src="{{ asset('images/trionova/Technologies/Mobile-icons/flutter.png') }}" alt="Flutter"></span>
                    <span class="tn-card-tx"><b>Flutter</b><em>2x Faster Development</em></span>
                </div>
                <div class="tn-card tn-card-f2">
                    <span class="tn-card-ic"><img src="{{ asset('images/trionova/Technologies/Mobile-icons/Android.png') }}" alt="Android"></span>
                    <span class="tn-card-tx"><b>Android</b><em>Native Performance</em></span>
                </div>
                <div class="tn-card tn-card-f3">
                    <span class="tn-card-ic"><img src="{{ asset('images/trionova/Technologies/Mobile-icons/ios.png') }}" alt="iOS"></span>
                    <span class="tn-card-tx"><b>iOS</b><em>App Store Ready</em></span>
                </div>
                <div class="tn-card tn-card-f4">
                    <span class="tn-card-ic tn-card-ic-ai">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="4"/><path d="M9 9h6v6H9z"/><path d="M9 2v2M15 2v2M9 20v2M15 20v2M2 9h2M2 15h2M20 9h2M20 15h2"/></svg>
                    </span>
                    <span class="tn-card-tx"><b>AI Powered</b><em>Smart &amp; Future Ready Apps</em></span>
                </div>
            </div>

        </div>

        <!-- ===== STATS BAR ===== -->
        <div class="tn-statbar">
            <div class="tn-stat">
                <span class="tn-stat-ic">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </span>
                <span class="tn-stat-tx"><b class="tn-count" data-count="50" data-suffix="+">0</b><em>Businesses Trusted<br>Across the Globe</em></span>
            </div>
            <div class="tn-stat">
                <span class="tn-stat-ic">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/></svg>
                </span>
                <span class="tn-stat-tx"><b class="tn-count" data-count="150" data-suffix="+">0</b><em>Projects Delivered<br>Successfully</em></span>
            </div>
            <div class="tn-stat">
                <span class="tn-stat-ic">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/></svg>
                </span>
                <span class="tn-stat-tx"><b class="tn-count" data-count="6" data-suffix="+">0</b><em>Years of Experience<br>In App Development</em></span>
            </div>
            <div class="tn-stat">
                <span class="tn-stat-ic">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="M19 9l-5 5-4-4-4 4"/></svg>
                </span>
                <span class="tn-stat-tx"><b class="tn-count" data-count="100" data-suffix="K+">0</b><em>Daily Active Users<br>On Live Apps</em></span>
            </div>
        </div>

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
    <section class="banner banner-portfolio">
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

@push('scripts')
<script>
(function () {
    var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    /* ---- Heading: word-by-word reveal ---- */
    var title = document.querySelector('.tn-title[data-reveal]');
    if (title) {
        var words = title.querySelectorAll('.w');
        words.forEach(function (w, i) { w.style.animationDelay = (0.25 + i * 0.09) + 's'; });
        title.classList.add('tn-in');
    }

    /* ---- Phone: rotate app screens every 4s ---- */
    var screens = document.querySelectorAll('#tnPhoneScreen .tn-screen');
    var tag = document.getElementById('tnPhoneTag');
    if (screens.length > 1 && !reduce) {
        var idx = 0;
        setInterval(function () {
            screens[idx].classList.remove('is-active');
            idx = (idx + 1) % screens.length;
            screens[idx].classList.add('is-active');
            if (tag) tag.textContent = screens[idx].getAttribute('data-label') || '';
        }, 4000);
    }

    /* ---- Floating particles ---- */
    var pWrap = document.getElementById('tnParticles');
    if (pWrap && !reduce) {
        for (var i = 0; i < 18; i++) {
            var p = document.createElement('span');
            p.className = 'tn-p';
            p.style.left = (Math.random() * 100) + '%';
            p.style.top = (55 + Math.random() * 45) + '%';
            p.style.animationDuration = (7 + Math.random() * 8) + 's';
            p.style.animationDelay = (-Math.random() * 10) + 's';
            var s = (2 + Math.random() * 2).toFixed(1);
            p.style.width = p.style.height = s + 'px';
            pWrap.appendChild(p);
        }
    }

    /* ---- Count-up stats (fires when hero is in view) ---- */
    function runCount(el) {
        var target = parseFloat(el.getAttribute('data-count')) || 0;
        var suffix = el.getAttribute('data-suffix') || '';
        if (reduce) { el.textContent = target + suffix; return; }
        var start = null, dur = 1600;
        function step(ts) {
            if (!start) start = ts;
            var prog = Math.min((ts - start) / dur, 1);
            var eased = 1 - Math.pow(1 - prog, 3);
            el.textContent = Math.round(target * eased) + suffix;
            if (prog < 1) requestAnimationFrame(step);
        }
        requestAnimationFrame(step);
    }
    var counts = document.querySelectorAll('.tn-hero .tn-count');
    if ('IntersectionObserver' in window && counts.length) {
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (e.isIntersecting) { runCount(e.target); io.unobserve(e.target); }
            });
        }, { threshold: 0.4 });
        counts.forEach(function (c) { io.observe(c); });
    } else {
        counts.forEach(runCount);
    }

    /* ---- Magnetic hover on buttons ---- */
    if (!reduce && window.matchMedia('(pointer:fine)').matches) {
        document.querySelectorAll('.tn-hero [data-magnetic]').forEach(function (btn) {
            btn.addEventListener('mousemove', function (e) {
                var r = btn.getBoundingClientRect();
                var x = e.clientX - r.left - r.width / 2;
                var y = e.clientY - r.top - r.height / 2;
                btn.style.transform = 'translate(' + (x * 0.18) + 'px,' + (y * 0.25) + 'px)';
            });
            btn.addEventListener('mouseleave', function () { btn.style.transform = ''; });
        });
    }
})();
</script>
@endpush

