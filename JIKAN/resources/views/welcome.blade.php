<x-layout title="Animes Online.">
    <x-header />
    <div class="container pb-5 mb-5 shadow">
        <div class="row justify-content-center align-items-center ps-5 ms-5">
            <h1 class="text-white p-5">Highlights</h1>
            <div class="col-12 col-md-6 d-flex align-items-center justify-content-end ">
                <img src="/images/jumbo1.png" alt="img-1" class="img-fluid">
            </div>
            <div class="col-12 col-md-6">
                <div class="row justify-content-start">
                    <div class="col-12 col-md-8 d-flex align-items-center justify-content-center ">
                        <img src="/images/jumbo2-1.png" alt="img-2" class="img-fluid">
                    </div>

                    <div class="col-12 col-md-8 d-flex align-items-center justify-content-center ">
                        <img src="/images/jumbo2-3.png" alt="img-4" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 pt-5">
        <!-- Carosello per Anime -->
        <h2 class="text-white">Anime</h2>
        <div id="animeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach(array_chunk($animes, 6) as $index => $animeChunk)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <div class="row">
                        @foreach($animeChunk as $anime)
                        <div class="col-6 col-sm-4 col-md-2 mb-3">
                            <div class="card text-white bg-dark">
                                <a href="{{ route('anime_detail', ['id' => $anime['mal_id'], 'anime_title' => urlencode($anime['title'])]) }}"><img src="{{ $anime['images']['jpg']['image_url'] }}" class=" img-fluid" alt="{{ $anime['title'] }}"></a>
                                <div class="card-body">
                                    <a href="{{ route('anime_detail', ['id' => $anime['mal_id'], 'anime_title' => urlencode($anime['title'])]) }}">
                                        <h5 class="card-title-car link-light">{{ $anime['title'] }}</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container mt-5 pt-5">
        <!-- Carosello per Manga -->
        <h2 class="text-white">Manga</h2>
        <div id="mangaCarousel" class="carousel slide mt-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach(array_chunk($mangas, 6) as $index => $mangaChunk)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <div class="row">
                        @foreach($mangaChunk as $manga)
                        <div class="col-6 col-sm-4 col-md-2 mb-3">
                            <div class="card text-white bg-dark">
                                <a href="{{ route('manga_detail', ['id' => $manga['mal_id'], 'manga_title' => urlencode($manga['title'])]) }}"><img src="{{ $manga['images']['jpg']['image_url'] }}" class=" img-fluid" alt="{{ $manga['title'] }}"></a>
                                <div class="card-body">
                                    <a href="{{ route('manga_detail', ['id' => $manga['mal_id'], 'manga_title' => urlencode($manga['title'])]) }}">
                                        <h5 class="card-title-car link-light">{{ $manga['title'] }}</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</x-layout>