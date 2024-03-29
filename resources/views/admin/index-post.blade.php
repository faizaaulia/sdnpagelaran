@extends('layouts.admin-app')

@section('title', 'Daftar ' . Str::ucfirst(request()->get('type')))

@push('styles')
    <link href="{{ asset('css/app/jquery.dataTables.min.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar {{ Str::ucfirst(request()->get('type')) }}</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="postTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <td style="width: 5%">No.</td>
                                    <td>Judul</td>
                                    <td style="width: 40%">Deskripsi</td>
                                    <td style="width: 17%">Tanggal Publish</td>
                                    <td style="width: 10%">Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{!! $item->excerpt !!}</td>
                                        <td>{{ $item->formated_date }}</td>
                                        <td class="d-flex flex-column">
                                            <a href="{{ route('detail-post', ['type' => $item->type, 'id' => $item->id]) }}" class="mb-2 btn btn-sm btn-detail btn-primary shadow-sm">Detail</a>
                                            <a href="{{ route('edit-post', ['type' => $item->type, 'id' => $item->id]) }}" class="mb-2 btn btn-sm btn-info shadow-sm">Edit</a>
                                            <form action="{{ route('delete-post', ['type' => $item->type, 'id' => $item->id]) }}" method="post" data-type="{{ $item->type }}" class="btn-delete">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="mb-2 btn btn-sm btn-danger shadow-sm btn-block">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document" style="max-width: 650px">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailModalLabel">Detail {{ Str::ucfirst(request()->get('type')) }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-detail"></div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/app/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/app/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/app/admin-post.min.js') }}"></script>
    <script src="{{ asset('js/app/sweetalert2.all.min.js') }}"></script>
    <script>
        $(document).ready(function() { $('#postTable').DataTable(); })
    </script>
@endpush
