@extends('layouts.app')

@section('title', 'آهنگ ' . $song->name)

@section('content')
    <h1>اطلاعات آهنگ‌</h1>
    <div class="fs-3">
        <p>نام: <span class="fw-bold">{{ $song->name }}</span></p>
    </div>
    <div class="fs-3">
        <p>سبک: <span class="fw-bold">{{ $song->genre->name }}</span></p>
    </div>
@endsection

