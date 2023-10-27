<!-- <h1>First</h1> -->

<!-- // if(!empty($_GET)){
// $weight=$_GET['weight'];
// $height=$_GET['height'];
// // $_GET類似於$temp,將值丟進的變數 (PHP中)

// echo "體重".$weight;
// echo "身高".$height;

// echo "<br>";

// echo "體重".$_GET['weight'];
// echo "身高".$_GET['height'];
// // 也可以這樣寫
// }else{
//     echo "請輸入必要的資訊";
// } -->


<h1>Second</h1>
<?php
if(!empty($_GET)){
    $weight=(!empty($_GET['weight']))?$_GET['weight']:'沒有體重資料';
    $height=(!empty($_GET['height']))?$_GET['height']:'沒有身高資料';

    $bmi=round($weight/($height*$height),2);
    header("location:s1027_bmi.php?w=$weight&h=$height&bmi=$bmi");
}else{
        header("location:s1027_bmi.php?m=請輸入必要的資訊");
    }

?>