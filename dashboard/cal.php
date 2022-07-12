<?php

    date_default_timezone_set('Asia/Kolkata');
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "rentalsystem";
    include '../db.php';
    // include 'includes/domain.php';
    include "../includes/domain.php";
    //echo "came";
    $user=$_POST['user'];
    //echo $user;
    // $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "select balance from balance where username='$user'";
    $res = $conn->query($sql);
    $row = $res->fetch_assoc();
    $amount = $_POST['amount'];
    echo "re". $amount;
    $prev=$row["balance"];
    echo "bal". $prev;
    $amount = $amount+$prev;
    $entry_time = date("Y-m-d H:i:s");
    //echo $row["closing_bal"];
    echo $amount;
    $sql = "insert into transactions(username,type,entry_time,opening_bal,closing_bal)
    values('$user','Credit','$entry_time',$prev,$amount)";
    $res = $conn->query($sql);
    echo $conn -> error;
    // update balance
    $sql="update balance set balance=$amount where username='$user'";
    $res = $conn->query($sql);
    echo $conn -> error;
    // header("Location: https://rentmcproject.000webhostapp.com/dashboard/admindashboard.php");
    header('Location: '.$domain.'/dashboard/admindashboard.php');

?>