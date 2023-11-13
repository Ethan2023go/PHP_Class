<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>登入頁面</title>
    <style>
        input[type='text'],
        input[type='password']{
            outline: none;
        }
    </style>
</head>
<body>
<div>  
<div class="container">
    <div class="bg-info">
    <form action="./add_user.php" method="POST" class="text-center row" >
    <?php
        if(isset($_GET['error'])){
            echo "<spanstyle='color:red'>";
            echo $_GET['error'];
            echo "</span>";
        }

      ?>
        <h1 class="align-content-center">會員登入</h1>
        <div>  
        <label class="shadow p-3 mb-5 bg-body rounded col-1">帳號</label>
        <input class="shadow p-3 mb-5 bg-body rounded col-2"type="text" name="acc"id="acc">
    </div>
       <div>
        <label class="shadow p-3 mb-5 bg-body rounded col-1">密碼</label>
        <input class="shadow p-3 mb-5 bg-body rounded col-2" type="password" name="pw"id="pw">
    </div>
    <div>
        <input type="submit" value="送出" class="btn btn-primary">
        <input type="reset" value="重置"  class="btn btn-danger">
    </div>
    </form>
</div>
</div>
</body>
</html>
