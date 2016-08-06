function menu_dropdown() {

    // menu toggle
    $('#menu-toggle').on('click', function() {

        $('body').toggleClass('overlay');

        $('header').toggleClass('overlay');

        $('#menu-overlay').toggleClass('overlay');

        $(this).toggleClass('active');
    });


    // adjust font

}