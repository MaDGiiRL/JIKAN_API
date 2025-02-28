<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, ('welcome')])->name('welcome');
Route::get('/manga', [PublicController::class, ('manga')])->name('manga');
Route::get('/manga-detail/{id}/{manga_title}', [PublicController::class, 'manga_detail'])->name('manga_detail');
Route::get('/anime', [PublicController::class, ('anime')])->name('anime');
Route::get('/anime-detail/{id}/{anime_title}', [PublicController::class, 'anime_detail'])->name('anime_detail');
Route::get('/contact', [PublicController::class, ('contact')])->name('contact');
