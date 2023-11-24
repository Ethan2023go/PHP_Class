<?php

class Animal{



}

interface bark{

    function b();
}

class Dog extends Animal implements bark{
    function b(){
        return  "汪";
    }
}

class Cat extends Animal implements bark{
    function b(){
        return  "喵";
    }
}

// class內建工程師常用外掛 一般class一個專案所以會有衝突選項
$dog=new Dog;
$cat=new Cat;

echo $dog->b();
echo "<br>";
echo $cat->b();