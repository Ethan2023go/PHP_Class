<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,'root','');

$sql="update `status` set `code`='005',`name`='哭哭科' where `id`='5'";

$pdo-> query($sql);