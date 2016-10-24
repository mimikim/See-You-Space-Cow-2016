var mk_send_email = mk_send_email || (function() {

    function validate_email(emailAddress) {
        var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
        return pattern.test(emailAddress);
    }

    function send_contact_email( email_message, nonce ) {
        var  ajax_loader = $('.ajax-loader');
        $('#contact-form').css('display', 'none');
        $(ajax_loader).addClass('show');

        $.ajax({
            type : 'GET',
            url : ajax.ajax_url,
            data : {
                'action' : 'mk_contact_email',
                'email_message' : email_message,
                'nonce' : nonce
            },
            success : function(response) {
                //console.log( response );
                canvas_rocketship.blast_off();
                $(ajax_loader).removeClass('show');
                $('.contact-form-header').html('<h2>Thank you for your submission!</h2>I will respond soon!');
            },
            error : function(errorThrown) {
                console.log( errorThrown );
            }
        });
    }

    function init() {
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
    }

    return {
        init : init
    };
})();