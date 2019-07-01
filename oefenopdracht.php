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
        <form method="post" action="try_out.php">
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

              $sql = "SELECT * FROM  songs";
              $result= $conn->query($sql);

              if ($result->num_rows > 0) {
                echo "<table>";
                echo "<th>id</th>". "<th>artist</th>". "<th>title</th>";
                while ($row = $result->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>". $row["id"]."</td><td>". $row["artist"]."</td><td>". $row["title"] ."</td><td><a href='http://localhost/Databases/oefenopdracht%20songs%20lvl2/try_out.php?id=" . $row["id"] . "'>
                    <button type=\"button\" name=\"button\">Edit</button></a></td> <td><a href='http://localhost/Databases/oefenopdracht%20songs%20lvl2/delete.php?id=" . $row["id"] . "'>
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
        </form>
          <form method="post" action="oefenopdracht4.php">
            <a href="http://localhost/Databases/oefenopdracht4.php"><input type="submit" name="terug" value="terug"></a>
        </form>
  </body>
</html>
