<?php
// Texte clair : La cryptographie est une des disciplines de la cryptologie s attachant a proteger des messages en s aidant souvent de secrets ou clés 
// Texte codé : OD FUBSWRJUDSKLH HVW XQH GHV GLVFLSOLQHV GH OD FUBSWRORJLH V DWWDFKDQW D SURWHJHU GHV PHVVDJHV HQ V DLGDQW VRXYHQW GH VHFUHWV RX FOHV

$motdepasse = $_POST['texte'];


//echo $motdepasse;

if($motdepasse=="cannibalcorpse")
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
