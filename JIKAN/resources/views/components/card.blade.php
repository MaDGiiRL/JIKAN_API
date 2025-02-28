@if(Route::currentRouteName() == "anime" || Route::currentRouteName() == "anime_genres")
<div class="card flex-md-row mb-4 h-md-250 bg-dark text-white shadow-custom">
    <div class="card-body d-flex flex-column align-items-start">
        <strong class="d-inline-block mb-2 text-purple"># {{$rank}}</strong>
        <h6 class="mb-0">
            <a class="text-white" href="#">{{$title}}</a>
        </h6>
        <div class="mb-1 small text-purple pt-2">{{$kanji}}</div>
        <p class="card-text mb-auto">{{$synopsis}}</p>
        <a class="btn btn-light role=" button" href="{{$button}}">Details</a>
    </div>
    <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail" src="{{$img}}" style="width: 200px; height: 260px;">
</div>

@else(Route::currentRouteName() == "manga" || Route::currentRouteName() == "manga_genres")
<div class="card flex-md-row mb-4 h-md-250 bg-dark text-white shadow-custom">
    <div class="card-body d-flex flex-column align-items-start">
        <strong class="d-inline-block mb-2 text-purple"># {{$rank}}</strong>
        <h6 class="mb-0">
            <a class="text-white" href="#">{{$title}}</a>
        </h6>
        <div class="mb-1 small text-purple pt-2">{{$kanji}}</div>
        <p class="card-text mb-auto">{{$synopsis}}</p>
        <a class="btn btn-light role=" button" href="{{$button}}">Details</a>
    </div>
    <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail" src="{{$img}}" style="width: 200px; height: 260px;">
</div>

@endif