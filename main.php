<?php

/*
  $host="localhost";
  $user="root";
  $password="";
  $database="test";

      $cxn = new mysqli($host,$user,$password,$database)
      or die("Query died: connect"); 

      $sql = "SELECT * FROM gemeente";

      $result = mysqli_query($cxn,$sql);

      $resultArray = $result->fetch_assoc();

      foreach($resultArray as $element){
        print($element."<br/>");
      }
*/
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
$result = mysqli_query($dbhandle, "SELECT * FROM gebruikers");

//Terwijl alle gegevens uit $result (oftewel gebruikers) Echo alle gegevens.
// MYSQLI_BOTH trekt STRINGS & INTEGERS uit het tabel.
while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {

    echo "<br><br><i>Alle gevraagde informatie staat hier onder:</i><br><br>" .

// $row wijst naar de rijen in tabel gebruikers.
// {id} is de 1e rij van het tabel.
// Als er 3 mensen in de database staan, wordt dit formulier 3x vertoond.
        "<strong>ID:</strong>".$row{'id'}.
        "<br><strong>Voornaam:</strong> ".$row{'voornaam'}.
        "<br><strong>Tussenvoegsel:</strong> ".$row{'tussenvoegsel'}.
        "<br><strong>Achternaam:</strong> ".$row{'achternaam'}.
        "<br><strong>Geboortedatum:</strong> ".$row{'geboortedatum'}.
        "<br><strong>Straat:</strong> ".$row{'straat'}.
        "<br><strong>Huisnummer:</strong> ".$row{'huisnummer'}.
        "<br><strong>Postcode:</strong> ".$row{'postcode'}.
        "<br><strong>Plaats:</strong> ".$row{'plaats'}.
        "<br><strong>Telefoon:</strong> ".$row{'telefoon'}.
        "<br><strong>Email:</strong> ".$row{'email'};

}
/*
      $cxn = new mysqli($host,$user,$password,$database)
      or die("Cannot connect to database");

      $selected = mysqli_select_db($cxn, $database)
      or die("Database: " . $db . " kan niet worden geselecteerd");

      $sql = "INSERT INTO gemeente
              VALUES($_POST['email'])";
      $result = mysqli_query($cxn,$sql);*/
?>