<x-layout title="{{$genre}}">
    <x-header />
    <div class="container-fluid pt-5 mt-5">
        <div class="row p-5 pt-5 ">
            @foreach($mangas as $manga)
            <div class="col-12 col-md-3 my-3">
                <x-card
                    rank="{{$manga['rank']}}"
                    title="{{$manga['title']}}"
                    kanji="{{$manga['title_japanese']}}"
                    synopsis="{{Str::limit($manga['synopsis'], 50, '...')}}"
                    img="{{$manga['images']['jpg']['image_url']}}" 
                    button="{{route('manga_detail', ['id' => $manga['mal_id'], 'manga_title' => $manga['title'] ])}}" />
            </div>
            @endforeach
        </div>
    </div>
</x-layout>