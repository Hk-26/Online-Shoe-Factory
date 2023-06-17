<?php

session_start();
include '../../includes/connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM `admin` WHERE username = '$username' && `password` = '$password'";
$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $username;
    header('location:../pages/admin_pannel.php');
}
else{
    header('location:../admin_login.php');
}

?>