<?php

if (isset($_COOKIE['ID'])) {

session_start();
require_once "connect.php";
$id_user = $_COOKIE["id"];

$id_jewel = $_POST["id_jewel"];
$count = $_POST["count"];
$result = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM orders WHERE user_id = '$id_user'"));
if ($result != NULL) {
    $idOrder = $result['id'];
    // var_dump("SELECT * FROM Orders WHERE ID_users = '$id_user'");
    $check = mysqli_query($conn, "SELECT * FROM listOrder WHERE id_products = $id_jewel");
    if (mysqli_num_rows($check) == 0) {
        if (isset($id_jewel) && isset($count)) {
            $query = mysqli_query($conn, "INSERT INTO listOrder (id_products, id_orders, count) VALUES ('$id_jewel', '$idOrder', '$count')");
            echo "<script>
            alert('Товар добавлен в корзину!');
            location.href = 'products.php?item=$id_jewel';

            </script>";
        } else {
            echo "<script>
            alert('Ошибка!');
            location.href = 'products.php?item=$id_jewel';

            </script>";
        }
    } else {
        echo "<script>
            alert('Не наглеем! Этот товар можно добавить один раз!');
            location.href = 'products.php?item=$id_jewel';

            </script>";
    }
} else {
    $dateOrder = date("Y-m-d");
    $Ins = mysqli_query($conn, "INSERT INTO orders(user_id, order_date, get_orderf, cost) VALUES ('$id_user','$dateOrder','$dateOrder','$count')");
    $query_id = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM orders ORDER BY id Desc"));
    $idOrder = $query_id['id'];
    $check = mysqli_query($conn, "SELECT * FROM listOrder WHERE id_products = $id_jewel");
    if (mysqli_num_rows($check) == 0) {
        if (isset($id_jewel) && isset($count)) {
            $query = mysqli_query($conn, "INSERT INTO listOrder (id_products, id_orders, count) VALUES ('$id_jewel', '$idOrder', '$count')");
            echo "<script>
            alert('Товар добавлен в корзину!');
            location.href = 'products.php?item=$id_jewel';

            </script>";
        } else {
            echo "<script>
            alert('Ошибка!');
            location.href = 'products.php?item=$id_jewel';

            </script>";
        }
    } else {
        echo "<script>
            alert('Не наглеем! Этот товар сделан вручную и можно добавить один раз!');
            location.href = 'products.php?item=$id_jewel';

            </script>";
    }
}
}else {
    echo "<script>
    alert('Пожалуйста, войдите в аккаунт!');
    location.href = 'index.php';
    </script>";
    exit;
}
?>

