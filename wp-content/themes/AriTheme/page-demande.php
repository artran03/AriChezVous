<?php 

get_header();

if (have_posts()) :
	
	while (have_posts()) : the_post(); ?>

	
	<div id="demande-form">
		<?php the_content(); ?>
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
		});
	</script>

<?php get_footer(); ?>


