<?php
  $servername='localhost';
  $databasename= 'db_level2_opdr1';
  $username= 'root';
  $password= '';


  // Create connection via object $conn
  $conn = new mysqli($servername, $username, $password, $databasename);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
  echo "  ". "<br />";


  $id = $_POST["id"];
  $artist = $_POST["artist"];
  $title = $_POST["title"];

  $sql="UPDATE `songs` SET `artist`= '$artist',`title`= '$title' WHERE id=$id";

  if ($conn->query($sql) === TRUE) {
    header("Location: oefenopdracht.php");
  } else {
      echo "Error updating record: " . $conn->error;
  }

  $conn->close();

?>
