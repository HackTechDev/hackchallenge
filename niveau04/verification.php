<?php

$motdepasse = $_POST['texte'];


//echo $motdepasse;

if($motdepasse=="LinusTorvalds")
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
