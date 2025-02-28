<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, ('welcome')])->name('welcome');
Route::get('/manga', [PublicController::class, ('manga')])->name('manga');
Route::get('/anime', [PublicController::class, ('anime')])->name('anime');
Route::get('/contact', [PublicController::class, ('contact')])->name('contact');