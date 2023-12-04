<?php
session_start();
require_once("header.php");
require_once ("connect.php");
?>
<div class="bob3">
<div class="bob2">
<?php
$conn = mysqli_connect('localhost','root','','shop') or die('Ошибка');
if (!isset($_SESSION['login']) && !isset($_SESSION['password'])) {
?>
        <div class="vhod">
        <h2>Вход</h2>
        <form action="auth.php" method="post">
            <label for="login">Логин:</label> <input name="login" type="text" required><br>
            <label for="password">Пароль:</label> <input name="password" type="password" required><br>
            <input type="submit" name="btn" value="Войти" class="buton2"><br><a href="registration_html.php" required>Регистрация</a>
        </form>
        </div>
</div>
</div>
<?php
} else {
    $login = $_SESSION['login'];
    $password = $_SESSION['password']; 
    $sql = "SELECT * FROM users WHERE login = '".$login."' and password = '".$password."' ";
    $result_query_select = $mysqli->query($sql);
    if (!$result_query_select) {
        $_SESSION["error_Messages"] .="<p>Ошибка запроса БД</p>";
        exit("<p>Ошибка 3/p>");
    } else {
        if($result_query_select->num_rows == 1){
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();

            echo("<h1>Добро пожаловать ".$row['last_name']." ".$row['first_name']." ".$row['otcestvo']."!</h1>");
        if ($row['admin'] == 1) {
            ?>
            <form action="dobavlenie.php" method="post"> <input type="submit" name="btn" value="Добавить товар" class="buton2"></form>
        <?php
        }
        ?>
        <form action="exit.php" method="post"> <input type="submit" name="btn" value="Выйти" class="buton2"></form>


  <script>
    function closeAlert() {
      var alert = document.querySelector('.alert');
      alert.style.display = 'none';
    }
  </script>
  <div class="cart-container">
    <?php if (empty($_SESSION['cart'])) : ?>
      <p class="korz">Ваша корзина пуста</p>
    <?php else : 
        
        $total = 0;
        foreach ($_SESSION['cart'] as $id => $product) {
            $total += $product['price'] * $product['quantity'];
        }
        
        ?>
      <?php foreach ($_SESSION['cart'] as $id => $product) : ?>
        <div class="cart-item">
          <img src="<?php echo $product['photo']; ?>" alt="<?php echo $product['name']; ?>">
          <div class="product-name"><?php echo $product['name']; ?></div>
          <div class="product-quantity">
            <form method="post" action="update-cart.php">
              <input type="hidden" name="product_id" value="<?php echo $id; ?>">
              <button type="submit" name="action" value="decrease">-</button>
              <input type="number" name="quantity" value="<?php echo $product['quantity']; ?>">
              <button type="submit" name="action" value="increase">+</button>
            </form>
          </div>
          <div class="product-price"><?php echo $product['price'] * $product['quantity']; ?> руб.</div>
          <form method="post" action="remove-from-cart.php">
            <input type="hidden" name="product_id" value="<?php echo $id; ?>">
            <button type="submit">Удалить</button>
          </form>
        </div>
      <?php endforeach; ?>
  <div class="cart-total">Общая сумма: <?php echo $total; ?> руб.</div>
<?php endif; ?>



    
  </div>
  <?php if (!empty($_SESSION['cart'])) {
  ?>
  <div class="zak">
    <a href="#!" class="zakazat">Заказать</a>
  </div>
</div>

        <?php
  }
    }
}
?>
</div>
<?php
}

require_once("footer.php");
?>