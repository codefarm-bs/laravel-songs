@extends('layout')

@section('title', 'آخرین آهنگ‌ها')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>آخرین آهنگ‌ها</h1>
            <div class="py-2"><a href="songs/create">افزودن آهنگ جدید</a></div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="row pt-2">
                <div class="fw-bold col-2">#</div>
                <div class="fw-bold col-4">نام آهنگ</div>
                <div class="fw-bold col-2">سبک</div>
            </div>
            <hr>
            @foreach($songs as $song)
                <div class="row py-1">
                    <div class="col-2">{{ $song->id }}</div>
                    <div class="col-4 text-dark">
                        <a href="songs/{{ $song->id }}">{{ $song->name }}</a>
                    </div>
                    <div class="col-2 text-success">{{ $song->genre->name }}</div>
                    <div class="col-1 text-success"><a href="songs/{{ $song->id }}/edit">ویرایش</a></div>
                    <div class="col-1 text-success">
                        <form action="songs/{{ $song->id }}" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">حذف</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

