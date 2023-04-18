<!doctype html>
<html lang="ru">
<?php
session_start();
require_once 'head.php'; 
include 'dbConnect.php';
?>
<body>
    <?php require_once 'header.php';?>
    <div class = "container wrapper">
        <?php
            $sql = "SELECT id, name, cost, picture FROM goods";
            require_once 'goodOutput.php';
        ?>
</body>
</html>