<?php

$rows=all('students');

dd($rows);

function all($table=null,$where=''){
    $dsn="mysql:host=localhost;charset=utf8;dbname=school";
    $pdo=new PDO ($dsn,'root', '');
    
    if(isset($table) && !empty($table)){
    $sql="select * from `$table` $where";
    $rows=$pdo->query($sql)->fetchAll();
    return $rows;
}else{
    echo "錯誤 : 大笨蛋";
}
}
function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
?>