<!DOCTYPE html>
<html>
  <head>
  <title>Databases</title>
  <link rel="stylesheet" href="style.css" />
  </head>
    <body>
      <h1>Vul hier leuke cadeautjes in!</h1>
      <fieldset>
        <form method="post" action="toevoeg.php">
          <p>Prijs:
            <input type="text" name ="Prijs"/>
          </p>
          <p>Omschrijving:
            <input type="text" name="Omschrijving"/>
          </p>
          <p>Waar?:
            <input type="text" name="Waar"/>
          </p>
          <p>Webadres:
            <input type="text" name="Webadres"/>
          </p>
          <br />

          <input type="Submit" name="Submit" value="submit">
        </form>
            <?php
              $servername='localhost';
              $databasename= 'db_level2_opdr2';
              $username= 'root';
              $password= '';

              // creat connection
              $conn = new mysqli($servername, $username, $password, $databasename);
              // check connection
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }
              echo "  ". "<br />";

              @$Prijs= $_POST['Prijs'];
              @$Omschrijving= $_POST['Omschrijving'];
              @$Waar= $_POST['Waar'];
              @$Webadres= $_POST['Webadres'];

              $sql= "INSERT INTO verlanglijstje (Prijs, Omschrijving, Waar, Webadres) VALUES ( '$Prijs', '$Omschrijving', '$Waar', '$Webadres')";
              $result= $conn->query($sql);


              if (isset($_POST["Submit"])) {
                if ($result === TRUE) {
                    echo "New record created successfully";
                    header("Location:verlanglijstje.php");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
              }
              $conn->close();

            ?>
      </fieldset>
    </body>
</html>
