<!DOCTYPE html>
<html>
    <head>
    	<title>Testing database</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" type="image/jpg" href="./media/logo.jpg">

        <style>
        form{
            display: inline-block;
        }
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
        strong{
            display: inline-block;
            text-align: right;
            width: 200px;
        }
        table{
            margin: 10px;
        }
        td{
            text-align: left;
        }/*
        #update{
            position: fixed;
            top: 100px;
            width: 800px;
            height: 500px;
        }*/
        </style>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

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
$i = 0;

echo "<br><br><div><h4><i>Gegevens uit users:</i></h4>" ;
//Terwijl alle gegevens uit $result (oftewel gebruikers) Echo alle gegevens.
// MYSQLI_BOTH trekt STRINGS & INTEGERS uit het tabel.
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    echo "<form method='post' action='./update.php'>".
// $row wijst naar de rijen in tabel gebruikers.
// {id} is de 1e rij van het tabel.
// Als er 3 mensen in de database staan, wordt dit formulier 3x vertoond.
        "<strong>Voornaam:</strong> <input type='text' name='voornaam' disabled value='".$row{'name'}."'><br>".
        "<strong>Tussenvoegsel:</strong> <input type='text' name='tussenvoegsel' disabled value='".$row{'middleName'} ."'><br>".
        "<strong>Achternaam:</strong> <input type='text' name='achternaam' disabled value='".$row{'lastName'}."'><br>".
        "<strong>Email:</strong> <input type='text' name='email' disabled value='".$row{'email'}."'><br>".
        "<strong>Geboortedatum:</strong> <input type='text' name='DOB' disabled value='".$row{'DOB'}."'><br>".
        "<strong>Straat:</strong> <input type='text' name='straat' disabled value='".$row{'street'}."'><br>".
        "<strong>Huisnummer:</strong> <input type='text' name='straatnum' disabled value='".$row{'streetnum'}."'><br>".
        "<strong>Postcode:</strong> <input type='text' name='postcode' disabled value='".$row{'postal'}."'><br>".
        "<strong>Plaats:</strong> <input type='text' name='plaats' disabled value='".$row{'place'}."'><br>".
        "<strong>Telefoon:</strong> <input type='text' name='telefoon' disabled value='".$row{'phoneNum'}."'><br>".
        " <input name='id' type='text' disabled value='".$row{'user_id'}."' hidden><br>".
        "<a class='btn btn-warning updateInit'>Update this</a><input type='submit' class='btn btn-warning updateCommit hidden' value='Confirm change'></form>".
        "<form method='post' action='delete.php'><input type='text' name='id' hidden value='".$row{'user_id'}."'><input type='submit' class='btn btn-danger' href='delete.php' value='Delete this'></form>";

        $i++;
}
echo "</div>";
// Gegevens om in te loggen bij de PHP my admin.
include_once("php/configDB.php");
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
        "</td></tr><tr><td class='text-right'><strong>ID: </strong> </td> <td>".$row{'userId'}.
        "</td></tr></tbody></table>";

        $i++;
}
echo "</div>";
?>
    <br><br>

    <a href="informatie.php" class="btn btn-warning">Ververs het scherm</a>

    <div id="" class="hidden">
        <form method="post" action="update.php">
            <label for="id">ID</label><input naam="id" id="id" type="text"><br>
            <label for="voornaam">Voornaam</label><input naam="voornaam" id="voornaam" type="text"><br>
            <label for="tussenvoegsel">Tussenvoegsel</label><input naam="tussenvoegsel" id="tussenvoegsel" type="text"><br>
            <label for="achternaam">Achternaam</label><input naam="achternaam" id="achternaam" type="text"><br>
            <label for="email">Email</label><input naam="email" id="email" type="email"><br>
            <label for="geboortedatum">Geboorte datum</label><input naam="geboortedatum" id="geboortedatum" type="text"><br>
            <label for="straat">Straat</label><input naam="straat" id="straat" type="text"><br>
            <label for="huisnummer">Huisnummer</label><input naam="huisnummer" id="huisnummer" type="number"><br>
            <label for="postcode">Postcode</label><input naam="postcode" id="postcode" type="text"><br>
            <label for="plaats">Plaats</label><input naam="plaats" id="plaats" type="text"><br>
            <label for="telefoon">Telefoon</label><input naam="telefoon" id="telefoon" type="text"><br>
        </form>
    </div>
    </body>
</html>
<?
    die();
?>