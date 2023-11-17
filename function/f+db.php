<?php

$rows=all('students',['dept'=>'3']);

dd($rows);

function all($table=null,$where='',$other=''){
    $dsn="mysql:host=localhost;charset=utf8;dbname=school";
    $pdo=new PDO ($dsn,'root', '');
    $sql="select * from `$table` ";
    
    if(isset($table) && !empty($table)){
    // $sql="select * from `$table` $where";
    // $rows=$pdo->query($sql)->fetchAll();
    // return $rows;
   if(is_array($where)){
       
    if(is_array($where)){
        if(!empty($where)){
            foreach($where as $col => $value){
                $tmp[]="`$col`='$value'";
            }
            $sql .= " where ".join(" && ",$tmp);
        }
       }else{
        $sql .=" $where";
       }

       $sql .=$other;
   }else{
       $sql="select * from `$table` $where";
       $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
       return $rows;
   }

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

<!-- where `col`=`value` && `col`=`value` && `col`=`value`
-> join('&&' array)
   =  $array=['`col`=`value`,`col`=`value`,`col`=`value`']  (使用join將多種變數融合)
   $array[]='1 2 3'
   $array[]='1 2 3'
   $array[]='1 2 3'
   foreach ($array as $tmp =>$value)
   $tmp[]= "'column'='value'"  -->