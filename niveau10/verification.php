<?php

$motdepasse = $_POST['texte'];

//echo $motdepasse;

if($motdepasse=="linus torvalds" || $motdepasse=="linustorvalds" || $motdepasse=="Linus Torvalds" || $motdepasse=="LinusTorvalds")
	{
	echo "Mot de passe trouv&eacute; !<br>";
	echo "<br><a href=\"../index.php\">Retour au menu</a><br>";
	}
else
	{
	echo "Echec !<br>";
	echo "<br><a href=\"../index.php\">Retour au menu</a><br>";
	}

?>
