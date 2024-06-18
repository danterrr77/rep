<?php

session_start();
require_once 'conect_3.php';

$login = $_POST['login'];
$password = md5($_POST['password']);

$check_user = mysqli_query($dbc, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

if(mysqli_num_rows($check_user)>0){
    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['user'] = [
        "id" => $user['id'],
        "full_name" => $user['full_name'],
        "avatar" => $user['avatar'],
        "email" => $user['email'],
    ];
    header('Location: ../profile.php');
}else{
    $_SESSION['message']= ' Неверный логин или пароль ';
    header('Location: ../index_1.php');
}


