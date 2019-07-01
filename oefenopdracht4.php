<!DOCTYPE html>
<html>
  <head>
  <title>Databases</title>
  <link rel="stylesheet" href="style.css" />
  </head>
    <body>
      <h1>Vul hier uw lievelingsliedje in!</h1>
      <fieldset>
        <form method="post" action="oefenopdracht4.php">
          <p>Title:
            <input type="text" name ="title"/>
          </p>
          <p>Artist:
            <input type="text" name="artist"/>
          </p>
          <br />

          <input type="Submit" name="Submit" value="submit">
        </form>
            <?php
              $servername='localhost';
              $databasename= 'db_level2_opdr1';
              $username= 'root';
              $password= '';

              // creat connection
              $conn = new mysqli($servername, $username, $password, $databasename);
              // check connection
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }
              echo "  ". "<br />";

              @$Title= $_POST['title'];
              @$Artist= $_POST['artist'];

              $sql= "INSERT INTO songs (artist, title) VALUES ( '$Artist', '$Title')";
              $result= $conn->query($sql);

              if (isset($_POST["Submit"])) {
                if ($result === TRUE) {
                    echo "New record created successfully";
                    header("Location:oefenopdracht.php");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
              }
              $conn->close();

            ?>
      </fieldset>
    </body>
</html>
