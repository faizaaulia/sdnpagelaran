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
    <nav class="navbar navbar-light navbar-expand-md fixed-top {{ Route::currentRouteName() == 'home' ? '' : 'fixed-solid' }} px-0" id="main-nav">
        <div class="container"><a class="navbar-brand d-md-none" href="index.html">SD NEGERI PAGELARAN</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div
                class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav d-flex justify-content-between ml-auto" style="width: 100%;">
                    <li class="nav-item"><a class="nav-link active" href="index.html">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="posts.html">BERITA</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html">PENGUMUMAN</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html">AGENDA</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html">PROFIL</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    @yield('content')

    <footer class="p-0">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-6">
                    <h1>SD NEGERI PAGELARAN</h1>
                </div>
                <div class="col-md-6 col-lg-3 mt-3 mt-lg-0 card d-flex flex-row flex-md-column">
                    <div class="img-footer">
                        <a href="#">
                            <img src="{{ asset('img/home-bg.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="ml-3 ml-md-0 mt-md-2 foo-detail">
                        <a href="#">
                            <h4 class="card-title">Praesent aliquam in tellus eu gravida.</h4>
                        </a>
                        <div class="date">
                            <p class="m-0">22 November 2020</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mt-3 mt-lg-0 card d-flex flex-row flex-md-column">
                    <div class="img-footer">
                        <a href="#">
                            <img src="{{ asset('img/about-bg.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="ml-3 ml-md-0 mt-md-2 foo-detail">
                        <a href="#">
                            <h4 class="card-title">Curabitur a elementum purus. Praesent aliquam in tellus eu gravida.</h4>
                        </a>
                        <div class="date">
                            <p class="m-0">22 November 2020</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-white py-3 text-center">
            <p class="m-0">2020 Copyright • All Right Reserved</p>
        </div>
    </footer>

    <script src="{{ asset('js/app/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/app/main.js') }}"></script>
</body>
</html>