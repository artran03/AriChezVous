/*
 * JavaScript for Gwolle Guestbook Frontend.
 */


/*
 * Event for clicking the button, and getting the form visible.
 */
// jQuery(document).ready(function($) {
// 	jQuery( "#gwolle_gb_write_button input" ).click(function() {
// 		document.getElementById("gwolle_gb_write_button").style.display = "none";
// 		jQuery("#gwolle_gb_new_entry").slideDown(1000);
// 		return false;
// 	});
// });

jQuery(window).bind("load", function() {
   // code here
	 jQuery("#gwolle_gb_new_entry").show();
	 if(jQuery(window).width() >= 768){
	 jQuery('.gb-entry').each(function(i, obj) {
		 var totalHeight = jQuery('.gb-entry-count_'+(i+1)).height();
		 var contentHeight = jQuery('.gb-entry-count_'+(i+1)).find('.gb-entry-content').height();
		 var marginTop = (totalHeight-(contentHeight+30))/2;
		 jQuery('.gb-entry-count_'+(i+1)).find('.gb-entry-content').css('margin-top',marginTop-20);
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

// jQuery(window).resize(function(){
// 	if (jQuery(window).width() <= 768){
// 		jQuery('.gb-entry').each(function(i, obj) {
// 			var contentHeight = jQuery('.gb-entry-count_'+(i+1)).find('.gb-entry-content').height();
// 			var authorHeight = jQuery('.gb-entry-count_'+(i+1)).find('.gb-author-info').height();
// 			var marginTop = 10;
// 			var height = contentHeight + authorHeight;
// 			console.log(height);
// 			jQuery('.gb-entry-count_'+(i+1)).find('.gb-entry-content').css('margin-top',marginTop);
// 			jQuery('.gb-entry-count_'+(i+1)).find('.gb-entry-content').css('height',height);
// 		});
// 	}
// });
