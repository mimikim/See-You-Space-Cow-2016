var mk_header = mk_header || (function() {

    $ = jQuery;

    var site_url = theme_url.url,
        body = $('body'),
        header = $('header'),
        menu_toggle = $('#menu-toggle'),
        menu_overlay = $('#menu-overlay'),
        splash_title = $('.splash .title');

    function menu_dropdown() {
        menu_toggle.on('click', function() {
            body.toggleClass('overlay');
            header.toggleClass('overlay');
            menu_overlay.toggleClass('overlay');
            $(this).toggleClass('active');
        });
    }

    function fixed_header() {
        if ($(window).scrollTop() > 100) {
            header.addClass('fixed');
        } else {
            header.removeClass('fixed');
        }
    }

    function init() {
        particlesJS.load('particles-js', site_url+'/assets/js/vendor/particles_config.min.json');
        splash_title.fadeIn( 800 );
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