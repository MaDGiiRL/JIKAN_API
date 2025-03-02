<x-layout title="{{$anime['title']}}">
    <div class="container mt-5 pt-5">
        <div class="card text-white bg-dark shadow-custom mt-5">
            <div class="row g-0">
                <div class="col-md-4 d-flex">
                    <img src="{{$anime['images']['jpg']['large_image_url']}}" class="img-fluid rounded-start" alt="Tokyo Revengers Poster">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title">{{$anime['title']}}</h3>
                        <div class="mb-2  d-flex flex-row align-items-center justify-content between">
                            <span class="badge text-white pe-2">{{$anime['title_japanese']}}</span> |
                            <span class="badge bg-success ms-2 me-2">{{$anime['score']}}</span> |
                            <span class="badge bg-danger ms-2 me-2">{{$anime['rating']}}</span> |
                            <span class="ms-3">Ep {{$anime['episodes']}} • {{$anime['duration']}}</span>
                        </div>
                        <div class="d-flex gap-2 mb-3 mt-3">
                            <button class="btn btn-light">Seasons</button>
                            <button class="btn btn-outline-light">+ Add to List</button>
                        </div>
                        <p class="card-text">
                        <h5>Synopsis</h5>
                        {{$anime['synopsis']}}
                        </p>
                        <p class="card-text">
                        <h5>Background</h5>
                        {{ !empty($anime['background']) ? $anime['background'] : 'No data in our database.' }}
                        </p>


                        <div class="mb-2  d-flex flex-row align-items-center justify-content between">
                            @foreach($anime['genres'] as $genre)
                            <a href="{{route('anime_genres', ['id' => $genre['mal_id'], 'genre' => $genre['name']])}}" class="badge purple-bg ms-2 me-2">{{$genre['name']}}</a>@endforeach
                        </div>

                        <!-- Trailer YouTube -->
                        @if(isset($anime['trailer']['youtube_id']))
                        <div class="embed-responsive embed-responsive-16by9 mt-4">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$anime['trailer']['youtube_id']}}" allowfullscreen></iframe>
                        </div>
                        @endif


                    </div>

                </div>
            </div>
        </div>

        <div class="d-flex justify-content-start mt-5">
            <button class="btn btn-light" href="{{route('anime')}}">Go Back</button>
        </div>
    </div>

    <!-- Carosello di 6 card per volta -->
    <div class="col-11 mt-5 d-flex justify-content-center">
        <h4 class="text-center text-white p-3">More anime</h4>
        <div id="animeCarousel" class="carousel slide" data-bs-ride="carousel">
            @foreach(array_chunk($animes, 6) as $index => $chunk)
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                <div class="row">
                    @foreach($chunk as $anime)
                    <div class="col-2 mb-4"> <!-- Ogni card occupa il 2 delle 12 colonne, quindi 6 card per slide -->
                        <div class="card text-white bg-dark">
                            <a href="{{ route('anime_detail', ['id' => $anime['mal_id'], 'anime_title' => urlencode($anime['title'])]) }}"> <img src="{{ $anime['images']['jpg']['image_url'] }}" class="card-img-top" alt="{{ $anime['title'] }}" height="280px"></a>
                            <div class="card-body">
                                <a href="{{ route('anime_detail', ['id' => $anime['mal_id'], 'anime_title' => urlencode($anime['title'])]) }}">
                                    <h6 class="card-title-car link-light text-center">{{ $anime['title'] }}</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>

        <!-- Controlli del carosello -->
        <button class="carousel-control-prev" type="button" data-bs-target="#animeCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#animeCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</x-layout>