@extends('layouts.home')

@section('content')

    <section class="portfolio-content big-shadow bg-white p-10 m-10 rounded-3xl">
        <header class="mt-20 text-center md:max-w-md mx-auto">
            <h1 class="section-title">Portfolio</h1>
            <h2 class="section-subtitle">A collection of my work shooting various types of photography &#40;and a sample of
                my
                pottery&#41</h2>
        </header>

        <div class="portfolio-categories">
            <ul class="mt-10 mb-10 flex flex-row flex-wrap items-center justify-center bg-gray-100 rounded-lg p-5">
                <li class="px-3 py-2 mx-2 portfolio-active"><button>All</button></li>
                <li class="p-3 mx-"><button>Landscape</button></li>
                <li class="p-3 mx-2"><button>Portraits</button></li>
                <li class="p-3 mx-2"><button>Pets</button></li>
                <li class="p-3 mx-2"><button>Astrophotography</button></li>
                <li class="p-3 mx-2"><button>Lifestyle</button></li>
                <li class="p-3 mx-2"><button>Pottery</button></li>
                <li class="p-3 mx-2"><button>Painting</button></li>
            </ul>
        </div>

        {{-- <div class="portfolio-images">
            <ul>
                <li><img src="{{ asset('img/slideshow/slide-1.png') }}" alt=""></li>
                <li><img src="{{ asset('img/slideshow/slide-2.png') }}" alt=""></li>
                <li><img src="{{ asset('img/slideshow/slide-3.png') }}" alt=""></li>
                <li><img src="{{ asset('img/slideshow/slide-4.png') }}" alt=""></li>
                <li>
                    <img src="{{ asset('img/slideshow/slide-5.png') }}" alt="">
                </li>
                <li><img src="{{ asset('img/slideshow/slide-1.png') }}" alt=""></li>
                <li><img src="{{ asset('img/slideshow/slide-2.png') }}" alt=""></li>
                <li><img src="{{ asset('img/slideshow/slide-3.png') }}" alt=""></li>
                <li><img src="{{ asset('img/slideshow/slide-4.png') }}" alt=""></li>
                <li>
                    <img src="{{ asset('img/slideshow/slide-5.png') }}" alt="">
                </li>
            </ul>
        </div> --}}

        <div class="portfolio-images-container">
            <div loading="lazy" class="img-item"><img src="{{ asset('img/slideshow/slide-1.png') }}" alt=""></div>
            <div loading="lazy" class="img-item"><img src="{{ asset('img/slideshow/slide-2.png') }}" alt=""></div>
            <div loading="lazy" class="img-item"><img src="{{ asset('img/slideshow/slide-3.png') }}" alt=""></div>
            <div loading="lazy" class="img-item"><img src="{{ asset('img/slideshow/slide-4.png') }}" alt=""></div>
            <div loading="lazy" class="img-item"><img src="{{ asset('img/slideshow/slide-5.png') }}" alt=""></div>
            <div loading="lazy" class="img-item"><img src="{{ asset('img/slideshow/slide-4.png') }}" alt=""></div>
            <div loading="lazy" class="img-item"><img src="{{ asset('img/slideshow/slide-3.png') }}" alt=""></div>
            <div loading="lazy" class="img-item"><img src="{{ asset('img/slideshow/slide-2.png') }}" alt=""></div>
            <div loading="lazy" class="img-item"><img src="{{ asset('img/slideshow/slide-5.png') }}" alt=""></div>
            <div loading="lazy" class="img-item"><img src="{{ asset('img/slideshow/slide-3.png') }}" alt=""></div>
            <div loading="lazy" class="img-item"><img src="{{ asset('img/slideshow/slide-4.png') }}" alt=""></div>
            <div loading="lazy" class="img-item"><img src="{{ asset('img/slideshow/slide-1.png') }}" alt=""></div>
            <div loading="lazy" class="img-item"><img src="{{ asset('img/slideshow/slide-2.png') }}" alt=""></div>
            <div loading="lazy" class="img-item"><img src="{{ asset('img/slideshow/slide-1.png') }}" alt=""></div>
            <div loading="lazy" class="img-item"><img src="{{ asset('img/slideshow/slide-4.png') }}" alt=""></div>
            <div loading="lazy" class="img-item"><img src="{{ asset('img/slideshow/slide-2.png') }}" alt=""></div>
            <div loading="lazy" class="img-item"><img src="{{ asset('img/slideshow/slide-5.png') }}" alt=""></div>
            <div loading="lazy" class="img-item"><img src="{{ asset('img/slideshow/slide-3.png') }}" alt=""></div>
            <div loading="lazy" class="img-item"><img src="{{ asset('img/slideshow/slide-1.png') }}" alt=""></div>
            <div loading="lazy" class="img-item"><img src="{{ asset('img/slideshow/slide-2.png') }}" alt=""></div>

            <span class="img-item break"></span>
            <span class="img-item break"></span>
            <span class="img-item break"></span>
        </div>
    </section>

@endsection
