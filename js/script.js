$(document).ready(function() {	
	
	$("ul.sf-menu").superfish({
		autoArrows:  false,
		delay:       400,                             // one second delay on mouseout 
		animation:   {opacity:'show',height:'show'},  // fade-in and slide-down animation 
		speed:       'fast',                          // faster animation speed 
		autoArrows:  false,                           // disable generation of arrow mark-up 
		dropShadows: false                            // disable drop shadows 			
	}); 
	
	// wrap 'span' to nav page link
	$('.topnav ul').children('li').each(function() {
		$(this).children('a').html('<span>'+$(this).children('a').text()+'</span>'); // add tags span to a href
	});
	$('#nav1 ul').children('li').each(function() {
		$(this).children('a').html('<span>'+$(this).children('a').text()+'</span>'); // add tags span to a href
	});

	// radius Box     
	$('#rightcol').css({"border-radius": "10px", "-moz-border-radius":"10px", "-webkit-border-radius":"10px"});
	$('.wp-pagenavi, .wp-pagenavi a, .wp-pagenavi .current').css({"border-radius": "15px", "-moz-border-radius":"15px", "-webkit-border-radius":"15px"});
	$('#columns').css({"border-radius": "5px", "-moz-border-radius":"5px", "-webkit-border-radius":"5px"});
	$('.post-commets').css({"border-radius": "10px", "-moz-border-radius":"10px", "-webkit-border-radius":"10px"});
			
});
