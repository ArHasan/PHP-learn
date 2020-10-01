<?php 

class Human{
   public $name;
    function SayHi(){
        echo "salam\n";
    }
    function sayName(){
        echo "Your are name is {$this->name}";
    }
}

class Cat{
    function SayHi(){
        echo "Meew\n";
    }
}

class Dog{
    function SayHi(){
        echo "woof\n";
    }
}

$h1 = new Human();
$h2 = new Human();

$h1->name = "Hasan\n";
$h2->name = "Aman\n";
echo $h1->name;
echo $h2->name;

$h1->sayName();
$h2->sayName();