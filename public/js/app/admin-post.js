$(document).ready(function () {
    $('.form-control').keyup(function () { $(this).removeClass('is-invalid'); })

    function successRedirect(res) {
        const redirect = function () { window.location.href = res; }
        $(document).mousedown(redirect).keypress(redirect);
    }

    function errorRedirect() {
        const redirect = function () { $('.swal2-container').modal('hide'); }
        $(document).mousedown(redirect).keypress(redirect);
    }

    $('#create-post').submit(function (e) {
        e.preventDefault();
        $('.invalid-feedback').remove();
        // ckeditor
        $('.invalid-cke').remove();
        $('#cke_desc').css('border-color', '');
        $('#desc').val(CKEDITOR.instances.desc.getData());
        const inf = $(this).serializeArray()[0].value == 'put' ? 'mengubah' : 'menambahkan';

        $.ajax({
            url: $(this).attr('action'),
            method: $(this).attr('method'),
            data: $(this).serialize(),
            success: function (res) {
                Swal.fire('Sukses!', 'Berhasil ' + inf + ' ' + $('#create-post').data('type') + '.', 'success');
                successRedirect(res);
            },
            error: function (err) {
                Swal.fire('Error!', 'Gagal ' + inf + ' ' + $('#create-post').data('type') + '.', 'error');
                errorRedirect();
                const res = err.responseJSON.errors;
                $.each(res, function (key, val) {
                    if (key == 'desc') // ckeditor
                        $('#cke_desc').after('<span class="invalid-cke" role="alert"><strong>' + val + '</strong></span>').css('border-color', '#e74a3b');
                    else
                        $('#' + key).addClass('is-invalid').after('<span class="invalid-feedback" role="alert"><strong>' + val + '</strong></span>');
                });
            }
        });
    });

    $('.btn-detail').click(function (e) {
        e.preventDefault();
        $.ajax({
            url: $(this).attr('href'),
            success: function (res) {
                $('#detailModal').modal('show');
                $('.modal-detail').html(res);
                $('#detailModal .modal-content .modal-body a').attr('target', '_blank')
            },
            error: function () {
                Swal.fire('Error!', 'Berita tidak ditemukan.', 'error');
            }
        })
    });

    $('.btn-delete').submit(function (e) {
        e.preventDefault();
        const type = $(this).data('type');
        const upperType = $(this).data('type')[0].toUpperCase() + $(this).data('type').slice(1);
        Swal.fire({
            title: 'Hapus ' + $(this).data('type') + '?',
            text: upperType + ' akan dihapus permanen!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    type: 'delete',
                    success: function (res) {
                        Swal.fire('Berhasil!', upperType + ' berhasil dihapus.', 'success');
                        successRedirect(res);
                    },
                    error: function () {
                        Swal.fire('Error!', 'Gagal menghapus ' + type + '.', 'error');
                        errorRedirect();
                    }
                });
            }
        });
    });
});