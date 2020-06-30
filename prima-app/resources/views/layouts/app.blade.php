<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <title>@yield('page-title')</title>
    </head>
    <body>
        @include('partials.header')
        @include('partials.jumbotron')
        @yield('content')
        <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
    </body>
</html>
