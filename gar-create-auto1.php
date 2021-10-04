<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Anjo Eijeriks">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="gar.css">
    <title>gar-create-auto1.php</title>
</head>
<body>
<div class="achtergrond">
    <!-- alleen plaatje garage.jpg -->
</div>
<div class="voorgrond">
    <h1>garage create auto 1</h1>
    <p>
        Dit formulier wordt gebruikt om autogegevens in te voeren.
    </p>
    <form action="gar-create-auto1.php" method="post">
        autokenteken: <label>
            <input type="text" 	name="autokentekenvak">
        </label> <br />
        automerk: <label>
            <input type="text" 	name="automerkvak">
        </label> <br />
        autokmstand: <label>
            <input type="text"	name="autokmstandvak">
        </label><br />
        klantid: <label>
            <input type="text"	name="klantidvak">
        </label> <br />
        <input type="submit">
    </form>
</div>
</body>
</html>
