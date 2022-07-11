<?php
session_start();
if (isset($_POST["logout"])) {
  $_SESSION['loggedIn'] = 0;
  header('Location: http://localhost:8080/projects/NewRental/');
}
//$_SESSION['loggedIn']=0;
if ($_SESSION['loggedIn'] == 0) {

  header('Location: http://localhost:8080/projects/NewRental/'); //redirecting to home page
}
// echo $_SESSION['loggedIn'] . "<br>";
include '../db.php';
$user = $_SESSION['username'];
$sql = "select balance from balance where username='$user'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$balance = $row["balance"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="dashboard.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="javascript:void(0)">MC Project</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <div class="d-flex" style="margin-left:auto;">
          <a>
            <form method="post">
              <input type="submit" name="logout" value="logout" class="btn btn-primary" />

            </form>
          </a>
        </div>
      </div>
    </div>
  </nav>
  <div>

    <div class="row">

      <div class="col-sm-6">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">Your Account Balance</h5>
            <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
            <div id="amount">&#8377 <?php echo $balance ?></div>
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card h-100">
          <div class="card-body cardblock">
            <h5 class="card-title">Block Your Card</h5>
            <p class="card-text">If your card is lost or you temporarly want to block card you can block here</p>
            <form action="block.php" method="post">
              <input type="text" name="username" hidden value="<?php echo $user ?>">
              <input id="blockButton" type="submit" value="BLOCK" class="btn btn-danger"></input>

            </form>
          </div>
        </div>
      </div>
      <?php
        $sql = "select active from customers where username='$user'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $status = $row["active"];
        if($status==0){
          echo "<script src='cardblock.js'></script>";
        }
      ?>
      <!-- <script src="cardblock.js"></script> -->
    </div>
  </div>
  <h1 id="trans">Your Previous Transactions:</h1>
  <?php

  // $servername = "localhost";
  // $username = "root";
  // $password = "";
  // $dbname = "rentalsystem";

  // $conn = new mysqli($servername, $username, $password, $dbname); // Create connection
  // if (mysqli_connect_errno()) {
  //   echo "Failed to connect to MySQL: " . mysqli_connect_error();
  // }

  $sql = "SELECT * FROM transactions WHERE username='$user' order by ID DESC";
  $result = $conn->query($sql);
  echo "
  <div id='table-div'>
  <table class='table table-striped'>
      <th>Sl.No</th>
      <th>Type</th>
      <th>entry time</th>
      <th>exit time</th>
      <th>opening balance</th>
      <th>closing balance</th>
      ";
  $sl = 1;
  while ($row = $result->fetch_assoc()) {

    echo "<tr>";
    echo "<td>" . $sl . "</td>";
    echo "<td>" . $row["type"] . "</td>";
    echo "<td>" . $row["entry_time"] . "</td>";
    echo "<td>" . $row["exit_time"] . "</td>";
    echo "<td>" . $row["opening_bal"] . "</td>";
    echo "<td>" . $row["closing_bal"] . "</td>";
    echo "</tr>";
    $sl++;
  }
  echo "</table> </div>";

  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
  

</html>