var mk_analytics = mk_analytics || (function() {
    function init(){
        $('.ga-tracking').on('click', function() {
            ga('send', {
                hitType: 'event',
                eventCategory: $(this).data('event-category'),
                eventAction: $(this).data('event-action'),
                eventLabel: $(this).data('event-label')
            });
        });
    }

    return {
        init : init
    };
})();