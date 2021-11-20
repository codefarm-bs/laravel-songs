@extends('layout')

@section('title', 'آخرین آهنگ‌ها')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>آخرین آهنگ‌ها</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form class="mb-4 mt-4" method="POST" action="songs">
                <div class="col-sm-5 mb-3">
                    <label for="name" class="form-label">نام آهنگ</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    @if($errors->first('name'))
                        <div class="alert alert-danger d-flex align-items-center mt-2" role="alert">
                            <div>
                                {{ $errors->first('name') }}
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-sm-5 mb-3">
                    <label for="genre" class="form-label">ژانر آهنگ</label>
                    <select class="form-select" id="genre" name="genre_id">
                        <option selected disabled>انتخاب ژانر</option>
                        @foreach($genres as $genre)
                            <option value="{{ $genre->id }}">{{ $genre->name  }}</option>
                        @endforeach
                    </select>
                    @if($errors->first('name'))
                        <div class="alert alert-danger d-flex align-items-center mt-2" role="alert">
                            <div>
                                {{ $errors->first('publish') }}
                            </div>
                        </div>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">افزودن</button>
                @csrf()
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <h4>لیست آهنگ‌ها</h4>
            <hr>
            <ul>
                @foreach($songs as $song)
                    <li>
                        {{ $song->name }} <span class="text-secondary">({{ $song->genre->name }})</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection

