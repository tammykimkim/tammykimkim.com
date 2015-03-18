/**
 * Custom theme styles
 */

( function( $ ) {
	
	$("nav a").click(function() {
		var link = $(this).attr('href');
	    $('html, body').animate({
	        scrollTop: $(link).offset().top
	    }, 600);
	});	
		
		//Check to see if the window is top if not then display button
		$(window).scroll(function(){
			if ($(this).scrollTop() > 100) {
				$('.scrollToTop').fadeIn();
			} else {
				$('.scrollToTop').fadeOut();
			}
		});
		
		//Click event to scroll to top
		$('.scrollToTop').click(function(){
			$('html, body').animate({scrollTop : 0},800);
			return false;
		});
		
} )( jQuery );
