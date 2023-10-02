<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $score = 60;
    
    echo "我的成績" . $score;
    echo "<br>";
    echo "判斷為:";

    if ($score>=60) {
        echo "及格";
    } else {
        echo "不及格";
    }
     
     echo "<br>";
     if($score>=90 && $score<=100)
     {$level="A";}
     if($score>=80 && $score<=89)
     {$level="B";}
     if($score>=70 && $score<=79)
     {$level="C";}
     if($score>=60 && $score<=69)
     {$level="D";}
    

    
    
    
     echo "我的成績為" . $level;
     echo "<br>";
    
    switch ($level) {
        case "A":
            echo "你超有料";
            break;
        case "B":
            echo "不錯，再加油";
            break;
        case "C":
            echo "進度些微落後加油";
            break;
        case "D":
            echo "基本功不行";
            break;
        default:
            echo "完全不行";
            break;
    }







    ?>
</body>

</html>