@extends('layout')

@section('title', 'ارتباط با ما')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>ارتباط با ما</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <form action="{{ route('contact.store') }}" method="POST">
                <div class="form-group">
                    <label class="py-1" for="name">نام و نام خانوادگی</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                    <div class="text-danger">{{ $errors->first('name') }}</div>
                </div>
                <div class="form-group">
                    <label class="py-1" for="email">پست الکترونیک</label>
                    <input type="text" name="email" value="{{ old('email') }}" class="form-control">
                    <div class="text-danger">{{ $errors->first('email') }}</div>
                </div>
                <div class="form-group">
                    <label class="py-1" for="message">متن پیام</label>
                    <textarea name="message" id="message" cols="30" rows="10"
                              class="form-control">{{ old('message') }}</textarea>
                    <div class="text-danger">{{ $errors->first('message') }}</div>
                </div>
                @csrf
                <button type="submit" class="btn btn-primary mt-2">ارسال</button>
            </form>
        </div>
    </div>
@endsection
