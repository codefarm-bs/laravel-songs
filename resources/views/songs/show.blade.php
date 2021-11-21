@extends('layout')

@section('title', 'آهنگ ' . $song->name)

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>اطلاعات آهنگ‌</h1>
        </div>
    </div>
    <div class="row py-3">
        <div class="col-12">
            <div class="fs-3">
                <p>نام: <span class="fw-bold">{{ $song->name }}</span></p>
            </div>
            <div class="fs-3">
                <p>سبک: <span class="fw-bold">{{ $song->genre->name }}</span></p>
            </div>
        </div>
    </div>
@endsection

