<?php
require_once("header.php");
require_once("connect.php");

if (isset($_POST["btn1"]) && !empty($_POST["btn1"])) {
    $zagolovok = $_POST['zagolovok'];
    $img = $_POST['img'];
    $text = $_POST['text'];

    $sql = "INSERT INTO news (zagolovok, img, text) VALUES ('$zagolovok', '$img', '$text') ";
    $result_query_insert = $mysqli->query($sql);
}

if (isset($_POST["btn2"]) && !empty($_POST["btn2"])) {
    $name = $_POST['name'];
    $photo = $_POST['photo'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];

    $sql = "INSERT INTO products (name, photo, price, quantity, description) VALUES ('$name', '$photo', '$price', '$quantity', '$description') ";
    $result_query_insert = $mysqli->query($sql);
}
?>
        <h2>Добавление новости</h2>
    <form action="dobavlenie.php" method="post" name="form-register">
        <label for="zagolovok">Заголовок:</label> <input name="zagolovok" type="text" required><br>
        <label for="img">Ссылка на изображение:</label> <input name="img" type="text" required><br>
        <label for="text">Основной текста:</label> <input name="text" type="text" required><br>
        <input type="submit" name="btn1" value="Опубликовать новость.">
    </form>

    <h2>Добавление товара</h2>
    <form action="dobavlenie.php" method="post" name="form-register">
        <label for="name">Название:</label> <input name="name" type="text" required><br>
        <label for="photo">Ссылка на изображение:</label> <input name="photo" type="text" required><br>
        <label for="price">Цена:</label> <input name="price" type="text" required><br>
        <label for="quantity">Кол-во:</label> <input name="quantity" type="text" required><br>
        <label for="description">Описание:</label> <input name="description" type="text" required><br>

        <input type="submit" name="btn2" value="Внести товар.">
    </form>
<?php
require_once("footer.php");
?>