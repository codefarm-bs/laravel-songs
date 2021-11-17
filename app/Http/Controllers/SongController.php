<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function list()
    {
        $songs = Song::all();

        return view('internal.songs', [
            'songs' => $songs
        ]);
    }
}
    
