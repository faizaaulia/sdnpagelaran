<div class="modal-body">
    <div>
        <h4 class="font-weight-bold">{{ $post->title }}</h4>
        <small>{{ $post->created_at }}</small>
    </div>
    <hr>
    <div>
        {!! $post->desc !!}
    </div>
</div>
<div class="modal-footer d-flex justify-content-between">
    <a href="{{ route('edit-post', ['type' => $type, 'id' => $post->id]) }}" class="btn btn-sm btn-info shadow-sm">Edit {{ Str::ucfirst($type) }}</a>
    <button type="button" class="btn btn-sm btn-secondary shadow-sm" data-dismiss="modal">Tutup</button>
</div>
