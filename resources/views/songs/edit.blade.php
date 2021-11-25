@extends('layouts.app')

@section('title', __('song.edit') . ' ' .  $song->name )

@section('content')
    <h1> {{ __('song.edit') . ' ' . $song->name }}</h1>
    <form class="mb-4 mt-4" method="POST" action="/songs/{{ $song->id }}">
        @method('PATCH')
        <div class="col-lg-6 mb-3">
            <label for="name" class="form-label">{{ __('song.name') }}</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') ?? $song->name }}">
            <div class="text-danger">{{ $errors->first('name') }}</div>
        </div>
        <div class="col-lg-6 mb-3">
            <label for="genre" class="form-label">{{ __('song.genre') }}</label>
            <select class="form-select" id="genre" name="genre_id">
                <option selected disabled>{{ __('song.select') . ' ' . __('song.genre') }}</option>
                @foreach($genres as $genre)
                    <option value="{{ $genre->id }}" {{ $song->genre_id == $genre->id ? 'selected' : '' }}>{{ $genre->name  }}</option>
                @endforeach
            </select>
            <div class="text-danger">{{ $errors->first('genre_id') }}</div>
        </div>
        <button type="submit" class="btn btn-primary text-white">{{ __('song.edit') }}</button>
        @csrf()
    </form>
@endsection

