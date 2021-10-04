<!doctype html>
<html lang="nl">
	<head>
		<meta name="author" content="Anjo Eijeriks">
		<meta charset="UTF-8">	
		<link rel="stylesheet" type="text/css" href="gar.css">
		<title>gar-read-klant.php</title>
	</head>
	<body>
		<h1>garage read klant</h1>
		<div class="achtergrond">
			<!-- alleen plaatje garage.jpg -->
		</div>
		<div class="voorgrond">
			<p>
				Dit zijn alle gegevens uit de 
				tabel klanten van de database garage.
			</p>
			<?php
				// klasse klant laden
				require_once "Klant.php";
				
				// object $klant maken, gegevens zijn nu niet belangrijk				
				$klant =new Klant(NULL, NULL, NULL, NULL, NULL);
				
				// functie aanroepen om de tabel KLANT af te drukken
				$klant->readKlant();
				
				echo "<a href='gar-menu.php'> terug naar het menu </a>";
			?>
		</div>
	</body>
</html>