<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LocaleController;

Auth::routes();

Route::view('/', 'home');
Route::view('about', 'about');

Route::resource('songs', SongController::class);
Route::resource('contact', ContactController::class)->only(['index', 'store']);

Route::post('locale', [LocaleController::class, 'store'])->name('locale.switch');

