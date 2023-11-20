<?php
 
include_once "../include/connect.php";

// session_start();
// 記得加!!!!
$acc=$_POST['acc'];
$pw=$_POST['pw'];

// $dsn="mysql:host=;localhost;charset=utf8;user";
// $pdo=new PDO($dsn,'root','');
// 串接資料庫

// $sql="select count(*) from users where `acc`='$acc' &&`pw`=`$pw`";
// $user=$pdo->query($sql)->fetch();第一次寫法
// $user=$pdo->query($sql)->fetchColumn();
// 從users print一筆資料出來

// if($user['acc']==$acc && $user['pw']==$pw)
// 第一次的寫法

$res= total('users',['acc'=>$acc,'pw'=>$pw]);

if($res){
    $_SESSION['user']=$acc;
    header("location:../home.php");
}else{
    header('location:../login_form.php?error=帳號密碼錯誤');
}
// 判斷帳密是否錯誤並導到相關頁面
?>

