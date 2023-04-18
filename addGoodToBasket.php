<?php
    session_start();
    require_once 'dbConnect.php';

    $good = $_POST['id'];
    
    $_SESSION['goods'][] = $good;
    header('Location: basket.php');
?>
