<!doctype html>
<html lang="ru">
<?php 
require_once 'head.php'; 
include 'dbConnect.php';
$sql = "SELECT * FROM `users`";
   $result = $connect->query($sql); 
   // В цикле перебираем все записи таблицы и выводим их
   while ($row = $result->fetch_assoc())
   {
       // Оператором echo выводим на экран поля таблицы name_blog и text_blog
       echo 'Пароль: '.$row['password'];
       echo 'Имя: '.$row['name'];
   }
?>
<body>
    <?php require_once 'header.php';?>
    <div class = "container wrapper">
        <div class = "itemGood">
            <div class = "itemInfo">
                <div class = "itemName">
                    В Его Словах Есть Буквы
                </div>
                <div class = "itemCost">
                    100 
                </div>
            </div>
        </div>
        <div class = "itemGood">
        </div>
        <div class = "itemGood">
        </div>
        <div class = "itemGood">
        </div>
        <div class = "itemGood">
        </div>
        <div class = "itemGood">
        </div>
        <div class = "itemGood">
        </div>
        <div class = "itemGood">
        </div>
        <div class = "itemGood">
        </div>
        <div class = "itemGood">
        </div>
        <div class = "itemGood">
        </div>
    </div>
</body>
</html>