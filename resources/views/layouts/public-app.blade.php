<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="keywords" content="sdn pagelaran, sdn, pagelaran, sd, malang, sd pagelaran, kecamatan pagelaran, kab malang, kabupaten malang, kab. malang, sd negeri pagelaran, sdn 1, sdn 1 pagelaran sd negeri 1 pagelaran, {{ isset($found) ? Request::query('q') : '' }}" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="title" content="SD Negeri 1 Pagelaran"/>
        <meta name="description" content="Website SD Negeri 1 Pagelaran, Kab. Malang"/>
        <meta name="geo.placename" content="indonesia"/>
        <meta name="geo.country" content="id"/>
        <meta name="content-language" content="id"/>
        <meta property="og:title" content="SDN 1 Pagelaran">
        <meta property="og:site_name" content="SD Negeri 1 Pagelaran">
        <meta property="og:url" content="https://sdn1pagelaran.sch.id/">

        <title> @yield('title') | {{ config('app.name') }} </title>
        
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
                <a href="{{ route('home') }}" class="navbar-brand">SD Negeri 1 Pagelaran</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse bg-white" id="navbarNavAltMarkup">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link link-item pl-lg-4 {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-item pl-lg-4 {{ Request::segment(1) == 'pengumuman' ? 'active' : '' }}" href="{{ route('post.index', ['type' => 'pengumuman']) }}">Pengumuman</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-item pl-lg-4 {{ Request::segment(1) == 'berita' ? 'active' : '' }}" href="{{ route('post.index', ['type' => 'berita']) }}">Berita</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link pl-lg-4 dropdown-toggle {{ Request::segment(1) == 'visi-misi' ? 'active' : '' }}" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="about-us">Tentang Kami</a>
                            <div class="dropdown-menu shadow" aria-labelledby="about-us">
                                <a class="dropdown-item py-2" href="{{ route('visiMisi') }}">Visi & Misi</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    @yield('content')

    <footer class="footer py-3 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 col-md-6 col-lg-4 mb-3 contact">
                    <div class="box mb-3">
                        <h5 class="mb-3">Hubungi Kami</h5>
                        <h3 class="font-weight-bold my-3">SD NEGERI 1 PAGELARAN</h3>
                        <a href="https://www.google.com/maps/place/SDN+Pagelaran,+Jl.+Raya+Pagelaran+No.43,+Pagelaran,+Kec.+Pagelaran,+Malang,+Jawa+Timur+65174/@-8.1991237,112.6177599,17z/data=!4m2!3m1!1s0x2e78a07850aef64d:0xf16ff30bd5ac4962?hl=id&gl=ID" target="blank" class="footer-link">
                            Jl. Raya Pagelaran No. 43, Pagelaran, Kec. Pagelaran, Kab. Malang, Jawa Timur 65174
                        </a>
                    </div>
                    <ul class="pl-0 ml-1">
                        <li class="phone d-flex align-items-end mb-2">
                            <i class="fas fa-phone-square-alt mr-2"></i><a href="tel:0341123456" class="footer-link">0341 - 123 456</a>
                        </li>
                        <li class="email d-flex align-items-start">
                            <i class="fas fa-envelope-square mr-2"></i><a href="mailto:info@sdn1pagelaran.sch.id" class="footer-link">info@sdn1pagelaran.sch.id</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <h5 class="mb-3">Cari Informasi</h5>
                    <form action="{{ route('search') }}" method="get">
                        <div class="input-group mb-3 shadow-sm my-3">
                            <input type="text" class="form-control input-search shadow" placeholder="Cari . . ." aria-label="Cari" aria-describedby="basic-addon2" name="q" required>
                            <div class="input-group-append">
                                <button class="btn btn-primary btn-search shadow" type="submit"><i class="fas fa-search white" style="color: white"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md col-lg-4 mb-3">
                    <h5 class="mb-3">Maps</h5>
                    <iframe class="map-loc shadow" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.0360948821526!2d112.6155712143811!3d-8.199118384506495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78a07850aef64d%3A0xf16ff30bd5ac4962!2sSDN%20Pagelaran!5e0!3m2!1sid!2sid!4v1601881812321!5m2!1sid!2sid" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0" scrolling="no" marginheight="0" width="100%" height="250px"></iframe>
                </div>
            </div>
        </div>
        <div class="text-center border-top pt-3">
            <small class="text-muted">2021 © Copyright SD Negeri 1 Pagelaran. All rights Reserved.</small>
        </div>
    </footer>

    <script src="{{ asset('js/app/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    @stack('scripts')
</body>
</html>