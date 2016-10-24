var mk_category_filters = mk_category_filters || (function() {

    $ = jQuery;

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

    function init() {
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
    }

    return {
        init: init
    };
})();
