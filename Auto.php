<?php
class Auto
{
    // proberties - variabelen ----------------------------------
    public $autokenteken;
    public $automerk;
    public $autotype;
    public $autokmstand;
    public $klantid;

    // methoden - functies
    //constructor ...............................................
    function __construct(	$autokenteken, $automerk, $autotype,
                             $autokmstand, $klantid
    )
    {
        $this->autokenteken = $autokenteken;
        $this->automerk = $automerk;
        $this->autotype  = $autotype;
        $this->autokmstand= $autokmstand;
        $this->klantid  = $klantid;
    }


    // database functies
    function createAuto()	// ..................................
    {
        // auto in de database zetten
        // verbinding maken met de database
        require_once "gar-connect.php";

        // prepareren sql-query
        // PH is PlaceHolder
        $sql = $conn->prepare("
									insert into auto values
									(
										:autokentekenPH, :automerkPH, :autotypePH,
										:autokmstandPH, :klantidPH
									)
								 ");

        // uitvoeren sql-query
        $sql->execute([
            "autokentekenPH"	=> $this->autokenteken,
            "automerkPH"		=> $this->automerk,
            "autotypePH"		=> $this->autotype,
            "autokmstandPH"	    => $this->autokmstand,
            "klantidPH"	     	=> $this->klantid
        ]);

        // melding
        echo "De auto is toegevoegd <br />";
    }

    function searchAuto()	// ..................................
    {
        // zoeken naar een gegeven klantid en netjes afdrukken
        // verbinding maken met de database
        require_once "gar-connect.php";

        // prepareren sql-query
        // PH = placeholder
        $autos = $conn->prepare("
										select	autokenteken,
												automerk,
												autotype,
												autokmstand,
												klantid
										from	auto
										where	autokenteken = :autokentekenPH
									 ");
        // uitvoeren sql-query
        $autos->execute(["autokentekenPH" => $this->autokenteken]);

        // klantgegevens afdrukken in een tabel (maar één rij)
        echo "<table>";
        foreach($autos as $auto)
        {
            echo "<tr>";
            echo "<td>" . $auto["autokenteken"]		 . "</td>";
            echo "<td>"	. $auto["automerk"]	 . "</td>";
            echo "<td>" . $auto["autotype"]   . "</td>";
            echo "<td>" . $auto["autokmstand"]. "</td>";
            echo "<td>" . $auto["klantid"]  . "</td>";
            echo "</tr>";
        }
        echo "</table><br />";
    }
 /*    GETTERS EN SETTERS ZIJN NIET NODIG
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
    function readAuto()	// ..................................
    {
        // tabel uitlezen en netjes afdrukken
        // verbinding maken met de database
        require_once "gar-connect.php";

        // prepareren sql-query
        $auto = $conn->prepare("
											select	autokenteken,
													automerk,
													autotype,
											        autokmstand,
													klantid
											from	auto
										 ");
        // uitvoeren sql-query
        $auto->execute();

        // gegevens afdrukken in een tabel
        echo "<table>";
        foreach($auto as $auto)
        {
            echo "<tr>";
            echo "<td>" . $auto["autokenteken"]   	. "</td>";
            echo "<td>"	. $auto ["automerk"] 		. "</td>";
            echo "<td>"	. $auto ["autotype"] 		. "</td>";
            echo "<td>" . $auto ["autokmstand"]  	. "</td>";
            echo "<td>" . $auto ["klantid"]	        . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}