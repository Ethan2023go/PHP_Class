<H1>日期與時間</H1>

<?php
date_default_timezone_set('Asia/Tokyo');

echo date ("Y-m-d H:i:s");
// Y=year m=month d=day His=時分秒
?>
<h2>strtotime</h2>
<?php
echo strtotime("now");
$time=strtotime("now");
echo "<br>";
echo date("Y-m-d H:i:s",$time);
// date ("Y-m-d ,$time) -> 把$time(秒數)轉成人看的懂的YMD格式化格式
?>

<?php
$date1='2023-10-24';
$date2='2023-11-15';
$days=(strtotime($date2)-strtotime($date1))/(60*60*24);

echo "<hr>";
echo $date1.'到'.$date2."有".$days."天";
// echo 最後要變成字串或數字 才可以接echo
?>

<h2>計算下次生日天數</h2>
<?php
$date="1974-10-07";
$br=strtotime($date); 
$today=strtotime('now');
// 將$date和$today轉換成秒數
$diff=strtotime(date("Y")."-".date("m-d",$br));
// 今年生日的年月日轉換
// date中不一定是全部的日期格式也可以是任何年月日小時,單個也可使用
// date("m-d",$br) -> m-d的值來自$br
if($diff>$today){
    $days=($diff-$today)/(60*60*24);
}else{
    $diff=strtotime("+1 year",$diff);
    $days=($diff-$today)/(60*60*24);
}

echo "距離下一次生日:".date("Y-m-d",$diff)."還有".floor($days)."天";

?>
<h2>利用date()函式的格式化參數，完成以下的日期格式呈現</h2>
2021/10/05
10月5日 Tuesday
2021-10-5 12:9:5
2021-10-5 12:09:05
今天是西元2021年10月5日 上班日(或假日)
<br>
<hr><br>
<?php
echo date("Y/m/d");
echo "<br>";
echo date("m月d日 星期一");
echo "<br>";
echo date("Y-m-d H:i:s");
echo "<br>";
// echo date("Y-m-d G:i:s");
// echo "<br>";

echo date("今天是西元Y年m月d日");
if(date("N")<=5){
    echo "上班日";
}else{
    echo "假日";
}

?>

<h2>計算下次生日天數</h2>
<ul>
    <li>2021-10-04 星期一</li>
    <li>2021-10-11 星期一</li>
    <li>2021-10-18 星期一</li>
    <li>2021-10-25 星期一</li>
    <li>2021-11-01 星期一</li>
</ul>
<?php
$todayWeek=date("N");
$diff=1-$todayWeek;
$lastMonday=strtotime("$diff days");
$nextMonday=date("Y-m-d",strtotime("+1 week",$lastMonday));

for($i=0;$i<5;$i++){
    $nextMonday=date("Y-m-d l",strtotime("+1 week",strtotime($nextMonday)));
    echo $nextMonday;
    echo "<br>";
}

?>