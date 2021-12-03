@extends('layouts.app')

@section('title', __('song.title'))

@section('content')
    <h1>{{ __('song.title') }}</h1>
    <div class="py-2"><a href="songs/create">{{ __('song.add') .' '. __('song.new') }}</a></div>
    <div class="row pt-2">
        <div class="fw-bold col-2">#</div>
        <div class="fw-bold col-4">{{ __('song.name') }}</div>
        <div class="fw-bold col-2">{{ __('song.user') }}</div>
        <div class="fw-bold col-2">{{ __('song.genre') }}</div>
    </div>
    <hr>
    @foreach($songs as $song)
        <div class="row py-1 align-items-center">
            <div class="col-2">{{ $song->id }}</div>
            <div class="col-4 text-dark">
                <a href="songs/{{ $song->id }}">{{ $song->name }}</a>
            </div>
            <div class="col-2 text-secondary">{{ $song->user->name }}</div>
            <div class="col-2 text-success">{{ $song->genre->name }}</div>

            @can('delete', $song)
                <div class="d-flex col-1">
                    <div class="text-success mx-2">
                        <a href="songs/{{ $song->id }}/edit">{{ __('song.edit') }}</a>
                    </div>
                    <div class="text-success">
                        <form action="songs/{{ $song->id }}" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm text-white">
                                {{ __('song.delete') }}
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

