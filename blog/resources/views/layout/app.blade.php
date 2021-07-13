<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('titolo', 'Viaggi')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        {{-- My Style --}}
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <header>
            <h1>BoolTravel</h1>
        </header>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
