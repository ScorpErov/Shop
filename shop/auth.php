<?php
session_start();
require_once("connect.php");
if (isset($_POST["btn"]) && !empty($_POST["btn"])) {
    $login = trim($_POST["login"]);
    $password = trim($_POST["password"]);

    $sql = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
    $result_queri_select = $mysqli->query($sql);

    if (!$result_queri_select) {
        exit("<p>Ошибка запроса БД</p>");
    } else {
        if ($result_queri_select->num_rows ==1) {
            $_SESSION['login'] = $login;
            $_SESSION['password'] = $password;
            header("Location: kabinet.php");
        } else {
            exit("<p> Ошибка ы логине или пароле</p>");
        }
    }
} else {
    exit("<p>Произошли технические шаколадки</p>");
}
?>