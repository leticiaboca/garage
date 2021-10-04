<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Anjo Eijeriks">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="gar.css">
    <title>gar-search-auto.php</title>
</head>
<body>
<div class="achtergrond">
    <!-- alleen plaatje garage.jpg -->
</div>
<h1>garage zoek op autoid 1</h1>
<p>
    Dit formulier zoekt een auto op uit
    de tabel auto's van database garage.
</p>
<form action="gar-search-auto2.php" method="post">
    Welk autoid zoekt u?
    <label>
        <input type="text" 	name="autokentekenvak">
    </label> <br />
    <input type="submit">
</form>
</body>
</html>
