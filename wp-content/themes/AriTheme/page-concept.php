<?php

get_header();

if (have_posts()) :

	while (have_posts()) : the_post(); ?>

	<div id="cadre" class="first">
	<div id="texte">
	<h1>Comment ça se passe ?</h1>
	<p class="concept-texte">Avec Baptiste on vient chez toi et on te fait un show acoustique guitare, violon et voix. Ton rôle à toi c'est de nous trouver le public : tes amis ! Pas nécessairement besoin d'une occasion spéciale pour nous recevoir ! Au lieu d'une soirée entre pote, pourquoi pas un concert dans ton salon ?</p>
	</div>
	</div>

	<div id="cadre">
	<div id="texte">
	<h1>Ça coûte pas un peu cher cette histoire ?</h1>
	<p class="concept-texte">Et bien non ! Pour le moment, la rémunération se fait au chapeau ! A la fin du show on fait passer le-dit chapeau et les personnes qui ont appréciés déposent un petit billet. Il est préférable de bien prévenir les invités du mode de rémunération, pour qu’ils ne se retrouvent pas fort dépourvus quand le chapeau fût venu !
	Si le concert se passe hors Ile-De-France, on conserve l'idée du chapeau, mais il faudra en plus compter le défraiement du transport et éventuellement du logement !</p>
	</div>
	</div>

	<div id="cadre">
	<div id="texte">
	<h1>Mon appart' est peut-être un peu petit ?</h1>
	<p class="concept-texte">Ce n'est pas grave ! C'est justement cela que l'on cherche ! Un cadre intimiste ! Etre serré n'est pas gênant ! T'as déjà été voir un concert ou t'es pas collé aux gens ? Evidemment si t'as un 120 mètres carrés on vient aussi, pas de discrimination !</p>
	</div>
	</div>

	<div id="cadre" class="last">
	<div id="texte">
	<h1>Comment je gère le voisinage ?</h1>
	<p class="concept-texte">Pas de souci ! Premièrement nous venons sans sono ! Cela limite considérablement le volume sonore. D'autre part, nous essayons toujours de faire notre concert assez tôt pour ne pas jouer en pleine nuit ! En général on débute à 20h30/21h. Puis sinon tu peux les inviter !</p>
	</div>
	</div>
	<?php endwhile;

	else :
		echo '<p>No content found</p>';
	endif;

get_footer();
?>
