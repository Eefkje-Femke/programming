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
        echo "Connected successfully". "<br />";

        $sql = "SELECT * FROM  songs";
        $result= $conn->query($sql);

        if ($result->num_rows > 0) {
          echo "<table>";
          echo "<th>id</th>". "<th>artist</th>". "<th>title</th>";
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td> ". $row["id"]."</td><td>  ". $row["artist"]. ",</td><td>  " . $row["title"] ."</td>";
            echo "</tr>";
          }
          echo "</table>";        
        } else {
          echo "0 results";
        }

        $conn->close();

    ?>

    <body>
    <br />
    <a href="http://localhost/Databases/oefenopdracht4.php"><input type="submit" name="terug" value="terug"> </a>
  </body>
</html>
