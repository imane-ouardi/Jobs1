<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Job Portal')</title>

    {{-- CSS --}}
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon">

    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}"
          type="image/x-icon"
    />
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <!-- ==== WOW JS ==== -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Livewire Styles --}}
    @livewireStyles
</head>
<body class="bg-white text-body dark:bg-dark dark:text-white">

    {{-- محتوى الصفحة --}}
    @yield('content')

    {{-- JavaScript --}}
    <script src="{{ asset('assets/js/main.js') }}"></script>

    {{-- Livewire Scripts --}}
    @livewireScripts

    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        // ==== for menu scroll
        const pageLink = document.querySelectorAll(".ud-menu-scroll");

        pageLink.forEach((elem) => {
            elem.addEventListener("click", (e) => {
                e.preventDefault();
                document.querySelector(elem.getAttribute("href")).scrollIntoView({
                    behavior: "smooth",
                    offsetTop: 1 - 60,
                });
            });
        });

        // section menu active
        function onScroll(event) {
            const sections = document.querySelectorAll(".ud-menu-scroll");
            const scrollPos =
                window.pageYOffset ||
                document.documentElement.scrollTop ||
                document.body.scrollTop;

            for (let i = 0; i < sections.length; i++) {
                const currLink = sections[i];
                const val = currLink.getAttribute("href");
                const refElement = document.querySelector(val);
                const scrollTopMinus = scrollPos + 73;
                if (
                    refElement.offsetTop <= scrollTopMinus &&
                    refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
                ) {
                    document
                        .querySelector(".ud-menu-scroll")
                        .classList.remove("active");
                    currLink.classList.add("active");
                } else {
                    currLink.classList.remove("active");
                }
            }
        }

        window.document.addEventListener("scroll", onScroll);

        // Testimonial
        const testimonialSwiper = new Swiper(".testimonial-carousel", {
            slidesPerView: 1,
            spaceBetween: 30,

            // Navigation arrows
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1280: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        });
    </script>
</body>
</html>
