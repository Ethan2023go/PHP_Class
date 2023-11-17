<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=user";
$pdo=new PDO($dsn,'root','');
$acc=htmlspecialchars(trim($_POST['acc']));
session_start();
?>