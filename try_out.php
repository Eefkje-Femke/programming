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
    <title>try_out</title>
  </head>
    <body>
      <form class="" action="try_out_process.php" method="post">
        <fieldset>
          <h3>Verander hier uw liedje!</h3>
          <p>Arist:
            <input type="text" name="artist" value="<?= $Artist?>"/>
          </p>
          <p> Title:
            <input type="text" name="title" value="<?= $Title?>"/>
          </p>
          <input type="submit" name="edit" value="edit">
          <br />
          <input type="hidden" name="id" value="<?=  $id?>">
        </fieldset>
      </form>
    </body>
</html>
