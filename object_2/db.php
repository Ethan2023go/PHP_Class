<?php
date_default_timezone_set("Asia/Taipei");
session_start();
class DB{

protected $dsn="mysql:host=localhost;charset=utf8;dbname=material";
// 宣告型可以使用，運算型不能用在這
protected $pdo;
protected $table;

public function __construct($table)
{
    $this -> table=$table;
    $this ->pdo=new PDO($this->dsn,'root','');
}

function all( $where = '', $other = '')
{
    
    $sql = "select * from `$this->table` ";

    if (isset($this->table) && !empty($this->table)) {

        if (is_array($where)) {

            if (!empty($where)) {
                foreach ($where as $col => $value) {
                    $tmp[] = "`$col`='$value'";
                }
                $sql .= " where " . join(" && ", $tmp);
            }
        } else {
            $sql .= " $where";
        }

        $sql .= $other;
        //echo 'all=>'.$sql;
        $rows = $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    } else {
        echo "錯誤:沒有指定的資料表名稱";
    }
}

function total($id)
{
    
    $sql = "select count(`id`) from `$this->table` ";

    if (is_array($id)) {
        foreach ($id as $col => $value) {
            $tmp[] = "`$col`='$value'";
        }
        $sql .= " where " . join(" && ", $tmp);
    } else if (is_numeric($id)) {
        $sql .= " where `id`='$id'";
    } else {
        echo "錯誤:參數的資料型態比須是數字或陣列";
    }
    //echo 'find=>'.$sql;
    $row = $this->pdo->query($sql)->fetchColumn();
    return $row;
}

function find($id)
{
    
    $sql = "select * from `$this->table` ";

    if (is_array($id)) {
        foreach ($id as $col => $value) {
            $tmp[] = "`$col`='$value'";
        }
        $sql .= " where " . join(" && ", $tmp);
    } else if (is_numeric($id)) {
        $sql .= " where `id`='$id'";
    } else {
        echo "錯誤:參數的資料型態比須是數字或陣列";
    }
    //echo 'find=>'.$sql;
    $row = $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    return $row;
}

// 因為 update&insert 的array 陣列相同,將兩個function綁成save這個function

function save($array){
    if(isset($array['id'])){
        $sql = "update `$this->table` set ";

        if (!empty($cols)) {
            foreach ($cols as $col => $value) {
                $tmp[] = "`$col`='$value'";
            }
        } else {
            echo "錯誤:缺少要編輯的欄位陣列";
        }
    
        $sql .= join(",", $tmp);
        $sql .= " where `id`='{$array['id']}'";
    }else{
        $sql = "insert into `$this->table` ";
        $cols = "(`" . join("`,`", array_keys($array)) . "`)";
        $vals = "('" . join("','", $array) . "')";
    
        $sql = $sql . $cols . " values " . $vals;
    }

    return $this->pdo->exec($sql);
}
    

function update($id, $cols)
{

    $sql = "update `$this->table` set ";

    if (!empty($cols)) {
        foreach ($cols as $col => $value) {
            $tmp[] = "`$col`='$value'";
        }
    } else {
        echo "錯誤:缺少要編輯的欄位陣列";
    }

    $sql .= join(",", $tmp);
    $tmp = [];
    if (is_array($id)) {
        foreach ($id as $col => $value) {
            $tmp[] = "`$col`='$value'";
        }
        $sql .= " where " . join(" && ", $tmp);
    } else if (is_numeric($id)) {
        $sql .= " where `id`='$id'";
    } else {
        echo "錯誤:參數的資料型態必須是數字或陣列";
    }
    // echo $sql;
    return $this->pdo->exec($sql);
}

function insert($values)
{
    
    $sql = "insert into `$this->table` ";
    $cols = "(`" . join("`,`", array_keys($values)) . "`)";
    $vals = "('" . join("','", $values) . "')";

    $sql = $sql . $cols . " values " . $vals;

    //echo $sql;

    return $this->pdo->exec($sql);
}

function del($id)
{
    
    $sql = "delete from `$this->table` where ";

    if (is_array($id)) {
        foreach ($id as $col => $value) {
            $tmp[] = "`$col`='$value'";
        }
        $sql .= join(" && ", $tmp);
    } else if (is_numeric($id)) {
        $sql .= " `id`='$id'";
    } else {
        echo "錯誤:參數的資料型態比須是數字或陣列";
    }
    //echo $sql;

    return $this->pdo->exec($sql);
}


}

function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

$student=new DB('students');
$rows=$student->all();
dd($rows);

?>
