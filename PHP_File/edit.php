<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>編輯檔案</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <h1 class="header">編輯檔案</h1>
 <!----建立你的表單及設定編碼----->

 <form action="./api/edit.php" method="post" enctype="multipart/form-data">
   

<input type="file" name="img" id="">
<input type="text" name="desc" placeholder="請輸入描述">
<input type="submit" value="上傳">
</form>
 



<!----建立一個連結來查看上傳後的圖檔---->  
<?php



?>
</body>
</html>