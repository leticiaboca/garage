<!doctype html>
<html lang="nl">
	<head>
		<meta name="author" content="Anjo Eijeriks">
		<meta charset="UTF-8">	
		<link rel="stylesheet" type="text/css" href="gar.css">		
		<title>gar-create-klant1.php</title>
	</head>
	<body>
		<div class="achtergrond">
			<!-- alleen plaatje garage.jpg -->
		</div>
		<div class="voorgrond">
			<h1>garage create klant 1</h1>
			<p>
				Dit formulier wordt gebruikt om klantgegevens in te voeren.
			</p>
			<form action="gar-create-klant2.php" method="post">
				klantnaam: <label>
                    <input type="text" 	name="klantnaamvak">
                </label> <br />
				klantadres: <label>
                    <input type="text" 	name="klantadresvak">
                </label> <br />
				klantpostcode: <label>
                    <input type="text"	name="klantpostcodevak">
                </label><br />
				klantplaats: <label>
                    <input type="text"	name="klantplaatsvak">
                </label> <br />
				<input type="submit">
			</form>
		</div>
	</body>
</html> 
