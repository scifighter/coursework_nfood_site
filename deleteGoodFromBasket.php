<?php
    session_start();
    require_once 'dbConnect.php';
    $valueToDelete = array_search($_POST['id'], $_SESSION['goods']);
    unset($_SESSION['goods'][$valueToDelete]);
    unset($valueToDelete);
    header('Location: basket.php');
?>