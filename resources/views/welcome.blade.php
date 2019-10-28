<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blood and Fury</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/styles.css">
    </head>
    <body>
        <div class="splash">
            <div class="flex-center position-ref full-height">
                <!-- @if (Route::has('login'))
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
                @endif -->

                <div class="content main-welcome">
                    <div class="title m-b-md">
                        Blood and Fury
                    </div>

                    <div class="links">
                        <a href="/about">About Us</a>
                        <a href="/recruitment">Recruitment</a>
                        <a href="/loot">Loot System</a>
                        <a href="/calendar">Calendar</a>
                        <!-- <a href="https://blog.laravel.com">Gallery</a> -->
                        <!-- <a href="https://nova.laravel.com">Streams</a> -->
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
