@extends('layouts.app')

@section('content')
<h2>～　投稿中　ちょっと待つワニ　～</h2>
<div hidden>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <input id="email" type="hidden" name="email" value="{{ session('request')['email'] }}">
        <input id="password" type="hidden" name="password" value="{{ session('request')['password'] }}">
        <input id="check" type="checkbox" name="remember" id="remember" checked>
        <button id="button" type="submit"></button>
    </form>
</div>
    <script>
        document.getElementById('check').click();
        document.getElementById('button').click();
    </script>
@endsection
