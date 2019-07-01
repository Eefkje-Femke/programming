<!DOCTYPE html>
<html>
  <head>
  <title>Databases</title>
  <link rel="stylesheet" href="style.css" />
  </head>
    <body>
      <div align="center">
        <h1>Vul hier uw Verjaardag in!</h1>
          <form method="post" action="eindopdracht-2.php">
            <p>Voornaam:
              <input type="text" name ="Voornaam"/>
            </p>
            <p>Achternaam:
              <input type="text" name="achternaam"/>
            </p>
            <p>Geboortedatum:
              <input type="date" name="geboortedatum"/>
            </p>
            <br />
            <input type="Submit" name="Submit" value="submit">
          </form>

              <?php
                $servername='localhost';
                $databasename= 'db_level2_eindopdr';
                $username= 'root';
                $password= '';

                // creat connection
                $conn = new mysqli($servername, $username, $password, $databasename);
                // check connection
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                  }
                echo "  ". "<br />";

                //koppel gegevens aan variable 
                @$Voornaam= $_POST["Voornaam"];
                @$Achternaam= $_POST["achternaam"];
                @$Datum= $_POST["geboortedatum"];

                $sql= "INSERT INTO eindopdracht (Voornaam, Achternaam, Geboortedatum) VALUES ( '$Voornaam', '$Achternaam', '$Datum')";
                $result= $conn->query($sql);

                if (isset($_POST["Submit"])) {
                  if ($result === TRUE) {
                      echo "New record created successfully";
                      header('Location: eindopdracht.php');
                  } else {
                      echo "Error: " . $sql . "<br>" . $conn->error;
                      }
                }

                $convert = date('Y-m-d', strtotime($Datum));


              $conn->close();

              ?>
        </div>
    </body>
</html>
