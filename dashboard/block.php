<?php
include 'includes/domain.php';
if ($_SESSION['loggedIn'] == 0) {

    header('Location: '.$domain); //redirecting to home page
    
}
include "../db.php";
include "../includes/domain.php";
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
    header('Location: ' .$domain . '/dashboard/userdashboard.php');
// if(isset($_POST["blocktoggle"])){
    
// }
?>