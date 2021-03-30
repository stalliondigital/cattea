@extends('layouts.home')

@section('content')

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
            <div class="main-title">
                <h1>Vancouver based lifestyle, pet and landscape photography</h1>
                <br>
                <ul>
                    <li><a href="{{ route('contact') }}">Book Session</a></li>
                    <li><a href="{{ route('portfolio') }}">View Work</a></li>
                </ul>
                <br>
                <p>Completed a session? <a href="#linktopixieset">Click here </a>to download your images.</p>
            </div>
            <!-- If we need navigation buttons -->
            <nav class="swiper-nav">
                <div class="swiper-button-prev"><i class="fas fa-long-arrow-alt-left"></i></div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"><i class="fas fa-long-arrow-alt-right"></i></div>
            </nav>
        </div>
    </div>

    <div class="mt-10 ml-20 mr-10 process-section">
        <h2 class="section-title">Our Process</h2>
        <h4 class="section-subtitle">4 Easy Steps</h4>
        <div class="process-cards">
            <div class="card process-card">
                <div class="process-card-header">
                    <img src="{{ asset('img/icons/calendar.svg') }}" alt="">
                    <h5>Book</h5>
                    <h6>01</h6>
                </div>

                <div class="process-card-content">
                    <p>Use our <a href="{{ route('contact') }}">contact form</a> to get in touch with us and book an
                        appointment. Setup a time that is most convenient for your situation.</p>
                </div>
            </div>

            <div class="card process-card">
                <div class="process-card-header">
                    <img src="{{ asset('img/icons/camera.svg') }}" alt="">
                    <h5>Shoot</h5>
                    <h6>02</h6>
                </div>

                <div class="process-card-content">
                    <p>We will take professional photographs for you, capturing the best angles you desire.</p>
                </div>
            </div>

            <div class="card process-card">
                <div class="process-card-header">
                    <img src="{{ asset('img/icons/settings.svg') }}" alt="">
                    <h5>Edit</h5>
                    <h6>03</h6>
                </div>

                <div class="process-card-content">
                    <p>Next, we make fine tweaks, implement color grading, and add those final touches that make your image
                        look stunning!</p>
                </div>
            </div>

            <div class="card process-card">
                <div class="process-card-header">
                    <img src="{{ asset('img/icons/send.svg') }}" alt="">
                    <h5>Deliver</h5>
                    <h6>04</h6>
                </div>

                <div class="process-card-content">
                    <p>Delivery time! Visit our online image gallery to download your top quality and high resolution
                        photos.</p>
                </div>
            </div>
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
            effect: 'fade',
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },

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
