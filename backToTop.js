/* https://premium.wpmudev.org/blog/back-to-top-button-wordpress/ */
/* Functionality for the Back to Top button */
		jQuery(document).ready(function($){
	   		$(window).scroll(function(){
            	if ($(this).scrollTop() < 100) {
			    	$('.back-to-top') .fadeOut(500);
            	} else {
			     	$('.back-to-top') .fadeIn(500);
            	}
        	});
			$('..back-to-top').on('click', function(){
				$('html, body').animate({scrollTop:0}, 250);
				return false;
			});
		});