@extends('layouts.public-app')

@section('title', 'Beranda')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/app/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/app/owl.theme.default.min.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('css/app/aos.css') }}"> --}}
@endpush

@section('content')
    <!-- CAROUSEL -->
    <section class="carousel-section mb-3">
        <div id="owl-demo" class="owl-carousel owl-theme banner">
            <div class="item" style="background-image: url(img/banner-1.jpg);"></div>
            <div class="item" style="background-image: url(img/banner-2.jpg);"></div>
            <div class="item" style="background-image: url(img/guru.jpg);"></div>
        </div>
    </section>

    <main role="main" class="pt-3">
        <div class="container mb-5">
            @if (count($posts) > 0)
            <h2 class="text-center my-2 hero-title">Informasi Terbaru</h2>
            <div class="infos">
                <div class="row py-3 d-flex flex-lg-wrap">
                    @foreach ($posts as $post)
                    <div class="col-12 p-3 {{ count($posts) > 1 ? 'col-lg'  : '' }}">
                        <div class="card shadow">
                            @if ($post->thumbnail !== '-')
                            <a href="{{ route('post.detail', ['type' => $post->type, 'slug' => $post->slug]) }}">
                                <div class="card-image">
                                    <img src="{{ $post->thumbnail ? $post->thumbnail : "asset('$post->thumbnail')" }}" alt="{{ $post->title }}" class="card-img shadow-sm">
                                </div>
                            </a>
                            @endif
                            <div class="card-detail">
                                <a href ="{{ route('post.detail', ['type' => $post->type, 'slug' => $post->slug]) }}" class="clearfix card-title">{{ $post->title }}</a>
                                <small style="font-weight: 500" class="text-muted"><i class="fas fa-calendar text-gray-300 my-2"></i> {{ $post->formated_date }} </small>
                                <div class="card-text mb-2">
                                    {!! $post->excerpt !!}
                                </div>
                                <hr class="my-2">
                                <a href="{{ route('post.detail', ['type' => $post->type, 'slug' => $post->slug]) }}" class="btn btn-sm btn-link btn-read-more pl-0 py-0">Baca Selengkapnya →</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
        <div class="ekskul-wrapper mb-5">
            <div class="container">
                <h3 class="hero-title mb-4">Ekstrakurikuler</h3>
                <div class="ekskul-box row justify-content-center">
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="ekskul-item col-12">
                            <h4 class="ekskul-name">Pramuka</h4>
                            <img src="https://cdn.idntimes.com/content-images/community/2020/08/pramuka-0adcb37a309741f3e718220a522b26bc_600x400.jpg" alt="" class="ekskul-img">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="ekskul-item col-12">
                            <h4 class="ekskul-name">Dokter Kecil</h4>
                            <img src="https://cdn-asset.jawapos.com/wp-content/uploads/2017/03/peran-besar-dokter-kecil-di-sd-kr-dharma-mulya-praktik-ke-rs-perbulan_m_119420-640x421.jpeg" alt="" class="ekskul-img">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="ekskul-item col-12">
                            <h4 class="ekskul-name">Agama</h4>
                            <img src="https://lh3.googleusercontent.com/proxy/QmV1CJ4_bsh5bl4ub45VXl870-2PhTWi1kdA_6WJypJKPBFcvImHpMI08cGeqNK95ETy75LwhDWtNkc8E7Ie5P2Tq9Hr3X71tZFIjHv6FUgQ37U_P_MLxh4cpZx-fiDclQFkgof3lJBcKx7kw8-qHeJkg-Kf6tyNTQtu3GdwQut-gPRiGQ" alt="" class="ekskul-img">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="ekskul-item col-12">
                            <h4 class="ekskul-name">Seni Tari</h4>
                            <img src="https://tabloidmatahati.com/wp-content/uploads/2019/11/BUKU-MILAD-SD-MUTU-42aaa.jpg" alt="" class="ekskul-img">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="ekskul-item col-12">
                            <h4 class="ekskul-name">Bahasa Inggris</h4>
                            <img src="https://esqcourse.com/wp-content/uploads/2019/02/8-Cara-Cepat-Jago-Bahasa-Inggris-yang-Bisa-Dipelajari-1024x1024.jpg" alt="" class="ekskul-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="prestasi-wrapper container">
            <h3 class="hero-title mb-4">Prestasi Terbaru</h3>
            <div class="card shadow mb-4">
                <div class="row no-gutters">
                    <div class="col-md-5 img-thumbnail" style="background-image: url('https://images.unsplash.com/photo-1492681290082-e932832941e6?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=751&q=80')"></div>
                    <div class="col-md-7 detail">
                        <div class="card-body p-4">
                            <h5 class="card-title mb-2">Juara 3 Putra - Kemah Pendidikan Karakter SD Tingkat Kabupaten Malang</h5>
                            <div class="row">
                                <div class="col-md-6 date-loc">
                                    <small style="font-weight: 500" class="text-muted"><i class="fas fa-calendar text-gray-300"></i> 2014 </small>
                                </div>
                                <div class="col-md-6 date-loc">
                                    <small style="font-weight: 500" class="text-muted"><i class="fas fa-map-marked-alt"></i> Kab. Malang</small>
                                </div>
                            </div>
                            <hr>
                            <p class="card-text mb-3">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="row no-gutters">
                    <div class="col-md-5 img-thumbnail" style="background-image: url('https://images.unsplash.com/photo-1551892589-865f69869476?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80')"></div>
                    <div class="col-md-7 detail">
                        <div class="card-body p-4">
                            <h5 class="card-title mb-2">Juara 1 Nilai Rata-Rata Tertinggi Ujian Nasional SD</h5>
                            <div class="row">
                                <div class="col-md-6 date-loc">
                                    <small style="font-weight: 500" class="text-muted"><i class="fas fa-calendar text-gray-300"></i> 2011 </small>
                                </div>
                                <div class="col-md-6 date-loc">
                                    <small style="font-weight: 500" class="text-muted"><i class="fas fa-map-marked-alt"></i> Kec. Pagelaran</small>
                                </div>
                            </div>
                            <hr>
                            <p class="card-text mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa doloremque voluptate debitis illo ratione eius vero, eos optio fugiat quam. Placeat in nisi amet accusantium aliquam debitis harum, blanditiis quaerat? Lorem ipsum dolor sit ame</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('scripts')
    <script src="{{ asset('js/app/owl.carousel.min.js') }}"></script>
    {{-- <script src="{{ asset('js/app/aos.js') }}"></script> --}}
    <script>
        $(document).ready(function(){
            // AOS.init();
            $('#owl-demo').owlCarousel({
                items: 1,
                margin: 10,
                autoHeight: true,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                dots: false,
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
            });
        });
    </script>
@endpush