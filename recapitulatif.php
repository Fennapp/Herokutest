<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$civilite=$_POST['civilite'];
		if ($civilite=='monsieur') 
		{
			$sexe = 'masculin';
		}
		else
		{
			$sexe = 'feminin';
		}
		$resultat='Bonjour '.$civilite.' '.$nom.' '.$prenom.', vous etes du sexe ' .$sexe;
		echo "<p>$resultat</p>";
	?>
</body>
</html>
