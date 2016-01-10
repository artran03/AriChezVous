	<footer class="site-footer">
			<nav class="site-nav">
				<?php
					$args = array(
						'theme_location' => 'footer'
					);
				?>
				<?php wp_nav_menu( $args ); ?>
			</nav>
			<div id="icones-social">
					<a href="http://www.twitter.com/officiel_ari" title="Suivez-moi sur twitter !" target="_blank">
						<img src="<?php echo home_url();?>/wp-content/themes/AriTheme/img/twitter.png" />
					</a>
					<a href="http://www.youtube.com/user/ariofficiel" title="Suivez-moi sur youtube !" target="_blank">
						<img src="<?php echo home_url();?>/wp-content/themes/AriTheme/img/youtube.png" />
					</a>
					<a href="http://www.facebook.com/ariofficiel" title="Suivez-moi sur facebook !" target="_blank">
						<img src="<?php echo home_url();?>/wp-content/themes/AriTheme/img/facebook.png" />
					</a>
			</div>
			<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y');?></p>
		</footer>
	</div>
	<!-- end container -->
	<?php wp_footer(); ?>
	</body>
</html>
