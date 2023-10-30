<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <?php
include_once "header.php";
?>
    <?php
if(isset($_COOKIE['login']) && !empty($_COOKIE['login'])){
    echo "<h3>登入成功</h3>";
    echo "<a href='login_m.php'>回登入頁</a>";
    echo "<a href='logout_m.php'>登出</a>";
}else{
    setcookie("error","沒有登入相關驗證，非法登入",time()+5);
   header("location:login_m.php");
}

?>


</body>

</html>