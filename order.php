<?php
session_start();
unset($_SESSION['goods']);
header('Location: basket.php');
?>