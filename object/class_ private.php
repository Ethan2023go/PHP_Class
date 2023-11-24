<?php

// 類別 type
class Animal{
      private $name;
    
    //  將這個function指定給他
    public function setName($name){
        $this->name=$name;
    }

    public function getName(){
        return $this->name;
    }
     
      
}

// 實體化  instant
$animal=new Animal('Yo');
// 將Animal取名為Yo
echo '顯示名稱:'.$animal->getName();
echo "<br>";
$animal->setName('小花');
echo '顯示名稱:'.$animal->getName();
echo "<br>";

// private 所以無法使用，之後研究
// $animal->name='阿中';
// echo '顯示名稱:'.$animal->name;
// echo "<br>";


?>