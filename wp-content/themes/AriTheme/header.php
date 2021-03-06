<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
		<title><?php bloginfo('name'); ?></title>
		
		<meta name="description" content="<?php $mykey_values = get_post_custom_values('Description'); foreach ( $mykey_values as $key => $value ) { echo "$value"; }?>" />
		
		<?php wp_head(); ?>
		<link rel="icon" type="image/png" sizes="64x64" href="<?php echo home_url(); ?>/wp-content/themes/AriTheme/img/logo-fav.png">
	</head>

	<body <?php body_class(); ?>>

		<!-- container -->
		<div class="">

			<!-- site-header -->
			<div class="site-header">
				<!--<div class="site-logo">
					<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
				</div> -->
				<div class="row">
					<div class="logo-site col-xs-2 col-md-2 col-lg-2">
						<span class="helper"></span><a href="<?php echo home_url(); ?>"><img src="<?php echo home_url(); ?>/wp-content/themes/AriTheme/img/logo.png" class="attachment-full" alt="logo"></a>
					</div>
					<!-- Navigation Menu -->
					<nav class="site-nav col-xs-10 col-md-10 col-lg-10">
						<?php
							$args = array(
								'theme_location' => 'primary'
							);
						?>
						<?php wp_nav_menu( $args ); ?>
					</nav>


					<!-- /Navigation Menu -->
				</div>
			</div>

			<nav id="mobile-menu" class="navbar navbar-default navbar-fixed-top">
		      <div class="container">
		        <div class="navbar-header">
							<a class="navbar-brand" href="<?php echo home_url(); ?>"><img id="logo-mobile" src="<?php echo home_url(); ?>/wp-content/themes/AriTheme/img/logo.png" width=70 class="attachment-full" alt="logo"></a>
		          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <!--<a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo home_url(); ?>/wp-content/themes/AriTheme/img/logo.png" class="attachment-full" alt="logo"></a>-->
		        </div>
		        <div id="navbar" class="navbar-collapse collapse">
		          <?php
							$args = array(
								'theme_location' => 'primary'
							);
						?>
						<?php wp_nav_menu( $args ); ?>
		        </div><!--/.nav-collapse -->
		      </div>
    		</nav>
				<script type="text/javascript">
				jQuery.noConflict();
				jQuery(function($) {
				$(document).bind('touchstart', function(e){
					if (!$(e.target).is('a')) {
					$('.collapse').collapse('hide');
				}});
				$(document).scroll(function(e){
					if (!$(e.target).is('a')) {
					$('.collapse').collapse('hide');
				}});
				$(document).click(function(e) {
    				if (!$(e.target).is('a')) {
        			$('.collapse').collapse('hide');
    			}
				});
			});
				</script>
