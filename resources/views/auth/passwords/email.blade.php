@extends('layouts.app')

@section('content')
    <div class="card" style="width: 640px">
        <div class="card-header">{{ __('default.reset_password') }}</div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('password.email') }}">
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
                <div class="mb-0 row">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary text-white">
                            {{ __('default.send_reset_password') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
