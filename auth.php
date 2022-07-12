<?php
function redirect($url) {
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
}
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "rentalsystem";
//   $conn = new mysqli($servername, $username, $password, $dbname); // Create connection
//   if (mysqli_connect_errno()) {
//     echo "Failed to connect to MySQL: " . mysqli_connect_error();
//   }
include 'db.php';
include 'includes/domain.php';
if($_SERVER['REQUEST_METHOD'] == "POST"){
    //echo $_GET["uname"];
    $username = $_POST['uname'];
    $password = $_POST['psw'];
    $passwordmd5=md5($password);
    $stmt = $conn->query("SELECT username, password FROM credentials WHERE username='$username' AND  password='$passwordmd5' LIMIT 1");
    
    $row=$stmt->fetch_assoc();
    $url="https://rentmcproject.000webhostapp.com/dashboard/userdashboard.php";
     //header('Location: https://rentmcproject.000webhostapp.com/dashboard/userdashboard.php');
    if($stmt->num_rows == 1) { //To check if the row exists
        
        
        $stmt->close();
        //echo "successfullll";
        session_start();
        $_SESSION['loggedIn'] = true;
        //$_SESSION['user_id'] = 0;
        $_SESSION['username'] = $username;
        //echo $_SESSION['loggedIn'];
        
        //sleep(3);
        if($username=="admin"){
            // echo "success";
            header('Location: '. $domain .'/dashboard/admindashboard.php');
        }
        else
        header('Location: '. $domain .'/dashboard/userdashboard.php');
        exit();
        
    }
    else{
        $_SESSION['loggedIn'] = false;
        echo "wrong pass";
    }
}
