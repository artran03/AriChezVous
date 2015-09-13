<?php get_header(); ?>

<video autoplay loop poster="ari-photo.jpg" id="bgvid">
	<!--<source src="polina.webm" type="video/webm">-->
	<source src="Ari.mp4" type="video/mp4">
</video>

	<div class="centered-content row">
		<!--<div class="main-logo col-md-12"><?php /*echo wp_get_attachment_image( 41, 'medium' ); */?></div>
		<p class="slogan col-md-12"><?php /*bloginfo("description");*/?></p>-->
	</div>

	<div class="row home-buttons">
		<div class="right-button col-md-4">
			<a href="<?php echo home_url(); ?>/demande" class="btn btn-info" role="button">JE VOUS VEUX DANS MON SALON</a>
		</div>		
		<div class="col-md-4"><button id="stopPlayBtn" class="btn btn-info">PAUSE</button></div>
		<div class="left-button col-md-4">
			<a href="<?php echo home_url(); ?>/concept" class="btn btn-info" role="button">CONCEPT</a>
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


