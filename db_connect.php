<?php

  function db_connect(){
    //connecting with database
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
    echo " ". "<br />";
    return $conn;
  }

?>
