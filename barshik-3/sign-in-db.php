<?php
require_once "connect.php";
session_start();

// $email = $_POST['email'];
// $pass = $_POST['pass'];

// $passed = mysqli_query($connect, " INSERT INTO `Users`(`User_id`, `Email`, `Password_hash`, `Bonus_points`) VALUES (NULL,'$email','$pass','0'");
// $passed_check = mysqli_fetch_assoc($passed);


$email = $_POST['email'];
$pass = $_POST['pass'];



$querryUser = mysqli_query($conn, "SELECT * FROM `users` WHERE  `email` = '$email' and `password` = '$pass'");
$querryUser = mysqli_fetch_assoc($querryUser);
if($email != 'admin@mail.com' and $pass != 'admin'){
    $_SESSION['email'] = $email;
    $_SESSION['id_user'] = $querryUser['id'];
    var_dump($_SESSION['id_user']);
    header("Location: profile.php");
} else{
    header("Location: admin-page.html");
}

?>