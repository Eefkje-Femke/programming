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
      $Prijs = $row["Prijs"];
      $Omschrijving = $row["Omschrijving"];
      $Waar = $row["Waar"];
      $Webadres = $row["Webadres"];
    }
    $conn->close();

  ?>

  <!DOCTYPE html>
    <html>
    <head>
      <title>Delete</title>
    </head>
      <body>
        <form class="" action="delete-process.php" method="post">
          <fieldset>
            <h3>Wilt u het onderstaande cadeau verwijderen?</h3>
            <p>Prijs: <?php  echo $Prijs?>
            </p>
            <p>Omschrijving: <?php echo $Omschrijving?>
            </p>
            <p>Waar: <?php echo $Waar?>
            </p>
            <p>Webadres: <?php echo $Webadres?>
            </p>
            <br />
            <input type="hidden" name="id" value="<?= $id?>">
            <br />
            <input type="submit" name="delete" value="delete"/>
          </fieldset>
        </form>
      </body>
  </html>
