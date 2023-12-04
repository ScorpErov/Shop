<?php
$server = "localhost";
$username = 'root';
$password = '';
$database = 'shop';

$mysqli = new mysqli($server, $username, $password, $database);

if ($mysqli->connect_errno) {
    die("<p>Ошибка подключения к БД</p>");
}

$mysqli->set_charset('utf8');
?>