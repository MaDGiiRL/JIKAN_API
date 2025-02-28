<x-layout title="Anime">
    <x-header />
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-3 my-3">
                @foreach($animes as $anime)
                <x-card
                    $rank="{{$anime['rank']}}"
                    $title="{{$anime['title']}}"
                    $kanji="{{$anime['title_japanese']}}"
                    $synopsis="{{$anime['synopsis']}}"
                    $img="{{$anime['images']['jpg']['image_url']}}" />
                @endforeach
            </div>
        </div>
    </div>
</x-layout>