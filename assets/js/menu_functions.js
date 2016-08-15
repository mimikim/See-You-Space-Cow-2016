function menu_dropdown() {

    // menu toggle
    $('#menu-toggle').on('click', function() {

        $('body').toggleClass('overlay');

        $('header').toggleClass('overlay');

        $('#menu-overlay').toggleClass('overlay');

        $(this).toggleClass('active');
    });
}

function header_scroll() {
    var header = $('header');
    if ($(window).scrollTop() > 100)
        header.addClass('fixed');
    else
        header.removeClass('fixed');
}