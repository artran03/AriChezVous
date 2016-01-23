<?php

get_header();

?>


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

<div id="three-per-div" class="container-fluid souvenirs-container">
    <?php
    $loop = new WP_Query( array( 'post_type' => 'souvenirs', 'posts_per_page' => 9, 'paged' => get_query_var('paged') ) );
    if (have_posts()) :
    $i=0; // counter
    while($loop->have_posts()) : $loop->the_post();
    if($i%3==0) { // if counter is multiple of 3, put an opening div ?>
    <!-- <?php echo ($i+1).'-'; echo ($i+3); ?> -->
    <div class="row souvenir-row">
        <?php } ?>
        <div class="souvenir col-lg-4 col-md-4 col-sm-6 col-xs-6">
            <div id="<?php echo get_the_ID(); ?>" class="selfie-img">
                <div class="main-img"><?php the_post_thumbnail(); ?></div>
                <img class="play-icon" src="<?php echo home_url(); ?>/wp-content/themes/AriTheme/img/bouton-play.png" width="50" />
            </div>
            <div class="selfie-title-container">
                <div class="selfie-title">
                    <div class="acv-number">AriChezVous #<?php echo get_post_meta($post->ID,'_acv_number',true); ?></div>
                    <div><?php the_title(); ?></div>
                    <div class="acv-place"><?php echo get_post_meta($post->ID,'_acv_place',true); ?></div>
                </div>
            </div>

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
                jQuery(window).load(function () {
                    jQuery('div#<?php echo get_the_ID(); ?>').on('click', function () {
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

<?php endif;
wp_pagenavi( array( 'query' => $loop ) );
wp_reset_postdata();
?>

</div>

<div id="two-per-div" class="container-fluid souvenirs-container">
    <?php
    $loop = new WP_Query( array( 'post_type' => 'souvenirs', 'posts_per_page' => 3, 'paged' => get_query_var('paged') ) );
    if (have_posts()) :
    $i=0; // counter
    while($loop->have_posts()) : $loop->the_post();
    if($i%2==0) { // if counter is multiple of 3, put an opening div ?>
    <!-- <?php echo ($i+1).'-'; echo ($i+3); ?> -->
    <div class="row souvenir-row">
        <?php } ?>
        <div class="souvenir col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div id="<?php echo get_the_ID(); ?>-small" class="selfie-img">
                <div class="main-img"><?php the_post_thumbnail(); ?></div>
                <img class="play-icon" src="<?php echo home_url(); ?>/wp-content/themes/AriTheme/img/control_play.png" />
            </div>
            <div class="selfie-title-container">
                <div class="selfie-title">
                    <div class="acv-number">AriChezVous #<?php echo get_post_meta($post->ID,'_acv_number',true); ?></div>
                    <div><?php the_title(); ?></div>
                    <div class="acv-place"><?php echo get_post_meta($post->ID,'_acv_place',true); ?></div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="modal<?php echo get_the_ID(); ?>-small" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                jQuery(window).load(function () {
                    jQuery('div#<?php echo get_the_ID(); ?>-small').on('click', function () {
                        jQuery('#modal<?php echo get_the_ID(); ?>-small').modal('show');
                        jQuery("#modal<?php echo get_the_ID(); ?>-small iframe").attr("src", jQuery("#modal<?php echo get_the_ID(); ?>-small iframe").attr("src"));
                    });
                });
                jQuery("#modal<?php echo get_the_ID(); ?>-small").on('hidden.bs.modal', function (e) {
                    jQuery("#modal<?php echo get_the_ID(); ?>-small iframe").attr("src", jQuery("#modal<?php echo get_the_ID(); ?>-small iframe").attr("src"));
                });
            </script>
        </div>
        <?php $i++;
        if($i%2==0) { // if counter is multiple of 2, put an closing div ?>
    </div>
    <?php } ?>

    <?php endwhile; ?>
    <?php
    if($i%2!=0) { // put closing div here if loop is not exactly a multiple of 2 ?>
</div>
		<?php } ?>

<?php endif;
wp_pagenavi( array( 'query' => $loop ) );
wp_reset_postdata();
 ?>

</div>

<?php
get_footer();
?>
