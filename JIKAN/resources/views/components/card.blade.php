<div class="card flex-md-row mb-4 shadow-sm h-md-250">
    <div class="card-body d-flex flex-column align-items-start">
        <strong class="d-inline-block mb-2 text-primary"># {{$rank}}</strong>
        <h6 class="mb-0">
            <a class="text-dark" href="#">{{$title}}</a>
        </h6>
        <div class="mb-1 text-muted small">{{$kanji}}</div>
        <p class="card-text mb-auto">{{$synopsis}}</p>
        <a class="btn btn-outline-primary btn-sm" role="button" href="#">Details</a>
    </div>

    <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail" src="{{$img}}" style="width: 200px; height: 260px;">
</div>