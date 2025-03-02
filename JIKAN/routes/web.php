<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, ('welcome')])->name('welcome');

Route::get('/manga', [PublicController::class, ('manga')])->name('manga');
Route::get('manga-detail/{id}/{manga_title}', [PublicController::class, 'manga_detail'])->name('manga_detail');
Route::get('/manga-genres/{id}/{genre}', [PublicController::class, 'manga_genres'])->name('manga_genres');

Route::get('/anime', [PublicController::class, ('anime')])->name('anime');
Route::get('/anime-detail/{id}/{anime_title}', [PublicController::class, 'anime_detail'])->name('anime_detail');
Route::get('/anime-genres/{id}/{genre}', [PublicController::class, 'anime_genres'])->name('anime_genres');

Route::get('/contact', [PublicController::class, ('contact')])->name('contact');
Route::post('/submit', [PublicController::class, 'submit'])->name('submit');
Route::get('/confirmed', [PublicController::class, 'confirmed'])->name('confirmed');
Route::get('/denied', [PublicController::class, 'denied'])->name('denied');
