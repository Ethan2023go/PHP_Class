<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
         if(!isset($_GET['bmi'])){

             if(isset($_GET['m'])){
                 echo "<span style='color:red'>".$_GET['m']."</span>";
             }
?>

    <h1>計算BMI</h1>
    <form action="calc.php" method="get">
        <div>
            <label for="height">身高(公尺)</label>
            <input type="text" name="height" id="height">
        </div>
        <div>
            <label for="pw">體重(公斤)</label>
            <input type="text" name="weight" id="weight">
        </div>
        <div>
            <input type="submit" value="計算BMI">
            <input type="reset" value="重置">
        </div>
    </form>
    <?php
            }else{
            echo "體重:".$_GET['w']."公斤";
            echo "<BR>";
            echo "身高:".$_GET['h']."公尺";
            echo "<BR>";
            echo "BMI:".$_GET['bmi'];  
            echo "<BR>";

}
?>
</body>

</html>