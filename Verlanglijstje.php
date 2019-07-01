<!DOCTYPE html>
<html>
  <head>
  <title>Databases</title>
    <style>
    td {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 5px;
    }
    </style>
  </head>
    <body>
      <?php
      //connecting with database
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
        echo " ". "<br />";


        $sql= "SELECT * FROM `verlanglijstje`";
        $result= $conn->query($sql);

        if ($result->num_rows > 0) {
          echo "<table>";
          echo "<th>id</th>". "<th>Prijs</th>". "<th>Omschrijving</th>". "<th>Waar?</th>". "<th>Webadres</th>";
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>". $row["id"]."</td><td>". $row["Prijs"]."</td><td>". $row["Omschrijving"] ."</td><td>". $row["Waar"] ."</td><td>". $row["Webadres"] . "</td><td><a href='http://localhost/Databases/oefenopdracht%208%20lvl2/edit.php?id=" . $row["id"] . "'>
              <button type=\"button\" name=\"button\">Edit</button></a></td> <td><a href='http://localhost/Databases/oefenopdracht%208%20lvl2/delete.php?id=" . $row["id"] . "'>
                <button type=\"button\" name=\"button\">Delete</button></a></td>";
            echo "</tr>";
          }
          echo "</table>";
        } else {
          echo "0 results";
        }

        $conn->close();

        ?>
      <br />
      <a href="toevoeg.php"><input type="submit" name="terug" value="terug"></a>
  </body>
</html>
