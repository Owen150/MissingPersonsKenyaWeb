<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ url('./css/index.css') }}" />
        <title>missingPersonsApp</title>
    </head>

    <body>
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
            <div class="contentWrapper">
                <div class="content">
                    <p class="">Missing Persons Kenya helps you:</br>+ View missing persons reports<br/>+ Report missing persons
                        </br>+ Report sightings of missing persons<br/><br/>
                        <span class="callToAction">Need help finding a loved one?</span>
                    </p>
                    <a href="{{ route('login') }}"><button class="loginBtn">LOGIN</button></a>
                </div>
            </div>
           
        </div>
        
    </body>
</html>