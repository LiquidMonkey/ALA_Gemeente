<?php
  $host="localhost";
  $user="root";
  $password="";
  $database="Test";

/*
      $cxn = new mysqli($host,$user,$password,$database)
      or die("Query died: connect"); 

      $sql = "SELECT * FROM gemeente";

      $result = mysqli_query($cxn,$sql);

      $resultArray = $result->fetch_assoc();

      foreach($resultArray as $element){
        print($element."<br/>");
      }
*/
      $cxn = new mysqli($host,$user,$password,$database)
      or die("Query died: connect"); 
      $sql = "INSERT INTO gemeente
              VALUES($_POST['email'])";
      $result = mysqli_query($cxn,$sql);
?>