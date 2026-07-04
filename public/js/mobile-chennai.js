/* ============================================================
   APPETISER "JUST BUILD IT" — DESIGN CLONE  ·  interactions
   ============================================================ */

/* ---- Sticky header ---- */
const hdr = document.getElementById('hdr');
addEventListener('scroll', () => hdr.classList.toggle('mc-scrolled', scrollY > 40), { passive: true });

/* ---- Scroll reveal (fadeInUp / directional / stagger / cards / fan) ---- */
const io = new IntersectionObserver((es) => {
  es.forEach(e => { if (e.isIntersecting) { e.target.classList.add('mc-in'); io.unobserve(e.target); } });
}, { threshold: 0, rootMargin: '0px 0px -18% 0px' });
document.querySelectorAll('.mc-reveal:not(.mc-in), .mc-stagger, .mc-cards').forEach(el => io.observe(el));

/* ---- Stats: GSAP ScrollTrigger storytelling ---- */
gsap.registerPlugin(ScrollTrigger);

const statEls = gsap.utils.toArray('.mc-stats .mc-stat');
const statBgs = gsap.utils.toArray('.mc-stat-bg');

// Initialise content below viewport, backgrounds zoomed-in and invisible
gsap.set(statEls, { opacity: 0, y: 100 });
gsap.set(statBgs, { opacity: 0, scale: 1.08 });

const statTl = gsap.timeline({
  scrollTrigger: {
    trigger: '.mc-stats',
    start: 'top top',
    end: '+=400%',
    pin: true,
    scrub: 1,
    anticipatePin: 1,
  }
});

statEls.forEach((stat, i) => {
  const numEl  = stat.querySelector('.mc-num');
  const target = +numEl.dataset.count;
  const prefix = numEl.dataset.prefix || '';
  const suffix = numEl.dataset.suffix || '';
  const proxy  = { val: 0 };
  const isLast = i === statEls.length - 1;
  const bg     = statBgs[i];
  const prevBg = statBgs[i - 1];

  // ── Enter ──────────────────────────────────────────────
  // Stat: rise from below + fade in
  statTl.to(stat, { opacity: 1, y: 0, duration: 0.5, ease: 'power3.out' });

  // Count up in sync with enter
  statTl.to(proxy, {
    val: target,
    duration: 0.5,
    ease: 'power2.out',
    onUpdate() {
      numEl.textContent = prefix + Math.floor(proxy.val).toLocaleString('en-US') + suffix;
    }
  }, '<');

  // Background: crossfade in (current) and out (previous), both start together
  statTl.to(bg, { opacity: 1, scale: 1, duration: 0.5, ease: 'power2.out' }, '<');
  if (prevBg) {
    statTl.to(prevBg, { opacity: 0, scale: 1.04, duration: 0.5, ease: 'power2.in' }, '<');
  }

  // ── Hold ───────────────────────────────────────────────
  statTl.to({}, { duration: isLast ? 1.2 : 0.8 });

  // ── Exit ───────────────────────────────────────────────
  if (!isLast) {
    statTl.to(stat, { opacity: 0, y: -100, duration: 0.5, ease: 'power3.in' });
  }
});

/* ---- Scroll parallax for data-parallax elements ---- */
const parEls = [...document.querySelectorAll('[data-parallax]')];
let ticking = false;
function parallax() {
  const vh = innerHeight;
  parEls.forEach(el => {
    const r = el.getBoundingClientRect();
    const center = r.top + r.height / 2;
    const off = (center - vh / 2) * -parseFloat(el.dataset.parallax);
    el.style.transform = `translateY(${off.toFixed(1)}px)`;
  });
  ticking = false;
}
addEventListener('scroll', () => { if (!ticking) { requestAnimationFrame(parallax); ticking = true; } }, { passive: true });
parallax();

/* ---- Proven Innovation fan: cascading staircase + premium motion ---- */
(function () {
  const fanPhs = gsap.utils.toArray('.mc-fan .mc-ph');
  if (!fanPhs.length) return;

  // ── Static cascade layout (positions unchanged) ───────────────────────
  //            [ph1,  ph2,  ph3,  ph4,  ph5]
  const X   = [-260, -130,    0,  130,  260]; // x from centre (px)
  const Y   = [  60,   30,    0,   30,   60]; // y base (px)
  const SC  = [  .9,  .95,  1.0,  .95,   .9]; // scale
  const ZI  = [   1,    2,    5,    2,    1]; // z-index
  const Z3D = [ -50,    0,   50,    0,  -50]; // translateZ depth (px)

  // ── Float: y offset range from base + rotation range ─────────────────
  const FY_FROM = [-12,  10,  -8,  12, -15]; // start y-offset from Y base
  const FY_TO   = [ 12, -10,   8, -12,  15]; // end y-offset
  const FR_FROM = [ -9,  -5,  -1,   3,   7]; // rotation start (deg)
  const FR_TO   = [ -7,  -3,   1,   5,   9]; // rotation end (deg)
  const DUR     = [5.5, 6.5, 5.0, 7.0, 6.0]; // duration per phone (s)

  // ── Entrance offsets (one-shot slide-in) ─────────────────────────────
  const ENT_DX  = [-150, -100,   0,  100,  150]; // x shift from final position
  const ENT_SC  = [   1,    1, 0.8,    1,    1]; // ph3 starts at 80% scale
  const ENT_DLY = [   0,  .15, .30,  .45,  .60]; // stagger delay (s)

  // ── Scroll parallax targets ───────────────────────────────────────────
  const YP = [-20, -12, -5, -12, -20]; // yPercent at full scroll

  // ── 1. Initial state: invisible, entrance x offset applied ───────────
  fanPhs.forEach((ph, i) => {
    gsap.set(ph, {
      xPercent: -50, yPercent: -50,
      x:        X[i] + ENT_DX[i],      // shifted left/right of final x
      y:        Y[i] + FY_FROM[i],      // at float-start y
      rotation: FR_FROM[i],
      scale:    SC[i] * ENT_SC[i],
      z:        Z3D[i],
      zIndex:   ZI[i],
      opacity:  0,
      force3D:  true,
    });
  });

  // ── 2. Continuous float — starts immediately, plays while invisible ───
  //    Only touches y + rotation. x / opacity / scale / yPercent are safe.
  fanPhs.forEach((ph, i) => {
    gsap.to(ph, {
      y:        Y[i] + FY_TO[i],
      rotation: FR_TO[i],
      duration: DUR[i],
      ease:     'sine.inOut',
      repeat:   -1,
      yoyo:     true,
    });
  });

  // ── 3. Entrance: slide in from sides + fade (fires once) ─────────────
  ScrollTrigger.create({
    trigger: '.mc-fan',
    start:   'top 80%',
    once:    true,
    onEnter() {
      fanPhs.forEach((ph, i) => {
        gsap.to(ph, {
          x:         X[i],    // settle at final x
          opacity:   1,
          scale:     SC[i],   // ph3: 0.8 → 1.0
          duration:  1.2,
          delay:     ENT_DLY[i],
          ease:      'power3.out',
          overwrite: 'auto',  // only kills tweens on x/opacity/scale — float survives
        });
      });
    },
  });

  // ── 4. Scroll parallax: each phone moves at different speed ──────────
  const pTl = gsap.timeline({
    scrollTrigger: {
      trigger: '.mc-fan',
      start:   'top bottom',
      end:     'bottom top',
      scrub:   true,
    }
  });
  fanPhs.forEach((ph, i) => {
    pTl.to(ph, { yPercent: YP[i], ease: 'none', duration: 1 }, 0);
  });
})();

/* ---- Testimonial Owl Carousel ---- */
$(function () {
  $('.mc-testimonial-owl').owlCarousel({
    loop: true,
    margin: 30,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayTimeout: 4500,
    autoplayHoverPause: true,
    smartSpeed: 700,
    responsive: {
      0:   { items: 1 },
      768: { items: 2 },
      1200:{ items: 2 },
    },
  });
});

/* ---- Cascading phone stacks: staggered slide-up entrance ---- */
(function () {
  const stacks = document.querySelectorAll('.mc-pstack');
  if (!stacks.length) return;
  const ROT = [-22, -7,  3,  18];
  const Y   = [ 30,  0,  0,  40];
  const OP  = [0.7,  1,  1, 0.75];
  const DLY = [  0, .13, .26, .39];
  stacks.forEach(stack => {
    const phs = [...stack.querySelectorAll('.mc-pstack-ph')];
    phs.forEach((ph, i) => {
      gsap.set(ph, { rotation: ROT[i], transformOrigin: 'bottom center', y: Y[i] + 90, opacity: 0 });
    });
    ScrollTrigger.create({
      trigger: stack, start: 'top 80%', once: true,
      onEnter() {
        phs.forEach((ph, i) => {
          gsap.to(ph, { y: Y[i], opacity: OP[i], duration: 1.0, delay: DLY[i], ease: 'power3.out' });
        });
      },
    });
  });
})();

/* ---- Parallax on fullwidth banner images ---- */
(function () {
  const banners = document.querySelectorAll('.fullwidth-img-banner, .success-img-banner');
  banners.forEach(section => {
    const img = section.querySelector('img');
    if (!img) return;
    gsap.fromTo(img,
      { yPercent: -10 },
      {
        yPercent: 10,
        ease: 'none',
        scrollTrigger: {
          trigger: section,
          start: 'top bottom',
          end: 'bottom top',
          scrub: true,
        }
      }
    );
  });
})();

/* ---- Ken Burns banner parallax ---- */
(function () {
  const kb = document.querySelector('.kenburns');
  if (!kb) return;
  gsap.to(kb, {
    yPercent: 18,
    ease: 'none',
    scrollTrigger: { trigger: '.banner', start: 'top bottom', end: 'bottom top', scrub: true }
  });
})();


/* ---- Portfolio Owl Carousel ---- */
$(function () {
  $('.mc-portfolio-owl').owlCarousel({
    loop: true,
    items: 1,
    margin: 0,
    nav: true,
    navText: [
      '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg>',
      '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>'
    ],
    dots: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    smartSpeed: 700,
  });
});
