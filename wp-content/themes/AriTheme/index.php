<?php get_header(); ?>

<video autoplay loop poster="ari-photo.jpg" id="bgvid">
	<!--<source src="polina.webm" type="video/webm">-->
	<source src="video_promoV1.mp4" type="video/mp4">
</video>

	<div class="centered-content row">
		<!--<div class="main-logo col-md-12"><?php /*echo wp_get_attachment_image( 41, 'medium' ); */?></div>
		<p class="slogan col-md-12"><?php /*bloginfo("description");*/?></p>-->
	</div>
	<div class="row home-buttons">
		<div class="demande-button col-md-4">
			<a href="<?php echo home_url(); ?>/demande" role="button"><img src="./wp-content/themes/AriTheme/img/demande_bouton.png"></a>
		</div>		
		<!--<div class="col-md-4"><button id="stopPlayBtn" class="btn btn-info">PAUSE</button></div>-->
		<div class="concept-button col-md-4">
			<a href="<?php echo home_url(); ?>/concept" role="button"><img src="./wp-content/themes/AriTheme/img/concept_bouton.png"></a>
		</div>
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


