# Trionova — Mobile-App-Chennai Page Design System

> **Reference only — do not edit pages based on this file alone.**  
> All production changes go in:
> - Blade: `resources/views/services/Business Solutions/mobile-app-chennai.blade.php`
> - CSS: `public/css/mobile-chennai.css` (scoped under a section-specific class)

---

## 1. Route Confirmation

| Live URL | Controller method | Blade file |
|---|---|---|
| `/mobile-app-development-company-in-chennai` | `PagesController::mobileAppChennai()` | `resources/views/services/Business Solutions/mobile-app-chennai.blade.php` |

`routes/web.php:63` — no named route; use `url('mobile-app-development-company-in-chennai')`.  
Flutter page: `routes/web.php:16` — `url('flutter-app-development-company-in-chennai')`.  
Contact: `routes/web.php:12` — `/contact` (no name, no trailing slash).

---

## 2. Design Tokens

### 2a. Color Palette

| Token name | Hex | Where used |
|---|---|---|
| `--c-navy` | `#022279` | Brand primary: buttons, borders on hover, eyebrow text, icon color, focus rings |
| `--c-navy-deep` | `#05002c` | Section h2/h3 headings |
| `--c-navy-mid` | `#1a3c8f` | Table header Trionova column, secondary accent |
| `--c-body` | `#656565` | All paragraph / description / subhead text |
| `--c-label` | `#212529` | `.sub-title` eyebrow (legacy pattern), dark labels |
| `--c-medium-gray` | `#717580` | Global body text default (`--medium-gray` in style.css) |
| `--c-white` | `#ffffff` | Card backgrounds (inner cards), button text |
| `--c-bg-alt` | `#f8f9fc` | Alternate section background (flutter, industries, outcomes sections) |
| `--c-bg-tint` | `#edf0fa` | Icon square backgrounds; Trionova table column body cells |
| `--c-border` | `#e8eaf0` | Card borders (1.5px), table row borders (1px) |
| `--c-hover-border` | `#022279` | Card/row border on hover |
| `--c-icon-tint` | `#edf0fa` | Icon container background (same as bg-tint) |
| `--c-shadow-tint` | `rgba(2, 34, 121, 0.10)` | Card box-shadow on hover |
| `--c-shadow-tint-deep` | `rgba(2, 34, 121, 0.12)` | Link-card box-shadow on hover |
| `--c-success-bg` | `#d4edda` | Check badge background in comparison table |
| `--c-success-fg` | `#1a7a3e` | Check icon color |
| `--c-warn-bg` | `#fff3cd` | "Confirm?" placeholder badge background |
| `--c-warn-fg` | `#856404` | "Confirm?" placeholder badge text |

**Gradient accents** (used sparingly on CTA / hero areas):
```css
linear-gradient(180deg, #022279 0%, #0c69d9 100%)   /* vertical navy-to-blue */
linear-gradient(250deg, #022279 19%, #14bced 100%)   /* diagonal navy-to-cyan */
```

**Section background alternation pattern** (established, follow this):
```
Hero            → white (#fff)
Outcomes        → white (#fff)
Case studies    → white (#fff)
Industries      → alt (#f8f9fc)
Compare         → white (#fff)
Welcome/CTA     → white (#fff) with bg-count class
Flutter         → alt (#f8f9fc)
Testimonials    → (common partial, varied)
```
Alternate white / alt every other content section so sections are visually separated without dividers.

---

### 2b. Typography

**Fonts loaded (via `layouts/app.blade.php` head)**:
```
DM Sans         — 400, 500, 600, 700, 800  (via Google Fonts, opsz 9..40)
Plus Jakarta Sans — 400, 500, 600, 700, 800  (via Google Fonts)
Lily Script One — display/accent use only
```
`style.css` defines `--primary-font: "Inter"` / `--alt-font: "Plus Jakarta Sans"` but the page's mobile-specific override cascade means **DM Sans / Plus Jakarta Sans** are the visible fonts in most sections.

**Type scale (verified from `mobile-chennai.css` and new section CSS)**:

| Role | Size | Weight | Color | Notes |
|---|---|---|---|---|
| Eyebrow label | 13px | 600 | `#022279` | uppercase, `letter-spacing: 3px`, `margin-bottom: 14px` |
| Section h2 (new sections) | 36px | 700 | `#05002c` | `line-height: 1.3`, `margin-bottom: 14px` |
| Section h2 (mobile <768px) | 26px | 700 | `#05002c` | reduce at `max-width: 767px` |
| Legacy `.con-h3` | 32px | 400 | `#05002c` | `line-height: 1.2` |
| Legacy global h2 | 28px | 600 | `#000` | base in mobile-chennai.css, overridden per-section |
| Sub-heading / support line | 17px | 400 | `#656565` | `max-width: ~620px`, `line-height: 1.7`, centered |
| Card title (large cards) | 18px | 700 | `#05002c` | industries cards |
| Card title (medium cards) | 16–17px | 700 | `#05002c` | outcomes / flutter cards |
| Card description | 14–15px | 400 | `#656565` | `line-height: 1.65` |
| Global paragraph | 18px | 400 | `#656565` | `line-height: 27px` |
| Badge / meta label | 12–13px | 600 | `#022279` | reference tags, small labels |
| Table feature header | 15px | 500 | `#05002c` | table row headers |
| `.sub-title` (legacy eyebrow) | 13px | 500 | `#212529` | `uppercase`, `letter-spacing: 3px` — with `::after` underline |

---

### 2c. Layout & Grid

**Containers**:
- `.container-fluid` on this page: `width: 92%; max-width: 1250px`
- Bootstrap `.container`: standard (xl = 1140px, lg = 960px, md = 720px, sm = 540px)
- New content sections use `.container` (not `.container-fluid`)

**Section vertical rhythm**:
```css
pt80 pb80    /* 80px top + bottom — standard content sections */
pt-50px pb-50px  /* 50px top + bottom — denser/accent sections */
```
`mb-40px` is used as the header block's bottom margin (defined in a global utility sheet; Bootstrap `mb-5` ≈ equivalent fallback).

**Bootstrap 5.3 breakpoints** (what's actually in use on this page):
```
xs  < 576px    col-12, row-cols-1
sm  ≥ 576px    row-cols-sm-2
md  ≥ 768px    col-md-6, row-cols-md-2, d-md-none
lg  ≥ 992px    col-lg-4, row-cols-lg-3, row-cols-lg-4
xl  ≥ 1200px   row-cols-xl-5, d-xl-flex
```

**Grid patterns used** (reuse these, don't invent new ones):
```html
<!-- 3-up card grid (industries) -->
<div class="row">
  <div class="col-lg-4 col-md-6 col-12">...</div>
</div>

<!-- Responsive card grid with Bootstrap g-4 gutters -->
<div class="row row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 g-4">
  <div class="col">...</div>
</div>

<!-- 4-up grid -->
<div class="row row-cols-lg-4 row-cols-md-2 row-cols-sm-2 row-cols-1 g-4">
  <div class="col">...</div>
</div>
```

---

### 2d. Reusable Components & Class Names

#### Section header block (established pattern — reuse exactly)
```html
<div class="text-center mb-40px">
  <span class="{section}-eyebrow">Eyebrow Label</span>
  <h2 class="{section}-heading">Main Section Heading</h2>
  <p class="{section}-subhead">Supporting muted line, max-width ~620px, centered.</p>
</div>
```
Each new section gets its own prefixed classes (e.g. `outc-`, `indus-`, `flutter-`, `comp-`). The rendered values are identical — use the shared token values.

#### Cards — established hover-lift pattern
```css
.{sec}-card {
    display: flex;
    flex-direction: column;
    height: 100%;
    background: #fff;               /* or #f8f9fc for on-white sections */
    border: 1.5px solid #e8eaf0;
    border-radius: 12px;
    padding: 28px 24px;
    transition: box-shadow 0.22s ease, transform 0.22s ease, border-color 0.22s ease;
}
.{sec}-card:hover {
    box-shadow: 0 8px 28px rgba(2, 34, 121, 0.10);
    transform: translateY(-4px);
    border-color: #022279;
}
@media (prefers-reduced-motion: reduce) {
    .{sec}-card { transition: none; }
    .{sec}-card:hover { transform: none; }
}
```

#### Icon square — established size pattern
```css
/* Standard (outcomes/flutter cards) */
.{sec}-icon {
    width: 48px;
    height: 48px;
    border-radius: 10px;
    background: #edf0fa;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 16px;
    flex-shrink: 0;
}
.{sec}-icon i { font-size: 22px; color: #022279; line-height: 1; }

/* Large variant (industries cards) */
/* width: 52px; height: 52px; border-radius: 10px; icon font-size: 24px */
```

#### Link cards (whole-card `<a>`)
See `.indus-card`: adds `text-decoration: none; color: inherit;` and `:focus-visible` outline `3px solid #022279; outline-offset: 2px`.

#### Buttons
```html
<!-- Primary filled pill (most CTAs) -->
<a href="..." class="btn-curve-bg" aria-label="...">
  <span>Button Label</span>
</a>

<!-- Outlined ghost pill -->
<a href="..." class="btn-curve">
  <span>Button Label</span>
</a>
```
`btn-curve-bg`: `background: #022279; color: #fff; padding: 12px 35px; border-radius: 100px; font-size: 18px`  
Hover: white wipe from top (::after pseudo), span text becomes `color: #022279`.

**`.cta-btn` class** opens `#call-to-action` Magnific Popup inline modal (wired globally in `partials/footer.blade.php`). Use this for primary "Get a Quote" CTAs; use `/contact` for secondary CTAs.

#### Tech pills (`.program-used`)
```html
<div class="program-wrapper pt-2 pb-2 mt-1">
  <div class="program-used" style="background-color: #0d47a1">Flutter</div>
  <div class="program-used" style="background-color: #e23a70">Tech Name</div>
</div>
```
Each pill has its own `background-color` as an inline style. No shared CSS definition found — they rely on Bootstrap utilities + inline bg color + their own padding/radius.

#### `.inner-ser` service card (existing hero services section)
```css
border-radius: 5px; padding: 20px; text-align: center;
box-shadow: 0 2px 17px -5px #cbcbcb;
```
Icon: 70×70px centered image or Lottie player.

#### Legacy eyebrow: `.sub-title`
```css
color: #212529; font-size: 13px; font-weight: 500;
text-transform: uppercase; letter-spacing: 3px; margin-bottom: 15px;
padding-left: 70px; /* with ::after underline rule 60px wide at left:0 */
```
The new sections use the simpler inline-block eyebrow without padding/underline. Prefer the new pattern for new sections.

---

### 2e. Border-Radius Conventions

| Use | Value |
|---|---|
| Content cards (new sections) | `12px` |
| Icon squares | `10px` |
| Legacy `.why-box` cards | `10px` |
| Button pills | `100px` |
| Brand badge / tri-mobile certification cards | `20px` |
| Legacy image / `.abt-img` | `10px` |
| Table wrapper | `12px` |

---

### 2f. Box Shadow Conventions

| Use | Value |
|---|---|
| Card resting (inner-ser legacy) | `0 2px 17px -5px #cbcbcb` |
| Card resting (legacy why-box) | `0 3px 15px -1px rgb(0 0 0 / 10%)` |
| Card hover (new sections) | `0 8px 28px rgba(2, 34, 121, 0.10)` |
| Link card hover (industries) | `0 8px 30px rgba(2, 34, 121, 0.12)` |
| Subtle ambient (global page elements) | `0 4px 6px 0 rgb(12 0 46 / 8%)` |

---

## 3. JavaScript Libraries (Site-Wide)

| Library | Version | How loaded | Initialized |
|---|---|---|---|
| jQuery | 3.6.0 | `layouts/app.blade.php` `<body>` CDN | Globally available |
| Owl Carousel | 2.3.4 | `layouts/app.blade.php` `<body>` CDN | `.rs-carousel` auto-init via `main_1.js`; custom class for manual init |
| AOS | 2.3.1 | `partials/footer.blade.php` unpkg CDN + `main.bundle.js` deferred | **Active** — `AOS.init()` runs via `main.bundle.js` |
| WOW.js | (bundled) | Commented out from footer — classes still in markup as legacy | **Not reliably active**; `data-wow-delay` attributes ignored safely |
| Bootstrap | 5.3.0 | `layouts/app.blade.php` bundle deferred | Available |
| Magnific Popup | (bundled) | Loaded via CSS vendors | `.popup-quote` + `.cta-btn` wired in footer |
| Lottie Player | 2.x | `@section('scripts')` on this page | Active on this page only |
| Google reCAPTCHA | v2 | `layouts/app.blade.php` head async | Contact form validation |

**For scroll-reveal in new sections**: use `data-aos="fade-up"` / `data-aos-delay="100"` (AOS is confirmed active). Do NOT use `class="wow"`.

---

## 4. Premium Section Standard

Every new section added to this page must meet all of the following.

### 4a. Vertical Rhythm & Whitespace
- Section padding: `pt80 pb80` (80px top + bottom) as the default.
- Section header block bottom margin: `mb-40px` class (or `margin-bottom: 40px`).
- Card grid top margin from header block: `margin-top: 40px` (via `.indus-grid` pattern) or Bootstrap `mt-4` / `mt-5`.
- Paragraph max-width: **640px max** for center-aligned prose (keeps line length readable).
- Icon-to-text gap inside cards: `margin-bottom: 16–18px` between icon square and title.

### 4b. Visual Hierarchy
Three levels, always in this order, never skip:
1. **Eyebrow** — 13px, 600 weight, uppercase, 3px letter-spacing, `#022279`
2. **Heading** — 36px, 700 weight, `#05002c`, `line-height: 1.3`
3. **Supporting line** — 17px, 400, `#656565`, max-width 620px, centered

### 4c. Depth & Polish
- Cards: **1.5px border** `#e8eaf0` at rest; `12px` border-radius.
- On hover: border shifts to `#022279`, box-shadow `0 8px 28px rgba(2,34,121,0.10)`, lift `translateY(-4px)`.
- Section backgrounds alternate white / `#f8f9fc` — no heavy tinted backgrounds.
- Optional: a very soft radial glow background on key sections:
  ```css
  background: radial-gradient(ellipse at 70% 30%, rgba(2,34,121,0.04) 0%, transparent 60%);
  ```
- Optional: a 1px accent rule under the eyebrow:
  ```css
  .eyebrow::after {
      content: "";
      display: block;
      width: 36px;
      height: 2px;
      background: #022279;
      margin: 8px auto 0;
      border-radius: 2px;
  }
  ```
  Only add this if not used in an adjacent section (don't repeat it in consecutive sections).

### 4d. Icons
- **One system only**: Themify Icons (`ti-*` classes from `icon.min.css`), displayed inside the `--c-icon-tint` (#edf0fa) square, color `#022279`.
- Never mix Themify, Font Awesome, and inline SVG in the same section.
- All icon elements: `aria-hidden="true"`. Meaningful labels go on the parent element.
- Font Awesome is available site-wide (`fa-*`) — use only if Themify lacks the right glyph and you note the inconsistency.

### 4e. Micro-Interactions
```css
/* Standard transition — apply to every interactive card */
transition: box-shadow 0.22s ease, transform 0.22s ease, border-color 0.22s ease;

/* Hover state */
:hover { transform: translateY(-4px); box-shadow: 0 8px 28px rgba(2,34,121,0.10); border-color: #022279; }

/* REQUIRED gate */
@media (prefers-reduced-motion: reduce) {
    .{sec}-card { transition: none; }
    .{sec}-card:hover { transform: none; }
}
```
Scroll reveal: `data-aos="fade-up"` on card wrappers, `data-aos-delay="100"` / `"150"` / `"200"` for staggered children. AOS is confirmed active.

### 4f. Responsive — Re-thought Per Breakpoint
- Headings scale down at `max-width: 767px` (36px → 26px is established convention).
- Card padding reduces at 767px (e.g. `28px 24px` → `20px 18px`).
- 4-col grids become 2-col at md, 1-col at xs.
- Tables: always wrap in `.compare-table-wrap` with `overflow-x: auto` and `min-width` on the table itself.
- Feature text in columns: `white-space: nowrap` on desktop, `white-space: normal` on mobile.
- No layout shift: reserve image dimensions, set explicit widths on icon squares.

---

## 5. Global Rules (Non-Negotiable)

### Honesty
- **Never invent** statistics, percentages, revenue figures, client names, award names, or capabilities.
- Use Blade comment placeholders for unverified facts:
  ```blade
  {{-- [ADD REAL METRIC: e.g. sessions/week, DAU growth for ATeam] --}}
  {{-- [CONFIRM: do we offer this as standard?] --}}
  ```
- For visible UI placeholders (e.g. comparison table cells not yet confirmed), render an amber badge: `<span class="comp-unconfirmed" aria-label="To confirm">Confirm?</span>` — never a fake checkmark.

### Links
- Only link to routes confirmed in `routes/web.php`.
- Use `url('path/without/leading-slash')` when no named route exists.
- Use `route('name')` only when a `->name()` exists on the route.
- Internal anchors (`#section-id`): confirm the `id` exists in the DOM before linking.
- Consultation form target: `.cta-btn` class → opens `#call-to-action` modal (Magnific Popup, wired in footer globally). `/contact` is the fallback hard-link.

### Accessibility
- Heading order: `h2` for the section title, `h3` for card titles — never skip levels.
- Icon-only elements: `aria-hidden="true"` on the icon, meaningful `aria-label` on the parent `<a>` or `<button>`.
- Tables: use `<table>`, `<thead>`, `<th scope="col">`, `<th scope="row">`. Never a div-grid that mimics a table.
- Focus states: `outline: 3px solid #022279; outline-offset: 2px` on `:focus-visible`.
- Images: `alt` text required, `loading="lazy"` unless above-the-fold.

### CSS Scoping
- Every new section's CSS lives in `public/css/mobile-chennai.css`.
- All new rules scoped under a section-specific wrapper class (`.{section}-wrapper` or just the section class itself, e.g. `.flutter-why-sec`).
- Do not add new global rules — extend the existing global patterns via the section prefix.
- Do not use `!important` except to override third-party styles or in `prefers-reduced-motion` gates.

---

## 6. CSS Custom Properties Reference Block

Paste this at the top of a `<style>` block or at the beginning of `mobile-chennai.css` when you want to use token variables. Currently not defined in the file — these are extracted from actual values.

```css
/* =============================================
   Trionova Mobile-Chennai Page — Design Tokens
   Paste at top of mobile-chennai.css to enable
   ============================================= */
:root {
  /* Brand colors */
  --c-navy:            #022279;
  --c-navy-deep:       #05002c;
  --c-navy-mid:        #1a3c8f;

  /* Text */
  --c-body:            #656565;
  --c-label:           #212529;
  --c-white:           #ffffff;

  /* Backgrounds */
  --c-bg-white:        #ffffff;
  --c-bg-alt:          #f8f9fc;
  --c-bg-tint:         #edf0fa;

  /* Borders */
  --c-border:          #e8eaf0;
  --c-border-hover:    #022279;

  /* Shadows */
  --shadow-card:       0 8px 28px rgba(2, 34, 121, 0.10);
  --shadow-card-link:  0 8px 30px rgba(2, 34, 121, 0.12);
  --shadow-ambient:    0 4px 6px 0 rgb(12 0 46 / 8%);

  /* Radii */
  --radius-card:       12px;
  --radius-icon:       10px;
  --radius-pill:       100px;
  --radius-badge:      20px;

  /* Type scale */
  --fs-eyebrow:        13px;
  --fs-h2:             36px;
  --fs-h2-mobile:      26px;
  --fs-subhead:        17px;
  --fs-card-title-lg:  18px;
  --fs-card-title:     16px;
  --fs-card-desc:      14px;
  --fs-body:           18px;
  --fs-meta:           12px;

  /* Transitions */
  --transition-card:   box-shadow 0.22s ease, transform 0.22s ease, border-color 0.22s ease;
  --hover-lift:        translateY(-4px);
}
```

---

## 7. Reusable Snippets

### Section header (copy-paste ready)
```html
<div class="text-center mb-40px">
    <span class="{sec}-eyebrow">{Eyebrow Label}</span>
    <h2 class="{sec}-heading">{Main Heading}</h2>
    <p class="{sec}-subhead">{Supporting line — 17px, max ~620px, centered.}</p>
</div>
```

### Section header CSS (paired with above)
```css
.{sec}-eyebrow {
    display: inline-block;
    font-size: 13px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 3px;
    color: #022279;
    margin-bottom: 14px;
}
.{sec}-heading {
    font-size: 36px;
    font-weight: 700;
    color: #05002c;
    line-height: 1.3;
    margin-bottom: 14px;
}
.{sec}-subhead {
    font-size: 17px;
    color: #656565;
    max-width: 620px;
    margin: 0 auto;
    line-height: 1.7;
}
@media (max-width: 767px) {
    .{sec}-heading { font-size: 26px; }
}
```

### Card (copy-paste ready)
```css
.{sec}-card {
    display: flex;
    flex-direction: column;
    height: 100%;
    background: #fff;               /* use #f8f9fc on alternate sections */
    border: 1.5px solid #e8eaf0;
    border-radius: 12px;
    padding: 28px 24px;
    transition: box-shadow 0.22s ease, transform 0.22s ease, border-color 0.22s ease;
}
.{sec}-card:hover {
    box-shadow: 0 8px 28px rgba(2, 34, 121, 0.10);
    transform: translateY(-4px);
    border-color: #022279;
}
@media (prefers-reduced-motion: reduce) {
    .{sec}-card { transition: none; }
    .{sec}-card:hover { transform: none; }
}
@media (max-width: 767px) {
    .{sec}-card { padding: 20px 18px; }
}
```

### Icon square (copy-paste ready)
```css
.{sec}-icon {
    width: 48px;
    height: 48px;
    border-radius: 10px;
    background: #edf0fa;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 16px;
    flex-shrink: 0;
}
.{sec}-icon i {
    font-size: 22px;
    color: #022279;
    line-height: 1;
}
```

### AOS reveal on card row (add to the grid wrapper)
```html
<div class="row ... g-4"
     data-aos="fade-up"
     data-aos-delay="0">
```
Or stagger individual cards:
```html
<div class="col" data-aos="fade-up" data-aos-delay="0">
<div class="col" data-aos="fade-up" data-aos-delay="100">
<div class="col" data-aos="fade-up" data-aos-delay="200">
```

### Focus ring (link cards / interactive elements)
```css
.{sec}-card:focus-visible {
    outline: 3px solid #022279;
    outline-offset: 2px;
}
```

---

## 8. Known Placeholders to Fill In

Before any section goes live, verify these open `[CONFIRM]` / `[ADD]` items in the blade file:

| Section | Placeholder | What to verify |
|---|---|---|
| Business Outcomes | `[ADD REAL METRIC: ...ATeam/Dots engagement]` | Real DAU / session frequency figure |
| Business Outcomes | `[ADD REAL METRIC: ...Madhura Polymers reconciliation]` | Hours/week saved in finance ops |
| Business Outcomes | `[ADD REAL METRIC: ...Dots/Cure Skin repeat purchase]` | Repeat purchase rate or subscription GMV |
| Business Outcomes | `[ADD REAL METRIC: ...Madhura/Ganesh FTE-hours saved]` | FTE-hours per month |
| Business Outcomes | `[ADD REAL METRIC: ...Cure Skin/Abhi retention]` | 30-day or 90-day retention rate |
| Compare Table | `[CONFIRM: App Store/Play Store submission]` | Do we handle this as standard, or is it add-on? |
| Compare Table | `[CONFIRM: Full source code ownership]` | Do we transfer IP to every client? |
| Compare Table | `[CONFIRM: Dedicated project manager]` | Is a dedicated PM assigned as standard? |

Replace each amber `comp-unconfirmed` badge with a `comp-check` span once confirmed. Replace each Blade metric comment with the real figure wrapped in `<strong>`.

---

*Generated from codebase scan — 2026-06-17*
