@extends('layouts.public-app')

@section('title', 'Pengumuman')

@section('content')
<main role="main" class="container pt-3">
    <div class="container wrapper">
        <nav aria-label="breadcrumb bg-none">
            <ol class="breadcrumb p-0 mt-3">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ Str::ucfirst(Request::segment(1)) }}</li>
            </ol>
        </nav>
        <div class="row posts mb-5">
            <div class="col-12 col-lg-8">
                @foreach ($posts as $post)
                <div class="card shadow posts-card">
                    <a href="{{ route('post.detail', ['type' => Request::segment(1), 'slug' => $post->slug]) }}">
                        <div class="card-image">
                            <img src="{{ $post->thumbnail ? $post->thumbnail : "asset('$post->thumbnail')" }}" alt="{{ $post->title }}" class="card-img shadow-sm img-posts">
                        </div>
                    </a>
                    <div class="card-detail">
                        <a href ="{{ route('post.detail', ['type' => Request::segment(1), 'slug' => $post->slug]) }}" class="card-title">{{ $post->title }}</a>
                        <div class="card-text my-2">
                            {!! $post->excerpt !!}
                        </div>
                        <a href="{{ route('post.detail', ['type' => Request::segment(1), 'slug' => $post->slug]) }}" class="btn btn-outline-primary btn-read-more">Baca Selengkapnya</a>
                    </div>
                </div> 
                @endforeach
            </div>
            <div class="col-12 col-lg-4 others">
                <div class="card shadow py-3">
                    <h4 class="text-center mb-0 hero-title">Informasi Lainnya</h4>
                    <div>
                        <div class="row d-flex flex-row card-detail other-item pb-0">
                            <hr>
                            <div class="col-4 pr-0 my-auto">
                                <img src="img/about-bg.jpg" alt="" class="w-100 h-75">
                            </div>
                            <div class="col-8">
                                <a href="#" class="other-card-title">Lorem ipsum dolor sit amet consectetur adipisicing</a> <br>
                                <p class="other-detail mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime similique animi nisi enim, illo, quos ipsa ad quae accusantium qui odit. A accusamus provident laudantium error, quos dignissimos inventore vitae!</p>
                                <small class="text-muted">22 Jan 2021</small>
                            </div>
                        </div>
                        <div class="row d-flex flex-row card-detail other-item pb-0">
                            <div class="col-4 pr-0 my-auto">
                                <img src="img/about-bg.jpg" alt="" class="w-100 h-75">
                            </div>
                            <div class="col-8">
                                <a href="#" class="other-card-title">Lorem ipsum dolor sit amet consectetur adipisicing</a> <br>
                                <p class="other-detail mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime similique animi nisi enim, illo, quos ipsa ad quae accusantium qui odit. A accusamus provident laudantium error, quos dignissimos inventore vitae!</p>
                                <small class="text-muted">22 Jan 2021</small>
                            </div>
                        <div class="row d-flex flex-row card-detail other-item pb-0">
                            <hr>
                            <div class="col-4 pr-0 my-auto">
                                <img src="img/about-bg.jpg" alt="" class="w-100 h-75">
                            </div>
                            <div class="col-8">
                                <a href="#" class="other-card-title">Lorem ipsum dolor sit amet consectetur adipisicing</a> <br>
                                <p class="other-detail mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime similique animi nisi enim, illo, quos ipsa ad quae accusantium qui odit. A accusamus provident laudantium error, quos dignissimos inventore vitae!</p>
                                <small class="text-muted">22 Jan 2021</small>
                            </div>
                        </div>
                        <div class="row d-flex flex-row card-detail other-item pb-0">
                            <div class="col-4 pr-0 my-auto">
                                <img src="img/about-bg.jpg" alt="" class="w-100 h-75">
                            </div>
                            <div class="col-8">
                                <a href="#" class="other-card-title">Lorem ipsum dolor sit amet consectetur adipisicing</a> <br>
                                <p class="other-detail mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime similique animi nisi enim, illo, quos ipsa ad quae accusantium qui odit. A accusamus provident laudantium error, quos dignissimos inventore vitae!</p>
                                <small class="text-muted">22 Jan 2021</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
