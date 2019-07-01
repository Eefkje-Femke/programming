<!DOCTYPE html>
<html>
  <head>
  <title>Databases</title>
  <link rel="stylesheet" href="style.css" />
  </head>
    <body>
      <h1>Vul hier uw lievelingsliedje in!</h1>
      <fieldset>
        <form method="post" action="oefenopdracht.php">
          <p>Title:
            <input type="text" name ="t1"/>
          </p>
          <p>Artist:
            <input type="text" name="t2"/>
          </p>
          <br />
          <a href="http://localhost/Databases/oefenopdracht.php"><input type="Submit" name="Submit" value="Submit"> </a>
        </form>

        <?php

          $servername='localhost';
          $databasename= 'db_level2_opdr1';
          $username= 'root';
          $password= '';

          $conn = new mysqli($servername, $username, $password, $databasename);

          // check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
          echo "Connected successfully". "<br />";


          if (isset($_POST["Submit"])) {
            $Title= $_POST["t1"];
            $Artist= $_POST["t2"];
          }


          $sql= "INSERT INTO songs (artist, title) VALUES ( '$Artist', '$Title')";
          $result= $conn->query($sql);


          $conn->close();


        ?>
      </fieldset>
    </body>
</html>
