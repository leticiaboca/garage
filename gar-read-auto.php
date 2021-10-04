<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Anjo Eijeriks">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="gar.css">
    <title>gar-read-auto.php</title>
</head>
<body>
<h1>garage read auto</h1>
<div class="achtergrond">
    <!-- alleen plaatje garage.jpg -->
</div>
<div class="voorgrond">
    <p>
        Dit zijn alle gegevens uit de
        tabel auto van de database garage.
    </p>
    <?php
    // klasse klant laden
    require_once "Auto.php";

    // object $klant maken, gegevens zijn nu niet belangrijk
    $auto =new Auto(NULL, NULL, NULL, NULL, NULL);

    // functie aanroepen om de tabel KLANT af te drukken
    $auto->readAuto( );

    echo "<a href='gar-menu.php'> terug naar het menu </a>";
    ?>
</div>
</body>
</html>
