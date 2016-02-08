<!DOCTYPE html>
<html>
<head>
	<title>Testing database</title>
</head>
<body>
<?php
// Gegevens om in te loggen bij de PHP my admin.
$username = "root";
$password = "";
$hostname = "localhost";
// De database die je wilt benaderen
$db = 'gemeente';

//Maakt een connectie aan de database met gebruik van de gegevens.
$dbhandle = mysqli_connect($hostname, $username, $password)
or die("Kan niet verbinden aan de database");

echo "Connected to MySQL<br>";

//Kies vervolgens een database om te gebruiken.
$selected = mysqli_select_db($dbhandle, $db)
or die("Database: " . $db . " kan niet worden geselecteerd");

echo ("<br>Database: " .$db . " geselecteerd<br>");

//Connect aan en haalt * op uit het tabel gebruikers    * = alles
$result = mysqli_query($dbhandle, "SELECT * FROM user");

//Terwijl alle gegevens uit $result (oftewel gebruikers) Echo alle gegevens.
// MYSQLI_BOTH trekt STRINGS & INTEGERS uit het tabel.
while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {

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