<?php
//connecting with database
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
  echo " ". "<br />";


  $id = $_POST["id"];
  $Voornaam = $_POST["Voornaam"];
  $Achternaam = $_POST["Achternaam"];
  $Datum = $_POST["Datum"];
  $convert = date('Y-m-d', strtotime($Datum));


  $sql="UPDATE `eindopdracht` SET `id`= '$id',`Voornaam`= '$Voornaam', `Achternaam`='$Achternaam', `geboortedatum` ='$Datum' WHERE id= $id ";


  if ($conn->query($sql) === TRUE) {
    header('Location: eindopdracht.php');
  } else {
      echo "Error updating record: " . $conn->error;
  }

  $conn->close();

?>
