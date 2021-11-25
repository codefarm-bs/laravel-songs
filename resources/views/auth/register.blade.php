@extends('layouts.app')

@section('content')
    <div class="card" style="width: 640px">
        <div class="card-header">{{ __('default.register') }}</div>
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3 row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('default.name') }}</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('default.email') }}</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('default.password') }}</label>
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('default.password_confirmation') }}</label>
                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
                <div class="mb-0 row">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary text-white">
                            {{ __('default.register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
