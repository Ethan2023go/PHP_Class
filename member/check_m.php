<?php
if($_POST['acc']=='admin' && $_POST['pw']=='1234'){
    

    setcookie("login","Ethan",time()+60);
    
    header("location:member_m.php");

}else{
    setcookie('error',"帳號或密碼錯誤,請重新登入",time()+5);
    header("location:login_m.php");
}
?>