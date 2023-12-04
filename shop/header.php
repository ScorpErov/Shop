<?php 
session_start();
require_once("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <title>Air-Soft</title>
</head>
<body>
    <div class="shapka">
        <a href="index.php"><img src="img/Logo.jpg" alt="AirSodt-RUS" while="60px" height="60px" class="logo"></a>
        <ul class="spisok">
            <li class="podspisok"><button><a href="news.php">Новости</a></button></li>
            <li class="podspisok"><button><a href="catalog.php">Каталог</a></button></li>
            <li class="podspisok"><button><a href="graphik.php">Как мы работаем</a></button></li>
            <li class="podspisok"><button><a href="contacts.php">Контакты</a></button></li>
            <li class="podspisok"><button><a href="kabinet.php">Личный кабинет</a></button></li>
        </ul>
    </div>