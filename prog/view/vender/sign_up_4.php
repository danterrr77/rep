<pre>
    <?php
    print_r($_FILES['avatar']['name']);
    ?>
</pre>

<?php
session_start();
require_once 'conect_3.php';

$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if($password == $password_confirm){
//    $password = md5($password);
//    echo $password;
    $path = 'uploadss/' . time() . $_FILES['avatar']['name'];
    if (move_uploaded_file($_FILES['avatar']['tmp_name'] , '../' . $path)){
        $_SESSION['message']= 'ошибка при загрузке изображения';
        header('Location: ../index_2.php');
    }
    $password = md5($password);
    $sql = "INSERT INTO `users` (`id`, `name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')" ;

    mysqli_query($dbc, $sql);
    $_SESSION['message']= 'Регистрация выполнена ';
    header('Location: ../index_1.php');
}else{
    $_SESSION['message'] = 'Пароли не совпадают ';
    header('Location: ../index_2.php');
}
