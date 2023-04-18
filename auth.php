<!doctype html>
<html lang="ru">
<?php session_start(); require_once 'head.php';?>
<body>
    <?php require_once 'header.php';?>
    <div class = "wrapper">
        <form action = "singin.php" method = "post">
            <div class = "container centerClass regContainer">
                <div class="input-group mb-3 registrationField centerClass">
                    <input name = "name" type="text" class="regAuthField" placeholder="Имя пользователя" aria-label="Username">
                </div>
                <div class="input-group mb-3 registrationField centerClass">
                    <input name = "password" type="password" class="regAuthField" placeholder="Пароль" aria-label="Username">
                </div>
                <div class="input-group mb-3 registrationField">
                    <input class="regButton centerClass" type="submit" value="Вход">
                </div>
            </div>
        </form>
        <?php
            if ($_SESSION['message']) {
                echo "<div class = 'message'>".$_SESSION['message']."</div>";
                unset($_SESSION['message']);
            }
        ?>
    </div>
</body>
</html>