<?php


$a=[];

$a[]=10;
$a[]=30;
$a[]='泰山';
$a[]='新莊';

echo "<pre>";
print_r($a);
echo "</pre>";

echo $a[0];
echo $a[3];

$b=[];
$b['姓名']='古鈞宇';
$b['最高學歷']='金門大學';
$b['tel']='0955555555';
$b['血型']='AB';

echo"<pre>";
print_r($b);
echo "</pre>";

echo $b['姓名'];
echo $b['tel'];

$c=[];

echo "<hr>";
$c=[];
$c['name']='古鈞宇';
$c['興趣']=['睡覺','吃飯','打電動'];

echo "<pre>";
print_r($c);
echo "</pre>";

echo $c['name'];
echo $c['興趣'][0];
echo $c['興趣'][2];