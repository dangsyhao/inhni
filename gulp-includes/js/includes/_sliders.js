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
        createSlick();
        inhni.detectNewHtmlElements([
            {
                selector : '.jobs-offers-bloc .jobs, .jobs-zoom-bloc .zooms, .testimonials-bloc .testimonials, .formations-bloc .formations-list',
                callback : function () {
                    createSlick();
                }
            }
        ]);
    });

    $(window).on('resizeend', function () {
        createSlick();
    });

    function createSlick() {
        /* ########################################################################################### */
        /* ----------------- Slider || search-formation-bloc (tablet + mobile) ----------------- */
	    var slider = $('.search-formation-bloc .search-slider');
	    var slide = $('.search-formation-bloc .search-slider .item');
	    if (slide.length > 1) {
		    slider.not('.slick-initialized').slick(
			    {
				    dot: false,
				    arrows: false,
				    autoplaySpeed: 5000,
				    autoplay: true
			    }
		    );
	    }

        /* ########################################################################################### */
        /* ----------------- Slider || banner-block (tablet + mobile) ----------------- */
	    slider = $('.banner-slider .wrap-banner');
	    slide = $('.banner-slider .item');
	    if (slide.length > 1) {
		    slider.not('.slick-initialized').slick(
			    {
				    dot: false,
				    arrows: false,
				    autoplaySpeed: 5000,
				    autoplay: true,
			    }
		    );
	    }

        /* ########################################################################################### */
        /* ----------------- Slider || Bloc jobs offers (tablet + mobile) ----------------- */
        slider = $('.jobs-offers-bloc .jobs');
        slide = $('.jobs-offers-bloc .jobs .job');
        if (slide.length > 1) {
            if (gulp_display.getWidth() <= 1200) {
                slider.not('.slick-initialized').slick(
                    {
                        cssEase : 'ease-in-out',
                        variableWidth : true,
                        swipeToSlide : true,
                        centerMode : true,
                        prevArrow : '<button class="slick-prev slick-arrow"></button>',
                        nextArrow : '<button class="slick-next slick-arrow"></button>'
                    }
                );
            } else {
                slider.filter('.slick-initialized').slick('unslick');
            }
        }
        /* ########################################################################################### */
        /* ----------------- Slider || Bloc jobs zoom (tablet + mobile) ----------------- */
        /* ########################################################################################### */
        slider = $('.jobs-zoom-bloc .zooms');
        slide = $('.jobs-zoom-bloc .zooms .zoom');
        if (slide.length > 1) {
            if (gulp_display.getWidth() <= 1200) {
                slider.not('.slick-initialized').slick(
                    {
                        cssEase : 'ease-in-out',
                        variableWidth : true,
                        swipeToSlide : true,
                        centerMode : true,
                        prevArrow : '<button class="slick-prev slick-arrow"></button>',
                        nextArrow : '<button class="slick-next slick-arrow"></button>'
                    }
                );
            } else {
                slider.filter('.slick-initialized').slick('unslick');
            }
        }
        /* ########################################################################################### */
        /* ----------------- Slider || Bloc testimonials (desktop + tablet + mobile) ----------------- */
        /* ########################################################################################### */
        slider = $('.testimonials-bloc .testimonials');
        slide = $('.testimonials-bloc .testimonials .testimonial');
        if (slide.length > 1) {
            slider.not('.slick-initialized').slick(
                {
                    cssEase : 'ease-in-out',
                    slidesToShow : 1,
                    dots : true,
                    fade : true,
                    centerPadding : '0px',
                    variableWidth : false,
                    swipeToSlide : true,
                    centerMode : true,
                    prevArrow : '<button class="slick-prev slick-arrow"></button>',
                    nextArrow : '<button class="slick-next slick-arrow"></button>'
                }
            );

        }
        /* ########################################################################################### */
        /* ----------------- Slider || Bloc jobs zoom (tablet + mobile) ----------------- */
        /* ########################################################################################### */
        slider = $('.partners-bloc .partners');
        slide = $('.partners-bloc .partners .partner');
        if (slide.length > 1) {
            if (gulp_display.getWidth() <= 1200) {
                slider.not('.slick-initialized').slick(
                    {
                        cssEase : 'ease-in-out',
                        variableWidth : true,
                        swipeToSlide : true,
                        centerMode : true,
                        prevArrow : '<button class="slick-prev slick-arrow"></button>',
                        nextArrow : '<button class="slick-next slick-arrow"></button>'
                    }
                );
            } else {
                slider.filter('.slick-initialized').slick('unslick');
            }
        }

        /* ########################################################################################### */
        /* ----------------- Slider || Bloc formations (tablet + mobile) ----------------- */
        /* ########################################################################################### */
	    slider = $('.formations-bloc .formations-list');
	    slide = $('.formations-bloc .formations-list .formation');
	    if (slide.length > 1) {
		    if (gulp_display.getWidth() <= 1200) {
			    slider.not('.slick-initialized').slick(
				    {
					    cssEase : 'ease-in-out',
					    variableWidth : true,
					    swipeToSlide : true,
					    centerMode : true,
					    prevArrow : '<button class="slick-prev slick-arrow"></button>',
					    nextArrow : '<button class="slick-next slick-arrow"></button>'
				    }
			    );
		    } else {
			    slider.filter('.slick-initialized').slick('unslick');
		    }
	    }
        /* ########################################################################################### */
    }

})(jQuery);
