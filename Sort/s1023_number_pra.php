<h2>威力彩電腦選號沒有重覆號碼(利用while迴圈)</h2>
<ul>
    <li>使用亂數函式rand($a,$b)來產生號碼</li>
    <li>將產生的號碼順序存入陣列中</li>
    <li>每次存入陣列中時會先檢查陣列中的資料有沒有重覆</li>
    <li>完成選號後將陣列內容印出</li>
</ul>
<?php
/* $num=[];
for($i=0;$i<38;$i++){
    $tmp= rand(1,38);

    if(!in_array($tmp,$num)){
        $num[]=$tmp;
    }
}

foreach($num as $n){
    echo $n . ",";
} */


$num=[];

while(count($num)<6){
    $tmp= rand(1,38);
    if(!in_array($tmp,$num)){
        $num[]=$tmp;
    }
}

foreach($num as $n){
    echo $n . ",";
}
?>

<hr>

<h2>找出五百年內的閏年</h2>

<li>請依照閏年公式找出五百年內的閏年</li>
<li>使用陣列來儲存閏年</li>
<li>使用迴圈來印出閏年</li>

<?php

$years=[];

for($i=2023;$i<2523;$i++){

    if(($i%4==0 && $i%100 !==0) || $i %400==0){
        $years[]=$i;
}
}
foreach ($years as $key => $year) {
    echo $year . "<br>";
}


// 2023~2523
// $years=[];
?>

<hr>


<h2>已知西元1024年為甲子年,請設計一支程式,可以接受任一西元年份,輸出對應的天干地支的年別</h2>

<li>天干：甲乙丙丁戊己庚辛壬癸</li>
<li>地支：子丑寅卯辰巳午未申酉戌亥</li>

<?php
$year=2012;

$sky=['甲','乙','丙','丁','戊','己','庚','辛','壬','癸'];
$land=['子','丑','寅','卯','辰','巳','午','未','申','酉','戌','亥'];

echo "西元".$year."是";
echo $sky[($year-1024)%10];
echo $land[($year-1024)%12];
echo "年";

?>

<hr>

<h2>請設計一支程式，在不產生新陣列的狀況下，將一個陣列的元素順序反轉</h2>
<h3>例：$a=[2,4,6,1,8] 反轉後 $a=[8,1,6,4,2]</h3>

<?php
echo"<pre>";
print_r($a);
echo "</pre>";


$a=[2,4,6,1,8];
echo "<pre>";
print_r($a);
echo "</pre>";

for($i=0;$i<floor(count($a)/2);$i++)

{
    $tmp=$a[$i];
    $a[$i]=$a[count($a)-1-$i];
    $a[count($a)-1-$i]=$tmp;
}

echo "<pre>";
print_r($a);
echo "</pre>";

echo "<hr>";
echo "<pre>";
print_r(array_reverse($a));
echo "</pre>";

?>