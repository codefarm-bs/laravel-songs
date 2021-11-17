@extends('layout')

@section('content')
    <h1>آخرین آهنگ‌ها</h1>

    <ul>
        @foreach($songs as $song)
            <li>{{ $song->name }}</li>
        @endforeach
    </ul>
@endsection

