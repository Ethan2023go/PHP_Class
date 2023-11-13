<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,'root','');

$sql="update `status` set `code`='005',`name`='' where `id`=''";

$pdo-> query($sql);