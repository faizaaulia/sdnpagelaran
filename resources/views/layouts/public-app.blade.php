<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="keywords" content="sdn pagelaran, sdn, pagelaran, sd, malang, sd pagelaran, kecamatan pagelaran, kab malang, kabupaten malang, kab. malang, sd negeri pagelaran, {{ isset($found) ? Request::query('q') : '' }}" />
        <title> @yield('title') </title>
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="{{ asset('css/app/style.css') }}">
        @stack('styles')
    </head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-lg">
            <div class="container">
                {{-- <a href="{{ route('home') }}" class="navbar-brand">SDN Pagelaran</a> --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse bg-white" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto mr-lg-5">
                        <a class="nav-item nav-link pl-lg-4 {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a>
                        <a class="nav-item nav-link pl-lg-4 {{ Request::segment(1) == 'pengumuman' ? 'active' : '' }}" href="{{ route('post.index', ['type' => 'pengumuman']) }}">Pengumuman</a>
                        <a class="nav-item nav-link pl-lg-4 {{ Request::segment(1) == 'berita' ? 'active' : '' }}" href="{{ route('post.index', ['type' => 'berita']) }}" href="posts.html">Berita</a>
                        <a class="nav-item nav-link pl-lg-4 {{ Request::segment(1) == 'agenda' ? 'active' : '' }}" href="{{ route('post.index', ['type' => 'agenda']) }}" href="posts.html">Agenda</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    
    @yield('content')

    <footer class="footer py-3 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 col-md-6 mb-3">
                    <h5>Hubungi Kami</h5>
                    SDN PAGELARAN
                </div>
                <div class="col-12 col-lg-4 col-md-6">
                    <h5>Cari Informasi</h5>
                    <form action="{{ route('search') }}" method="get">
                        <div class="input-group mb-3 shadow-sm">
                            <input type="text" class="form-control input-search" placeholder="Cari" aria-label="Cari" aria-describedby="basic-addon2" name="q" required>
                            <div class="input-group-append">
                                <button class="btn btn-primary btn-search" type="submit"><i class="fas fa-search white" style="color: white"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md col-lg-4 mb-3">
                    <h5>Maps</h5>
                    <iframe class="map-loc shadow" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.0360948821526!2d112.6155712143811!3d-8.199118384506495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78a07850aef64d%3A0xf16ff30bd5ac4962!2sSDN%20Pagelaran!5e0!3m2!1sid!2sid!4v1601881812321!5m2!1sid!2sid" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0" scrolling="no" marginheight="0" width="100%" height="250px"></iframe>
                </div>
            </div>
            <span class="text-muted">Copyright</span>
        </div>
    </footer>

    <script src="{{ asset('js/app/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    @stack('scripts')
</body>
</html>