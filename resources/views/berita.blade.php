@extends('layouts.public-app')

@section('title', 'Berita')

@section('content')
    <main>
        <section class="breadcrumb-bg"></section>
        <section class="content">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><span>Home</span></a></li>
                    <li class="breadcrumb-item active"><span>Berita</span></li>
                </ol>
                <div class="row mx-0">
                    <div class="col-md-8 pb-3 pb-md-0 main-post">
                        <h3 class="mb-3">Berita Terbaru</h3>
                        <div class="card mb-3">
                            <img src="{{ asset('img/home-bg.jpg') }}" alt="featured-img" class="card-img-top">
                            <div class="card-body">
                                <a href="post-detail.html" class="title-link">
                                    <h4 class="card-title">Judul Berita</h4>
                                </a>
                                <div class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque,
                                    nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero
                                    voluptate voluptatibus possimus, veniam magni quis!
                                </div>
                                <a class="btn btn-link pl-0 pb-0" href="post-detail.html">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <img src="{{ asset('img/post-sample-image.jpg') }}" alt="featured-img" class="card-img-top">
                            <div class="card-body">
                                <a href="post-detail.html" class="title-link">
                                    <h4 class="card-title">Judul Berita</h4>
                                </a>
                                <div class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque,
                                    nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero
                                    voluptate voluptatibus possimus, veniam magni quis!
                                </div>
                                <a class="btn btn-link pl-0 pb-0" href="post-detail.html">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <img src="{{ asset('img/home-bg.jpg') }}" alt="featured-img" class="card-img-top">
                            <div class="card-body">
                                <a href="post-detail.html" class="title-link">
                                    <h4 class="card-title">Judul Berita</h4>
                                </a>
                                <div class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque,
                                    nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero
                                    voluptate voluptatibus possimus, veniam magni quis!
                                </div>
                                <a class="btn btn-link pl-0 pb-0" href="post-detail.html">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <img src="{{ asset('img/post-sample-image.jpg') }}" alt="featured-img" class="card-img-top">
                            <div class="card-body">
                                <a href="post-detail.html" class="title-link">
                                    <h4 class="card-title">Judul Berita</h4>
                                </a>
                                <div class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque,
                                    nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero
                                    voluptate voluptatibus possimus, veniam magni quis!
                                </div>
                                <a class="btn btn-link pl-0 pb-0" href="post-detail.html">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <img src="{{ asset('/img/about-bg.jpg') }}" alt="featured-img" class="card-img-top">
                            <div class="card-body">
                                <a href="post-detail.html" class="title-link">
                                    <h4 class="card-title">Judul Berita</h4>
                                </a>
                                <div class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque,
                                    nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero
                                    voluptate voluptatibus possimus, veniam magni quis!
                                </div>
                                <a class="btn btn-link pl-0 pb-0" href="post-detail.html">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <nav class="d-flex justify-content-center mt-4">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span
                                            aria-hidden="true">«</span></a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span
                                            aria-hidden="true">»</span></a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-4 other-post">
                        <div class="card p-3 mb-3 mt-md-5">
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
