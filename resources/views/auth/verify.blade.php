@extends('layouts.app')

@section('content')
    <div class="card" style="width: 640px">
        <div class="card-header">{{ __('default.verify_email') }}</div>
        <div class="card-body">
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    {{ __('default.verification_send') }}
                </div>
            @endif
            {{ __('default.check_email_before_verification') }}
            {{ __('default.email_not_received') }},
            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('default.another_verification') }}</button>
                .
            </form>
        </div>
    </div>
@endsection
