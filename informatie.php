<!DOCTYPE html>
<html>
    <head>
    	<title>Testing database</title>
    </head>
    <body>
<?php
// Gegevens om in te loggen bij de PHP my admin.
include_once("php/configDB.php");

//preparing query
$query = $db->prepare("SELECT * FROM user");
//executing on given query
$query->execute();
//preparing output variable
$output = "";

//Terwijl alle gegevens uit $result (oftewel gebruikers) Echo alle gegevens.
// MYSQLI_BOTH trekt STRINGS & INTEGERS uit het tabel.
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {

    echo "<br><br><i>Alle gevraagde informatie staat hier onder:</i><br><br>" .

// $row wijst naar de rijen in tabel gebruikers.
// {id} is de 1e rij van het tabel.
// Als er 3 mensen in de database staan, wordt dit formulier 3x vertoond.
        "<strong>Voornaam:</strong> ".$row{'name'}.
        "<br><strong>Tussenvoegsel:</strong> ".$row{'middleName'}.
        "<br><strong>Achternaam:</strong> ".$row{'lastName'}.
        "<br><strong>Email:</strong> ".$row{'email'}.
        "<br><strong>Geboortedatum:</strong> ".$row{'DOB'}.
        "<br><strong>Straat:</strong> ".$row{'street'}.
        "<br><strong>Huisnummer:</strong> ".$row{'streetnum'}.
        "<br><strong>Postcode:</strong> ".$row{'postal'}.
        "<br><strong>Plaats:</strong> ".$row{'place'}.
        "<br><strong>Telefoon:</strong> ".$row{'phoneNum'}.
        "<br><strong>Password:</strong> ".$row{'password'}.
        "<br><strong>ID:</strong>".$row{'userId'};
}
?>
    <br><br>

    <a href="informatie.php">Ververs het scherm</a>
    </body>
</html>