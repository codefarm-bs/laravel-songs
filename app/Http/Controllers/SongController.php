<?php

namespace App\Http\Controllers;

use App\Events\NewSongCreatedEvent;
use App\Models\Genre;
use App\Models\Song;
use Illuminate\Support\Facades\Auth;

class SongController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
        $this->middleware('can:delete, App\Models\Song')->only('delete');
        $this->middleware('can:create, App\Models\Song')->only('create');
    }

    public function index()
    {
        $songs = Song::paginate(15);

        return view('songs.index', compact('songs'));
    }

    public function trashes()
    {
        $songs = Song::withTrashed()->whereNotNull('deleted_at')->paginate(15);

        return view('songs.trashes', compact('songs'));
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

        $song = Auth::user()->songs()->create($data);

        event(new NewSongCreatedEvent(Auth::user(), $song));

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

    public function restore($id)
    {
        Song::withTrashed()->find($id)->restore();

        return back();
    }

    public function forceDelete($id)
    {
        Song::withTrashed()->find($id)->forceDelete();

        return back();
    }
}

