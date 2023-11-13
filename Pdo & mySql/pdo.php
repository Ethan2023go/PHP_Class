<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
// $dsn為一個物件
$pdo=new PDO($dsn,'root','');

// students 這邊不加'' 如果多筆資料表要加''
$sql="select * from students";
$rows=$pdo->query($sql)->fetchAll();

echo "<pre>";
print_r($rows[2]);
echo"</pre>";