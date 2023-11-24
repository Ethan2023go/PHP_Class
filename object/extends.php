<?php
    
    class Animal{
    protected $name;

    public function __construct($name)
    {
        $this->name=$name;
    }

    public function setName($name){
        $this->name=$name;
    }

    public function getName(){
        return $this->name;
    }

}



class Dog extends Animal{

     function sit(){
        echo "叫兩聲來聽聽";
     }
}

$dog = new Dog('來福');
echo $dog -> getName();
echo "<br>";
echo $dog -> setName('臭狗');
echo $dog -> getName();
$dog -> sit();
?>