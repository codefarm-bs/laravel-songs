@extends('layouts.app')

@section('content')
    <div class="card" style="width: 640px">
        <div class="card-header">{{ __('default.login') }}</div>
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3 row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('default.email') }}</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('default.password') }}</label>
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                               name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="form-check d-flex">
                        <input class="form-check-input m-1" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label mx-2" for="remember">{{ __('default.remember') }}</label>
                    </div>
                </div>
                <div class="mb-0 row">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary text-white">
                            {{ __('default.login') }}
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
