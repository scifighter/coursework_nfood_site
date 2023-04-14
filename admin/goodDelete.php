<?php
if(isset($_POST["id"]))
{   
    define( "DBHOST", "localhost" );

    define( "DBNAME", "nFoodSite" );

    define( "DBUSER", "root" );

    define( "DBPASS", "T7Pz2BG^39gdb8g4" );

    $connect = mysqli_connect( DBHOST, DBUSER, DBPASS, DBNAME );

    if($connect->connect_error){
        die("Ошибка: " . $connect->connect_error);
    }
    $goodId = $connect->real_escape_string($_POST["id"]);
    $sql = "DELETE FROM Goods WHERE id = '$goodId'";
    if($connect->query($sql)){
         
        header("Location: index.php");
    }
    else{
        echo "Ошибка: " . $connect->error;
    }
    $connect->close();  
}
?>