<?php
if ($_SESSION['loggedIn'] == 0) {

    header('Location: http://localhost:8080/projects/NewRental/'); //redirecting to home page
}
include "../db.php";
$user=$_POST["username"];
    $sql = "select active from customers where username='$user'";
    $result = $conn->query($sql);
    $row=$result->fetch_assoc();
    $active=$row["active"];
    // echo $user;
    // echo "sm";
    if($active){
        $sql = "update customers set active=0 where username='$user'";
        $result = $conn->query($sql);
    }
    else{
        $sql = "update customers set active=1 where username='$user'";
        $result = $conn->query($sql);
    }
    header('Location: http://localhost:8080/projects/NewRental/dashboard/userdashboard.php');
// if(isset($_POST["blocktoggle"])){
    
// }
?>