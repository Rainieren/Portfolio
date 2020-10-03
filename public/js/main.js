$(document).ready(function() {

    $('.nav-slide').on('click', function() {
        let data = 'nav-destination';
        if($(this).data(data)) {
            let destination = $('.section-' + $(this).data(data));
            $('html, body').animate({
                scrollTop: destination.offset().top
            }, 2000);
        }
    });

    $('#nav-collapse').on('click', function () {
        $('#nav-content').slideToggle();
    })

    $('#accept-cookies').on('submit', function (e) {
        e.preventDefault();
        $('.cookie-popup').addClass('animate__animated animate__fadeOutDown animate__faster')
    });
});
