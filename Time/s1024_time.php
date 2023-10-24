<H1>日期與時間</H1>

<?php
date_default_timezone_set('Asia/Tokyo');

echo date ("Y-m-d H:i:s");
?>
<h2>strtotime</h2>
<?php
echo strtotime("now");
$time=strtotime("now");
echo "<br>";
echo date("Y-m-d H:i:s",$time);
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
// $date="1974-10-07";
// $timestamp = mktime(9, 27, 0, 10, 24, 2023); 
// echo $timestamp;
// echo "<br>";
// echo date("Y-m-d H:i:s",$timestamp);
// $days1='2023-12-31';
// echo "<br>";
// $days=(strtotime($timestamp)-strtotime($date1))/(60*60*24);

// echo $timestamp.'到'.$date1."有".$days."天";


?>
<h2>計算下次生日天數</h2>
<?php
$date="1974-10-07";
$br=strtotime($date);
$diff=strtotime(date("Y")."-".date("m-d",$br));
$today=strtotime('now');
if($diff>$today){
    $days=($diff-$today)/(60*60*24);
}else{
    $diff=strtotime("+1 year",$diff);
    $days=($diff-$today)/(60*60*24);
}

echo "距離下一次生日:".date("Y-m-d",$diff)."還有".floor($days)."天";



?>