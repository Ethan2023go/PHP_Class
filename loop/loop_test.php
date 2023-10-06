<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // for(起始值;條件式;增減值){程式碼}
    $sum=0;
    for($i=1;$i<=100;$i=$i*10)
    //  {$sum=$sum+$i= $sum += $i;}
    {   echo '當$i='.$i."時,";
        echo '$sum+$i的結果是';
        echo $sum . " + ". $i."=";
        echo $sum+$i;
        echo '<br>';
        $sum=$sum+$i;}
    
    
     echo "1加到100".$sum;
     ?>

    <h1>迴圈練習</h1>
    <h2>使用for迴圈來產生以下的數列</h2>
    <ul>
        <li>1,3,5,7,9....n</li>
        <li>10,20,30,40...n</li>
        <li>1,3,5,7,11,13...n</li>
        <li></li>
    </ul>
    <?php
    $n=100;
    for($i=1;$i<=n;$i+2){
        echo $i;
        echo ",";
    }
    echo "<hr>";
    for($i=1;$i<=$n;$i++){
        echo $i*10;
        echo ",";
    }

    echo "<hr>";
    $a=83;



</body>

</html>