<?php
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
            echo "<form name = 'goodAddToBasket' action='addGoodToBasket.php' method='post'>
            <input type='hidden' name='id' value='" . $row["id"] . "' />
            <input type='submit' value=". $row["cost"] .">
            </form>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
    }
?>