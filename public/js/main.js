$(document).ready(function() {

    let card = $('.project-card');

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

    // function openProjectModal($project) {
    //     $('html body').addClass("overflow-hidden");
    //     $('.overlay.project-overlay').removeClass('hidden')
    //     let destination = $('.project-' + $project);
    //     destination.removeClass('hidden').delay(500).addClass('animate__animated animate__zoomIn animate__faster active-modal')
    // }

    // $('.read-more-button').on('click', function() {
    //     openProjectModal($(this).data('target-project'));
    // });

    $(document).on('click', ".close-project", function(e) {
        e.stopPropagation();
        closeProjectModal()
    });

    // function closeProjectModal() {
    //     let destination = $(".active-modal");
    //     destination.removeClass('animate__animated animate__zoomIn animate__faster').addClass("animate__animated animate__faster animate__zoomOut");
    //     setTimeout(function () {
    //         destination.addClass("hidden");
    //         destination.removeClass("animate__animated animate__faster animate__zoomOut");
    //         $('.overlay.project-overlay').delay(300).addClass('hidden')
    //     }, 300)
    //     $('html body').removeClass("overflow-hidden");
    // }

    $('#nav-collapse').on('click', function () {
        $('#nav-content').slideToggle();
    })

    // $('.language-filter-button').on('click', function() {
    //     if($(this).data('language'))
    //     showFilteredCards($(this).data('language'));
    // });
    //
    // $('.language-filter-dropdown').change(function () {
    //     showFilteredCards($('.language-filter-dropdown option:selected').val());
    // });
    //
    // function showFilteredCards(language) {
    //     card.show();
    //     if(language === 'all') {
    //         card.show();
    //     } else {
    //         card.each(function () {
    //             if(!$(this).hasClass(language)) {
    //                 $(this).hide();
    //             }
    //         });
    //     }
    // }

    $('#accept-cookies').on('submit', function (e) {
        e.preventDefault();
        $('.cookie-popup').addClass('animate__animated animate__fadeOutDown animate__faster')
    });
});
