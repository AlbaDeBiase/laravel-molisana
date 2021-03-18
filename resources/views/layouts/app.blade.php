<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('title-page', 'La-Molisana')</title>
        <link rel="stylesheet" href="{{'/css/app.css'}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
            @include('partials.header')
        <main>
            @yield('content')
        </main>

            @include('partials.footer')
        <script src="{{'/js/app.js'}}" charset="utf-8"></script>
    </body>
</html>
