<?php
include_once("php/configDB.php");

$first_name = $_POST['FirstName'];
$middle_name = $_POST['MiddleName'];
$last_name = $_POST['LastName'];
$dob = $_POST['DOB'];
$street = $_POST['Street'];
$streetnr = $_POST['SNumber'];
$postal = $_POST['Postal'];
$city = $_POST['City'];
$pnumber = $_POST['Number'];
$email = $_POST['Mail'];
$password = $_POST['Password'];

// Poging gegevens invoegen in de table van de database
//Niet nodig omdat aangeroepen vanuit ander file 
//if (isset($_POST['post'])){
	$sql = $db->prepare("INSERT INTO `user` (name, middleName, lastName, email, DOB, street, streetnum, postal, place, phoneNum, password)
	VALUES ('$first_name', '$middle_name', '$last_name', '$email', '$dob', '$street', '$streetnr', '$postal'
	, '$city', '$pnumber', '$password');");

	//executes the given query above
	$sql->execute();
	
	// Als het lukt, echo succes! 3 seconden later return naar form.php
	echo "Records added successfully.";

	function Redirect($url, $permanent = false)
	{
	    header('Refresh: 3;' . $url, true, $permanent ? 301 : 302);

        exit();
    }

    Redirect('aanmelden.php', false);

//} else {
//	trigger_error("post isset is false");
//}

// Verbinding afbreken
die();
?>