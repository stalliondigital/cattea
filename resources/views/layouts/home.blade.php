<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Cattea Artistry') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="antialiased">

    <div class="">

        <header>
            {{-- Navigation Menu Button --}}
            <div class="menu-section">
                <button id="menu-toggle" class="menu-toggle mb-5  p-3 text-white inline rounded-lg">
                    <div class="bar-one"></div>
                    {{-- <div class="bar-two"></div> --}}
                    <div class="bar-three"></div>
                </button>
                <nav class="header-navigation nav-hidden z-50">
                    <ul class="nav-links" role="navigation">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
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
            {{-- <ul class="header-social-links">
                <li><a target="_blank" href="https://facebook.com/CatteaArtistry"><i class="fab fa-facebook"></i><span
                            class="sr-only">Facebook</span></a></li>
                <li><a target="_blank" href="https://instagram.com/cattea_artistry"><i
                            class="fab fa-instagram"></i><span class="sr-only">Instagram</span></a></li>
                <li><a target="_blank" href="mailto:info@cattea.ca"><i class="far fa-envelope "></i><span
                            class="sr-only">Email</span></a></li>
            </ul> --}}

            {{-- Header Logo --}}
            {{-- <div class="header-logo flex items-center">
                <span>CATTEA</span>
                <img src="{{ asset('img/logostyle/cattea-logo-sm.png') }}" alt="">
                <span>ARTISTRY</span>
            </div> --}}

            {{-- Get In Touch Button --}}
            {{-- <a class="btn btn-round" href="{{ route('contact') }}">Get in Touch</a> --}}
        </header>

        <main>
            @yield('content')
        </main>

    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
