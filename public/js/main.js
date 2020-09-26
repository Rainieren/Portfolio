$(document).ready(function() {
    $('.cookie-popup').removeClass('hidden').addClass('animate__animated animate__fadeInUp');
    $('.nav-slide').on('click', function() {
        let data = 'nav-destination';
        if($(this).data(data)) {
            let destination = $('.section-' + $(this).data(data));
            $('html, body').animate({
                scrollTop: destination.offset().top
            }, 2000);
        }
    });
    function openProjectModal($project) {
        $('html body').addClass("overflow-hidden");
        $('.overlay.project-overlay').removeClass('hidden')
        let destination = $('.project-' + $project);
        destination.removeClass('hidden').delay(500).addClass('animate__animated animate__zoomIn animate__faster active-modal')
    }

    $('.read-more-button').on('click', function() {
        openProjectModal($(this).data('target-project'));
    });

    function closeProjectModal() {
        let destination = $(".active-modal");
        destination.removeClass('animate__animated animate__zoomIn animate__faster').addClass("animate__animated animate__faster animate__zoomOut");
        setTimeout(function () {
            destination.addClass("hidden");
            destination.removeClass("animate__animated animate__faster animate__zoomOut");
            $('.overlay.project-overlay').delay(300).addClass('hidden')
        }, 300)
        $('html body').removeClass("overflow-hidden");
    }

    $(document).on('click', ".close-project", function(e) {
        e.stopPropagation();
        closeProjectModal()
    });

    $('#nav-collapse').on('click', function () {
        $('#nav-content').slideToggle();
    })

    $('.submit-contact').on('submit', function(e)  {
        e.preventDefault();
        $('.submit-contact-button span:first-child').removeClass('hidden');
        $('.submit-button-text').text('Verwerken');
        setTimeout(function () {

        }, 1500)


    });

});
