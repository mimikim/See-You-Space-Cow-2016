function send_contact_email( email_message, nonce ) {

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
            blast_off();

            $('#contact-form').css('display', 'none');
            $('.contact-form-header').html('<h2>Thank you for your submission!</h2>I will respond soon!');
        },

        error : function(errorThrown) {

            console.log( errorThrown );
        }

    });

}