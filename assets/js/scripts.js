jQuery(document).ready(function(){

    $ = jQuery;

    menu_dropdown();

    function fixDiv() {
        var header = $('header');
        if ($(window).scrollTop() > 100)
            header.addClass('fixed');
        else
            header.removeClass('fixed');
    }
    $(window).scroll(fixDiv);
    fixDiv();

    // homepage
    $( ".splash .title" ).fadeIn( 800 );

    load_cow_butt();

    // create rocketship
    create_rocketship();

    var launch_button = $('.rocket-toggle');

    $(launch_button).on('click', function() {

        blast_off();
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
