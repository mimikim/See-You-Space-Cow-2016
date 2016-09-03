function category_filtering( post_type, sort_array, category_array ) {

    var archive_results = $('#archive-results'),
        ajax_loader = $('.ajax-loader');

    $(ajax_loader).addClass('show');

    $(archive_results).addClass('hidden').empty();

    $.ajax({

        type : 'GET',

        url : ajax.ajax_url,

        data : {
            'action'         : 'mk_category_filtering',
            'category_array' : category_array,
            'post_type'      : post_type,
            'sort_array'     : sort_array
        },

        success : function(response) {

            //console.log( response );

            $(ajax_loader).removeClass('show');

            $(archive_results).removeClass('hidden').html(response);
        },

        error : function(errorThrown) {

            console.log( errorThrown );
        }
    });
}