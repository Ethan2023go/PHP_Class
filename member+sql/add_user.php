<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=user";
$pdo=new PDO($dsn,'root','');

$sql="insert into `users`(`acc`,`password`,`name`,`email`,`address`)
                  values('{$_POST['acc']}','{$_POST['pw']}','{$_POST['name']}','{$_POST['email']}','{$_POST['address']}')";
                
$pdo->exec($sql);


// header為頭部信息(會先跑) 有很多應用方式，除了連結也能插入各式字串等
// header只能加入字串
header("Location:home.php");