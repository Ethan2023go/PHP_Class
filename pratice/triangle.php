<h2>直角三角形</h2>
<?php

echo "*<br>";
echo "**<br>";
echo "***<br>";
echo "****<br>";
echo "*****<br>";

// for($i=0;$i<5;$i++){
//     echo "*";
// }

echo "<hr>";

for($i=0;$i<5;$i++){
    for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}
?>
<hr>

<h3>倒三角</h3>
<?php
for($i=4;$i>=0;$i--){
    for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}
?>
<hr>
<style>
* {
    font-family: 'Courier New', Courier, monospace;
}
</style>

<h3>正三角</h3>
<?php
for($i=0;$i<5;$i++){
    for($j=0;$j<(4-$i);$j++){
        echo "&nbsp;";
    }
    for($k=0;$k<($i*2+1);$k++){
        echo "*";
    }
    echo "<br>";
}

?>

<hr>

<h3>倒正三角形</h3>
<?php

for($i=4;$i>=0;$i--){
    for($j=0;$j<(4-$i);$j++){
        echo "&nbsp;";
    }
    for($k=0;$k<($i*2+1);$k++){
        echo "*";
    }
    echo "<br>";
    
}
?>

<hr>

<h3>菱形</h3>
<?php




?>