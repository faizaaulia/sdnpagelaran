@extends('layouts.public-app')

@section('title', 'Judul Berita')

@section('content')
    <main>
        <section class="breadcrumb-bg"></section>
        <section class="content">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><span>Home</span></a></li>
                    <li class="breadcrumb-item"><a href="posts.html"><span>Berita</span></a></li>
                    <li class="breadcrumb-item active"><span>Qui, necessitatibus, est</span></li>
                </ol>
                <div class="row mx-0">
                    <div class="col-md-8 pb-3 pb-md-0 main-post">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h3 class="mb-3 card-title">Qui, necessitatibus, est</h3>
                                <div class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque,
                                    nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero
                                    voluptate voluptatibus possimus, veniam magni quis! Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta,
                                    a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam
                                    magni quis! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid
                                    atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero
                                    voluptate voluptatibus possimus, veniam magni quis! Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit.
                                    <img src="{{ asset('img/about-bg.jpg') }}" alt="featured-img" class="img-fluid">
                                    Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita
                                    corporis animi vero voluptate voluptatibus possimus, veniam magni quis! Lorem ipsum
                                    dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum
                                    ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus
                                    possimus, veniam magni quis!
                                    <img src="{{ asset('img/home-bg.jpg') }}" alt="featured-img" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 other-post">
                        <div class="card mb-3 wrap">
                            <h4 class="card-title">Berita Lainnya</h4>
                            <form action="">
                                <div class="form-search input-group">
                                    <input type="text" name="search" id="" class="form-control" placeholder="Cari Berita">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-primary btn-search">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="card other-post-item mt-3">
                                <a href="">
                                    <img src="{{ asset('img/post-sample-image.jpg') }}" alt="featured-img" class="card-img-top">
                                    <div class="card-body">
                                        <span class="card-title">Aliquet curabitur lectus euismod et pharetra enim
                                            molestie</span>
                                    </div>
                                </a>
                            </div>
                            <div class="card other-post-item mt-3">
                                <a href="">
                                    <img src="{{ asset('img/home-bg.jpg') }}" alt="featured-img" class="card-img-top">
                                    <div class="card-body">
                                        <span class="card-title">Aliquet curabitur lectus euismod et pharetra enim
                                            molestie</span>
                                    </div>
                                </a>
                            </div>
                            <div class="card other-post-item mt-3">
                                <a href="">
                                    <img src="{{ asset('img/about-bg.jpg') }}" alt="featured-img" class="card-img-top">
                                    <div class="card-body">
                                        <span class="card-title">Aliquet curabitur lectus euismod et pharetra enim
                                            molestie</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="card p-3 cat">
                            <h4 class="card-title">Kategori</h4>
                            <ul class="mb-0 list-unstyled">
                                <li>
                                    <a href="posts.html" class="btn btn-link">Berita</a>
                                </li>
                                <li>
                                    <a href="" class="btn btn-link">Pengumuman</a>
                                </li>
                                <li>
                                    <a href="" class="btn btn-link">Agenda</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
