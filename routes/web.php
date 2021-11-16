<?php

use Illuminate\Support\Facades\Route;

Route::view('/','welcome');
Route::view('contact','contact');

Route::get('users', [\App\Http\Controllers\UsersController::class, 'list']);
