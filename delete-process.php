<?php
  $servername='localhost';
  $databasename= 'db_level2_opdr2';
  $username= 'root';
  $password= '';


  // Create connection via object $conn
  $conn = new mysqli($servername, $username, $password, $databasename);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
  echo " ". "<br />";

  @$id = $_POST["id"];
  @$Prijs= $_POST['Prijs'];
  @$Omschrijving= $_POST['Omschrijving'];
  @$Waar= $_POST['Waar'];
  @$Webadres= $_POST['Webadres'];

  $sql="DELETE FROM `verlanglijstje` WHERE id=$id";

  if ($conn->query($sql) === TRUE) {
    header("Location: verlanglijstje.php");
  } else {
      echo "Error updating record: " . $conn->error;
  }
  $conn->close();

?>
