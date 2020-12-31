<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('title-page', 'La-Molisana')</title>
        <link rel="stylesheet" href="{{'/css/app.css'}}">
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
