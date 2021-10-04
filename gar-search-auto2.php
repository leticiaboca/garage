<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Anjo Eijeriks">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="gar.css">
    <title>gar-search-auto2.php</title>
</head>
<body>
<div class="achtergrond">
    <!-- alleen plaatje garage.jpg -->
</div>
<h1>garage zoek op autoid 2</h1>
<p>
    Op autoid gegevens zoeken uit de
    tabel auto's van de database garage.
</p>
<?php
// klantid uit het formulier halen --------------------------------
$autokenteken = $_POST["autokentekenvak"];

// klasse klant laden
require_once "Auto.php";

// object $klant maken, alleen klantid is belangrijk
$auto =new auto($autokenteken, NULL, NULL, NULL, NULL);

// functie aanroepen om de tabel KLANT af te drukken
$auto->searchAuto();

echo "<a href='gar-menu.php'> terug naar het menu </a>";
?>
</body>
</html>
