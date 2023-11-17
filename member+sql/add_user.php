<?php
include_once "./include.php";

$acc=htmlspecialchars(trim($_POST['acc']));
// htmlspecialchars 將一些特殊字元如單引號斜線等去除，轉成不會有害程式碼的字串
// trim 將空白填進前後達到保護效果

$sql="insert into `users`(`acc`,`password`,`name`,`email`,`address`)
                  values('{$_POST['acc']}','{$_POST['pw']}','{$_POST['name']}','{$_POST['email']}','{$_POST['address']}')";
                
$pdo->exec($sql);

// header為頭部信息(會先跑) 有很多應用方式，除了連結也能插入各式字串等
// header只能加入字串
header("Location:home.php");