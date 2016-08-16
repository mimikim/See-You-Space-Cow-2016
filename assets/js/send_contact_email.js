function send_contact_email() {

    $.ajax({

        type : 'GET',

        url : ajax.ajax_url,

        data : {
            'action' : 'mk_contact_email'
        },

        success : function(response) {

            //console.log( response );

        },

        error : function(errorThrown) {

            console.log( errorThrown );
        }

    });

}