<?php 

get_header();

if (have_posts()) :
	
	while (have_posts()) : the_post(); ?>

	
	<div id="construction-content"><?php the_content(); ?>
			<img id="image-construction" src="<?php echo home_url(); ?>/wp-content/themes/AriTheme/img/logo.png">
			<h1> Site en construction !</h1>
	</div>


	<?php endwhile;
	else :
		echo '<p>No content found</p>';
	endif; 

get_footer();


?>
