<!DOCTYPE html>
  <head>
    <title>eindopdracht_databases</title>
    <link rel="stylesheet" href="style.css" />
    <style>
    table, td, th {
    border: 1px solid black;
    padding: 8px;
    text-align: center;
    }
    table{
      border-collapse: collapse;
    }
    </style>
  </head>
<html>
  <body>
    <div align="center">
        <?php
        //connecting with database
        $servername='localhost';
        $databasename= 'db_level2_eindopdr';
        $username= 'root';
        $password= '';


        //calculating age
        function Leeftijd($userDob){
          $dob = new DateTime($userDob);
          $now = new DateTime();
          $difference = $now->diff($dob);
          $age = $difference->y;
          $month = $difference->m;
          $day = $difference->d;
          return "$age jaar, $month maanden en $day dagen";
        }

        // creat connection
        $conn = new mysqli($servername, $username, $password, $databasename);
        // check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
          }
        echo " ". "<br />";

        //selecting evrything
        $sql = "SELECT * FROM  eindopdracht";
        $result= $conn->query($sql);

        //tabel opvragen
        if ($result->num_rows > 0) {
          echo "<table>";
          echo "<th>id</th>". "<th>Voornaam</th>". "<th>Achternaam</th>". "<th>Geboortedatum</th>". "<th>Leeftijd</th>";
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>". $row["id"]."</td><td>". $row["Voornaam"]."</td><td>". $row["Achternaam"] ."</td><td>". $row["geboortedatum"] ."</td><td>" . leeftijd($row['geboortedatum']) . "</td><td><a href='http://localhost/Databases/eindopdrachtlvl2/edit.php?id=" . $row["id"] . "'>
              <button type=\"button\" name=\"button\">Edit</button></a></td> <td><a href='http://localhost/Databases/eindopdrachtlvl2/verwijder.php?id=" . $row["id"] ."'>
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
         <form method="post" action="eindopdracht-2.php">
           <a href="eindopdracht-2.php"><input type="submit" name="terug" value="terug"> </a>
       </form>
    </div>
  </body>
</html>
