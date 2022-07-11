<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "rentalsystem";

  $conn = new mysqli($servername, $username, $password, $dbname); // Create connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>