@extends('layouts.public-app')

@section('title', 'Judul Berita')

@section('content')
<main role="main" class="container pt-3">
    <div class="container wrapper py-5">
        <div class="row posts mb-5">
            <div class="col-12 col-lg-8">
                <div class="card shadow posts-card">
                    <div class="card-detail">
                        <h2 class="mb-3">{{ $post->title }}</h2>
                        <div class="row published-info">
                            <div class="col published-by">
                                <h6>Dipublikasikan oleh</h6>
                                {{-- CREATED BY USER --}}
                                <p class="m-0">Admin</p>
                            </div>
                            <div class="col">
                                <h6>Tanggal</h6>
                                <p class="m-0">{{ $post->updated_at }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="card-text">
                            {!! $post->desc !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 others">
                <div class="card shadow py-3">
                    <h4 class="text-center mb-0">Informasi Lainnya</h4>
                    <div>
                        <div class="row d-flex flex-row card-detail other-item pb-0">
                            <hr>
                            <div class="col-4 pr-0 my-auto">
                                <img src="{{ asset('img/about-bg.jpg') }}" alt="" class="w-100 h-75">
                            </div>
                            <div class="col-8">
                                <a href="#" class="other-card-title">Lorem ipsum dolor sit amet consectetur adipisicing</a> <br>
                                <p class="other-detail mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime similique animi nisi enim, illo, quos ipsa ad quae accusantium qui odit. A accusamus provident laudantium error, quos dignissimos inventore vitae!</p>
                                <small class="text-muted">22 Jan 2021</small>
                            </div>
                        </div>
                        <div class="row d-flex flex-row card-detail other-item pb-0">
                            <div class="col-4 pr-0 my-auto">
                                <img src="{{ asset('img/about-bg.jpg') }}" alt="" class="w-100 h-75">
                            </div>
                            <div class="col-8">
                                <a href="#" class="other-card-title">Lorem ipsum dolor sit amet consectetur adipisicing</a> <br>
                                <p class="other-detail mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime similique animi nisi enim, illo, quos ipsa ad quae accusantium qui odit. A accusamus provident laudantium error, quos dignissimos inventore vitae!</p>
                                <small class="text-muted">22 Jan 2021</small>
                            </div>
                        <div class="row d-flex flex-row card-detail other-item pb-0">
                            <hr>
                            <div class="col-4 pr-0 my-auto">
                                <img src="{{ asset('img/about-bg.jpg') }}" alt="" class="w-100 h-75">
                            </div>
                            <div class="col-8">
                                <a href="#" class="other-card-title">Lorem ipsum dolor sit amet consectetur adipisicing</a> <br>
                                <p class="other-detail mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime similique animi nisi enim, illo, quos ipsa ad quae accusantium qui odit. A accusamus provident laudantium error, quos dignissimos inventore vitae!</p>
                                <small class="text-muted">22 Jan 2021</small>
                            </div>
                        </div>
                        <div class="row d-flex flex-row card-detail other-item pb-0">
                            <div class="col-4 pr-0 my-auto">
                                <img src="{{ asset('img/about-bg.jpg') }}" alt="" class="w-100 h-75">
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
