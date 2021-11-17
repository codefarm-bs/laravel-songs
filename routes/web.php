<?php

use Illuminate\Support\Facades\Route;

Route::view('/','home');
Route::view('contact','contact');

Route::get('songs', [\App\Http\Controllers\SongController::class, 'list']);
