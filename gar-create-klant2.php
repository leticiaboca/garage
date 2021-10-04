<!doctype html>
<html lang="nl">
	<head>
		<meta name="author" content="Anjo Eijeriks">
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="gar.css">
		<title>gar-create-klant2.php</title>
	</head>
	<body>
		<div class="achtergrond">
			<!-- alleen plaatje garage.jpg -->
		</div>
		<h1>garage create klant 2</h1>
		<p>
			Een klant toevoegen aan de tabel
			klant in de database garage.
		</p>
		<?php
			// klantgegevens uit het formulier halen --------------------------
			$klantid 		= NULL; // komt niet uit het formulier (autoincrement)
			$klantnaam 		= $_POST["klantnaamvak"];
			$klantadres 	= $_POST["klantadresvak"];
			$klantpostcode 	= $_POST["klantpostcodevak"];
			$klantplaats 	= $_POST["klantplaatsvak"];

			// klasse Klant laden
			require_once "Klant.php";

			// object klant maken met de gegevens uit het formulier
			$klant = new Klant(	$klantid, $klantnaam, $klantadres,
								$klantpostcode, $klantplaats);

			// functie aanroepen om de klant aan de tabel KLANT toe te voegen
			$klant->createKlant();
			echo "<a href='gar-menu.php'>terug naar het menu </a>";
		?>
	</body>
</html>
