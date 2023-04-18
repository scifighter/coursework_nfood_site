<!doctype html>
<html lang="ru">
<?php 
session_start();
require_once 'head.php'; 
include 'dbConnect.php';
?>
<body>
    <?php require_once 'header.php';?>
    <?php
        switch ($_SESSION['user']['level']) {
            case 0:
                $leveltext = "Пользователь";
                break;
            case 1:
                $leveltext = "Администратор";
                break;
        }
    ?>
    <div class = "container wrapper profile">
        <div class = "userInfo">
            <div class = "username">
                Имя пользователя:<br><br>
                <?php echo $_SESSION['user']['name'];?>
            </div>
            <div class = "userlevel">
                Уровень допуска:<br><br>
            <?php echo $leveltext;?>
            </div>
        </div>
        <div class = "toShoppingBasket">
            <a href="basket.php"><img class = "basketicon" src="img/icons/basket.png">
            <br><p class = "baskettext">В корзину</p></a>
        </div>
        <?php
            if ($_SESSION['user']['level'] == 1) {
                echo    "<div class = 'toShoppingBasket'>
                <a href='admin/index.php'><img class = 'adminicon' src='img/icons/admin.png'>
                <br><p class = 'baskettext'>В админ-панель</p></a>
                </div>";
            }
        ?>
</body>
</html>