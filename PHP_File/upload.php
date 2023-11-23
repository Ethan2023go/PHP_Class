<?php
/**
 * 1.建立表單
 * 2.建立處理檔案程式
 * 3.搬移檔案
 * 4.顯示檔案列表
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>檔案上傳</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <h1 class="header">檔案上傳練習</h1>
 <!----建立你的表單及設定編碼----->

 <form action="./api/upload_1.php" method="post" enctype="multipart/form-data">
    <!-- post 傳輸時會將內容變成文字               加入 enctype 才可以開啟多媒體上傳
         但是文字和檔案內容通常會有不同傳輸路線 -->

<input type="file" name="img" id="">
<input type="text" name="desc" placeholder="請輸入描述">
<input type="submit" value="上傳">
 </form>
 



<!----建立一個連結來查看上傳後的圖檔---->  
<?php

if(isset($_GET['img'])){
    echo "<img src='./imgs/{$_GET['img']}' style='width:300px;height:400px'>";
}

?>
</body>
</html>