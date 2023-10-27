<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .a-1 {
        border: 1px solid black;
        margin: auto;
        width: 30%;
    }

    h3 {
        text-align: center;
    }

    .a-2 {
        text-align: center;
    }
    </style>

</head>

<body>
    <h3>登入</h3>
    <div class="a-1">
        <?php

        
        ?>
        <form action="password_back.php" method="post">
            <div class="a-2">
                <label for="acc">帳號</label>
                <input type="text" name="acc" id="acc">
            </div>
            <div class="a-2">
                <label for="pw">密碼</label>
                <input type="text" name="password" id="pw" id="pw">
            </div>
            <div class="a-2">
                <input type="submit" value="送出">
                <input type="reset" value="重置">
            </div>
        </form>
    </div>
</body>

</html>