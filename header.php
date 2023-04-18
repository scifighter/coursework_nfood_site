<?php
    session_start();
    require_once "dbConnect.php";
?>
<div class = "header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4 logoBlock">
                    <a class = "logo" href="index.php"><img src="img/icons/logo.png"></a>
                </div>
                <div class="col-4 title">
                  nЕда
                </div>
                <?php
                    if ($_SESSION['user']) {
                        echo "<div class='col-4 registrationBlock'>
                        <a href='profile.php' class = 'activeUnit'><div class='registrationUnit'>
                            Профиль
                        </div>
                        </a>
                        <div class = 'registrationUnit'>
                        <form action = 'logout.php' method = 'post'>
                            <input type = 'submit' value = 'Выход'>
                        </form>
                        </div>
                    </div>";

                    } else {
                        echo "<div class='col-4 registrationBlock'>
                        <a href='reg.php' class = 'activeUnit'><div class='registrationUnit'>
                            Регистрация
                        </div>
                        </a>
                        <a href='auth.php' class = 'activeUnit'><div class='registrationUnit'>
                            Авторизация
                        </div>
                        </a>
                    </div>";
                    }
                ?>
            </div>
        <div class = "menu">
            <div class="row justify-content-around">
                <a class = "col-sm" href = "index.php">
                <div class="menuItem">
                    Главная
                </div>
                </a>
                <a class = "col-sm" href = "index.php">
                <div class="menuItem">
                    Список категорий
                </div>
                </a>
                <a class = "col-sm" href = "index.php">
                <div class="menuItem">
                    Контакты
                </div>
                </a>
                <a class = "col-sm" href = "index.php">
                <div class="menuItem">
                    Новости
                </div>
                </a>
                <a class = "col-sm" href = "admin/index.php">
                <div class="menuItem">
                    Популярные товары
                </div>
                </a>
            </div>
        </div>
    </div> 
</div>