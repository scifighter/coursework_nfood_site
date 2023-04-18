<?php

    session_start();
    require_once "dbConnect.php";

    $id = NULL;
    $login = $_POST["name"];
    $password = md5($_POST["password"]);
    $level = 0;

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `name` = '$login' AND `password` = '$password'");

    $user = mysqli_fetch_assoc($check_user);
    if (mysqli_num_rows($check_user) > 0)   {

        $_SESSION['user'] = [
            "name" => $user['name'],
            "level" => $user['level'],
        ];
        $_SESSION['message'] = 'Успешный вход';
        header('Location: auth.php');
    } else {
        $_SESSION['message'] = 'Неправильное имя пользователя или пароль';
        header('Location: auth.php');
    }
?>