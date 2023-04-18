<?php 

define( "DBHOST", "localhost" );

define( "DBNAME", "nFoodSite" );

define( "DBUSER", "root" );

define( "DBPASS", "T7Pz2BG^39gdb8g4" );

$connect = mysqli_connect( DBHOST, DBUSER, DBPASS, DBNAME );

if (!$connect) {
    die('Error connect to DB');
}
?>