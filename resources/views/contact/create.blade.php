@extends('layouts.app')

@section('title', __('default.contact'))

@section('content')
    <div class="card" style="width: 640px">
        <div class="card-header">{{  __('default.contact') }}</div>
        <div class="card-body">
            <form action="{{ route('contact.store') }}" method="POST" class="p-4">
                <div class="form-group">
                    <label class="py-1" for="name">{{ __('default.name') }}</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                    <div class="text-danger">{{ $errors->first('name') }}</div>
                </div>
                <div class="form-group">
                    <label class="py-1" for="email">{{ __('default.email') }}</label>
                    <input type="text" name="email" value="{{ old('email') }}" class="form-control">
                    <div class="text-danger">{{ $errors->first('email') }}</div>
                </div>
                <div class="form-group">
                    <label class="py-1" for="message">{{ __('default.message') }}</label>
                    <textarea name="message" id="message" cols="30" rows="10"
                              class="form-control">{{ old('message') }}</textarea>
                    <div class="text-danger">{{ $errors->first('message') }}</div>
                </div>
                @csrf
                <button type="submit" class="btn btn-primary mt-2 text-white">{{ __('default.send') }}</button>
            </form>
        </div>
    </div>
@endsection
