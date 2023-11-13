<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,'root','');

$sql="insert into `status`(`code`,`status`,`note`) values('005','翹課','持國小畢業超ㄏ');";
// values('')這裡大部分時間皆為''
// insert into 加入資料 後面對齊資料庫欄位即可 

$pdo->query($sql);
// 增加資料庫欄位