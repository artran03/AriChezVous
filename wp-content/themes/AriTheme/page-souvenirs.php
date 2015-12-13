<?php 

get_header();

?>
<div class="container-fluid souvenirs-container">

<?php
//$loop = new WP_Query( array( 'post_type' => 'souvenirs', 'posts_per_page' => 10 ) );
//while ( $loop->have_posts() ) : $loop->the_post(); ?>

<!--<div class="souvenir col-lg-4">
	<div class="selfie-img"><?php the_post_thumbnail(); ?></div>
	<div class="selfie-title"><?php the_title(); ?></div>
</div>-->

<?php 
//endwhile;
?>


<?php 
	$loop = new WP_Query( array( 'post_type' => 'souvenirs', 'posts_per_page' => 10 ) );
	if (have_posts()) :
	$i=0; // counter
	while($loop->have_posts()) : $loop->the_post();
		if($i%3==0) { // if counter is multiple of 3, put an opening div ?>
		<!-- <?php echo ($i+1).'-'; echo ($i+3); ?> -->
		<div class="row souvenir-row">
		<?php } ?>
		<div class="souvenir col-lg-4">
			<div id="<?php echo get_the_ID(); ?>" class="selfie-img"><?php the_post_thumbnail(); ?></div>
			<div class="selfie-title"><?php the_title(); ?></div>

			<!-- Modal -->
		      <div class="modal fade" id="modal<?php echo get_the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		        <div class="modal-dialog">
		          <div class="modal-content">
		            <div class="modal-header">
		              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		            </div>
		          <div class="modal-body">
		            <div><?php the_content(); ?></div>
		          </div>
		        </div><!-- /.modal-content -->
		      </div><!-- /.modal-dialog -->
		    </div><!-- /.modal -->

		    <script type="text/javascript">
		    	jQuery(window).load(function(){
				    jQuery('div#<?php echo get_the_ID(); ?>').on('click',function()
	                {
	                    jQuery('#modal<?php echo get_the_ID(); ?>').modal('show');
	                    jQuery("#modal<?php echo get_the_ID(); ?> iframe").attr("src", jQuery("#modal<?php echo get_the_ID(); ?> iframe").attr("src"));
	                });
	            });
	            jQuery("#modal<?php echo get_the_ID(); ?>").on('hidden.bs.modal', function (e) {
				    jQuery("#modal<?php echo get_the_ID(); ?> iframe").attr("src", jQuery("#modal<?php echo get_the_ID(); ?> iframe").attr("src"));
				});
		    </script>
		</div>
		<?php $i++;
		if($i%3==0) { // if counter is multiple of 3, put an closing div ?>
		</div>
		<?php } ?>

	<?php endwhile; ?>
		<?php
		if($i%3!=0) { // put closing div here if loop is not exactly a multiple of 3 ?>
		</div>
		<?php } ?>

<?php endif; ?>

</div>

<?php
get_footer();
?>


