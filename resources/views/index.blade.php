@extends('layouts.public-app')

@section('title', 'Home')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/app/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app/owl.theme.default.min.css') }}">
@endpush

@section('content')
    <!-- CAROUSEL -->
    <section class="carousel-section mb-3">
        <div id="owl-demo" class="owl-carousel owl-theme">
            <div class="item" style="background-image: url(img/about-bg.jpg);"></div>
            <div class="item" style="background-image: url(img/building.jpg);"></div>
            <div class="item" style="background-image: url(img/contact-bg.jpg);"></div>
        </div>
    </section>

    <main role="main" class="container pt-3">
        <div class="container wrapper">
            <h2 class="text-center my-2 latest-info">Informasi Terbaru</h2>
            <div class="infos">
                <div class="row py-3 d-flex flex-lg-wrap">
                    @foreach ($posts as $post)
                    <div class="col-lg col-12 p-3">
                        <div class="card shadow">
                            <a href="{{ route('post.detail', ['type' => $post->type, 'slug' => $post->slug]) }}">
                                <div class="card-image">
                                    <img src="{{ $post->thumbnail ? $post->thumbnail : "asset('$post->thumbnail')" }}" alt="{{ $post->title }}" class="card-img shadow-sm">
                                </div>
                            </a>
                            <div class="card-detail">
                                <a href ="{{ route('post.detail', ['type' => $post->type, 'slug' => $post->slug]) }}" class="clearfix card-title">{{ $post->title }}</a>
                                <small style="font-weight: 500"><i class="fas fa-calendar text-gray-300 my-2"></i> {{ $post->formated_date }} </small>
                                <div class="card-text my-2">
                                    {!! $post->excerpt !!}
                                </div>
                                <a href="{{ route('post.detail', ['type' => $post->type, 'slug' => $post->slug]) }}" class="btn btn-sm btn-link btn-read-more pl-0 py-0">Baca Selengkapnya →</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection

@push('scripts')
    <script src="{{ asset('js/app/owl.carousel.min.js') }}"></script>
    <script>
        $(document).ready(function(){
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