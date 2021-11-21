<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

Route::view('/','home');
Route::view('about','about');
Route::view('contact','contact');

Route::resource('songs', SongController::class);

