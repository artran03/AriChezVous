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

		<!-- container -->
		<div class="container">

			<!-- site-header -->
			<header class="site-header">
				<!--<div class="site-logo">
					<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
				</div> -->
				<div class="row">
					<div class="logo-site col-md-2">
						<span class="helper"></span><a href="<?php echo home_url(); ?>"><?php echo remove_width_and_height_attribute(wp_get_attachment_image( 45, 'full' ));  ?></a>
					</div>
					<!-- Navigation Menu -->
					<nav class="site-nav col-md-10">
						<?php
							$args = array(
								'theme_location' => 'primary'
							);
						?>
						<?php wp_nav_menu( $args ); ?>
					</nav>
					<!-- /Navigation Menu -->
				</div>
			</header>
			<!-- /site-header -->