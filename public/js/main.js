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

    $('.read-more-button').on('click', function() {
        let data = 'target-project';
        if($(this).data(data)) {
            $('html body').addClass("overflow-hidden");
            $('.overlay').removeClass('hidden')

            let destination = $('.project-' + $(this).data(data));
            destination.removeClass('hidden').delay(500).addClass('animate__animated animate__zoomIn animate__faster')
        }
    });

    $('.submit-contact').on('submit', function(e)  {
        e.preventDefault();
        $('.submit-contact-button span:first-child').removeClass('hidden');
        $('.submit-button-text').text('Verwerken');
    });

    $('.close-project').on('click', function() {
        let data = 'target-project';
        if($(this).data(data)) {
            let destination = $('.project-' + $(this).data(data));
            destination.removeClass('animate__animated animate__zoomIn animate__faster').addClass("animate__animated animate__faster animate__zoomOut")
            setTimeout(function () {
                destination.addClass("hidden")
                destination.removeClass("animate__animated animate__faster animate__zoomOut")
                $('.overlay').delay(300).addClass('hidden')
            }, 300)
            $('html body').removeClass("overflow-hidden");
        }
    });


});
