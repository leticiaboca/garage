<!doctype html>
<html lang="nl">
	<head>
		<meta name="author" content="Anjo Eijeriks">
		<meta charset="UTF-8">	
		<link rel="stylesheet" type="text/css" href="gar.css">		
		<title>gar-search-klant1.php</title>
	</head>
	<body>
		<div class="achtergrond">
			<!-- alleen plaatje garage.jpg -->
		</div>
		<h1>garage zoek op klantid 1</h1>
		<p>
			Dit formulier zoekt een klant op uit
			de tabel klanten van database garage.
		</p>
		<form action="gar-search-klant2.php" method="post">
			Welk klantid zoekt u? 
			<input type="text" 	name="klantidvak"> 	<br />
			<input type="submit">
		</form>
	</body>
</html> 