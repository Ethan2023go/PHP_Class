<?php
// if(!empty($_GET)){
//     $Username=(!empty($_GET['acc']))?$_GET['acc']:'請輸入帳號';
//     $Password=(!empty($_GET['pww']))?$_GET['pww']:'請輸入密碼';

    
//     header("location:password.php?a=$$Username&p$Password");
// }else{
//         header("location:password.php?m=請輸入必要的資訊");
//     }


//     $Password=[1234];

//     if(in_array(admin,$Password)){
//       echo "correct";
//     }else{
//     echo "false";
//     }

if($_POST['acc']=='admin' && $_POST['pw']=='1234'){
    header("location:correct.php?a=$$Username&p$Password");
}else{
    header("location:password.php?a=$$Username&p$Password"); 
}
?>