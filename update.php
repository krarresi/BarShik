<?php
require_once "connect.php";

$id = isset($_POST['id']);
$name = isset($_POST['name']);
$category = isset($_POST['category']);
$price = isset($_POST['price']);
$description = isset($_POST['desc']);

$result = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * from `Product` WHERE Id_product = '$id'"));

if($result[] != $name ){

}
$update_request = mysqli_query($connect, "DELETE FROM `Product` WHERE Id_product = '$delete_product'");


    // if($id and $name and $price and $category and $description){
    //     $update_product = mysqli_query($connect, UPDATE `Product` SET `Id_product`='[value-1]',`Name`='[value-2]',`Description`='[value-3]',`Category_id`='[value-4]',`Price`='[value-5]',`Image`='[value-6]')
    // }
?>