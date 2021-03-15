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
        <header style="background-image: url('img/home-bg.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="site-heading">
                            <h1>Clean Blog</h1>
                            <span class="subheading">A Blog Theme by Start Bootstrap</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
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
