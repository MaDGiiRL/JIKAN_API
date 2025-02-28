<x-layout title="{{$manga['title']}}">
    <div class="container mt-5 pt-5">
        <div class="card text-white bg-dark shadow-custom mt-5">
            <div class="row g-0">
                <div class="col-md-4 d-flex">
                    <img src="{{$manga['images']['jpg']['large_image_url']}}" class="img-fluid rounded-start" alt="Tokyo Revengers Poster">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title">{{$manga['title']}}</h3>
                        <div class="mb-2  d-flex flex-row align-items-center justify-content between">
                            <span class="badge text-white pe-2">{{$manga['title_japanese']}}</span> |
                            <span class="badge bg-success ms-2 me-2">{{$manga['score']}}</span> |
                            <span class="ms-3">Chapters {{ !empty($manga['chapters']) ? $manga['chapters'] : 'X' }} •
                                Vol. {{ !empty($manga['volumes']) ? $manga['volumes'] : '1' }}</span>
                        </div>
                        <div class="mb-2  d-flex flex-row align-items-center justify-content between">
                            @foreach($manga['serializations'] as $serialization)
                            <span class="badge text-white pe-2"><strong>Published by</strong> {{$serialization['name']}}</span>
                            @endforeach
                        </div>
                        <p class="card-text">
                        <h5>Synopsis</h5>
                        {{$manga['synopsis']}}
                        </p>
                        <p class="card-text">
                        <h5>Background</h5>
                        {{$manga['background']}}

                        {{ !empty($manga['background']) ? $manga['background'] : 'X' }}
                        </p>

                        <div class="mb-2  d-flex flex-row align-items-center justify-content between">
                        @foreach($manga['genres'] as $genre)
                        <a href="{{route('manga_genres', ['id' => $genre['mal_id'], 'genre' => $genre['name']])}}" class="badge purple-bg ms-2 me-2">{{$genre['name']}}</a>@endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="d-flex justify-content-start mt-5">
            <button class="btn btn-light" href="{{route('manga')}}">Go Back</button>
        </div>
    </div>
</x-layout>