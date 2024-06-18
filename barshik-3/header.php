<?php 
session_start();
?>


<nav class="nav-links">
        <a href="index.php" class="header-link">Главная страница</a>
        <a href="products.php" class="header-link">Товары</a>
        <?php if(!empty($_SESSION['email'])) {
            if($_SESSION['email'] == 'admin@mail.com') { ?>
            <a href="product-control-panel.php" class="header-link">Управление товарами</a>
            <a href="stats.php" class="header-link">Статистика</a>
            <a href="sign-out.php" class="header-link">Выход</a>

        <?php } else { ?>
            <a href="profile.php" class="header-link">Личный кабинет</a>
            <a href="cart.php" class="header-link">
                <img src="images/cart.png" alt="Корзина">
                <p class="nav-text">Корзина</p>
            </a>
            <a href="sign-out.php" class="header-link">Выход</a>

        <?php }

        } else { ?>
            <a href="sign-in.php" class="header-link">Войти</a>
            <a href="sign-up.php" class="header-link">Зарегистрироваться</a>
        <?php }?>
        

        
    </nav>