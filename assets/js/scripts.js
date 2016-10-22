jQuery(document).ready(function(){

    $ = jQuery;

    var site_url = theme_url.url;

    $('.ga-tracking').on('click', function() {
        ga('send', {
            hitType: 'event',
            eventCategory: $(this).data('event-category'),
            eventAction: $(this).data('event-action'),
            eventLabel: $(this).data('event-label')
        });
    });

    menu_dropdown();

    $(window).scroll(header_scroll);
    header_scroll();

    particlesJS.load('particles-js', site_url+'/assets/js/vendor/particles_config.min.json');

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

    var category_array = [],
        order_by_filter = $('#order-by-selector'),
        show_count_filter = $('#show-count-selector'),
        post_type = $('#index-template').data('post-type');

    var order = $(order_by_filter).find(':selected').data('order'),
        orderby = $(order_by_filter).find(':selected').data('order-by'),
        posts_per_page = $(show_count_filter).find(':selected').data('posts-per-page');

    var sort_array = {
        'order' : order,
        'orderby' : orderby,
        'posts_per_page' : posts_per_page
    };

    $('.category-filter').on('click', function() {

        var selected_category = $(this).data('category');

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

        category_filtering( post_type, sort_array, category_array );
    });

    $(order_by_filter).on('change', function() {
        order = $(this).find(':selected').data('order');
        orderby = $(this).find(':selected').data('order-by');
        sort_array.order = order;
        sort_array.orderby = orderby;
        category_filtering( post_type, sort_array, category_array );
    });

    $(show_count_filter).on('change', function() {
        posts_per_page = $(this).find(':selected').data('posts-per-page');
        sort_array.posts_per_page = posts_per_page;
        category_filtering( post_type, sort_array, category_array );
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
            send_contact_email( email_message, nonce );
        }

    });


});