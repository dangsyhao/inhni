/* Global variables and functions */
var inhni = (function ($, window, undefined) {
	'use strict';
	var $win = $(window);

	/*-----------------------------------------------------*/
	/*---------------   closeMenuMobile  ------------------*/
	/*-----------------------------------------------------*/

	function _closeMenuMobile() {
		var menu_mobile = $('#menu_mobile');
		if (menu_mobile.length) {
			menu_mobile.find('li.open').removeClass('open');
		}
		$('body').removeClass('menu-open');
	}

	/*-----------------------------------------------------*/
	/*------------   detectNewHtmlElements  ---------------*/
	/*-----------------------------------------------------*/

	function _detectNewHtmlElements(options) {
		if (Modernizr.mutationobserver) {
			var observer = new MutationObserver(function (mutations) {
				mutations.forEach(function (mutation) {
					if (mutation.addedNodes) {
						$.each(options, function (key, item) {
							if ($(mutation.addedNodes[0]).is(item.selector)) {
								item.callback($(mutation.addedNodes[0]));
							} else if ($(mutation.addedNodes[0]).find(item.selector).length) {
								$(mutation.addedNodes[0]).find(item.selector).each(function () {
									item.callback($(this));
								});
							}
						});
					}
				});
			});
			var config = {
				attributes : false,
				childList : true,
				subtree : true,
				characterData : false
			};
			observer.observe($('body')[0], config);
		} else {
			$(document).on('DOMNodeInserted', function (e) {
				var target = $(e.target);
				$.each(options, function (key, item) {
					if (target.is(item.selector)) {
						item.callback(target);
					} else if (target.find(item.selector).length) {
						target.find(item.selector).each(function () {
							item.callback($(this));
						});
					}
				});
			});
		}
	}


	/*-----------------------------------------------------*/
	/*---------------   Filter bar search  ----------------*/
	/*-----------------------------------------------------*/

	function _inputHasReset() {
		$(".hasReset input").on('keyup input',function(){
			if ($(this).val()) {
				$(this).closest('.hasReset').addClass("show");
			} else {
				$(this).closest('.hasReset').removeClass("show");
			}
		});

		$('.hasReset i').click(function(){
			$(this).siblings('input').val('').focus();
			$(this).closest('.hasReset').removeClass("show");
		});
	}

	/*-----------------------------------------------------*/
	/*-------------------   Back to top  ------------------*/
	/*-----------------------------------------------------*/

	function _backToTop() {
		/*Scroll to top when arrow up clicked*/
		var $winH = $win.height();
		$(window).scroll(function() {
			var height = $win.scrollTop();
			if (height > $winH) {
				$('#backTop').fadeIn();
			} else {
				$('#backTop').fadeOut();
			}
		});

		$("#backTop").click(function(event) {
			event.preventDefault();
			$("html, body").animate({ scrollTop: 0 }, "slow");
			return false;
		});
	}

	return {
		init: function () {
			_inputHasReset();
			_backToTop();
		},
		closeMenuMobile: _closeMenuMobile,
		detectNewHtmlElements: _detectNewHtmlElements
	};

}(jQuery, window));

jQuery(document).ready(function () {
	inhni.init();
});
