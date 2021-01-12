@extends('layouts.public-app')

@section('title', 'Home')

@section('content')
    <div class="carousel slide carousel-fade" data-ride="carousel" id="carousel-1">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="overlay"></div><img class="w-100 d-block" src="{{ asset('img/about-bg.jpg') }}" alt="Slide Image">
                <h1 class="brand-header">SD NEGERI PAGELARAN</h1>
            </div>
            <div class="carousel-item">
                <div class="overlay"></div><img class="w-100 d-block" src="{{ asset('img/post-sample-image.jpg') }}"
                    alt="Slide Image">
                <h1 class="brand-header">SD NEGERI PAGELARAN</h1>
            </div>
            <div class="carousel-item">
                <div class="overlay"></div><img class="w-100 d-block" src="{{ asset('img/home-bg.jpg') }}" alt="Slide Image">
                <h1 class="brand-header">SD NEGERI PAGELARAN</h1>
            </div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span
                    class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a
                class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span
                    class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
        <ol class="carousel-indicators">
            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-1" data-slide-to="1"></li>
            <li data-target="#carousel-1" data-slide-to="2"></li>
        </ol>
    </div>
    <main>
        <div class="article-list">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-center heading m-0">Berita dan Pengumuman Terbaru</h2>
                    </div>
                </div>
                <div class="row justify-content-around articles">
                    <div class="col-sm col-md-6 col-lg-4 item">
                        <a href="post-detail.html"><img class="img-fluid" src="{{ asset('img/desk.jpg') }}" /></a>
                        <a href="post-detail.html">
                            <h3 class="name">Lorem ipsum dolor sit amet</h3>
                        </a>
                        <div class="description">Duis facilisis felis lectus, sed rhoncus magna lobortis ut. Curabitur a
                            elementum purus. Praesent elementum venenatis turpis, vel venenatis mi tempus et. Donec pretium
                            neque sit amet ipsum posuere venenatis. Nam porta id risus sit amet con...</div>
                        <a class="btn btn-link action" href="post-detail.html">Baca Selengkapnya</a>
                    </div>
                    <div class="col-sm col-md-6 col-lg-4 item">
                        <a href="post-detail.html"><img class="img-fluid" src="{{ asset('img/building.jpg') }}" /></a>
                        <a href="post-detail.html">
                            <h3 class="name">Duis consectetur, nulla dignissim lacinia vehicula, mi ipsum dignissim</h3>
                        </a>
                        <div class="description">Curabitur a elementum purus. Praesent elementum venenatis turpis, vel
                            venenatis mi tempus et. Vivamus efficitur interdum urna eget commodo. Nullam magna nibh,
                            interdum nec ullamcorp...</div>
                        <a class="btn btn-link action" href="post-detail.html">Baca Selengkapnya</a>
                    </div>
                    <div class="col-sm col-md-6 col-lg-4 item">
                        <a href="post-detail.html"><img class="img-fluid" src="{{ asset('img/loft.jpg') }}" /></a>
                        <a href="post-detail.html">
                            <h3 class="name">Suspendisse mauris mauris, mattis eu quam ut, lobortis ultricies nisl</h3>
                        </a>
                        <div class="description">Nunc pharetra, mauris in malesuada tempus, massa diam mollis magna, quis
                            eleifend elit orci vitae urna. Nullam consectetur purus eget ipsum pulvinar facilisis. Mauris
                            nisl elit, lobortis sed semper id, luctus at sem. Proin ac congue felis.</div>
                        <a class="btn btn-link action" href="post-detail.html">Baca Selengkapnya</a>
                    </div>
                    <div class="col-sm col-md-6 col-lg-4 item">
                        <a href="post-detail.html"><img class="img-fluid" src="{{ asset('img/about-bg.jpg') }}" /></a>
                        <a href="post-detail.html">
                            <h3 class="name">Mauris nisl elit, lobortis sed semper id, luctus at sem</h3>
                        </a>
                        <div class="description">Nullam magna nibh, interdum nec ullamcorper at, pharetra pulvinar ipsum.
                            Aenean vel velit eget velit ornare facilisis. Sed eget libero id dolor pharetra consequat eget
                            eu ipsum. Phasellus rhoncus nisi nisi, non convallis metus tempor non. Aliquam turpis lorem,
                            porta vitae vehicula non, molestie et augue. Sed tristique nec ligula ac cursus.</div>
                        <a class="btn btn-link action" href="post-detail.html">Baca Selengkapnya</a>
                    </div>
                    <div class="col-sm col-md-6 col-lg-4 item">
                        <a href="post-detail.html"><img class="img-fluid" src="{{ asset('img/post-bg.jpg') }}" /></a>
                        <a href="post-detail.html">
                            <h3 class="name">Praesent placerat ante nec ligula finibus iaculis</h3>
                        </a>
                        <div class="description"> Etiam finibus et mauris sed fermentum. Donec a odio ut orci aliquam
                            placerat. Donec ornare posuere tincidunt. Integer dui augue, laoreet sit amet faucibus ac,
                            hendrerit ac sem.</div><a class="btn btn-link action" href="post-detail.html">Baca
                            Selengkapnya</a>
                    </div>
                    <div class="col-sm col-md-6 col-lg-4 item">
                        <a href="post-detail.html"><img class="img-fluid" src="{{ asset('img/post-sample-image.jpg') }}" /></a>
                        <a href="post-detail.html">
                            <h3 class="name">Praesent elementum venenatis turpis, vel venenatis mi tempus et</h3>
                        </a>
                        <div class="description">Vivamus a consectetur mauris. Praesent placerat ante nec ligula finibus
                            iaculis. Etiam finibus et mauris sed fermentum. Donec a odio ut orci aliquam placerat. Donec
                            ornare posuere tincidunt.</div>
                        <a class="btn btn-link action" href="post-detail.html">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <section class="contact-section">
            <div class="container">
                <div class="row contact-wrap m-0">
                    <div class="col p-4">
                        <h2 class="text-center mb-4">Hubungi Kami</h2>
                        <div class="row d-flex">
                            <div class="col-12 col-lg-6">
                                <h4 class="heading">Denah Lokasi</h4>
                                <iframe class="map-loc"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.0360948821526!2d112.6155712143811!3d-8.199118384506495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78a07850aef64d%3A0xf16ff30bd5ac4962!2sSDN%20Pagelaran!5e0!3m2!1sid!2sid!4v1601881812321!5m2!1sid!2sid"
                                    frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0" scrolling="no"
                                    marginheight="0" width="100%" height="400px"></iframe>
                            </div>
                            <div class="col-12 col-lg-6 mt-2 mt-lg-0 contact-detail">
                                <h4 class="heading">Alamat</h4>
                                <div class="row">
                                    <ul>
                                        <li class="addr">Jl. Raya Pagelaran No.43, Pagelaran, Kec. Pagelaran, Kab. Malang,
                                            Jawa Timur 65174</li>
                                    </ul>
                                </div>
                                <h4 class="heading">No. Telp</h4>
                                <div class="row">
                                    <ul>
                                        <li class="phone">0341 - 123 456</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
