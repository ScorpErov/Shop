<?php
require_once("header.php");
?>
<div class="bob3">
    <div class="bob">
<?php
$conn = mysqli_connect('localhost','root','','shop') or die('Ошибка');
$sql = "SELECT * FROM news ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn,$sql);
$products = mysqli_fetch_assoc($result);

if ($result->num_rows === 1) {
    $id1 = $products['id'];
    $id2 = $id1 -1;
    $id3 = $id1 -2;
} else {
    echo "pizda";
}
?>
             <div class="news_2">
                <div class="news-img">
                    <img class="img" src="<?php echo $products['img']; ?>" alt="" width="300px" height="200px">
                </div>
                <div class="news-zagolovok">   
                    <h1 class="zagolovok"><?php echo $products['zagolovok']; ?></h1>
                </div>
                <div class="news-text">
                    <p class="text"><?php echo $products['text']?></p>
                </div>
            </div>   
<?php
    while ($id1 - 1 > 0) { 
        $id1 = $id1 -1;
        $sql = "SELECT * FROM news WHERE id = '$id1'";
        $result = mysqli_query($conn,$sql);
        $products = mysqli_fetch_assoc($result);
        ?>
             <div class="news_2">
                <div class="news-img">
                    <img class="img" src="<?php echo $products['img']; ?>" alt="" width="300px" height="200px">
                </div>
                <div class="news-zagolovok">   
                    <h1 class="zagolovok"><?php echo $products['zagolovok']; ?></h1>
                </div>
                <div class="news-text">
                    <p class="text"><?php echo $products['text']?></p>
                </div>
            </div>
<?php
    }
    ?>
    </div>
</div>
    <?php
require_once("footer.php");
?>