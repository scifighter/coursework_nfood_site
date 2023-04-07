<!DOCTYPE html>
<html>
    <head>
        <title>Страница</title>
        <meta charset="utf-8">
        <?php include '../dbConnect.php'; require_once '../head.php'?>
    </head>
    <body>
        <div class = "container wrapper">
        <?php
            $sql = "SELECT id, name, cost, picture FROM goods ORDER BY id";
            if($result = $connect->query($sql)){
                foreach($result as $row){
            
                    $goodId = $row["id"];
            
                    $goodName = $row["name"];
            
                    $goodCost = $row["cost"];
            
                    $goodPic = $row["picture"];
                    
                    echo "<div class = 'itemGood'>";
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
        </div>
    </body>
</html>