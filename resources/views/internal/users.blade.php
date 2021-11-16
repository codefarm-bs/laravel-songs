@extends('layout')

@section('content')
    <h1>کاربران</h1>

    <ul>
        @foreach($users as $user)
            <li>{{ $user }}</li>
        @endforeach
    </ul>
@endsection

