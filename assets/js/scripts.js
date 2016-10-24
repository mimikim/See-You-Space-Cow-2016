jQuery(document).ready(function(){

    $ = jQuery;

    canvas_cow.init();
    canvas_rocketship.init();

    mk_analytics.init();
    mk_header.init();
    mk_sliders.init();
    mk_send_email.init();

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


});