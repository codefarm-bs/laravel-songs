<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::view('/', 'home');
Route::view('about', 'about');
Route::post('locale', [LocaleController::class, 'store'])->name('locale.switch');

Route::resource('contact', ContactController::class)->only(['index', 'store']);
Route::resource('songs', SongController::class);


Route::get('/trashes', [SongController::class, 'trashes'])->name('songs.trash');
Route::delete('/songs/{id}/force', [SongController::class, 'forceDelete'])->name('songs.forceDelete');
Route::post('/songs/{id}/restore', [SongController::class, 'restore'])->name('songs.restore');
