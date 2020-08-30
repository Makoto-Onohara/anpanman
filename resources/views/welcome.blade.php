<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="css/root.css">

    </head>
    <body>
        
        <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <a href="{{ url('/home') }}">Home</a>
                    @else
                    <a href="{{ route('login') }}">ログイン</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}">登録</a>
                    @endif
                    @endauth
                </div>
                @endif

            <div class="content">
                <div class="title m-b-md">
                    神経衰弱
                </div>
                <div class="links">
                    <a href="{{ route('login') }}">ログイン</a>
                    <a href="{{ route('register') }}">登録</a>
                </div>
            </div>
        </div>
    </body>
</html>
