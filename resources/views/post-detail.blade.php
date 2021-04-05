@extends('layouts.public-app')

@section('title', $post->title)

@section('content')
<main role="main" class="pt-3">
    <div class="container wrapper py-5">
        <div class="row posts mb-5 mt-2">
            <div class="col-12 col-lg-8">
                <div class="card shadow posts-card">
                    <div class="card-detail detail-post">
                        <h2 class="mb-3">{{ $post->title }}</h2>
                        <div class="row published-info">
                            <div class="col published-by">
                                <p class="m-0 text-muted"><i class="fas fa-calendar text-gray-300 mr-1"></i>{{ $post->formated_date }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="card-text">
                            {!! $post->desc !!}
                        </div>
                    </div>
                </div>
            </div>
            @if (count($other) != 0)
            <div class="col-12 col-lg-4 others">
                <div class="card shadow py-3">
                    <h4 class="text-center mb-0">Informasi Lainnya</h4>
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

@push('scripts')
<script>
    $(document).ready(function() { $('.card-detail .card-text a').attr('target', '_blank') })
</script>
@endpush