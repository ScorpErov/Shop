<?php
require_once("header.php");
?> <div class="bob">
    <div class="container">
        <?php
            $conn = mysqli_connect('localhost','root','','shop') or die('Ошибка');
            $sql = "SELECT * FROM products LIMIT 9";
            $result = mysqli_query($conn,$sql);
            while ($products = mysqli_fetch_assoc($result)){
        ?>
            <div class="tovars">
                <div class="tovar-img">
                    <img class="img" src="<?php echo $products['photo']; ?>" alt="">
                </div>
                <div class="tovar-name">   
                    <h1 class="name"><?php echo $products['name']; ?></h1>
                </div>
                <div class="tovar-price">
                    <h1 class="price"><?php echo $products['price']?> руб</h1>
                </div>
                <a href="kart.php?id=<?php echo $products['id']; ?>" class="button1">Посмотреть товар</a>
                <form method="post" action="add-to-cart.php">
                    <input type="hidden" name="product_id" value="<?php echo $products['id']; ?>">
                    <button type="submit" class="btn buton2">Добавить в корзину</button>
                </form>
                
            </div>
        
        <?php
            };
        ?> 

    
    </div>
   </div>
<?php
require_once("footer.php");
?>