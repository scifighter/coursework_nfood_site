<?php

    session_start();
    require_once "dbConnect.php";

    $id = NULL;
    $login = $_POST["login"];
    $password = $_POST["password"];
    $level = 0;

    $result = mysqli_query($connect, "SELECT name FROM users");

    if ($password == NULL && $login == NULL) {
        $_SESSION['message'] = 'Укажите имя пользователя и пароль';
        header('Location: reg.php');
        die();
    }
    if ($login == NULL) {
        $_SESSION['message'] = 'Укажите имя пользователя';
        header('Location: reg.php');
        die();
    }
    if ($password == NULL) {
        $_SESSION['message'] = 'Укажите пароль';
        header('Location: reg.php');
        die();
    }

    switch ($error) {
        case "Пользователь":
            $userLevel = 0;
            break;
        case "Администратор":
            $userLevel = 1;
            break;
    }
    foreach($result as $row)    {
        if ($login == $row["name"]) {
            $_SESSION['message'] = 'Такой пользователь уже существует';
            header('Location: reg.php');
            die();
        }
    }

    $password = md5($password);
    $sql = "INSERT INTO `users` (`id`, `name`, `password`, `level`) 
    VALUES (NULL, '$login', '$password', '$level');";
    if($connect->query($sql)) {
        header('Location: reg.php');
        $_SESSION['message'] = 'Пользователь успешно зарегистрирован';
    }
    else {
        echo "Ошибка: " . $connect->error;
    }
?>
