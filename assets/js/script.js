(function($) {
'use strict';

	$(document).on('click','.main_search .fa',function() {
		
		$('.main_search_form').toggleClass('visible');
			setTimeout(function(){
	        $(".main_search_form input").focus();
	    }, 200);
	    
	});
	
	$(document).on('click','.main_search_form button',function() {
		$('#main_search_form').submit();
	});
	
	/* ============ Owl Carousel */
	$('.owl-slider').owlCarousel({
	  items: 3,
	  autoplay: true,
	  loop: true,
	  dots:true,
	});

	/* ====== Sticky Header */
	$(window).scroll(function() {
			var scroll_top = $(window).scrollTop();

			// Show Sticky Header
			if(scroll_top > 50) {
				$('header').addClass('sticky-header');
			}
			else {
				$('header').removeClass('sticky-header');
			}

			// Show Back to top
			if(scroll_top > 150) {
				$('.back_to_top').addClass('visible');
			}
			else {
				$('.back_to_top').removeClass('visible');
			}
	});


	/* ====== Menu */
	$(document).on('click','.button_mobile_menu',function() {
		$('.nav nav').toggleClass('mobile');
		 $('html, body').animate({
            scrollTop: $(".nav").offset().top
        }, 500);
	});

	/* ======= Back to top */
	$(document).on('click','.back_to_top',function(e) {
		e.preventDefault();
	    $('html,body').animate({
	        scrollTop: 0
	    }, 700);
	});


})(jQuery);
