<?php

use Illuminate\Support\Facades\Route;

Route::view('/','welcome');
Route::view('contact','contact');

Route::get('users', function () {

    $variable = [
        'Ali',
        'Hasan',
        'Mohammad',
        'fatemeh'
    ];

    return view('internal.users', [
        'users' => $variable
    ]);
});


