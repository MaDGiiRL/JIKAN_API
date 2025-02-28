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
        return view('manga');
    }

    public function anime()
    {
        $animes = Http::get('https://api.jikan.moe/v4/top/anime')->json('data');

        return view('anime', ['animes' => $animes]);
    }

    public function contact()
    {
        return view('contact');
    }
}
