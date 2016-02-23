<?php 

get_header();

if (have_posts()) :
	
	while (have_posts()) : the_post(); ?>

	
	<div id="demande-form">
		<?php the_content(); ?>
	</div>
	
	<div id="conditions-dialog" class="modal fade in" role="dialog" style="display: none; padding-right: 17px; text-align: center;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h4 class="modal-title">Rappel des conditions</h4>
				</div>
				<div class="modal-body">
					<div id="responseMessage" class="wpcf7-response-output wpcf7-display-none wpcf7-validation-errors" style="display: block;" role="alert">
					Pour rappel, les artistes sont rémunérés au chapeau.<br>
					Si le concert est hors Ile-De-France, tu dois en plus<br>
					<b>prendre en charge le transport ainsi que l'hébergement.</b><br>
					Si tu as la moindre question envoie un mail à <a href="mailto:contact@arichezvous.com">contact@arichezvous.com</a>.<br>
					Notre équipe te répondra dans les plus brefs délais.
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
				</div>
			</div>
		</div>
	</div>
	
	<?php endwhile;

	else :
		echo '<p>No content found</p>';
	endif; 

	?>

	<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#responseMessage').appendTo('#msg-dialog .modal-body');
			jQuery('.wpcf7-submit').attr('data-toggle','modal');
			jQuery('.wpcf7-submit').attr('data-target','#msg-dialog');
			
			jQuery('#demande-form div.conditions a').click(function() {
				jQuery('#conditions-dialog').modal('show');
				jQuery('#demande-form div.conditions input').prop('checked', true);
				
			});
			
			jQuery('#demande-form div.conditions input').change(function() {
				if(this.checked) {
					jQuery('#conditions-dialog').modal('show');
			}});
		});
	</script>

<?php get_footer(); ?>


