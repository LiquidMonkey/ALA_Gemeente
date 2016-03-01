<?php
	include_once 'php/configDB.php';

	$user_id = $_POST['id'];
	$voornaam = $_POST['voornaam'];
	$tussenvoegsel = $_POST['tussenvoegsel'];
	$achternaam = $_POST['achternaam'];
	$email = $_POST['email'];
	$DOB = $_POST['DOB'];
	$straat = $_POST['straat'];
	$straatnum = $_POST['straatnum'];
	$postcode = $_POST['postcode'];
	$plaats = $_POST['plaats'];
	$telefoon = $_POST['telefoon'];

	$sql = $db->prepare("UPDATE `users` SET `name` = '$voornaam', `middleName` = '$tussenvoegsel', `lastName` = '$achternaam', `email` = '$email', `DOB` = '$DOB', `street` = '$straat', `streetnum` = '$straatnum', `postal` = '$postcode', `place` = '$plaats', `phoneNum` = '$telefoon' WHERE `user_id` = '$user_id'");
	//executes the given query above
	$sql->execute();

	function Redirect($url, $permanent = false)
	{
	    header('Refresh: 0;' . $url, true, $permanent ? 301 : 302);

        exit();
    }
    Redirect('informatie.php', false);
    die();
?>