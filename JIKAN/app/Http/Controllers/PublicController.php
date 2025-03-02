<?php

namespace App\Http\Controllers;

use Exception;
use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;


class PublicController extends Controller
{
    public function welcome()
    {
        // Recupero dei manga e degli anime tramite API
        $mangas = Http::get('https://api.jikan.moe/v4/manga')->json('data');
        $animes = Http::get('https://api.jikan.moe/v4/anime')->json('data');

        return view('welcome', compact('mangas', 'animes'));
    }

    public function manga(Request $request)
    {
        // Ottieni i generi dei manga
        $genres = Http::get('https://api.jikan.moe/v4/genres/manga')->json('data');

        // Recupera i parametri di ricerca
        $genre_id = $request->query('genre');
        $search = $request->query('search');

        // Costruisci l'URL con i filtri
        $url = 'https://api.jikan.moe/v4/manga';
        if ($genre_id) {
            $url .= "?genres={$genre_id}";
        }

        if ($search) {
            $url .= ($genre_id ? "&" : "?") . "q=" . urlencode($search);
        }

        // Recupera i dati dall'API
        $mangas = Http::get($url)->json('data');

        return view('manga', compact('mangas', 'genres'));
    }

    public function manga_detail($id)
    {
        $manga = Http::get("https://api.jikan.moe/v4/manga/{$id}")->json('data');


        // Recupera i manga per il carosello
        $mangas = Http::get('https://api.jikan.moe/v4/manga')->json('data');

        return view('manga_detail', ['manga' => $manga, 'mangas' => $mangas]);
    }

    public function manga_genres($id, $genre)
    {
        $mangas = Http::get("https://api.jikan.moe/v4/manga?genres={$id}")->json('data');

        return view('manga_genres', ['mangas' => $mangas, 'genre' => $genre]);
    }

    public function anime(Request $request)
    {
        $genres = Http::get('https://api.jikan.moe/v4/genres/anime')->json('data');
        $genre_id = $request->query('genre');
        $search = $request->query('search');

        // Filtra per genere
        $url = 'https://api.jikan.moe/v4/anime';
        if ($genre_id) {
            $url .= "?genres={$genre_id}";
        }

        // Filtra per ricerca
        if ($search) {
            $url .= ($genre_id ? "&" : "?") . "q=" . urlencode($search);
        }

        $animes = Http::get($url)->json('data');

        return view('anime', compact('animes', 'genres'));
    }

    public function anime_detail($id)
    {
        $anime = Http::get("https://api.jikan.moe/v4/anime/{$id}")->json('data');

        $animes = Http::get('https://api.jikan.moe/v4/anime')->json('data');

        return view('anime_detail', ['anime' => $anime, 'animes' => $animes]);
    }

    public function anime_genres($id, $genre)
    {
        $animes = Http::get("https://api.jikan.moe/v4/anime?genres={$id}")->json('data');

        return view('anime_genres', ['animes' => $animes, 'genre' => $genre]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $mess = $request->mess;

        // Compattazione dei dati dell'utente
        $user_data = compact('name', 'email', 'mess');

        try {
            // Invio dell'email
            Mail::to($email)->send(new ContactUs($user_data));
        } catch (Exception $error) {
            return redirect(route('denied'))->with('emailError', 'Please try again.');
        }

        // Redirecting dell'utente
        return redirect(route('confirmed'))->with('status', 'Message sent');
    }

    public function confirmed()
    {
        return view('confirmed');
    }

    public function denied()
    {
        return view('denied');
    }
}
