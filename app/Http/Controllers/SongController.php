<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Genre;

class SongController extends Controller
{
    public function index()
    {
        $songs = Song::all();

        return view('songs.index', compact('songs'));
    }

    public function create()
    {
        $genres = Genre::all();

        return view('songs.create', compact('genres'));
    }

    public function store()
    {
        $data = \request()->validate([
            'name' => 'required|min:3|max:120',
            'genre_id' => 'required'
        ]);

        Song::create($data);

        return redirect('songs');
    }

    public function show(Song $song)
    {
        return view('songs.show', compact('song'));
    }

    public function edit(Song $song)
    {
        $genres = Genre::all();

        return view('songs.edit', compact('song', 'genres'));
    }

    public function update(Song $song)
    {
        $data = \request()->validate([
            'name' => 'required|min:3|max:120',
            'genre_id' => 'required'
        ]);

        $song->update($data);

        return redirect('songs');
    }

    public function destroy(Song $song)
    {
        $song->delete();

        return redirect('songs');
    }
}

