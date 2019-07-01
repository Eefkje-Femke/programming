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


    $sql="SELECT * FROM eindopdracht WHERE id= $id";
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
    <title>edit</title>
  </head>
    <body>
      <div align="center">
        <form class="" action="edit-process.php" method="post">
          <h3>Verander hier uw Verjaardag!</h3>
          <p>Voornaam:
            <input type="text" name="Voornaam" value="<?php echo $Voornaam?>"/>
          </p>
          <p> Achternaam:
            <input type="text" name="Achternaam" value="<?php echo $Achternaam?>"/>
          </p>
          <p> Datum:
            <input type="date" name="Datum" value="<?php echo $Datum?>"/>
          </p>
          <input type="hidden" name="id" value="<?php echo $id?>">
            <input type="submit" name="edit" value="edit">
              <br />
        </form>
    </div>
    </body>
</html>
