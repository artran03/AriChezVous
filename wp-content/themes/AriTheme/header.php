<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<!--<div style="position: fixed; z-index: -99; width: 100%; height: 100%">
		  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/NvRkBDLlMWo?autoplay=1&controls=0&showinfo=0&autohide=1" frameborder="0" allowfullscreen></iframe>
		</div>-->

		<!-- container -->
		<div class="container">

			<!-- site-header -->
			<header class="site-header">
				<!--<div class="site-logo">
					<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
				</div> -->
				<div class="row">
					<!-- Navigation Menu -->
					<nav class="site-nav">
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