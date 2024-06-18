<?php
require_once "connect.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/profile_style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Barshik</title>
</head>
<body>

<header>
<?php require_once "header.php" ?>
       <div class="user-wrapper">
            <div class="user-block">
                <img src="images/user-image.png" alt="" class="user-image">
                <h2 class="username">Имя пользователя</h2>
                <div class="number-of-bonuses-block">
                        <p class="bonuses">количество бонусов:</p>
                        <p class="number">100</p>
                </div>
            </div>
        <div class="user-block">
                <!-- <form action="" class="profile-form">
                        <label for="email"  class = "form-label">Адрес электронной почты</label>
                        <input type="email" name = "email" class="form-input">
                        <label for="pass" class = "form-label">Пароль</label>
                        <input type="password" class="form-input">
                        <input type="submit" value = "Войти" class="form-submit">
                </form> -->
                <a href="" class="history">История заказов</a>
                <form action="" class="comment-form">
                    <div class="comment-create">
                        <label for="comment">Форма отзывов о заказе :</label>
                        <select name="" id="">
                            <option value="">заказ №1</option>
                        </select>
                    </div>
                    <textarea name="comment"></textarea>
                    <input type="submit" value = "Отправить" class="form-send">
                </form>
        </div>
       </div>
       
</header>
<?php require_once "footer.php" ?>


<!-- <footer>
        <div class="footer-main">
            <div class="footer-elem">
                <h2 class="footer-title">Информация</h2>
                <p class="footer-desc">Несмотря на популярное мнение, Lorem Ipsum не просто старинный латинский текст, а изначально служил текстом-придумкой для композиторов.</p>
                <div class="footer-img-links-block">
                    <img src="images/facebook.png" alt="Facebook" class="footer-img-link">
                    <img src="images/inst.png" alt="Instagram" class="footer-img-link">
                    <img src="images/twitter.png" alt="Twitter" class="footer-img-link">
                    <img src="images/youtube.png" alt="YouTube" class="footer-img-link">
                </div>
            </div>
            <div class="footer-elem">
                <h2 class="footer-title">Обследование</h2>
                <a href="#" class="footer-link">О нас</a>
                <a href="#" class="footer-link">Услуги</a>
                <a href="#" class="footer-link">Наша команда</a>
                <a href="#" class="footer-link">Тренды</a>
                <a href="#" class="footer-link">Галерея</a>
            </div>
            <div class="footer-elem">
                <h2 class="footer-title">Свяжитесь с нами</h2>
                <a href="#" class="footer-link">45 Туринг Хай СЛ Лондон SA17</a>
                <a href="#" class="footer-link">018123456789</a>
                <a href="#" class="footer-link">fizz@gmail.com</a>
            </div>
        </div>
        <div class="copyright-block">
            <p class="copyright-text">
                2024 msl & krarresi. Все права защищены
            </p>
        </div>
        
    </footer> -->

</body>
</html>