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
                $sql = "SELECT id, name, category, cost, picture FROM goods ORDER BY id";
                if($result = $connect->query($sql)){
                    foreach($result as $row){
                
                        $goodId = $row["id"];
                
                        $goodName = $row["name"];

                        $goodCategory = $row["category"];
                
                        $goodCost = $row["cost"];
                
                        $goodPic = $row["picture"];
                        
                        echo "<div class = 'adminItem'>";
                        echo "<div class = 'adminItemId centerClass'>";
                        echo $row["id"];
                        echo "</div>";
                        echo "<div class = 'adminItemName centerClass'>";
                        echo $row["name"];
                        echo "</div>";
                        echo "<div class = 'adminItemCategory centerClass'>";
                        echo $row["category"];
                        echo "</div>";
                        echo "<div class = 'adminItemCost centerClass'>";
                        echo $row["cost"];
                        echo "</div>";
                        echo "<div class = 'adminItemPicture centerClass'>";
                        echo $row["picture"];
                        echo "</div>";
                        echo "<form action='goodDelete.php' method='post' class = 'adminItemDelete centerClass'>
                            <input type='hidden' name='id' value='" . $row["id"] . "' />
                            <input type='submit' value='Удалить'>
                        </form>";
                        echo "</div>";
                    }
                }
            ?>
            <form class = "adminGoodAdding" name = "addGood" method = "POST" action = "goodAdd.php">
                <div class = "addGoodBlock centerClass">
                     НАЗВАНИЕ ТОВАРА
                    <input type = "text" name = "name">   
                </div>
                <div class = "addGoodBlock centerClass">
                    КАТЕГОРИЯ
                    <select name = "category">
                        <?php
                            $sql = "SELECT id, name, picture FROM categories ORDER BY id";
                            print_r($sql);
                            if($result = $connect->query($sql)){
                                foreach($result as $row)    {
                                    $categoryId = $row["id"];
                        
                                    $categoryName = $row["name"];

                                    $categoryPic = $row["picture"];

                                    echo "<option>";
                                    echo $row["name"];
                                    echo "</option>";
                                }
                            }
                        ?>
                    </select>
                </div>
                <div class = "addGoodBlock centerClass">
                    <div class = "addGoodBlockCost">ЦЕНА</div>
                    <input name = "cost" min = "0" type = "number" step = "0.01">
                </div>
                <div class = "addGoodBlock centerClass">
                    КАРТИНКА
                    <input type = "file" name = "picture">
                </div>
                <div class = "addGoodBlockADD centerClass">
                    <input type = "submit" name = "goodAdd">
                </div>
            </form>
        </div>
    </body>
</html>