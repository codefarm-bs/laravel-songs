@extends('layouts.app')

@section('content')
    <div class="card" style="width: 640px">
        <div class="card-header">{{ __('default.password_confirmation') }}</div>
        <div class="card-body">
            {{ __('default.confirm_your_password') }}
            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf
                <div class="mb-3 row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('default.password') }}</label>
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
                <div class="mb-0 row">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary text-white">
                            {{ __('default.password_confirmation') }}
                        </button>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('default.forget') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
