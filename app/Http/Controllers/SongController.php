<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Song;

class SongController extends Controller
{
    public function list()
    {
        $songs = Song::all();
        $genres = Genre::all();

        return view('songs.index', compact('songs', 'genres'));
    }

    public function store()
    {
        $data = \request()->validate([
            'name' => 'required|min:3|max:120',
            'genre_id' => 'required'
        ]);

        Song::create($data);

        return back();
    }
}

