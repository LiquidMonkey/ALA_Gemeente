<?php
include_once("php/configDB.php");

$first_name = $_POST['FirstName'];
$middle_name = $_POST['MiddleName'];
$last_name = $_POST['LastName'];
$appDateTime = $_POST['datumAfspraak'] . "|" . $_POST['tijdAfspraakUur'] . ":" . $_POST['tijdAfspraakMin'];;
$street = $_POST['Street'];
$streetnr = $_POST['SNumber'];
$postal = $_POST['Postal'];
$city = $_POST['City'];
$pnumber = $_POST['Number'];
$email = $_POST['Mail'];

// Poging gegevens invoegen in de table van de database
//Niet nodig omdat aangeroepen vanuit ander file 
//if (isset($_POST['post'])){
	$sql = $db->prepare("INSERT INTO `afspraken` (name, middleName, lastName, email, appDateTime, street, streetnum, postal, place, phoneNum)
	VALUES ('$first_name', '$middle_name', '$last_name', '$email', '$appDateTime', '$street', '$streetnr', '$postal'
	, '$city', '$pnumber');");

	//executes the given query above
	$sql->execute();
	
	// Als het lukt, echo succes! 3 seconden later return naar form.php
	echo "Records added successfully.";

	function Redirect($url, $permanent = false)
	{
	    header('Refresh: 2;' . $url, true, $permanent ? 301 : 302);

        exit();
    }

    Redirect('afspraakFormulier.php', false);

//} else {
//	trigger_error("post isset is false");
//}

// Verbinding afbreken
die();
?>