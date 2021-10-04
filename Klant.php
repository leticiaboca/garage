<?php
	class Klant
	{
		// proberties - variabelen ----------------------------------
		public $klantid;
		public $naam;
		public $adres;
		public $postcode;
		public $plaats;
		
		// methoden - functies
		//constructor ...............................................
		function __construct(	$klantid, $klantNaam, $klantAdres, 
								$klantPostcode, $klantPlaats
							)
		{
			$this->klantid = $klantid;
			$this->naam    = $klantNaam;
			$this->adres   = $klantAdres;
			$this->postcode= $klantPostcode;
			$this->plaats  = $klantPlaats;
		}
		
		// database functies
		function createKlant()	// ..................................
		{
			// klant in de database zetten 
			// verbinding maken met de database
			require_once "gar-connect.php";
						
			// prepareren sql-query
			// PH is PlaceHolder
			$sql = $conn->prepare("
									insert into klant values
									(
										:klantidPH, :klantnaamPH, :klantadresPH,
										:klantpostcodePH, :klantplaatsPH
									)
								 ");
								 
			// uitvoeren sql-query 
			$sql->execute([
							"klantidPH"			=> $this->klantid,
							"klantnaamPH"		=> $this->naam,
							"klantadresPH"		=> $this->adres,
							"klantpostcodePH"	=> $this->postcode,
							"klantplaatsPH"		=> $this->plaats
						 ]);	
						 
			// melding
			echo "De klant is toegevoegd <br />";
		}
		
		function readKlant()	// ..................................
		{
			// tabel uitlezen en netjes afdrukken 
			// verbinding maken met de database
			require_once "gar-connect.php";
			
			// prepareren sql-query
			$klanten = $conn->prepare("
											select	klantid,
													klantnaam,
													klantadres,
													klantpostcode,
													klantplaats
											from	klant
										 ");
			// uitvoeren sql-query
			$klanten->execute();
			
			// gegevens afdrukken in een tabel
			echo "<table>";
				foreach($klanten as $klant)
				{
					echo "<tr>";
					echo "<td>" . $klant["klantid"]   		. "</td>";
					echo "<td>"	. $klant["klantnaam"] 		. "</td>";
					echo "<td>" . $klant["klantadres"]  	. "</td>";
					echo "<td>" . $klant["klantpostcode"]	. "</td>";
					echo "<td>" . $klant["klantplaats"]		. "</td>";
					echo "</tr>";
				}
				echo "</table>";
		}
		
		function searchKlant()	// ..................................
		{
			// zoeken naar een gegeven klantid en netjes afdrukken
			// verbinding maken met de database
			require_once "gar-connect.php";
			
			// prepareren sql-query
			// PH = placeholder
			$klanten = $conn->prepare("
										select	klantid,
												klantnaam,
												klantadres,
												klantpostcode,
												klantplaats
										from	klant
										where	klantid = :klantidPH
									 ");
			// uitvoeren sql-query						 
			$klanten->execute(["klantidPH" => $this->klantid]);

			// klantgegevens afdrukken in een tabel (maar één rij) 
			echo "<table>";
			foreach($klanten as $klant)
				{
					echo "<tr>";
						echo "<td>" . $klant["klantid"]		 . "</td>";
						echo "<td>"	. $klant["klantnaam"]	 . "</td>";
						echo "<td>" . $klant["klantadres"]   . "</td>";
						echo "<td>" . $klant["klantpostcode"]. "</td>";
						echo "<td>" . $klant["klantplaats"]  . "</td>";
					echo "</tr>";
				}
			echo "</table><br />";
		}
/* GETTERS EN SETTERS ZIJN NIET NODIG		
		// getters
		function get_klantNaam()
		{
			return $this->naam;
		}
		
		function get_klantAdres()
		{
			return $this->adres;
		}
		
		function get_klant()
		{
			$antwoord = $this->klantid .', "'. 
			$this->naam .'", "'. 
			$this->adres .'", "'. 
			$this->postcode .'", "'.
			$this->plaats .'"';
			return $antwoord;
		}
*/
	}

