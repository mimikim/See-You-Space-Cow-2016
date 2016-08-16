jQuery(document).ready(function(){

    $ = jQuery;

    menu_dropdown();

    $(window).scroll(header_scroll);
    header_scroll();

    // homepage
    $( ".splash .title" ).fadeIn( 800 );

    load_cow_butt();

    // create rocketship
    create_rocketship();

    $('.rocket-toggle').on('click', function() {
        blast_off();
    });


    $('.homepage-slider').slick({
        dots: true,
        arrows: false,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        centerMode: true,
        swipeToSlide: true,
        autoplay: true,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 680,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: false
                }
            }
        ]
    });

    $('.portfolio-slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.portfolio-slider-nav',
        swipeToSlide: true
    }).click(function() {
        $('.portfolio-slider-for').slick('slickGoTo', parseInt($('.portfolio-slider-for').slick('slickCurrentSlide'))+1);
        $('.portfolio-slider-nav').slick('slickGoTo', parseInt($('.portfolio-slider-nav').slick('slickCurrentSlide'))+1);
    });

    $('.portfolio-slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.portfolio-slider-for',
        dots: true,
        focusOnSelect: true,
        infinite: true,
        swipeToSlide: true,
        responsive: [
            {
                breakpoint: 480,
                settings: {
                    arrows: false
                }
            }
        ]
    });

    var category_array = [];
    $('.category-filter').on('click', function() {

        var selected_category = $(this).data('category'),
            post_type = $(this).parent().data('post-type');

        // if clicked again, remove from array
        if( $(this).hasClass('active') ) {

            $(this).removeClass('active');

            var index = category_array.indexOf(selected_category);

            if ( index > -1 ) {
                category_array.splice(index, 1);
            }

        } else {

            $(this).addClass('active');

            category_array.push(selected_category);
        }

        category_filtering( post_type, category_array );
    });


    // send contact email
    $('#contact-form').on('submit', function( event ) {

        event.preventDefault();

        var input   = $(this).find('input, textarea'),
            nonce   = $(this).find('.btn-submit').data('nonce');

        var name    = $('#contact-name').val(),
            email   = $('#contact-email').val(),
            message = $('#contact-message').val();

        var email_message = {
            'name'      : name,
            'email'     : email,
            'message'   : message
        };

        $(input).each(function() {

            if( $(this).val().length === 0 ) {

                $(this).addClass('error');

            } else {

                $(this).removeClass('error');
            }
        });

        if ( $(input).hasClass('error') ) {

            $(this).find('.error-message').html('Please fill out all marked fields!');

        } else if( !validate_email(email) ) {

            $(this).find('.error-message').html('Please enter a valid email address!');

        } else {

            $(this).find('.error-message').empty();

            /*send_contact_email( email_message, nonce );*/
        }

    });


});