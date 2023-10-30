<?php
session_start();
if(isset($_SESSION['login']) && !empty($_SESSION['login'])){
    echo "<h3>登入成功</h3>";
    echo "<a href='login.php?login=1'>回登入頁</a>";
}else{
    // header("location:login.php");
    echo "沒有登入相關驗證，非法登入";
}

?>