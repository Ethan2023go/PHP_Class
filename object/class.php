<?php

// 類別 type
class Animal{
      public $name;
    
    //  將這個function指定給他
    public function setName($name){
         $this->name=$name;
         // $this (這個物件)
    }
      
}

// 實體化  instant
$animal=new Animal;

echo '顯示名稱'.$animal -> name;
echo "<br>";
$animal->setName('小花');
echo '顯示名稱' .$animal->name;
echo "<br>";



?>