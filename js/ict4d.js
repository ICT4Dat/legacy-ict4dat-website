jQuery(document).ready(function () {
	
	// ************* HEADER *************
	
	// ** DONATE **
	var toogle_donate = false; // avoids clicking several times on the support link (would start the animation too often)
	
	jQuery('#donate_header_closeLink').click(function() {
		
		jQuery('#donate_header_closeLink').hide();
		jQuery('#donate_header p').hide();
		jQuery('#donate_header form').hide();
		jQuery('#donate_text').css("border-right", "solid 0px");
		jQuery('#donate_text').css("height", "0px");
		toogle_donate = true;
		
		jQuery('#donate_header').animate({
			height: '17px'
		}, 1000, function() {		
	  });
	});

	jQuery('#donate_header_showLink').click(function() {
													 
		if(toogle_donate) {

			jQuery('#donate_header').animate({
				height: '75px'
			}, 1000, function() {
				
					jQuery('#donate_header_closeLink').show();
					jQuery('#donate_header p').show();
					jQuery('#donate_header form').show();
					jQuery('#donate_text').css("border-right", "solid thin");
					jQuery('#donate_text').css("height", "77px");
					toogle_donate = false;
				
		  });
		}
	});
	
});