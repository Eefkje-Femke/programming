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

    $id = $_GET['id'];

    $sql="SELECT * FROM songs WHERE id=" . $id . ";";
    $result = $conn->query($sql);

    if($row = $result->fetch_assoc()){
      $Artist = $row["artist"];
      $Title  = $row["title"];
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
            <h3>Wilt u het onderstaande liedje verwijderen?</h3>
            <p>Artist: <?php  echo "$Artist"?>
            </p>
            <p> Title: <?php echo "$Title"?>
            </p>
            <br />
            <input type="hidden" name="id" value="<?=  $id?>">
            <br />
            <input type="submit" name="delete" value="delete"/>
          </fieldset>
        </form>
      </body>
  </html>
