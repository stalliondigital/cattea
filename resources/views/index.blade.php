@extends('layouts.home')

@section('content')

    {{-- <h1>Test Content for hello</h1> --}}

    <!-- Slider main container -->
    <div class="swiper-box">
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><img src="{{ asset('img/slideshow/slide-2.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('img/slideshow/slide-1.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('img/slideshow/slide-3.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('img/slideshow/slide-4.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('img/slideshow/slide-5.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('img/slideshow/slide-6.png') }}" alt=""></div>
            </div>
            <!-- If we need navigation buttons -->
            <nav class="swiper-nav">
                <div class="swiper-button-prev"><i class="fas fa-long-arrow-alt-left"></i></div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"><i class="fas fa-long-arrow-alt-right"></i></div>
            </nav>
        </div>
    </div>


@endsection

@section('swiper')
    <script>
        const swiper = new Swiper(".swiper-container", {
            // Optional parameters
            direction: "horizontal",
            loop: true,
            lazy: true,
            parallax: true,
            speed: 600,

            // If we need pagination
            pagination: {
                el: ".swiper-pagination",
                type: 'fraction',
            },

            // Navigation arrows
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

    </script>
@endsection
