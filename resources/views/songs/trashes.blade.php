@extends('layouts.app')

@section('title', __('song.title_trashed'))

@section('content')
    <h1>{{ __('song.title_trashed') }}</h1>
    <div class="row pt-2">
        <div class="fw-bold col-2">#</div>
        <div class="fw-bold col-4">{{ __('song.name') }}</div>
        <div class="fw-bold col-2">{{ __('song.genre') }}</div>
    </div>
    <hr>
    @foreach($songs as $song)
        <div class="row py-1 align-items-center">
            <div class="col-2 opacity-50">{{ $song->id }}</div>
            <div class="col-4 text-dark opacity-50">
                <a href="/songs/{{ $song->id }}">{{ $song->name }}</a>
            </div>
            <div class="col-2 text-success opacity-50">{{ $song->genre->name }}</div>
            @can('delete', $song)
                <div class="d-flex col-4">
                    <div class="text-success mx-2">
                        <form action="{{ route('songs.restore', $song->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary btn-sm text-white">
                                {{ __('song.restore') }}
                            </button>
                        </form>
                    </div>
                    <div class="text-success">
                        <form action="{{ route('songs.forceDelete', $song->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm text-white">
                                {{ __('song.fdelete') }}
                            </button>
                        </form>
                    </div>
                </div>
            @endcan
        </div>
    @endforeach
    <div class="row py-5">
        <div class="d-flex justify-content-center">{{ $songs->links('pagination::bootstrap-4') }}</div>
    </div>
@endsection

