<?php

  include ("../env.php");

  $conn = new Mysqli($servername,$user,$pass,$dbname);

  if($conn->connect_error) {
    echo("non sono riuscito a connnettermi!" .$conn->connect_error);
  }

  $getId = $_GET["id"];
  //echo $getId;

  $sql = "SELECT  * FROM ospiti WHERE id = $getId";

  $resultOspite = $conn->query($sql);

  if ($resultOspite->num_rows >0) {

      $ospite = $resultOspite->fetch_assoc();
  }

  //var_dump($ospite);
  $conn->close();

 ?>
