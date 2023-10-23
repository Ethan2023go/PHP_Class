<style>
table,
tr,
td {
    border: 1px black solid;
    border-collapse: collapse;
}
</style>


<!--

// echo "<table>";
    

// echo "</table>";

// $student=["judy","amo","john","peter","hebe"];


// echo"<pre>";
// print_r($student);
// echo "</pre>";

// $student=[
    
// ]
// 失敗

?> -->

<?php

$nine=[];

for($j=1;$j<=9;$j++){

    for($i=1;$i<=9;$i++){
        
        $nine[]="$j * $i =".($j * $i);
    }
}
// 參數設定

foreach($nine as $idx => $value){
    echo $value;
    if($idx%9==8){
        echo "<br>";
    }
}
// 加入斷行

echo "<hr>";


echo "<table>";
foreach($nine as $idx => $value){
    // echo $value;
    if($idx%9==0){
        echo "<tr>
        <td>$value</td>";

    }else if($idx%9==8){
        echo "<td>$value</td>
        </tr>" ;
    }else{
        echo "<td>$value</td>";
}
}
echo "</table>"
?>