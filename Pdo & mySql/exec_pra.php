<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,'root','');

$sql="delete from `status` where `id`='5'";

echo $pdo->exec($sql);

