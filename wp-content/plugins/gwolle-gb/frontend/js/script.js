/*
 * JavaScript for Gwolle Guestbook Frontend.
 */
jQuery(window).bind("load", function() {
	 jQuery("#gwolle_gb_new_entry").show();
	 if(jQuery(window).width() >= 768){
	 jQuery('.gb-entry').each(function(i, obj) {
		 var totalHeight = jQuery('.gb-entry-count_'+(i+1)).height();
		 var contentHeight = jQuery('.gb-entry-count_'+(i+1)).find('.gb-entry-content').height();
		 var marginTop = (totalHeight-(contentHeight+30))/2;
		 jQuery('.gb-entry-count_'+(i+1)).find('.gb-entry-content').css('margin-top',marginTop-12);
	 });
	  }
	 jQuery("#gwolle_gb_messages").hide();
	 if (jQuery("#gwolle_gb_messages") != '')
	 {
		if(jQuery("#gwolle_gb_messages").text().length>0)
		{
			jQuery('#myModal').modal('show');
		}
	 }
	 return false;
});
