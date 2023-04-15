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
                        echo "<form name = 'goodDelete' action='goodDelete.php' method='post' class = 'adminItemDelete centerClass'>
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
                    <div class = "addCatText">КАТЕГОРИЯ</div>
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
            <?php
                $sql = "SELECT id, name, picture FROM categories ORDER BY id";
                if($result = $connect->query($sql)){
                    foreach($result as $row){
                
                        $catId = $row["id"];
                
                        $catName = $row["name"];
                
                        $catPic = $row["picture"];
                        
                        echo "<div class = 'adminItem'>";
                        echo "<div class = 'cat adminItemId centerClass'>";
                        echo $row["id"];
                        echo "</div>";
                        echo "<div class = 'cat adminItemName centerClass'>";
                        echo $row["name"];
                        echo "</div>";
                        echo "<div class = 'cat adminItemPicture centerClass'>";
                        echo $row["picture"];
                        echo "</div>";
                        echo "<form name = 'catDelete' action='catDelete.php' method='post' class = 'catDelete adminItemDelete centerClass'>
                            <input type='hidden' name='catId' value='" . $row["id"] . "' />
                            <input type='submit' value='Удалить'>
                        </form>";
                        echo "</div>";
                    }
                }
            ?>
            <form class = "adminGoodAdding" name = "addCat" method = "POST" action = "catAdd.php">
                <div class = "catAdd addGoodBlock centerClass">
                     <div class = "addCatText">НАЗВАНИЕ КАТЕГОРИИ</div>
                    <input type = "text" name = "name">   
                </div>
                <div class = "catAdd addGoodBlock centerClass">
                    <div class = "addCatText">КАРТИНКА</div>
                    <input type = "file" name = "picture">
                </div>
                <div class = "addGoodBlockADD centerClass">
                    <input type = "submit" name = "catAdd">
                </div>
            </form>
            <?php
                $sql = "SELECT id, name, password, level FROM users ORDER BY id";
                if($result = $connect->query($sql)){
                    foreach($result as $row){
                
                        $catId = $row["id"];
                
                        $userName = $row["name"];
                
                        $userPassword = $row["password"];

                        $userLevel = $row["level"];

                        switch ($userLevel) {
                            case 0:
                                $userLevelText = "Пользователь";
                                break;
                            case 1:
                                $userLevelText = "Администратор";
                                break;
                        }
                        
                        echo "<div class = 'adminItem'>";
                        echo "<div class = 'cat adminItemId centerClass'>";
                        echo $row["id"];
                        echo "</div>";
                        echo "<div class = 'cat adminItemName centerClass'>";
                        echo $row["name"];
                        echo "</div>";
                        echo "<div class = 'cat adminItemName centerClass'>";
                        echo $row["password"];
                        echo "</div>";
                        echo "<div class = 'cat adminItemPicture centerClass'>";
                        echo $userLevelText;
                        echo "</div>";
                        echo "<form name = 'userDelete' action='userDelete.php' method='post' class = 'catDelete adminItemDelete centerClass'>
                            <input type='hidden' name='userId' value='" . $row["id"] . "' />
                            <input type='submit' value='Удалить'>
                        </form>";
                        echo "</div>";
                    }
                }
            ?>
            <form class = "adminGoodAdding" name = "addUser" method = "POST" action = "userAdd.php">
                <div class = "cat addGoodBlock centerClass">
                     ИМЯ ПОЛЬЗОВАТЕЛЯ
                    <input type = "text" name = "name">   
                </div>
                <div class = "cat addGoodBlock centerClass">
                    <div class = "addCatText">ПАРОЛЬ</div>
                    <input name = "password" type = "text">
                </div>
                <div class = "cat addGoodBlock centerClass">
                    <div class = "addCatText">Права</div>
                    <select name = "level">
                        <option>Пользователь</option>
                        <option>Администратор</option>
                    </select>
                </div>
                <div class = "addGoodBlockADD centerClass">
                    <input type = "submit" name = "usaerAdd">
                </div>
            </form>
        </div>
    </body>
</html>