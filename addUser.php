<?php

// Verbinden met de mysql server
$link = mysqli_connect("localhost", "root", "", "gemeente");

// Verbindingscheck
if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

// Blokkeert vage user input voor veiligheid
$first_name = mysqli_real_escape_string($link, $_POST['FirstName']);

$middle_name = mysqli_real_escape_string($link, $_POST['MiddleName']);

$last_name = mysqli_real_escape_string($link, $_POST['LastName']);

$dob = mysqli_real_escape_string($link, $_POST['DOB']);

$street = mysqli_real_escape_string($link, $_POST['Street']);

$streetnr = mysqli_real_escape_string($link, $_POST['SNumber']);

$postal = mysqli_real_escape_string($link, $_POST['Postal']);

$city = mysqli_real_escape_string($link, $_POST['City']);

$pnumber = mysqli_real_escape_string($link, $_POST['Number']);

$email = mysqli_real_escape_string($link, $_POST['Mail']);

$password = mysqli_real_escape_string($link, $_POST['Password']);



// Poging gegevens invoegen in de table van de database
$sql = "INSERT INTO user (name, middleName, lastName, email, DOB, street, streetnum, postal, place, phoneNum, password)
VALUES ('$first_name', '$middle_name', '$last_name', '$email', '$dob', '$street', '$streetnr', '$postal'
, '$city', '$pnumber', '$password')";

// Als het lukt, echo succes! 3 seconden later return naar form.php
if(mysqli_query($link, $sql)){

    echo "Records added successfully.";

    function Redirect($url, $permanent = false)
    {
        header('Refresh: 3;' . $url, true, $permanent ? 301 : 302);

        exit();
    }
    Redirect('aanmelden.php', false);

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Verbinding afbreken
mysqli_close($link);
?>