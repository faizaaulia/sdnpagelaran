@extends('layouts.public-app')

@section('title', Str::ucfirst(Request::segment(1)) . ' | ' . config('app.name'))

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
                @if ($cari)
                    <h3 class="mb-3">Hasil pencarian "{{ $cari }}"</h3>
                @endif
                @forelse ($posts as $post)
                <div class="card shadow posts-card">
                    <a href="{{ route('post.detail', ['type' => $post->type, 'slug' => $post->slug]) }}">
                        <div class="card-image">
                            <img src="{{ asset($post->thumbnail) }}" alt="{{ $post->title }}" class="card-img shadow-sm img-posts">
                        </div>
                    </a>
                    <div class="card-detail">
                        <a href ="{{ route('post.detail', ['type' => $post->type, 'slug' => $post->slug]) }}" class="clearfix card-title">{{ $post->title }}</a>
                        <small style="font-weight: 500"><i class="fas fa-calendar text-gray-300 my-2"></i> {{ $post->formated_date }} </small>
                        <div class="card-text my-2">
                            {!! $post->excerpt !!}
                        </div>
                        <hr class="my-2">
                        <a href="{{ route('post.detail', ['type' => $post->type, 'slug' => $post->slug]) }}" class="btn btn-sm btn-link btn-read-more pl-0 py-0">Baca Selengkapnya →</a>
                    </div>
                </div>
                @empty
                @if ($cari)
                    Pencarian tidak ditemukan
                @else
                    Belum ada {{ Request::segment(1) }}
                @endif
                @endforelse

                {{ $posts->links() }}
            </div>
            <div class="col-12 col-lg-4 others">
                <div class="card shadow py-3">
                    <h4 class="text-center mb-0 hero-title">Informasi Lainnya</h4>
                    <div>
                        @foreach ($other as $item)
                        <div class="row d-flex flex-row card-detail other-item pb-0">
                            <hr>
                            <div class="col-4 pr-0 my-auto">
                                <a href="{{ route('post.detail', ['type' => $item->type, 'slug' => $item->slug]) }}">
                                    <img src="{{ asset($item->thumbnail) }}" alt="{{ $item->title }}" class="w-100 h-75">
                                </a>
                            </div>
                            <div class="col-8">
                                <a href="{{ route('post.detail', ['type' => $item->type, 'slug' => $item->slug]) }}" class="other-card-title">{{ $item->title }}</a> <br>
                                <p class="other-detail mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime similique animi nisi enim, illo, quos ipsa ad quae accusantium qui odit. A accusamus provident laudantium error, quos dignissimos inventore vitae!</p>
                                <small class="text-muted">{{ $item->formated_date }}</small>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
