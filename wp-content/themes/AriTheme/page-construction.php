<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
		<link href='https://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet' type='text/css'>
	</head>

	<body <?php body_class(); ?>>


<?php
    if (have_posts()) :
	
	while (have_posts()) : the_post(); ?>

	<h2><?php the_title(); ?></h2>
	<p><?php the_content(); ?></p>

	<?php endwhile;

	else :
		echo '<p>No content found</p>';
	endif; 

	?>
</body>
</html>


