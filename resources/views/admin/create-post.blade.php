@extends('layouts.admin-app')

@section('title', 'Tambah ' . Str::ucfirst($postType))

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/app/sweetalert2.min.css') }}">
    <style>
        .invalid-cke { font-size: 80%; color: #e74a3b; }
    </style>
@endpush

@section('content')

    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah {{ Str::ucfirst($postType) }}</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('store-post', ['type' => $postType]) }}" method="post" id="create-post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Judul</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Judul {{ Str::ucfirst($postType) }}">
                        </div>
                        <div class="form-group">
                            <label for="desc">Deskripsi {{ Str::ucfirst($postType) }}</label>
                            <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary shadow-md">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/app/admin.js') }}"></script>
    <script src="{{ asset('js/app/sweetalert2.all.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
            language: 'id'
        };
        CKEDITOR.replace('desc', options);
    </script>
@endpush
