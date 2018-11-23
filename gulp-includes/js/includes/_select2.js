/*
 * @file
 *
 * Available variables
 * - gulp_display
 *
 */

(function ($) {
    'use strict';

    $(document).ready(function () {
        _select2();
    });

    $(window).on('load resizeend scroll', function () {
    });

    function _select2() {
        var $select = $('select');
        $select.select2();
    }

})(jQuery);
