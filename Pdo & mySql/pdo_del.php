<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,'root','');

$sql="delete from `class_student` where `id`='17'";

$pdo->query($sql);