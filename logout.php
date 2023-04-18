<?php
    session_start();
    require_once "dbConnect.php";
    unset($_SESSION['user']);
    header('Location: index.php');
?>