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