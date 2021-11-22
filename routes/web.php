<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Controllers\ContactController;

Route::view('/', 'home');
Route::view('about', 'about');

Route::resource('contact', ContactController::class)->only(['index', 'store']);

Route::resource('songs', SongController::class);

