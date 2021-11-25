@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-header">{{ __('default.dashboard') }}</div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                @if(Auth::check())
                    <div>{{ __('default.welcome' , [ 'user' => Auth::user()->name ]) }}</div>
                @endif
            </div>
        </div>
    </div>
@endsection
