<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'آموزش مقدماتی لاراول')</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href='https://cdn.fontcdn.ir/Font/Persian/Vazir/Vazir.css' rel='stylesheet' type='text/css'>
    <style>
        body {
            font-family: Vazir, serif;
        }
    </style>
</head>
<body>

<div class="container">
    @include('nav')
    <div class="container-xxl my-md-4 bd-layout">
        @if(session()->has('message'))
            <div class="col-6">
                <div class="alert alert-success" role="alert">
                    {{ session()->get('message') }}
                </div>
            </div>
        @endif
        @yield('content')
    </div>
</div>

</body>
</html>
