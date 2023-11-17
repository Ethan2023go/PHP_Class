
<style>
    *{
        font-family: 'Courier New', Courier, monospace;
    }
</style>

<?php
stars('矩形',20);
// stars('倒三角形',10);
function stars($shape,$size){
    switch($shape){
        case '正三角形':
        equilateral_triangle($size);
        break;
        
        case '矩形':
        retangle($size);
        break;

        
        case '倒三角形':
        inverted_triangle($size);
        break;
    
}
}


function equilateral_triangle($size){
for($i=0;$i<$size;$i++){
    for($j=0;$j<($size-1-$i);$j++){
        echo "&nbsp;";
    }
    for($k=0;$k<($i*2+1);$k++){
        echo "*";
    }
    echo "<br>";
  }
}
?>

<?php
function retangle($size){
    for($i=0;$i<$size;$i++){

        for($j=0;$j<$size;$j++){
            if($i==0 || $i==($size-1)){
                echo "*";
            }else if($j==0 || $j==($size-1)){
                echo "*";
            }else{
                echo "&nbsp;";
            }
    
        }
        echo "<br>";
    }
}
?>

<?php
inverted_triangle(10);
inverted_triangle(12);
inverted_triangle(15);

function inverted_triangle($size){
for($i=0;$i<$size;$i++){
    for($j=0;$j<$size;$j++){
        echo "&nbsp;";
    }
    for($k=0;$k<($size-($i*2));$k++){
        echo "*";
    }
    echo "<br>";
}
}  
?>

