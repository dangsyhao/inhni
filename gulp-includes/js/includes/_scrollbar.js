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
	    _scrollBar();
		//_scrollBarAutocomplete();
    });

    $(window).on('load resizeend scroll', function () {
    });

	function _scrollBar() {
		var $scrollbar = $(".scrollbar-inner");
		$scrollbar.each(function () {
			$scrollbar.scrollbar();
		});
	}
	function _scrollBarAutocomplete() {
		var $scrollBarAutocomplete = $(".ui-autocomplete");
		$scrollBarAutocomplete.each(function () {
			$scrollBarAutocomplete.scrollbar();
		});
	}
	//jQuery('.ui-autocomplete').scrollbar();

})(jQuery);
