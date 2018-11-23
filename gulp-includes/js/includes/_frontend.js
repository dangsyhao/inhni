

(function ($) {
    'use strict';
    $(document).ready(function (){
        $('#read-more-68').readmore({
            speed: 75,
            moreLink: '<div class="btn-read-more"><a class="btn" href="#"><span class="txt">Afficher plus</span></a></div>',
            lessLink: ''
        });
    });
    $(window).on('resizeend', function () {

    });
})(jQuery);