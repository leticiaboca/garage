<?php
class User
{
    // proberties - variabelen ----------------------------------
    public $id;
    public $username;
    public $password;
    public $name;
    public $joined;
    public $groep;

    // methoden - functies
    //constructor ...............................................
    function __construct(	$id, $username, $password,
                             $name, $joined, $groep
    )
    {
        $this->id = $id;
        $this->username   = $username;
        $this->password  = $password;
        $this->name= $name;
        $this->joined = $joined;
        $this->groep = $groep;
    }

    // database functies
    function createUser()	// ..................................
    {
        // klant in de database zetten
        // verbinding maken met de database
        require_once "gar-connect.php";

        // prepareren sql-query
        // PH is PlaceHolder
        $sql = $conn->prepare("
									insert into user values
									(
										:idPH, :usernamePH, :passwordPH,
										:namePH, :joinedPH, :groepPH 
									)
								 ");

        // uitvoeren sql-query
        $sql->execute([
            "idPH" => $this->id,
            "usernamePH" => $this->username,
            "password" => $this->password,
            "namePH" => $this->name,
            "joinedPH" => $this->joined,
            "groupPH"=>$this->groep,
        ]);

        // melding
        echo "De user is toegevoegd <br />";
    }

    function readUser()	// ..................................
    {
        // tabel uitlezen en netjes afdrukken
        // verbinding maken met de database
        require_once "gar-connect.php";

        // prepareren sql-query
        $users = $conn->prepare("
											select	id,
													username,
													password,
													name,
													joined,
											        groep
											from	users
										 ");
        // uitvoeren sql-query
        $users->execute();

        // gegevens afdrukken in een tabel
        echo "<table>";
        foreach($users as $user)
        {
            echo "<tr>";
            echo "<td>" . $user["id"]   		. "</td>";
            echo "<td>"	. $user["username"]     . "</td>";
            echo "<td>" . $user["password"]  	. "</td>";
            echo "<td>" . $user["name"]	        ."</td>";
            echo "<td>" . $user["joined"]		. "</td>";
            echo "<td>" . $user["groep"]		. "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    function searchUser()	// ..................................
    {
        // zoeken naar een gegeven klantid en netjes afdrukken
        // verbinding maken met de database
        require_once "gar-connect.php";

        // prepareren sql-query
        // PH = placeholder
        $users = $conn->prepare("
											select	id,
													username,
													password,
													name,
													joined,
													groep
											from	users
											where	id=:userPH
										 ");
        // uitvoeren sql-query
        $users->execute(["idPH" => $this->id]);

        // klantgegevens afdrukken in een tabel (maar één rij)
        echo "<table>";
        foreach($users as $user)
        {
            echo "<tr>";
            echo "<td>" . $user["id"]   		. "</td>";
            echo "<td>"	. $user["username"]     . "</td>";
            echo "<td>" . $user["password"]  	. "</td>";
            echo "<td>" . $user["name"]	        ."</td>";
            echo "<td>" . $user["joined"]		. "</td>";
            echo "<td>" . $user["groep"]		. "</td>";
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
