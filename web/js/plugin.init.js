jQuery(document).ready(function() {

	// Cycle slideshow
	jQuery('#talks').cycle({ 
    	fx:     'fade', 
    	speed:  500,
    	timeout: 5000,
    	next:   '#next-talk', 
    	prev:   '#prev-talk',
    	pager:  '#talks-pager'
 	});

	// Fitvids - responsive video embeds
	jQuery('#primary-content').fitVids();

	// Child-menu drop-downs
	jQuery('#navigation li').each(function(){
	
		if( jQuery(this).find('>ul').length > 0 ){
			
			jQuery(this).hover(function(){
				if( jQuery(this).parent().parent().is('#navigation') ){
					clearTimeout(window.jQuerymenu_timer);
					window.jQuerymenu_timer = null;
					if( window.jQuerycurrent_menu )
						jQuery('#' + window.jQuerycurrent_menu).find('ul').stop().fadeOut();
						
					window.jQuerycurrent_menu = jQuery(this).attr('id');
				};
					
				jQuery(this).find('ul:first').stop().css('opacity', '').fadeIn();
			}, function(){
				
				if( jQuery(this).parent().parent().is('#navigation') ){
					window.jQuerymenu_timer = setTimeout(function(){
						jQuery('#' + window.jQuerycurrent_menu).find('ul').stop().fadeOut();
					}, 500);
				}
				else
					jQuery(this).find('>ul').stop().fadeOut(500);
			});
		
		}
	
	});

	// Mobile menu
	jQuery('#mobilemenu').mobileMenu();

	// Style for select element
	// http://cssglobe.com/post/8802/custom-styling-of-the-select-elements
	jQuery(document).ready(function(){

		if (!jQuery.browser.opera) {

	        jQuery('select.select-menu').each(function(){
	            var title = jQuery(this).attr('title');
	            if( jQuery('option:selected', this).val() != ''  ) title = jQuery('option:selected',this).text();
	            jQuery(this)
	                .css({'z-index':10,'opacity':0,'-khtml-appearance':'none'})
	                .after('<span class="select">' + title + '</span>')
	                .change(function(){
	                    val = jQuery('option:selected',this).text();
	                    jQuery(this).next().text(val);
	                    })
			});

		};

	});

});