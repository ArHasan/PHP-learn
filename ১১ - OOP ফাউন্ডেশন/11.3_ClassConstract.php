<?php 

class Human{
    public $name;
    function __construct($personName,$age=0){
        // echo "New Human Object Is Created\n";
        $this->name = $personName;
        $this->age = $age;

    }
    function sayHi(){
        echo "Salam\n";
        $this->sayName();
    }

    function sayName(){
        if($this->age){
            echo "My name is {$this->name} and {$this->age}\n";
        }else{
            echo "My name is {$this->name} and age empty\n";
        }
    }
}

$h1 = new Human('Hasan',23);
$h2 = new Human('Aman',);
$h1->sayHi();
$h2->sayHi();