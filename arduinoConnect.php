<html>

<body>
  <?php
  date_default_timezone_set('Asia/Kolkata');
  $idrs = $_GET["rfid"];
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "rentalsystem";

  $conn = new mysqli($servername, $username, $password, $dbname); // Create connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  //to get username from rfid
  $sql = "select username from customers where rfid=$idrs limit 1";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  if (!$row) {
    echo "invalid user";
    exit();
  }
  $user = $row["username"];   //exist
  // check balance
  $sql = "select balance from balance where username='$user' ";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $balance = $row["balance"];

  $sql = "select entry_time from active_users where username='$user' ";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();

  if (!$row) { //non active
    if ($balance < 500) {
      echo "low balance";
      exit("low balance");
    }
    $entry_time = date("Y-m-d H:i:s");
    // echo $entry_time;
    $sql = "insert into active_users (username,entry_time) values('$user','$entry_time')";
    $result = $conn->query($sql);
    echo "w" . $balance . ";".$user. ";";
    exit();
  }
  //active user
  $entry_time = $row["entry_time"];

  //active user
  $exit_time = date("Y-m-d H:i:s");
  //calculation
  $stp = strtotime($entry_time);
  $etp = strtotime($exit_time);
  $interval = $etp - $stp;
  //echo "<br> interval=" . $interval;
  $cf = 1; //conversion factor 1 rupee/sec
  $deduct = $cf * $interval;
  //echo "<br>" . $row["opening_bal"];
  $closing_bal = $balance - $deduct;
  $sql = "INSERT into transactions(username,opening_bal,closing_bal,type,entry_time,exit_time)
           values('$user',$balance,$closing_bal,'Debit','$entry_time','$exit_time')";
  $result = $conn->query($sql);
  echo "e" . $closing_bal . ";" . $user . ";";
  //delete from active
  $sql = "delete from active_users where username='$user'";
  $result = $conn->query($sql);
  //update bal
  $sql = "update balance set balance=$closing_bal where username='$user' ";
  $result = $conn->query($sql);
  // //echo $res;
  // if (!$res) { // about to exit null

  //   $sql = "update transactions set exit_time=now() where user='$user' order by id desc limit 1"; //set exit time
  //   // echo now();
  //   $result = $conn->query($sql);
  //   $sql = "select entry_time, exit_time, opening_bal from transactions where user='$user' order by id desc limit 1";
  //   $result = $conn->query($sql);
  //   $row = $result->fetch_assoc();
  //   $st = $row["entry_time"];
  //   //echo "<br>" . $st;
  //   $et = $row["exit_time"];
  //   $stp = strtotime($st);
  //   $etp = strtotime($et);
  //   $interval = $etp - $stp;
  //   //echo "<br> interval=" . $interval;
  //   $cf = 1; //conversion factor 1 rupee/sec
  //   $deduct = $cf * $interval;
  //   //echo "<br>" . $row["opening_bal"];
  //   $closing_bal = $row["opening_bal"] - $deduct;
  //   echo "e" . $closing_bal . ";" . $user . ";";
  //   $sql = "update transactions set closing_bal=$closing_bal where user='$user' order by id desc limit 1";
  //   $conn->query($sql);
  // } else { //re-entry
  //   $sql = "select closing_bal from transactions where user='$user' order by id desc limit 1";
  //   $result = $conn->query($sql);
  //   $row = $result->fetch_assoc();
  //   $balance = $row["closing_bal"];
  //   echo "w" . $balance . ";" . $user . ";";
  //   if ($balance < 0) {
  //     echo "hi";
  //   } else {
  //     $sql = "INSERT into transactions(user,entry_time,opening_bal,type) values('$user',now(),$balance,'Debit')";
  //     $result = $conn->query($sql);
  //   }
  // }
  // if (mysqli_connect_errno()) {
  //   echo "Failed to connect to MySQL: " . mysqli_connect_error();
  // }

  $conn->close();
  ?>

  </head>

</html>