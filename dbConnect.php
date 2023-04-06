<?php 

define( "DBHOST", "localhost" );

define( "DBNAME", "mybase" );

define( "DBUSER", "root" );

define( "DBPASS", "mypass" );

$connect = mysqli_connect( DBHOST, DBUSER, DBPASS, DBNAME );

?>