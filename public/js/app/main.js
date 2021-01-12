$(document).ready(function() {
    if (!($('.navbar').hasClass('fixed-solid'))) {
        if ($(window).scrollTop() > 310)
            $('.navbar').addClass('fixed-solid');
        $(window).scroll(function() {
            if ($(this).scrollTop() > 310)
                $('.navbar').addClass('fixed-solid');
            else
                $('.navbar').removeClass('fixed-solid');
        })
    }
})