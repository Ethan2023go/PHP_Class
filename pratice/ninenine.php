<style>
table,
tr,
td {
    border: 1px black solid;
    border-collapse: collapse;
    text-align: center;
    width: 90vw;
    height: 3vh;
}
</style>

<h2>九九乘法表</h2>
<?php
// for($i=1;$i<=9;$i++){
//     echo '1 *'.'$i'.'='.(1*$i).
//     "&nbsp";
// }
// echo "<br>";





// for($j=1;$j<=9;$j++){
    
//     for ($i=1;$i<=9;$i++){
        
//         echo $j . ' * '.$i.' = '.($j*$i). "<br>";
//     }
    
// }

echo "<table>";
for($j=1;$j<=9;$j++){
    echo "<tr>";
    for($i=1;$i<=9;$i++){
        echo"<td>";
        echo $j . 'x'.$i.' = '. ($j*$i);
        echo"</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

<br>
<hr><br>

<h3>表格練習</h3>
<?php

echo "<table>";
for($j=1;$j<=9;$j++){
    echo "<tr>";
    for($i=1;$i<=9;$i++){
        echo"<td>";
        echo ($j*$i);
        echo"</td>";
        
    }
    echo "</tr>";
}
echo "</table>";
?>

<br>
<hr><br>
<h3>圖表變化</h3>
<?php

echo "<table>";
// echo "<tr>";
for($j=0;$j<10;$j++){
    if($j==0){
        echo "<tr style='background:#eee'>";
    }else{
        echo "<tr>";
    }
    for ($i=0;$i<10;$i++){

        if($i==0){
            echo "<td style='background:#eee'>";
        }else{
            echo "<td>";
        }
        if($i==0 && $j==0){
            echo "";
        }else if($j==0){
            echo $i;
        }else if($i==0){
            echo $j;
        }else if($j<$i){
            echo " ";
        // }else if($j=1){
        //     echo"";
        }else{
            echo $j*$i;
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>








<!-- <table>
    <tr>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
    </tr>
    <tr>
        <td>4</td>
        <td>5</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>



</table> -->