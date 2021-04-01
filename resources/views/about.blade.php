@extends('layouts.home')

@section('content')

    <header class="about-header">
        <div class="about-header-content">
            <h1 class="section-title">Hello, I’m Tanita,<br> the KIMANI &#40;Kikuyu for Adventurer&#41;
            </h1>
            <p class="section-subtitle">This creative was born near the Kenyan Savannah in Nairobi and brought up in Central
                Burnaby. With a desire
                to see my cultural roots and camera in tow, I’ve traveled extensively with TANGA &#40;Swahili for
                wanderlust&#41;,
                having lived abroad in Europe, specifically the bustling metropolis of Vienna, Austria before settling down
                in Vancouver.</p>
            <ul class="about-header-content-social-buttons">
                <li><a target="_blank" href="https://instagram.com/cattea_artistry"><i class="fab fa-instagram"></i>
                        &commat;cattea_artistry</a>
                </li>
                <li><a href="https://instagram.com/cattea_pottery"><i class="fab fa-instagram"></i>
                        &commat;cattea_pottery</a></li>
            </ul>
            <ul class="about-header-content-actions">
                <li><a href="{{ route('contact') }}">Get in Touch</a></li>
                <li><a href="{{ route('portfolio') }}">View My Work</a></li>
            </ul>
        </div>
        <div class="about-header-image">
            <img loading="lazy" src="{{ asset('img/about/tanita.png') }}" alt="a headshot image of Tanita Egger">
        </div>
    </header>

    <section class="bio-content">
        <div class="bio-content-image">
            <img src="{{ asset('img/about/cat.jpg') }}"
                alt="a picture of a cat sitting on the window sill looking outside at the trees.">
        </div>
        <div class="bio-content">
            <h2 class="section-title">A little bit about me</h2>
            <p>I have a MERAKI &#40;Greek for creating something with passion&#41; for photography, getting formal training
                since high school. I am in love with capturing light and its effects on all subjects. I made the switch from
                hobbyist photographer to professional photographer in 2019. Having been immersed in art from a young age, I
                practice throwing on the pottery wheel and watercolour painting for relaxation. When the Vancouver weather
                permits, I love to spend time outdoors, camping and capturing the skies with astrophotography. Plus our cats
                play a large part in my creativity.
            <h2 class="section-title">Why cat-tea?</h2>
            <p>A Feline and Animal enthusiast with candid & artistic techniques composed with Contentment / Aesthetics /
                Tranquilité ... Wait I can’t give away all my secrets!</p>
            </p>
        </div>
    </section>

    <section class="about-cta">
        <h2>Interested in a session with me?</h2>
        <h3>Ask me about my favourites at our presession meeting!</h3>
        <ul>
            <li><a href="{{ route('contact') }}">Book Session</a></li>
            <li><a href="{{ route('portfolio') }}">View Work</a></li>
        </ul>
    </section>

@endsection
