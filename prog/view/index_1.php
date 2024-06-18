<?php
session_start();
if(isset($_SESSION['user'])){
    header('Location: profile.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/style_header_footer.css">
    <link rel="stylesheet" href="../assets/css/style_login.css">
    <title>Document</title>
</head>
<body>
<header class="main-header">
    <div class="plans-left"><img src="../assets/img/plans-left.png"></div>
    <div class="header-content">
        <div class="header-nav">
            <a href="index.html">Главная</a>
            <a href="add_post.html">Создать</a>
            <a href="galerey.html">Галерея</a>
        </div>
        <form class="search-cont">
            <input type="text" class="search-input" placeholder="поиск">
            <label for="search-btn"><div class="img-search"></div></label>
            <input id="search-btn" type="submit">
        </form>
        <div class="login-linc-cont">
            <a href="login.html" class="login-linc">
                <div class="image-login"><img src="../assets/img/login_img.png" width="30"></div>
                <div class="text-login-linc">Войти</div>
            </a>
        </div>
    </div>
    <div class="plans-right"><img src="../assets/img/plans-right.png"></div>
</header>
<main>
<header class="main-header-mobile">
    <div class="header-content-mobile">
        <div class="mobile-logo-container">
            Spoon
            <div class="image-logo"></div>
        </div>
        <form class="search-cont">
            <input type="text" class="search-input" placeholder="поиск">
            <label for="search-btn"><div class="img-search"></div></label>
            <input id="search-btn" type="submit">
        </form>
        <div class="login-linc-cont">
            <a href="login.html" class="login-linc">
                <div class="image-login"><img src="../assets/img/login_img.png" width="30"></div>
                <div class="text-login-linc">Войти</div>
            </a>
        </div>
    </div>
    <div class="header-bottom-mobile">
        <div class="header-nav">
            <a href="index.html">Главная</a>
            <a href="add_post.html">Создать</a>
            <a href="galerey.html">Галерея</a>
        </div>
    </div>
</header>
    <div class="content">
        <div class="auth-form-container">
            <div class="image-auth">

                <img src="../assets/img/auth_img.png" width="200">

            </div>
            <div class="form-container">
                <div class="form-title">Добро пожаловать в Спун!</div>
                <p class="text-center title-two">Вход</p>
                <form class="form" action="vender/sign_in_5.php" method="post">
                    <div class="form-auth">
                        <label>Логин</label>
                        <input type="text" placeholder="Логин" name="login">
                    </div>
                    <div class="form-auth">
                        <label>Пароль</label>
                        <input type="password" placeholder="Пароль" name="password">
                    </div>
                    <input type="submit" class="submit-auth" value="Вход">
                </form>
                <div class="text-center ili">ИЛИ</div>
                <div class="auth-btn-container">
                    <div class="auth-btn"><div>Google</div></div>
                    <div class="auth-btn"><div>Вконтакте</div></div>
                </div>
                <div class="register-link-cont">
                    <div class="reg">Нет аккаунта ?</div>
                </div>
                <a href="index_2.php" class="reg-link">
                    Зарегистрироваться
                </a>
                <p class="form-autd">
                    <?php
                    if(isset($_SESSION['message'])){
                        echo $_SESSION['message'];
                    }

                    unset($_SESSION['message']);
                    ?>
                </p>
            </div>
        </div>
    </div>
</main>
<footer>
    <div class="footer-logo">Spoon</div>
    <div class="footer-contact-block">
        <b>Контакты</b>
        <div>
            <br>Email: dariababaeva1@gmail.com
            <br>Инстаграмм:
        </div>
    </div>
    <div class="footer-nav-block">
        <b>Информация</b>
        <ul>
            <li><a  class="a-vid">Главная</a></li>
            <li><a class="a-vid">Создать</a></li>
            <li><a  class="a-vid">Галерея</a></li>
            <li><a class="a-vid">Войти</a></li>
            <li><a class="a-vid">О нас</a></li>
        </ul>
    </div>
</footer>
</body>
</html>