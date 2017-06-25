(function($) {
'use strict';
	
	var window_def_height = $( window ).height();
	
	$(document).ready(function() {
		$('.nvx_parallax').each(function() {
			var nvx_padding = $(this).data('nvxpadding');
			$(this).css('padding',nvx_padding+'% 0');
		}); 
	});
	
	if($(window).width() > 800) {
		$(window).on('scroll resize',function(){
			
			$('.nvx_parallax').each(function() {
				if($(window).scrollTop() >= ($(this).offset().top-window_def_height)) {
					$(this).css({ backgroundPosition: '50%'+ -(($(window).scrollTop() - $(this).offset().top) / 2.5) + 'px' });
				}
			});
		});
	}
	
})(jQuery);