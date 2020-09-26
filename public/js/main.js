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

    $('.submit-contact').on('submit', function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.submit-contact-button span:first-child').removeClass('hidden');
        $('.submit-button-text').text('Verwerken');

        $.ajax({
            url: '/message/store',
            type: 'POST',
            data: $(this).serialize(),
            success: function (data) {
                $('.submit-contact-button .button-loader').addClass('hidden');
                $('.submit-contact-button .button-success').removeClass('hidden');
                $('.submit-button-text').text('Verstuurd!');
                $('.submit-contact').trigger("reset");
                setInterval(function () {
                    $('.submit-contact-button .button-success').addClass('hidden');
                    $('.submit-button-text').text('Versturen');
                }, 5000)
            },
            error: function (data) {
                alert("fail")
            }
        });
    });
    
    $('.language-filter-button').on('click', function() {
        let card = $('.project-card');
        let language = $(this).data('language');

        card.show();
        if(language === 'all') {
            card.show();
        } else {
            card.each(function () {
                if(!$(this).hasClass(language)) {
                    $(this).hide();
                }
            });
        }
    });
});
