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
                        {{$anime['background']}}
                        </p>

                        <div class="mb-2  d-flex flex-row align-items-center justify-content between">
                            @foreach($anime['genres'] as $genre)
                            <span class="badge purple-bg ms-2 me-2">{{$genre['name']}}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>