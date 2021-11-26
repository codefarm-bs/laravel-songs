<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" {{ app()->getLocale() === 'fa' ? 'dir=rtl' : ''  }} ">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'آموزش مقدماتی لاراول')</title>

    <!-- Fonts -->
    <link href='https://cdn.fontcdn.ir/Font/Persian/Vazir/Vazir.css' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    @include('nav')
    <div class="container col-md-9">
        <div class="row justify-content-center mx-4">
            @if(session()->has('message'))
                <div class="col-6">
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('locale') }}
                    </div>
                </div>
            @endif
            @yield('content')
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
