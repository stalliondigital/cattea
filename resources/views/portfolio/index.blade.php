@extends('layouts.home')

@section('content')

    <section class="portfolio-content big-shadow bg-white p-10 m-10 rounded-3xl">
        <header class="mt-20 text-center md:max-w-md mx-auto">
            <h1 class="section-title">Portfolio</h1>
            <h2 class="section-subtitle">A collection of my work shooting various types of photography &#40;and a sample of
                my
                pottery&#41;</h2>
        </header>

        <div class="mt-10 portfolio-categories">
            <ul data-tabs
                class="portfolio-tabs mt-10 mb-10 flex flex-row flex-wrap items-center justify-center bg-gray-100 rounded-lg p-5">
                <li class="px-3 py-2 m-1"><a data-tabby-default href="#all">All</a></li>
                <li class="px-3 py-2 m-1"><a href="#landscape">Landscape</a></li>
                <li class="px-3 py-2 m-1"><a href="#portraits">Portraits</a></li>
                <li class="px-3 py-2 m-1"><a href="#pets">Pets</a></li>
                <li class="px-3 py-2 m-1"><a href="#astrophotography">Astrophotography</a></li>
                <li class="px-3 py-2 m-1"><a href="#lifestyle">Lifestyle</a></li>
                <li class="px-3 py-2 m-1"><a href="#pottery">Pottery</a></li>
                <li class="px-3 py-2 m-1"><a href="#painting">Painting</a></li>
            </ul>
        </div>

        <div>

            <div id="all" class="portfolio-images-container">
                @foreach ($portfolio as $item)
                    <div class="img-item">
                        <a data-fancybox="all" data-options='{"caption" : "{{ $item->title }}"}'
                            href="{{ asset('img/portfolio') }}/{{ $item->imagePath }}">
                            <img loading="lazy" src="{{ asset('img/portfolio') }}/{{ $item->imagePath }}"
                                alt="{{ $item->altText }}">
                        </a>
                    </div>
                @endforeach
            </div>

            <div id="landscape" class="portfolio-images-container">
                @foreach ($portfolio as $item)
                    @if ($item->category == 'Landscape')
                        <div class="img-item">
                            <a data-fancybox="landscape" data-options='{"caption" : "{{ $item->title }}"}'
                                href="{{ asset('img/portfolio') }}/{{ $item->imagePath }}">
                                <img loading="lazy" src="{{ asset('img/portfolio') }}/{{ $item->imagePath }}"
                                    alt="{{ $item->altText }}">
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>

            <div id="portraits" class="portfolio-images-container">
                @foreach ($portfolio as $item)
                    @if ($item->category == 'Portraits')
                        <div class="img-item">
                            <a data-fancybox="portraits" data-options='{"caption" : "{{ $item->title }}"}'
                                href="{{ asset('img/portfolio') }}/{{ $item->imagePath }}">
                                <img loading="lazy" src="{{ asset('img/portfolio') }}/{{ $item->imagePath }}"
                                    alt="{{ $item->altText }}">
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>

            <div id="pets" class="portfolio-images-container">
                @foreach ($portfolio as $item)
                    @if ($item->category == 'Pets')
                        <div class="img-item">
                            <a data-fancybox="pets" data-options='{"caption" : "{{ $item->title }}"}'
                                href="{{ asset('img/portfolio') }}/{{ $item->imagePath }}">
                                <img loading="lazy" src="{{ asset('img/portfolio') }}/{{ $item->imagePath }}"
                                    alt="{{ $item->altText }}">
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>

            <div id="astrophotography" class="portfolio-images-container">
                @foreach ($portfolio as $item)
                    @if ($item->category == 'Astrophotography')
                        <div class="img-item">
                            <a data-fancybox="astrophotography" data-options='{"caption" : "{{ $item->title }}"}'
                                href="{{ asset('img/portfolio') }}/{{ $item->imagePath }}">
                                <img loading="lazy" src="{{ asset('img/portfolio') }}/{{ $item->imagePath }}"
                                    alt="{{ $item->altText }}">
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>

            <div id="lifestyle" class="portfolio-images-container">
                @foreach ($portfolio as $item)
                    @if ($item->category == 'Lifestyle')
                        <div class="img-item">
                            <a data-fancybox="lifestyle" data-options='{"caption" : "{{ $item->title }}"}'
                                href="{{ asset('img/portfolio') }}/{{ $item->imagePath }}">
                                <img loading="lazy" src="{{ asset('img/portfolio') }}/{{ $item->imagePath }}"
                                    alt="{{ $item->altText }}">
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>

            <div id="pottery" class="portfolio-images-container">
                @foreach ($portfolio as $item)
                    @if ($item->category == 'Pottery')
                        <div class="img-item">
                            <a data-fancybox="pottery" data-options='{"caption" : "{{ $item->title }}"}'
                                href="{{ asset('img/portfolio') }}/{{ $item->imagePath }}">
                                <img loading="lazy" src="{{ asset('img/portfolio') }}/{{ $item->imagePath }}"
                                    alt="{{ $item->altText }}">
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>

            <div id="painting" class="portfolio-images-container">
                @foreach ($portfolio as $item)
                    @if ($item->category == 'Painting')
                        <div class="img-item">
                            <a data-fancybox="painting" data-options='{"caption" : "{{ $item->title }}"}'
                                href="{{ asset('img/portfolio') }}/{{ $item->imagePath }}">
                                <img loading="lazy" src="{{ asset('img/portfolio') }}/{{ $item->imagePath }}"
                                    alt="{{ $item->altText }}">
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
            {{-- <span class="img-item break"></span>
            <span class="img-item break"></span>
            <span class="img-item break"></span> --}}
        </div>
        {{ $portfolio->links() }}
    </section>






    <script>
        var tabs = new Tabby('[data-tabs]');

    </script>



@endsection
