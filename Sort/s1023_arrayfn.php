<?php

$array=[3,2,7,10,30,17];

if(in_array(10,$array)){
    echo "數字有在陣列中";
}else{
    echo "數字不再陣列中";
}
// in_array(個型態都可數字,字串,陣列 & 第二個數字一定要為陣列)
// 陣列抓取數值

echo"<pre>";
print_r($array);
echo"</pre>";
// 原始陣列

sort($array);

echo"<pre>";
print_r($array);
echo"</pre>";
// 加入sort, 遞增陣列

rsort($array);
echo"<pre>";
print_r($array);
echo"</pre>";
// 反向rsort, 遞減陣列


$ss="today is a good day";
$tt= explode(" ",$ss);
print_r($tt);
// explode炸開,將陣列炸開

$cc=implode("--",$tt);
echo $cc;
// implode聚合,將字串聚合
?>