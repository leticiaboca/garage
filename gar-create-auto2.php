<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Anjo Eijeriks">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="gar.css">
    <title>gar-create-auto2.php</title>
</head>
<body>
<div class="achtergrond">
    <!-- alleen plaatje garage.jpg -->
</div>
<h1>garage create auto 2</h1>
<p>
    Een auto toevoegen aan de tabel
    auto in de database garage.
</p>
<?php
// klantgegevens uit het formulier halen --------------------------
$autokenteken	= NULL; // komt niet uit het formulier (autoincrement)
$automerk		= $_POST["automerkvak"];
$autotype	    = $_POST["autotypevak"];
$autokmstand	= $_POST["autokmstandvak"];
$klantid	    = $_POST["klantidvak"];

// klasse Klant laden
require_once "Auto.php";

// object klant maken met de gegevens uit het formulier
$auto = new Auto(	$autokenteken, $automerk, $autotype,
    $autokmstand, $klantid);

// functie aanroepen om de klant aan de tabel KLANT toe te voegen
$auto->createAuto();
echo "<a href='gar-menu.php'>terug naar het menu </a>";
?>
</body>
</html>
