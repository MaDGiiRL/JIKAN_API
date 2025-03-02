<x-layout title="Anime">
    <x-header />

    <div class="d-flex justify-content-center align-items-center mb-4 pt-5">
    <form action="{{ route(Route::currentRouteName()) }}" method="GET" class="filter-form d-flex align-items-center w-50">
            <input type="text" name="search" class="form-control search-input me-2" placeholder="Cerca..." value="{{ request('search') }}">
            <select name="genre" class="form-select genre-select me-2" onchange="this.form.submit()">
                <option value="">Tutti i generi</option>
                @foreach ($genres as $genre)
                <option value="{{ $genre['mal_id'] }}" {{ request('genre') == $genre['mal_id'] ? 'selected' : '' }}>
                    {{ $genre['name'] }}
                </option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-light">Filtra</button>
        </form>
    </div>


    <div class="container-fluid anime-container">
        <div class="row p-5">
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