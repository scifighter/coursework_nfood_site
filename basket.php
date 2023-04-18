<!doctype html>
<html lang="ru">
<?php 
session_start();
require_once 'head.php'; 
include 'dbConnect.php';
?>
<body>
    <?php require_once 'header.php';?>
    <link href="/css/goodsBasket.css" rel="stylesheet">
    <div class = "container wrapper">
        <div class ="basket">
            Корзина
        </div>
        <?php
        if($_SESSION['goods']){
        $goodsInBasket = array_count_values(array_filter($_SESSION['goods']));
        foreach(array_unique($_SESSION['goods']) as $row){
            $sql = "SELECT id, name, cost, picture FROM goods WHERE id='$row'";
            require "goodOutput.php";
            $goodId = $row['id'];
            if($row['id']){
            echo "
            <div class = 'basketButtons centerClass'>
            <form class = 'counter centerClass' action = 'addGoodToBasket.php' method = 'post'>
            <input type = 'submit' class = 'counter centerClass' value = '+1'>
            <input type = 'hidden' name = 'id' value = '".$row['id']."'>
            </form>
            <div class = 'counter centerClass'>
            <input type = 'submit' class = 'counter centerClass' value = 'x".$goodsInBasket[$goodId]."'>
            </div>
            <form class = 'counter centerClass' action = 'deleteGoodFromBasket.php' method = 'post'>
            <input type = 'submit' class = 'counter centerClass' value = '-1'>
            <input type = 'hidden' name = 'id' value = '".$row['id']."'>
            </form></div>";}
            unset($row);
            unset($goodId);
        }
    echo "<div class = 'basketSubmitBlock'>
    <div class = 'basketSubmit centerClass'>
        <form action = 'order.php'>
            <img class = 'basketSubmitImg centerClass' src='img/icons/order.png'>
            <input class = 'basketSubmitButton centerClass' type = 'submit' value = 'Заказать'>
        </form>
    </div>
    <div class = 'basketSubmit centerClass'>
        <form action = 'clearBasket.php'>
            <img class = 'basketSubmitImg centerClass' src='img/icons/clear.png'>
            <input class = 'basketSubmitButton centerClass' type = 'submit' value = 'Очистить корзину'>
        </form>
    </div></div>";
    } else {
        echo "
        <div class ='basketEmpty'>
        пуста
        </div>";
    }
    ?>
    </div>
</body>
</html>
