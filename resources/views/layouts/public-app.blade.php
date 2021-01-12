<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>@yield('title') - SD Negeri Pagelaran</title>
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Raleway:wght@400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app/style.css') }}">
    </head>
    <body>
<body>
    @include('layouts.public-navbar')
    
    @yield('content')

    @include('layouts.public-footer')

    <script src="{{ asset('js/app/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/app/main.js') }}"></script>
</body>
</html>