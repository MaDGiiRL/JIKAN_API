<x-layout title="{{$genre}}">
    <x-header />
    <div class="container-fluid pt-5 mt-5">
        <div class="row p-5 pt-5 ">
            @foreach($animes as $anime)
            <div class="col-12 col-md-3 my-3">
                <x-card
                    rank="{{$anime['rank']}}"
                    title="{{$anime['title']}}"
                    kanji="{{$anime['title_japanese']}}"
                    synopsis="{{Str::limit($anime['synopsis'], 50, '...')}}"
                    img="{{$anime['images']['jpg']['image_url']}}" 
                    button="{{route('anime_detail', ['id' => $anime['mal_id'], 'anime_title' => $anime['title'] ])}}" />
            </div>
            @endforeach
        </div>
    </div>
</x-layout>