<?php
session_start();
unset ($_SESSION['login']);
unset ($_SESSION['password']);
unset($_SESSION['cart']);
header("Location: kabinet.php");
?>