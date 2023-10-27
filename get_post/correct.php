<!-- 需要帶訊息過來才會有頁面 PHP之間傳輸完就會斷掉 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>你好棒</h3>
    <?php
    if($_GET['login']==1){
    echo "<h3>登入成功</h3>";
}else{
    header("location:password.php");
    //echo "沒有登入相關驗證，非法登入";
}
?>
</body>

</html>