<?php

namespace App\Http\Controllers;

class UsersController extends Controller
{
    public function list()
    {
        $variable = [
            'Ali',
            'Hasan',
            'Mohammad',
            'fatemeh'
        ];

        return view('internal.users', [
            'users' => $variable
        ]);
    }
}


