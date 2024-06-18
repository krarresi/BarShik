<?php
require_once "connect.php";

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$pass_check = $_POST['pass_check'];

if($pass === $pass_check){
    $add = mysqli_query($conn, "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$pass')");
    header('location: sign-in.php');
}
?>