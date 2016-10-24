var mk_header = mk_header || (function() {

    var site_url = theme_url.url;

    function menu_dropdown() {
        $('#menu-toggle').on('click', function() {
            $('body').toggleClass('overlay');
            $('header').toggleClass('overlay');
            $('#menu-overlay').toggleClass('overlay');
            $(this).toggleClass('active');
        });
    }

    function fixed_header() {
        var header = $('header');
        if ($(window).scrollTop() > 100) {
            header.addClass('fixed');
        } else {
            header.removeClass('fixed');
        }
    }

    function init() {
        particlesJS.load('particles-js', site_url+'/assets/js/vendor/particles_config.min.json');
        $( ".splash .title" ).fadeIn( 800 );
        menu_dropdown();
        fixed_header();

        $(window).scroll(function(){
            fixed_header();
        });
    }

    return {
        init : init
    };
})();