<?php
del('students',['graduate_at'=>'23']);



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
                                        // :: 靜態索引的意思 
       return $rows;
   }

}else{
    echo "錯誤 : 大笨蛋";
  }
}


// function find($table,$id){
//     $dsn="mysql:host=localhost;charset=8;dbname=school";
//     $pdo= new PDO($dsn,'root','');

//     $row="select * from `$table` where `$id`";

//     $row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
//     return $row;
// } 

// find
function find($table,$id){
    $dsn="mysql:host=localhost;charset=8;dbname=school";
    $pdo= new PDO($dsn,'root','');
    $sql="select * from `$table`";

    if(is_array($id)){
        foreach($id as $col => $value){
            $tmp[]="`$=col`='$value'";
        }
        $sql .=" where " .join(" && ",$tmp);
        
        }else if(is_numeric($id)){
            $sql .="where `id`='$id'";
        }else{
            echo"錯誤:參數的資料型態必須是數字或陣列";
        }
    
    echo 'find=>'.$sql;
    $row="select * from `$table` where `$id`";

    $row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    return $row;
} 

// update
function update($table,$id,$cols){
    $dsn="mysql:host=localhost;charset=utf8;dbname=school";
    $pdo=new PDO($dsn,'root','');

    $sql="update `$table` set ";

    if(!empty($cols)){
        foreach($cols as $col => $value){
            $tmp[]="`$col`='$value'";
        }
    }else{
        echo "錯誤:缺少要編輯的欄位陣列";
    }

    $sql .= join(",",$tmp);
    $tmp=[];
    if(is_array($id)){
        foreach($id as $col => $value){
            $tmp[]="`$col`='$value'";
        }
        $sql .=" where ".join(" && ",$tmp);
    }else if(is_numeric($id)){
        $sql .= " where `id`='$id'";
    }else{
        echo "錯誤:參數的資料型態比須是數字或陣列";
    }
    echo $sql;
    return $pdo->exec($sql);
}

// insert
function insert($table,$values){
    $dsn="mysql:host=localhost;charset=utf8;dbname=school";
    $pdo=new PDO($dsn,'root','');

    $sql="insert into `$table` ";
    $cols="(`".join("`,`",array_keys($values))."`)";
    $vals="('".join("','",$values)."')";
    
    $sql=$sql . $cols ." values ".$vals;
    
    //echo $sql;

    return $pdo->exec($sql);
}

// del
function del($table,$id){
    $dsn="mysql:host=localhost;charset=utf8;dbname=school";
    $pdo=new PDO($dsn,'root','');
    $sql="delete from `$table` where";
    
    if(is_array($id)){
      foreach($id as $col => $value){
        $tmp[]="`$col`='$value'";
      }
      $sql.= join(" && ",$tmp);
    }else if(is_numeric($id)){
        $sql .="where `id`='$id'";
    }else{
        echo"錯誤:參數的資料型態必須是數字或陣列";
    }
    echo $sql;
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
   