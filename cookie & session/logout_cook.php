<?php
session_start();

unset($_SESSION['login']);

header("location:login_cook.php");

?>