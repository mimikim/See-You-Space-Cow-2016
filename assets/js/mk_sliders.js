var mk_sliders = mk_sliders || (function() {

    $ = jQuery;

    var homepage_slider = $('.homepage-slider'),
        portfolio_slider_nav = $('.portfolio-slider-nav'),
        portfolio_slider_for = $('.portfolio-slider-for');

    function init() {
        if( homepage_slider.length ) {
            homepage_slider.slick({
                dots: true,
                arrows: false,
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3,
                centerMode: true,
                swipeToSlide: true,
                autoplay: true,
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 680,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            centerMode: false
                        }
                    }
                ]
            });
        }

        if( portfolio_slider_nav.length ) {
            portfolio_slider_for.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.portfolio-slider-nav',
                swipeToSlide: true
            }).click(function() {
                portfolio_slider_for.slick('slickGoTo', parseInt(portfolio_slider_for.slick('slickCurrentSlide'))+1);
                portfolio_slider_nav.slick('slickGoTo', parseInt(portfolio_slider_nav.slick('slickCurrentSlide'))+1);
            });
            $('.portfolio-slider-nav').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: '.portfolio-slider-for',
                dots: true,
                focusOnSelect: true,
                infinite: true,
                swipeToSlide: true,
                responsive: [
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false
                        }
                    }
                ]
            });
        }
    }

    return {
        init: init
    };
})();