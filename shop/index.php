<?php
require_once("header.php");
?>
<div class="bob index">
<div class="blok_opisanie">
<h1>О нас</h1>

<h2>Добро пожаловать в мир страйкбола!</h2>
<p>Мы - команда энтузиастов страйкбольного движения, предлагающая лучшее снаряжение для вашего полного погружения в захватывающий мир страйкбола. Наша миссия - обеспечить каждого игрока надежным, качественным и инновационным снаряжением, которое поможет вам достичь новых высот в вашем страйкбольном опыте.</p>

<img src="http://cdn11.bigcommerce.com/s-yck5k/product_images/uploaded_images/airsoft-station-oakdale-1.jpg" height="500px" class="img_gl">

<h1>Чем мы занимаемся:</h1>
<h2>Качество и Инновации</h2>
<p>Мы постоянно следим за последними тенденциями в индустрии и предлагаем только лучшие товары от ведущих производителей. Наш ассортимент включает в себя оружие, тактическую одежду, защитное снаряжение и аксессуары, которые сочетают в себе надежность, комфорт и передовые технологии.<p>

<h2>Опыт и Экспертиза</h2>
<p>Наша команда состоит из опытных страйкбольных игроков, которые готовы поделиться своими знаниями и помочь вам выбрать наилучшее снаряжение, соответствующее вашим потребностям и стилю игры.<p>

<h2>Сообщество</h2>
<p>Мы не просто магазин, мы ценим страйкбольное сообщество. Мы организуем мероприятия, турниры и обучающие программы, чтобы поддержать рост и развитие страйкбольной культуры.<p>

<h2>Наше обещание:</h2>
<p>Мы стремимся быть вашим надежным партнером в страйкболе, предоставляя не только продукцию высокого качества, но и поддержку и советы, чтобы ваша игра была неповторимой и захватывающей.<p>

<p>Присоединяйтесь к нам в нашем увлекательном путешествии по миру страйкбола!</p>
</div>
<div class="blok_news">
    <h1>Последние новости:</h1> <div class="new_blok">
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
    echo "smert";
}
?>
             <div class="news">
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

    $sql = "SELECT * FROM news WHERE id = '$id2'";
    $result = mysqli_query($conn,$sql);
    $products = mysqli_fetch_assoc($result);
    if ($id1 - 1 >= 0) { ?>
             <div class="news">
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

    $sql = "SELECT * FROM news WHERE id = '$id3'";
    $result = mysqli_query($conn,$sql);
    $products = mysqli_fetch_assoc($result);
    if ($id1 - 2 >= 0) { ?>
             <div class="news">
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
    </div>
     <?php
require_once("footer.php");
?> 