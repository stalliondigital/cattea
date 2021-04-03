<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Favicon Related --}}
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('img/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('img/favicon/safari-pinned-tab.svg') }}" color="#038cba">
    <meta name="apple-mobile-web-app-title" content="Cattea Artistry">
    <meta name="application-name" content="Cattea Artistry">
    <meta name="msapplication-TileColor" content="#f3f4f7">
    <meta name="theme-color" content="#ffffff">



    <title>{{ config('app.name', 'Cattea Artistry') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    {{-- Swiper --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    {{-- FancyBox --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    {{-- TabbyJS --}}
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/gh/cferdinandi/tabby@12/dist/css/tabby-ui.min.css">
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/tabby@12/dist/js/tabby.polyfills.min.js"></script>





    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="antialiased">

    <div class="">

        <header class="header-main">
            {{-- Navigation Menu Button --}}
            <div class="menu-section">
                <button id="menu-toggle" class="menu-toggle mb-5 p-3 text-white inline rounded-lg">
                    <div class="bar-one"></div>
                    <div class="bar-two"></div>
                </button>
                <nav class="header-navigation nav-hidden z-50">
                    <div class="navigation-upper">
                        <h3>Menu</h3>
                        <div class="logo-long">
                            <h5>Cattea</h5>
                            <img src="{{ asset('img/logostyle/cattea-logo-sm.png') }}" alt="">
                            <h5>Artistry</h5>
                        </div>
                    </div>
                    <ul class="nav-links" role="navigation">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('portfolio.index') }}">Portfolio</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                    <ul class="nav-social-links" role="navigation">
                        <h3>Social Links</h3>
                        <li>
                            <a target="_blank" href="https://facebook.com/CatteaArtistry"><i
                                    class="fab fa-facebook"></i>
                                <span class="sr-only">Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://instagram.com/cattea_artistry"><i
                                    class="fab fa-instagram"></i>
                                <span class="sr-only">Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="mailto:info@cattea.ca"><i class="far fa-envelope"></i><span
                                    class="sr-only">Email</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            {{-- Social Links --}}
            <ul class="header-social-links">
                <li><a target="_blank" href="https://facebook.com/CatteaArtistry"><i class="fab fa-facebook"></i><span
                            class="sr-only">Facebook</span></a></li>
                <li><a target="_blank" href="https://instagram.com/cattea_artistry"><i
                            class="fab fa-instagram"></i><span class="sr-only">Instagram</span></a></li>
                <li><a target="_blank" href="mailto:info@cattea.ca"><i class="far fa-envelope "></i><span
                            class="sr-only">Email</span></a></li>
            </ul>

            {{-- Header Logo --}}
            <div class="header-logo flex items-center">
                <a href="{{ route('home') }}">
                    <span>CATTEA</span>
                    <img src="{{ asset('img/logostyle/cattea-logo-sm.png') }}" alt="">
                    <span>ARTISTRY</span>
                </a>
            </div>

            {{-- Get In Touch Button --}}
            <div class="header-cta-button"><a class="btn btn-round" href="{{ route('contact') }}">Get in Touch</a>
            </div>
        </header>

        <main>
            @yield('content')
        </main>

        <footer class="footer-main">
            <div class="footer-main-content">
                <div class="footer-left">
                    <div class="footer-logo">
                        <img src="{{ asset('img/logostyle/cattea-logo-sm.png') }}" alt="cattea artistry logo">
                        <h5>Cattea Artistry</h5>
                    </div>
                    <p>Vancouver based lifestyle, pet and landscape photography</p>
                    <ul>
                        <li><a target="_blank" href="https://facebook.com/CatteaArtistry"><i
                                    class="fab fa-facebook"></i>
                                <span class="sr-only">Facebook</span>
                            </a></li>
                        <li><a target="_blank" href="https://instagram.com/cattea_artistry"><i
                                    class="fab fa-instagram"></i>
                                <span class="sr-only">Instagram</span>
                            </a></li>
                        <li><a href="mailto:info@cattea.ca"><i class="far fa-envelope"></i>
                                <span class="sr-only">E-Mail</span>
                            </a></li>
                    </ul>
                </div>
                <div class="footer-right">
                    <ul>
                        <li>Company</li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li><a href="{{ route('home') }}#specialty">Specialty</a></li>
                    </ul>
                    <ul>
                        <li>Info</li>
                        <li><a href="{{ route('home') }}#faq">FAQ</a></li>
                        <li><a href="{{ route('home') }}#process">Process</a></li>
                        <li><a href="{{ route('home') }}#pricing">Pricing</a></li>
                    </ul>
                    <ul>
                        <li>Work</li>
                        <li><a href="{{ route('portfolio.index') }}">Portfolio</a></li>
                        <li><a href="#link-to-pixieset">Client Gallery</a></li>
                        @if (Auth::check())
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <li><button class="font-normal" type="submit" href="{{ route('logout') }}">Log
                                        Out</button></li>
                            </form>
                        @else
                            <li><a href="{{ route('login') }}">Log In</a></li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="footer-main-notes">
                <p>
                    &copy; {{ now()->year }} <a class="text-link" href="{{ route('home') }}">Cattea Artistry</a>,
                    All Rights
                    Reserved &middot; Made with <i class="far fa-heart"></i> by <a class="text-link"
                        href="https://stalliondigital.ca">Stallion Digital</a>
                </p>
            </div>
        </footer>

    </div>

    @stack('modals')

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        var tabs = new Tabby('[data-tabs]');

    </script>
    @yield('swiper')
    @livewireScripts
</body>

</html>
