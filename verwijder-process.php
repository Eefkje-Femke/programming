<?php
  $servername='localhost';
  $databasename= 'db_level2_eindopdr';
  $username= 'root';
  $password= '';


  // Create connection via object $conn
  $conn = new mysqli($servername, $username, $password, $databasename);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
  echo "Connected successfully". "<br />";

  $id = $_POST["id"];
  $Voornaam = $_POST["voornaam"];
  $Achternaam = $_POST["achternaam"];
  $Datum = $_POST["geboortedatum"];

  $sql="DELETE FROM `eindopdracht` WHERE id= $id";

  if ($conn->query($sql) === TRUE) {
    header("Location: eindopdracht.php");
  } else {
      echo "Error updating record: " . $conn->error;
  }
  $conn->close();
?>
