<!doctype html>
<html lang="ru">
<?php 
require_once 'head.php'; 
include 'dbConnect.php';
?>
<body>
    <?php require_once 'header.php';?>
    <div class = "container wrapper">
        <?php
            $sql = "SELECT id, name, cost, picture FROM goods ORDER BY id";
            if($result = $connect->query($sql)){
                foreach($result as $row){
            
                    $goodId = $row["id"];
            
                    $goodName = $row["name"];
            
                    $goodCost = $row["cost"];
            
                    $goodPic = $row["picture"];
                    
                    echo "<div style = 'background-image: url(/img/goods/".$row["picture"].");' class = 'itemGood'>";
                    echo "<div class = 'itemInfo'>";
                    echo "<div class = 'itemName'>";
                    echo $row["name"];
                    echo "</div>";
                    echo "<div class = 'itemCost'>";
                    echo $row["cost"];
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            }
        ?>
</body>
</html>