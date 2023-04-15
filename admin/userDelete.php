<?php
if(isset($_POST["userId"]))
{   
    define( "DBHOST", "localhost" );

    define( "DBNAME", "nFoodSite" );

    define( "DBUSER", "root" );

    define( "DBPASS", "T7Pz2BG^39gdb8g4" );

    $connect = mysqli_connect( DBHOST, DBUSER, DBPASS, DBNAME );

    if  ($connect->connect_error) {
        die("Ошибка: " . $connect->connect_error);
    }
    $userId = $connect->real_escape_string($_POST["userId"]);
    $sql = "DELETE FROM users WHERE id = '$userId'";
    if  ($connect->query($sql)) {

        header("Location: index.php");

    }
    else    {

        echo "Ошибка: " . $connect->error;
    }

    $connect->close();  
}
?>