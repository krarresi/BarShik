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
        <nav class="nav-links">
            <a href="index.html" class="header-link">Main page</a>
             <a href="" class="header-link">Contacts</a>
             <a href="sign-in.php" class="header-link">Sign in</a>
            <a href="sign-up.php" class="header-link">Sign up</a>
             <a href="images/cart.png" class="header-link">
                 <img src="images/cart.png" alt="Cart">
                 <p class="nav-text">Cart</p>
             </a>
        </nav> 
        <div class="header-main-block">
             <h1 class="header-title">Welcome, User!</h1>
             <form action="sign-in-db.php" class="sign-in-form" method="POST">
                <label for="email"  class = "form-label">Email addres</label>
                <input type="email" name = "email" class="form-input">
                <label for="pass" class = "form-label">Password</label>
                <input type="password" name = "pass" class="form-input">
                <input type="submit" value = "Enter" class="form-submit">
                <a href="#" class="forgot-btn">Forgot your password ?</a>
             </form>
        </div>
     </header>

     <footer>
        <div class="footer-main">
            <div class="footer-elem">
                <h2 class="footer-title">Info</h2>
                <p class="footer-desc">Contrary to popular belief, Lorem Ipsum is not simply  years old Latin.</p>
                <div class="footer-img-links-block">
                    <img src="images/facebook.png" alt="Facebook" class="footer-img-link">
                    <img src="images/inst.png" alt="Instagram" class="footer-img-link">
                    <img src="images/twitter.png" alt="Twitter" class="footer-img-link">
                    <img src="images/youtube.png" alt="youTube" class="footer-img-link">
                </div>
            </div>
            <div class="footer-elem">
                <h2 class="footer-title">Explore</h2>
                <a href="#" class="footer-link">About Us</a>
                <a href="#" class="footer-link">Survices</a>
                <a href="#" class="footer-link">Our Team</a>
                <a href="#" class="footer-link">Trendy</a>
                <a href="#" class="footer-link">Gallery</a>
            </div>
            <div class="footer-elem">
                <h2 class="footer-title">Contact Us</h2>
                <a href="#" class="footer-link">45 Tooring High SL London SA17</a>
                <a href="#" class="footer-link">018123456789</a>
                <a href="#" class="footer-link">fizz@gmail.com</a>
            </div>
        </div>
        <div class="copyright-block">
            <p class="copyright-text">
                2024 msl & krarresi. All Right Reserved
            </p>
        </div>
        
    </footer>
</body>
</html>