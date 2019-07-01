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
    echo " ". "<br />";

    $id = $_GET['id'];

    $sql="SELECT * FROM eindopdracht WHERE id= $id ";
    $result = $conn->query($sql);

    if($row = $result->fetch_assoc()){
      $Voornaam = $row["Voornaam"];
      $Achternaam = $row["Achternaam"];
      $Datum = $row["geboortedatum"];
    }
    $conn->close();

  ?>

  <!DOCTYPE html>
    <html>
    <head>
      <title>Delete</title>
    </head>
      <body>
      <div align="center">
        <form class="" action="verwijder-process.php" method="post">
          <h3>Wilt u het onderstaande data verwijderen?</h3>
          <p>Voornaam: <?php  echo "$Voornaam"?>
          </p>
          <p>Achternaam: <?php echo "$Achternaam"?>
          </p>
          <p>Datum: <?php echo "$Datum"?>
          </p>
          <br />
          <input type="hidden" name="id" value="<?=  $id?>">
          <br />
          <input type="submit" name="delete" value="delete"/>
        </form>
      </div>
      </body>
  </html>
