$(document).ready(function() {
    $('#postTable').DataTable();

    $('.form-control').keyup(function() {
        $(this).removeClass('is-invalid');
    })

    function successRedirect(res) {
        const redirect = function() {
            window.location.href = res;
        }
        $(document).mousedown(redirect).keypress(redirect);
    }

    function errorRedirect() {
        const redirect = function() {
            $('.swal2-container').modal('hide');
        }
        $(document).mousedown(redirect).keypress(redirect);
    }

    $('#create-post').submit(function(e) {
        e.preventDefault();
        $('.invalid-feedback').remove();
        // ckeditor
        $('.invalid-cke').remove();
        $('#cke_desc').css('border-color', '');
        $('#desc').val(CKEDITOR.instances.desc.getData());

        $.ajax({
            url: $(this).attr('action'),
            method: $(this).attr('method'),
            data: $(this).serialize(),
            success: function(res) {
                Swal.fire(
                    'Sukses!',
                    'Berhasil menambahkan berita.',
                    'success'
                );
                successRedirect(res);
            },
            error: function(err) {
                Swal.fire(
                    'Error!',
                    'Gagal menambahkan berita.',
                    'error'
                );
                errorRedirect();
                const res = err.responseJSON.errors;
                $.each(res, function(key, val) {
                    if (key == 'desc') // ckeditor
                        $('#cke_desc').after('<span class="invalid-cke" role="alert"><strong>' + val + '</strong></span>').css('border-color', '#e74a3b');
                    else
                        $('#' + key).addClass('is-invalid').after('<span class="invalid-feedback" role="alert"><strong>' + val + '</strong></span>');
                });
            }
        });
    });

    $('.btn-detail').click(function(e) {
        e.preventDefault();
        $.ajax({
            url: $(this).attr('href'),
            success: function(res) {
                $('#detailModal').modal('show');
                $('.modal-detail').html(res);
            },
            error: function() {
                Swal.fire(
                    'Error!',
                    'Berita tidak ditemukan.',
                    'error'
                );
            }
        })
    })
});