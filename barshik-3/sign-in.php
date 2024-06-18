<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sign-in_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header>
    <?php require_once "header.php" ?>
        <div class="header-main-block">
            <h1 class="header-title">Добро пожаловать, Пользователь!</h1>
            <form action="sign-in-db.php" class="sign-in-form" method="POST">
                <label for="email"  class = "form-label">Адрес электронной почты</label>
                <input type="email" name = "email" class="form-input">
                <label for="pass" class = "form-label">Пароль</label>
                <input type="password" name = "pass" class="form-input">
                <input type="submit" value = "Войти" class="form-submit">
                <a href="#" class="forgot-btn">Забыли пароль?</a>
            </form>
        </div>
     </header>

<?php require_once "footer.php" ?>
    
</body>
</html>