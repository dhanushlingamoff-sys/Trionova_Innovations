<!DOCTYPE html>
<html>

<head>
    @yield('meta')

    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('images/trionova/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png') }}">

    <!-- google fonts preconnect -->
    <!--<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- style sheets and font icons -->
    <!-- Font -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/icon.min.css') }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v=1.0.1" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}?v=1.0.1" />
    <link rel="stylesheet" href="{{ asset('css/vendors.min.css') }}?v=1.0.1" />
    <!--<link rel="stylesheet" href="{{ asset('css/new.css') }}?v=1.0.1">-->

    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/rs-spacing.css') }}"> --}}

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/flutter.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/new.css') }}">
    <link rel="stylesheet" href="{{ asset('css/chatbot.css') }}">
    <!-- style sheets and font icons -->

    <!-- Font -->

    <!--<link-->
    <!--    href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700;9..40,800&amp;display=swap"-->
    <!--    rel="stylesheet">-->
    <!--<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap"-->
    <!--    rel="stylesheet">-->
    <!--<link href="https://fonts.googleapis.com/css2?family=Lily+Script+One&amp;display=swap" rel="stylesheet">-->

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700;9..40,800&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Lily+Script+One&display=swap"
        rel="stylesheet">

    <!-- Font -->


    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/off-canvas.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/owl.carousel.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}"> --}}
  
    {{--  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body>

    {{-- start pre-loader --}}
    {{-- @include('common.preloader') --}}
    {{-- End pre-loader --}}

    @include('components.chatbot')

    {{-- Include the header --}}
    @include('partials.header')

    {{-- Page Content --}}
    <div class="main-content">
        @yield('content')
    </div>

    {{-- Include the footer --}}
    @include('partials.footer')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


    @yield('scripts')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>


    <script defer>
        $('.testimonials-carousel').owlCarousel({
            loop: true,
            margin: 25,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 800,
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
    </script>

    <script>
        function getParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }

        document.getElementById('gclid').value = getParam('gclid') || '';
        document.getElementById('utm_source').value = getParam('utm_source') || '';
        document.getElementById('utm_medium').value = getParam('utm_medium') || '';
        document.getElementById('utm_campaign').value = getParam('utm_campaign') || '';
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            document.querySelectorAll(".Contact-Form").forEach(function(form) {

                const phoneInput = form.querySelector(".phone-field");
                if (!phoneInput) return;

                // CAPTCHA
                const captchaElement = form.querySelector(".g-recaptcha");
                let widgetId = null;

                if (captchaElement && typeof grecaptcha !== "undefined") {
                    widgetId = grecaptcha.render(captchaElement, {
                        sitekey: captchaElement.getAttribute("data-sitekey")
                    });
                }

                form.addEventListener("submit", function(e) {

                    let valid = true;
                    form.querySelectorAll(".error").forEach(el => el.innerText = "");

                    const name = form.querySelector(".name-field").value.trim();
                    const business = form.querySelector(".business-field").value.trim();
                    const email = form.querySelector(".email-field").value.trim();
                    const phoneValue = phoneInput.value.trim();
                    const fullPhoneInput = form.querySelector(".full-phone");

                    if (name === "") {
                        form.querySelector(".name-error").innerText =
                            "Please complete this required field.";
                        valid = false;
                    } else if (name.length < 3) {
                        form.querySelector(".name-error").innerText =
                            "Name must be at least 3 characters.";
                        valid = false;
                    }

                    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/i;

                    if (email.trim() === "") {
                        form.querySelector(".email-error").innerText =
                            "Please complete this required field.";
                        valid = false;
                    } else if (!emailPattern.test(email)) {
                        form.querySelector(".email-error").innerText =
                            "Enter a valid email address.";
                        valid = false;
                    } else {
                        form.querySelector(".email-error").innerText = "";
                    }

                    if (phoneValue === "") {
                        form.querySelector(".phone-error").innerText =
                            "Please complete this required field.";
                        valid = false;
                    }
                    const phonePattern = /^[6-9]\d{9}$/;

                    if (phoneValue === "") {
                        form.querySelector(".phone-error").innerText =
                            "Please complete this required field.";
                        valid = false;
                    } else if (!phonePattern.test(phoneValue)) {
                        form.querySelector(".phone-error").innerText =
                            "Enter a valid 10-digit phone number.";
                        valid = false;
                    }

                    if (business.length === 0) {
                        form.querySelector(".business-error").innerText =
                            "Please complete this required field.";
                        valid = false;
                    }

                    if (widgetId !== null) {
                        const captchaResponse = grecaptcha.getResponse(widgetId);

                        if (!captchaResponse) {
                            form.querySelector(".captcha-error").innerText =
                                "Please verify that you are not a robot.";
                            valid = false;
                        }
                    }

                    if (!valid) {
                        e.preventDefault();
                        return;
                    }

                    const button = form.querySelector("#submitBtn");
                    if (button) {
                        const btnText = button.querySelector(".btn-text");
                        const btnLoader = button.querySelector(".btn-loader");

                        button.disabled = true;
                        if (btnText) btnText.style.display = "none";
                        if (btnLoader) btnLoader.style.display = "inline-block";
                    }

                });

            });

        });
    </script>

</body>

</html>
