<?php
	/*if (($_SERVER['REMOTE_ADDR'] != '90.2.33.194'))
	{
		header("HTTP/1.0 302 Temporary redirect");
		header('Location: /travaux.php');
	}*/

	get_header();
?>


<video autoplay loop poster="ari-photo.jpg" id="bgvid">
	<!--<source src="polina.webm" type="video/webm">-->
	<source src="video_promoV1.mp4" type="video/mp4">
</video>

	<div class="centered-content row">
		<!--<div class="main-logo col-md-12"><?php /*echo wp_get_attachment_image( 41, 'medium' ); */?></div>
		<p class="slogan col-md-12"><?php /*bloginfo("description");*/?></p>-->
	</div>
	<div class="home-buttons">
		<div class="concept-button col-md-5">
				<a class="home-btn" href="<?php echo home_url(); ?>/concept" role="button">
						<img src="./wp-content/themes/AriTheme/img/icone-concept.png" width="30">
						<span>Le concept Ari Chez Vous</span>
				</a>
		</div>
		<div class="col-md-2"></div>
		<div class="demande-button col-md-5">
				<a class="home-btn" href="<?php echo home_url(); ?>/demande" role="button">
						<img src="./wp-content/themes/AriTheme/img/icone-demande.png" width="30">
						<span>J'veux du smile dans mon salon !</span>
				</a>
		</div>
	</div>
	<div class="footer-home">
		<?php
		get_footer();
		?>
	</div>
<script type="text/javascript">
var vid = document.getElementById("bgvid");
var pauseButton = document.querySelector("#stopPlayBtn");

function vidFade() {
  vid.classList.add("stopfade");
}

vid.addEventListener('ended', function()
{
// only functional if "loop" is removed
vid.pause();
// to capture IE10
vidFade();
});


pauseButton.addEventListener("click", function() {
  vid.classList.toggle("stopfade");
  if (vid.paused) {
    vid.play();
    pauseButton.innerHTML = "Pause";
  } else {
    vid.pause();
    pauseButton.innerHTML = "Paused";
  }
})

</script>
