<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="../assets/css/style_login.css">
</head>
<body>
<form action="vender/sign_in_5.php" method="post">
    <img src="<?= $_SESSION['user']['avatar']?>" width="200" alt="">
    <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name']?></h2>
    <a href="#"><?= $_SESSION['user']['email']?></a>
    <a href="vender/logout.php" class="logout"><br>выход</a>
</form>

</body>
</html>

