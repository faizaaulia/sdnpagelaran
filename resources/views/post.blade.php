@extends('layouts.public-app')

@section('title', Str::ucfirst(Request::segment(1)) . ' ' . Request::query('q'))

@section('content')
<main role="main" class="pt-3">
    <div class="container wrapper">
        <nav aria-label="breadcrumb bg-none">
            <ol class="breadcrumb p-0 my-3">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ Str::ucfirst(Request::segment(1)) }}</li>
            </ol>
        </nav>
        @if (Request::query('q'))
        <h3 class="mb-3">Hasil pencarian "{{ Request::query('q') }}"</h3>
        @endif
        <div class="row posts mb-5">
            <div class="col-12 col-lg-8">
                @if (!$found)
                    <p>Pencarian tidak ditemukan</p>
                    <hr>
                @endif
                @forelse ($posts as $post)
                <div class="card shadow posts-card">
                    @if ($post->thumbnail !== '-')
                    <a href="{{ route('post.detail', ['type' => $post->type, 'slug' => $post->slug]) }}">
                        <div class="card-image">
                            <img src="{{ asset($post->thumbnail) }}" alt="{{ $post->title }}" class="card-img shadow-sm img-posts">
                        </div>
                    </a>
                    @endif
                    <div class="card-detail">
                        <a href ="{{ route('post.detail', ['type' => $post->type, 'slug' => $post->slug]) }}" class="clearfix card-title">{{ $post->title }}</a>
                        <small style="font-weight: 500" class="text-muted"><i class="fas fa-calendar text-gray-300 my-2"></i> {{ $post->formated_date }} </small>
                        <div class="card-text my-2">
                            {!! $post->excerpt !!}
                        </div>
                        <hr class="my-2">
                        <a href="{{ route('post.detail', ['type' => $post->type, 'slug' => $post->slug]) }}" class="btn btn-sm btn-link btn-read-more pl-0 py-0">Baca Selengkapnya →</a>
                    </div>
                </div>
                @empty
                @if (Request::segment(1) != 'cari')
                <p class="text-center py-5">Belum ada {{ Request::segment(1) }}</p>
                @endif
                @endforelse

                @if ($posts)
                <div class="page-links">
                    {{ $posts->appends(request()->query())->links() }}
                </div>
                @endif
            </div>
            @if (count($other) > 0 && $found)
            <div class="col-12 col-lg-4 others">
                <div class="card shadow py-3">
                    <h4 class="text-center mb-1 hero-title">Informasi Lainnya</h4>
                    @foreach ($other as $item)
                    <hr class="my-2 {{ $loop->first ? '' : 'divider' }}">
                    <div class="row d-flex flex-row card-detail other-item py-2">
                        @if ($item->thumbnail !== '-')
                        <div class="col-4 pr-0">
                            <a href="{{ route('post.detail', ['type' => $item->type, 'slug' => $item->slug]) }}">
                                <img src="{{ asset($item->thumbnail) }}" alt="{{ $item->title }}" class="w-100">
                            </a>
                        </div>
                        @endif
                        <div class="col{{ $item->thumbnail == '-' ? '' : '-8' }}">
                            <a href="{{ route('post.detail', ['type' => $item->type, 'slug' => $item->slug]) }}" class="other-card-title">
                                <p class="mb-0">{{ $item->title }}</p>
                            </a>
                            <small class="text-muted">{{ $item->formated_date }}</small>
                            <p class="other-detail">{{ $item->excerpt }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
</main>
@endsection
