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
    function openProjectModal($project) {
        $('html body').addClass("overflow-hidden");
        $('.overlay').removeClass('hidden')
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
            $('.overlay').delay(300).addClass('hidden')
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
            success: function(data){
                $('.submit-contact-button .button-loader').addClass('hidden');
                $('.submit-contact-button .button-success').removeClass('hidden');
                $('.submit-button-text').text('Verstuurd!');
                setInterval(function() {
                    $('.submit-contact-button .button-success').addClass('hidden');
                    $('.submit-button-text').text('Versturen');
                },10000)
            }
        });
    });
});
