
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
        <form class="search-cont" >
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
            <form action="vender/sign_up_4.php" method="post" enctype="multipart/form-data">
            <div class="form-container">
                <div class="form-title">Добро пожаловать в Спун!</div>

                    <div class="form-auth">
                        <label >Имя</label>
                        <input type="text" name="full_name"  placeholder="Имя">
                    </div>
                    <div class="form-auth">
                        <label>Логин</label>
                        <input type="text" name="login"  placeholder="Логин">
                    </div>
                    <div class="form-auth">
                        <label>Email</label>
                        <input type="email"  name="email"  placeholder="Email">
                    </div>
                    <div class="form-auth">
                        <label>Пароль</label>
                        <input type="password" name="password"  placeholder="Пароль">
                    </div>
                    <div class="form-auth">
                        <label>Повторите пароль</label>
                        <input type="password" name="password_confirm" placeholder="Пароль">
                    </div>
                <p class="form-autd">
                    <?php
                    if(isset($_SESSION['message'])){
                        echo $_SESSION['message'];
                    }

                    unset($_SESSION['message']);
                    ?>
                </p>
                <div class="form-auth">
                    <label>Добавить аватар </label>
                    <input type="file" name="avatar">
                </div>
                    <div class="auth-btn-container">
                    <div class="auth-btn">
                        </div>

                        <p> <input type="submit" class="submit-auth" value="зарегистрироваться"> </p></div>
                </form>
                <div class="register-link-cont">
                    <div class="reg">Уже есть аккаунт ? </div>
                </div>
                <a href="index_1.php" class="reg-link">
                    Войти
                </a>

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
            <li><a href="index.html" class="a-vid">Главная</a></li>
            <li><a href="add_post.html" class="a-vid">Создать</a></li>
            <li><a href="galerey.html" class="a-vid">Галерея</a></li>
            <li><a href="login.html" class="a-vid">Войти</a></li>
            <li><a href="https://ru.freepik.com/photos/%D0%BA%D0%BE%D1%82%D1%8F%D1%82%D0%B0" class="a-vid">О нас</a></li>
        </ul>
    </div>
</footer>
</body>
</html>