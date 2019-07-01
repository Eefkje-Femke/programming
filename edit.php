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


    $id = $_GET['id'];


    $sql="SELECT * FROM verlanglijstje WHERE id= $id";
    $result = $conn->query($sql);

    if($row = $result->fetch_assoc()){
      $Prijs= $row['Prijs'];
      $Omschrijving= $row['Omschrijving'];
      $Waar= $row['Waar'];
      $Webadres= $row['Webadres'];
    }


    $conn->close();

 ?>
<!DOCTYPE html>
  <html>
  <head>
    <title>edit</title>
  </head>
    <body>
      <form class="" action="edit-process.php" method="post">
        <fieldset>
          <h3>Verander hier uw Cadeau!</h3>
          <p>Prijs:
            <input type="text" name="Prijs" value="<?php echo $Prijs?>"/>
          </p>
          <p> Omschrijving:
            <input type="text" name="Omschrijving" value="<?php echo $Omschrijving?>"/>
          </p>
          <p> Waar:
            <input type="text" name="Waar" value="<?php echo $Waar?>"/>
          </p>
          <p> Webadres:
            <input type="text" name="Webadres" value="<?php echo $Webadres?>"/>
          </p>
          <input type="hidden" name="id" value="<?php echo $id?>">
          <input type="submit" name="edit" value="edit">
          <br />
        </fieldset>
      </form>
    </body>
</html>
