$(document).ready(function () {
    
    if ($(window).width() <= 768) {
        $('#accordionSidebar').addClass('toggled')
        $('.collapse').removeClass('show')
    }

    $('#btn-profile').click(function (e) {
        e.preventDefault();
        $('input[type=password]').val('')
        $.ajax({
            url: $(this).attr('href'),
            type: 'get',
            success: function (res) {
                $('#editProfileModal').modal('show');
                $('#username').val(res.username);
            }
        })
    })

    $('.update-profile-form').submit(function (e) {
        e.preventDefault();
        $('.invalid-feedback').remove();
        $.ajax({
            url: $(this).attr('action'),
            method: $(this).attr('method'),
            data: $(this).serialize(),
            success: function (res) {
                Swal.fire('Sukses!', 'Berhasil mengubah profil!', 'success');
                $('#editProfileModal').modal('hide');
                const redirect = function () {
                    $('.swal2-container').modal('hide');
                }
                $(document).mousedown(redirect).keypress(redirect);
            },
            error: function (err) {
                res = err.responseJSON.errors
                $.each(res, function (key, val) {
                    $('#' + key).addClass('is-invalid').after('<span class="invalid-feedback" role="alert"><strong>' + val + '</strong></span>');
                })
            }
        })
    })
})

function showPassword(name) {
    const pass = name == 'real' ? 'password' : 'confirm-password'
    const passInput = $('#'+pass)
    if (passInput.attr('type') == 'password') passInput.attr('type', 'text')
    else passInput.attr('type', 'password')
}