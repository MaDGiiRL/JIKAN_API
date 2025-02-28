<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PublicController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function manga()
    {
        $mangas = Http::get('https://api.jikan.moe/v4/manga')->json('data');
      
        return view('manga', ['mangas' => $mangas]);
    }

    public function manga_detail($id)
    {
        $manga = Http::get("https://api.jikan.moe/v4/manga/{$id}")->json('data');
        return view('manga_detail', ['manga' => $manga]);
    }

    public function anime()
    {
        $animes = Http::get('https://api.jikan.moe/v4/anime')->json('data');

        return view('anime', ['animes' => $animes]);
    }

    public function anime_detail($id)
    {
        $anime = Http::get("https://api.jikan.moe/v4/anime/{$id}")->json('data');
        return view('anime_detail', ['anime' => $anime]);
    }

    public function contact()
    {
        return view('contact');
    }
}
