<?php
require_once ("connect.php");
require_once ("header.php");
if (isset($_GET['id'])) {
    
    $product_id = $_GET['id'];

    $conn = mysqli_connect('localhost','root','','shop') or die('Ошибка');
    $sql = "SELECT * FROM products WHERE id = $product_id";
    $result = mysqli_query($conn,$sql);
    $product = mysqli_fetch_assoc($result);
?>


<div class="product-info">
  <div class="product-image">
    <img class="product-img" src="<?php echo $product['photo']; ?>" alt="">
  </div>
  <div class="product-details">
    <h1 class="product-name"><?php echo $product['name']; ?></h1>
    <p class="product-description"><?php echo $product['description']; ?></p>
    <p class="product-price">Осталось <?php echo $product['quantity']; ?> штук</p>
    <h2 class="product-price"><?php echo $product['price']; ?> руб.</h2>
    <form method="post" action="add-to-cart.php">
      <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
      <button type="submit" class="add-to-cart-btn">Добавить в корзину</button>
    </form>
    <button onclick="history.back()" class="back-button">Назад</button>
  </div>
</div>


<?php
} else {
    echo 'Ошибка: товар не найден';
}
include "footer.php";
?>