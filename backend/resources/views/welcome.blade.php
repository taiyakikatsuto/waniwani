<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                        {{ Form::open(['method' => 'POST', 'route' => 'logout']) }}
                            <button class="btn">Logout</button>
                        {!! Form::close() !!}
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
            <h2>taiyaki</h2>
            <a class="nav-link" href="{{ route('ranking') }}">Ranking</a>
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs"><button class='btn btn-default'>Docs</button></a>
                    <a href="https://laracasts.com"><button class='btn btn-primary'>Laracasts</button></a>
                    <a href="https://laravel-news.com"><button class='btn btn-success'>News</button></a>
                    <a href="https://blog.laravel.com"><button class='btn btn-info'>Blog</button></a>
                    <a href="https://nova.laravel.com"><button class='btn btn-warning'>Nova</button></a>
                    <a href="https://forge.laravel.com"><button class='btn btn-danger'>Forge</button></a>
                    <a href="https://vapor.laravel.com"><button class='btn btn-link'>Vapor</button></a>
                    <a href="https://github.com/laravel/laravel"><button class='btn btn-primary'>GitHub</button></a>
                </div>
            </div>
        </div>
    </body>
</html>
