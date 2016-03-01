<?php
	include_once 'php/configDB.php';

	$user_id = $_POST['id'];

	$sql = $db->prepare("DELETE FROM `users` WHERE `user_id` = '$user_id'");

	//executes the given query above
	$sql->execute();

	function Redirect($url, $permanent = false)
	{
	    header('Refresh: 0;' . $url, true, $permanent ? 301 : 302);

        exit();
    }

    Redirect('informatie.php', false);
?>