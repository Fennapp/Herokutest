<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$inv = "Minitel (1981)", "MiniDisc (1992)", "Téléphone à clapet (1996)", "Game Boy (1989)", "Ordinateur personnel (1983)", "Radio par satellite (1992)", "Souris optique (1998)", "Téléphone à identification (1988)", "Appareil photo reflex Digital (1991)", "Péage électronique (1986)", "Télévision à lumière organique (1996)", "Télévision par satellite (1994)", "SMS (1992)", "Piles rechargeables (1991)", "DVD (1995)", "Commerce d'actions en ligne (1994)", "Mail (1995)", "Clé USB (1988)", "Voiture hybride (1996)", "Ecran plasma couleur (1992)", "Bluetooth (1994)", "GPS (1996)", "Enregistreur audio à domicile (1994)", "Home Vidéo (1989)", "Camcorder (1985)", "Processeur multi-Core (2001)", "Téléviseur HD digital (1994)", "CD réinscriptible (1988)", "MPEG-4 (1998)", "Messagerie instantanée (1988)", "Moteur de recherche (1993)", "Lecteur DVD enregisteur (1999)", "Blu-ray (2003)", "Appareil photo numérique (1988)", "Format JPEG (1988)", "Phares à LED (2009)", "DVD réinscriptible (1997)", "Téléphone haut-débit (2001)", "Baladeur MP3 (1996)", "Traitement de texte (1985)", "Blog (1994)", "Reconnaissance par ADN (1987)", "Réseau social en ligne (1994)", "Séquençage génétique (1998)", "Microblogging (2005)", "Wi-Fi (1985)", "MP3 (1993)", "Internet haut-débit (1996)", "Web à échelle mondiale (1990)", "Smartphone (1992)";
		echo "Invention<br/>";
		sort($invention, SORT_NATURAL | SORT_FLAG_CASE);
		

		/*echo"<pre>";
		print_r($invention);
		echo "<pre/>";*/

		echo "<select name=\"numero\">";
		foreach ($invention as $key => $value)
		{

			echo "<option>$value";
		
		}
		echo '</select>';


	?>

</body>

</html>