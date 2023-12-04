<?php
session_start();
require_once("connect.php");
if (isset($_POST["btn"]) && !empty($_POST["btn"])) {
    $lastname = trim($_POST["fam"]);
    $password = trim($_POST["password"]);
    $name = trim($_POST["nam"]);
    $otcestvo = trim($_POST["otc"]);
    $email = trim($_POST["pochta"]);
    $tpassword = trim($_POST["tpassword"]);
    $login = trim($_POST["login"]);

    if ($tpassword == $password) {
        $sql = "INSERT INTO users (login, password, first_name, last_name, otcestvo, email) VALUES ('$login', '$password', '$name', '$lastname', '$otcestvo', '$email') ";
        $result_query_insert = $mysqli->query($sql);
        header("Location: kabinet.php");
    }
    else {
        exit("<p>Ошибка</p>");
    }
}
?>