/*
 * JavaScript for Gwolle Guestbook Frontend.
 */

jQuery(window).bind("load", function() {
   // code here
	 jQuery("#gwolle_gb_new_entry").show();
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
