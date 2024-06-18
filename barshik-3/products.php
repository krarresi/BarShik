<?php
session_start();
require "connect.php";

$query = "SELECT * FROM products";
$result = $conn->query($query);
$productsAll = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <title>Товары</title>
</head>
<body>

<header>
<?php require_once "header.php" ?>
    <div class="header-main-block">
        <h1 class="header-title">Наши товары</h1>
        <p class="header-desc">Выберите ваш любимый напиток</p>
    </div>
</header>

<main>
    <div class="catalog">
        <?php foreach ($productsAll as $item): ?>
            <div class="card">
                <img class="card-img" src="images/<?= htmlspecialchars($item['image']) ?>" alt="Изображение товара">
                <h3 class="card-subtitle">All new</h3>
                <h2 class="card-title"><?= htmlspecialchars($item['name']) ?></h2>
                <p class="card-price"><?= htmlspecialchars($item['price']) ?> ₽</p>
                <button class="product_card__btn">
                    <a href="cart.php?item=<?= htmlspecialchars($item['id']) ?>">Добавить в корзину</a>
                </button>
            </div>
        <?php endforeach; ?>
    </div>
</main>
<?php require_once "footer.php" ?>

</body>
</html>
