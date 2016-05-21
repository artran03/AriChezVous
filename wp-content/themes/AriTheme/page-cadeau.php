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
		<div class="cadeau-container">
      <div class="message-cadeau">
          <p>Vous êtes chaque jour plus nombreux à me suivre et je vous en remercie. Voici mon cadeau, pour vous <3.</p>
          <p>Ari</p>
          <p>
            <div class="btn-valider">
                <a id="download-folder" href="<?php echo home_url();?>/wp-content/uploads/2016/05/test.zip">Télécharger</a>
            </div>
          </p>
      </div>

      <div id="download-dialog" class="modal fade in" role="dialog" style="display: none; padding-right: 17px; text-align: center;">
        <div class="modal-dialog">
    			<div class="modal-content">
    				<div class="modal-header">
    					<button type="button" class="close" data-dismiss="modal">×</button>
    					<h4 class="modal-title">Merci !</h4>
    				</div>
    				<div class="modal-body">
    					<div id="modal-cadeau" class="" style="display: block;" role="alert">
  					       <p style="font-size:20px;">Suis moi sur les réseaux !</p>
                   <footer class="site-footer">
                 			<div id="icones-social">
                 				<a href="http://www.facebook.com/ariofficiel" title="Suivez-moi sur facebook !" target="_blank">
                 					<img src="<?php echo home_url();?>/wp-content/themes/AriTheme/img/logo-fb.png" height="40" width="40"/>
                 				</a>
                 				<a href="http://www.youtube.com/user/ariofficiel" title="Suivez-moi sur youtube !" target="_blank">
                 					<img src="<?php echo home_url();?>/wp-content/themes/AriTheme/img/logo-youtube.png" height="40" width="40"/>
                 				</a>
                 					<a href="http://www.twitter.com/officiel_ari" title="Suivez-moi sur twitter !" target="_blank">
                 						<img src="<?php echo home_url();?>/wp-content/themes/AriTheme/img/logo-twitter.png" height="40" width="40"/>
                 					</a>
                 			</div>
                 			<p></p>
                 		</footer>
    					</div>
    				</div>
    				<div class="modal-footer">
    					<a id="#close-message-cadeau" href="<?php echo home_url(); ?>" class="btn btn-default">Fermer</a>
    				</div>
    			</div>
    		</div>
      </div>

      <script type="text/javascript">
    		jQuery(document).ready(function(){
          jQuery('#download-folder').click(function() {
    				jQuery('#download-dialog').modal('show');
    			});
    		});
    	</script>

  </div>
	<!-- end container -->
	<?php wp_footer(); ?>
	</body>
</html>
