<!DOCTYPE html>
<html>
    <head>
    	<title>Testing database</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" type="image/jpg" href="./media/logo.jpg">

        <style>
        h4{
            width: 300px;
        }
        body{
            padding: 20px;
        }
        div{
            font-size: 1.5em;

            background: lightgray;
            padding: 20px;
        }
        table{
            margin: 10px;
        }
        td{
            text-align: left;
        }
        </style>
        <script type="text/javascript" src="./js/info.js">
        </script>
    </head>
    <body>
    <a class="btn btn-primary" href="index.php">Terug</a>
<?php
// Gegevens om in te loggen bij de PHP my admin.
include_once("php/configDB.php");

//preparing query
$query = $db->prepare("SELECT * FROM `users`");
//executing on given query
$query->execute();
//preparing output variable

echo "<br><br><div><h4><i>Gegevens uit users:</i></h4>" ;
//Terwijl alle gegevens uit $result (oftewel gebruikers) Echo alle gegevens.
// MYSQLI_BOTH trekt STRINGS & INTEGERS uit het tabel.
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    echo 
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
echo "</div>";
//preparing query
$query = $db->prepare("SELECT * FROM `afspraken`");
//executing on given query
$query->execute();
//preparing output variable
$i = 0;

echo "<br><br><div><h4><i>Gegevens uit afspraken:</i></h4>";
//Terwijl alle gegevens uit $result (oftewel gebruikers) Echo alle gegevens.
// MYSQLI_BOTH trekt STRINGS & INTEGERS uit het tabel.
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {

    echo "<table class=".$i."><tbody><tr>".
// $row wijst naar de rijen in tabel gebruikers.
// {id} is de 1e rij van het tabel.
// Als er 3 mensen in de database staan, wordt dit formulier 3x vertoond.
        "<td class='text-right'><strong>Voornaam: </strong> </td> <td>".$row{'name'}.
        "</td></tr><tr><td class='text-right'><strong>Tussenvoegsel: </strong> </td> <td>".$row{'middleName'}.
        "</td></tr><tr><td class='text-right'><strong>Achternaam: </strong> </td> <td>".$row{'lastName'}.
        "</td></tr><tr><td class='text-right'><strong>Email: </strong> </td> <td>".$row{'email'}."</td>".
        "</td></tr><tr><td class='text-right'><strong>Geboortedatum: </strong> </td> <td>".$row{'appDateTime'}.
        "</td></tr><tr><td class='text-right'><strong>Straat: </strong> </td> <td>".$row{'street'}.
        "</td></tr><tr><td class='text-right'><strong>Huisnummer: </strong> </td> <td>".$row{'streetnum'}.
        "</td></tr><tr><td class='text-right'><strong>Postcode: </strong> </td> <td>".$row{'postal'}.
        "</td></tr><tr><td class='text-right'><strong>Plaats: </strong> </td> <td>".$row{'place'}.
        "</td></tr><tr><td class='text-right'><strong>Telefoon: </strong> </td> <td>".$row{'phoneNum'}.
        "</td></tr><tr><td class='text-right'><strong>ID: </strong> </td> <td>".$row{'user_id'}.
        "</td></tr></tbody></table>";

        $i++;
}
echo "</div>";
?>
    <br><br>

    <a href="informatie.php" class="btn btn-warning">Ververs het scherm</a>
    </body>
</html>
<?
    die();
?>