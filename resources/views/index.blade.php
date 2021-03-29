@extends('layouts.home')

@section('content')

    {{--  <h1>Test Content for hello</h1>  --}}

    <!-- Slider main container -->
<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide"><img src="{{ asset('img/slideshow/slide-1.png') }}" alt=""></div>
      <div class="swiper-slide"><img src="{{ asset('img/slideshow/slide-2.png') }}" alt=""></div>
      <div class="swiper-slide"><img src="{{ asset('img/slideshow/slide-3.png') }}" alt=""></div>      
      <div class="swiper-slide"><img src="{{ asset('img/slideshow/slide-4.png') }}" alt=""></div>
      <div class="swiper-slide"><img src="{{ asset('img/slideshow/slide-5.png') }}" alt=""></div>
      <div class="swiper-slide"><img src="{{ asset('img/slideshow/slide-6.png') }}" alt=""></div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
  
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
  

@endsection

@section('swiper')
<script>
    const swiper = new Swiper(".swiper-container", {
// Optional parameters
direction: "horizontal",
loop: true,

// If we need pagination
pagination: {
    el: ".swiper-pagination",
},

// Navigation arrows
navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
},
});
</script>
@endsection