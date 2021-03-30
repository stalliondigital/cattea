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

    <section class="mt-10 ml-10 mr-10 process-section">
        <h2 class="ml-10 section-title">Our Process</h2>
        <h4 class="ml-10 section-subtitle">4 Easy Steps</h4>
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
    </section>

    <section class="mt-10 mb-10 ml-20 mr-10 specialties-section">
        <header>
            <h2 class="section-title">Our Specialties</h2>
            <h4 class="section-subtitle">Although we capture photographs of a variety of types, we specialize in lifestyle,
                pets, astrophotography and
                landscape.</h4>
            <a class="btn mt-5 inline-block" href="{{ route('portfolio') }}">View Portfolio</a>
        </header>
        <div class="specialty-cards mt-20">
            <div class="card specialty-card">
                <img loading="lazy" src="{{ asset('img/specialty/pets.jpg') }}" alt="pets">
                <h5>Pets</h5>
                <a href="{{ route('portfolio') }}#pets">View Examples</a>
            </div>

            <div class="card specialty-card">
                <img loading="lazy" src="{{ asset('img/specialty/astrophotography.jpg') }}" alt="astrophotography">
                <h5>Astrophotography</h5>
                <a href="{{ route('portfolio') }}#astrophotography">View Examples</a>
            </div>

            <div class="card specialty-card">
                <img loading="lazy" src="{{ asset('img/specialty/lifestyle.jpg') }}" alt="lifestyle">
                <h5>Lifestyle</h5>
                <a href="{{ route('portfolio') }}#lifestyle">View Examples</a>
            </div>

            <div class="card specialty-card">
                <img loading="lazy" src="{{ asset('img/specialty/landscape.jpg') }}" alt="landscape">
                <h5>Landscape</h5>
                <a href="{{ route('portfolio') }}#landscape">View Examples</a>
            </div>
        </div>


    </section>

    <section class="mt-10 mb-10 ml-20 mr-10 pricing-section">
        <header>
            <h2 class="section-title">Interested in Shooting with Me?</h2>
            <h4 class="section-subtitle">Simple and transparent pricing</h4>
        </header>
        <div class="pricing-cards">
            {{-- Lifestyle Session Pricing Card --}}
            <div class="card pricing-card">
                <h5>Lifestyle Session</h5>
                <h3>&dollar;300</h3>
                <h6>Per hour</h6>
                <a href="{{ route('contact') }}">Contact</a>
            </div>

            {{-- Pet Photo Session Pricing Card --}}
            <div class="card pricing-card">
                <h5>Pet Photo Session</h5>
                <h3>&dollar;150</h3>
                <h6>Per hour</h6>
                <a href="{{ route('contact') }}">Contact</a>
            </div>

            {{-- Brand Photo Session Pricing Card --}}
            <div class="card pricing-card">
                <h5>Brand Photo Session</h5>
                <h3>&dollar;50</h3>
                <h6>Per hour</h6>
                <a href="{{ route('contact') }}">Contact</a>
            </div>
        </div>
    </section>

    <section class="mt-20 mb-10 ml-20 mr-10 faq-section">
        <header class="text-center">
            <h2 class="section-title">Frequently Asked Questions</h2>
        </header>
        <div class="faq-items">
            <div class="faq-item">
                <h3>What happens before my session?</h3>
                <p>All photographs are tailored to your specific needs. Before we commence your photo session, we like to
                    discuss what makes you tick such as your likes, styles and outfit colours! Even what music you like to
                    listen to! Then we take your answers and create a stunning photo session!</p>
            </div>
            <div class="faq-item">
                <h3>Myself/Spouse/Child/Pet hates being in photos or doesn’t photograph well or are super awkward - can you
                    help?</h3>
                <p>Yes, it would be my pleasure to help! Most don't have experience being photographed and I'm here to help.
                    Through my calm manner, professional style and natural posing, I make sure that everyone looks natural
                    and lovely in the photos. Some people take a little longer to warm up, and in those cases I make sure
                    that you feel comfortable and relaxed while we are in session. We take lots of breaks to chat, listen to
                    music and dance, and overall have fun. I promise, I make it painless and fun, and it won't be nearly as
                    bad as you think!</p>
            </div>
            <div class="faq-item">
                <h3>How long before I receive my fully edited images and do you provide digital files or prints?</h3>
                <p>Retouching and color grading can take up to 10 business days. If you would like to put in a rush order
                    for your images, we can arrange that for a supplementary fee. After post production, your photos will be
                    uploaded and available for download. If you would like to have prints of your photos, we can provide you
                    with high quality prints for an additional fee. We can discuss what you are looking for before or after
                    the session. </p>
            </div>
            <div class="faq-item">
                <h3>Can I have the RAW files as well?</h3>
                <p>RAW files are flat and unedited. Some shots are visual exposure tests. Many of the shots are wrong
                    timing, like capturing an awkward blink. Basically a hodge-podge of photos, not a suitable
                    representation of my style.</p>
            </div>
            <div class="faq-item">
                <h3>What’s your favourite location in Vancouver to photograph</h3>
                <p>I can’t just choose one. I love Lynn Canyon for the trees and greens, Campbell Valley Park for the long
                    grass and yellows, and Jericho Beach for the beaches with our majestic mountains for backdrop.</p>
            </div>
            <div class="faq-item">
                <h3>Do you like the Canucks?</h3>
                <p>I’m a diehard fan of our Canucks, and loved watching the Sedinery Magic!
                </p>
            </div>
        </div>
    </section>


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
