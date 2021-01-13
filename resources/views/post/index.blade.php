<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <title>Tes LFM</title>
</head>

<body>
    <div class="container">
        @foreach ($posts as $item)
            <h3>{{ $item->title }}</h3>
            {!! $item->desc !!}
        @endforeach
        <br><br>
        <form action="{{ route('post.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Judul Artikel">
            </div>
            <div class="form-group">
                <label for="desc">Deskripsi</label>
                <textarea class="form-control" name="desc" id="desc" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
        CKEDITOR.replace('desc', options);
    </script>
</body>

</html>
