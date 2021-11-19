<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function list()
    {
        $publishSongs = Song::published()->get();
        $unPublishSongs = Song::unpublished()->get();

        return view('songs.index', compact('publishSongs', 'unPublishSongs'));
    }

    public function store()
    {
        $data = \request()->validate([
            'name' => 'required|min:3|max:120',
            'publish' => 'required'
        ]);

        Song::create($data);

        return back();
    }
}

