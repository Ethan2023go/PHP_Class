<?php
if(isset($_COOKIE['login']) && !empty($_COOKIE['login'])){
    echo "<h3>登入成功</h3>";
    echo "<a href='login_cook.php'>回登入頁</a>";
    echo "<a href='logout_cook.php'>登出</a>";
}else{
    setcookie("error","沒有登入相關驗證，非法登入",time()+5);
   header("location:login_cook.php");
}

?>