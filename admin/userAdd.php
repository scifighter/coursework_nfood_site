<?php
    require_once '../head.php';

    define( "DBHOST", "localhost" );

    define( "DBNAME", "nFoodSite" );

    define( "DBUSER", "root" );

    define( "DBPASS", "T7Pz2BG^39gdb8g4" );

    $connect = mysqli_connect( DBHOST, DBUSER, DBPASS, DBNAME );

    $name = $_POST["name"];

    $password = $_POST["password"];

    $userLevelText = $_POST["level"];

    switch ($userLevelText) {
        case "Пользователь":
            $userLevel = 0;
            break;
        case "Администратор":
            $userLevel = 1;
            break;
    }

    if ((empty($name) == false) && (empty($password) == false) && (empty($userLevelText) == false)) {
        $sql = "INSERT INTO `users` (`id`, `name`, `password`, `level`) 
        VALUES (NULL, '$name', '$password', '$userLevel');";

        if($connect->query($sql)) {
            header('Location: index.php');
        }
        else {
            echo "Ошибка: " . $connect->error;
        }
    } else {
        echo "<div class = 'container wrapper'>";
        echo "<div class = 'error'>Ошибка - одно или несколько полей пусты</div><a class = 'error' href = 'index.php'>Назад</a></div>";
    }
?>