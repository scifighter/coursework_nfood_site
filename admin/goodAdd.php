<?php

    require_once '../head.php';

    define( "DBHOST", "localhost" );

    define( "DBNAME", "nFoodSite" );

    define( "DBUSER", "root" );

    define( "DBPASS", "T7Pz2BG^39gdb8g4" );

    $connect = mysqli_connect( DBHOST, DBUSER, DBPASS, DBNAME );

    $name = $_POST["name"];
    $category = $_POST["category"];
    $cost = $_POST["cost"];
    $picture = $_POST["picture"];

    if ((empty($name) == false) && (empty($category) == false) && (empty($cost) == false) && (empty($picture) == false)) {
        $sql = "INSERT INTO `goods` (`id`, `name`, `category`, `cost`, `picture`) 
        VALUES (NULL, '$name', '$category', '$cost', '$picture');";

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