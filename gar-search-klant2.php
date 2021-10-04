<!doctype html>
<html lang="nl">
	<head>
		<meta name="author" content="Anjo Eijeriks">
		<meta charset="UTF-8">	
		<link rel="stylesheet" type="text/css" href="gar.css">		
		<title>gar-search-klant2.php</title>
	</head>
	<body>
		<div class="achtergrond">
			<!-- alleen plaatje garage.jpg -->
		</div>
		<h1>garage zoek op klantid 2</h1>
		<p>
			Op klantid gegevens zoeken uit de 
			tabel klanten van de database garage.
		</p>
		<?php
			// klantid uit het formulier halen --------------------------------
			$klantid = $_POST["klantidvak"];

			// klasse klant laden
			require_once "Klant.php";
				
			// object $klant maken, alleen klantid is belangrijk				
			$klant =new Klant($klantid, NULL, NULL, NULL, NULL);
				
			// functie aanroepen om de tabel KLANT af te drukken
			$klant->searchKlant();
			
			echo "<a href='gar-menu.php'> terug naar het menu </a>";	
		?>
	</body>
</html>