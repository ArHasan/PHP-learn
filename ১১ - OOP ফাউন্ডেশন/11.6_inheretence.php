<?php

class Animal{
    protected $name;
    
    public function __construct($name){
        $this->name = $name;
    }

    function eat(){
        echo "{$this->name} is eating food\n";
    }
    function run(){
        echo "{$this->name} is capubale to runing\n";
    }
    function sleep(){
        echo "{$this->name} is sleeping to night\n";
    }
    public function greet(){}
    protected function addTitle($title){
        $this->name = $title . " " .$this->name;
    }
}

class Human extends Animal{
    function greet(){
        $this->addTitle('Mr.');
        echo "{$this->name} say Hi\n";
    }
}

class Cat extends Animal{
    function greet(){
        echo "{$this->name} say meew\n";
    }
}

// $hasan = new Animal('Hasan'); 
$hasan = new Human('Hasan'); 
$hasan->greet();
$hasan->eat();

$cat1 = new Cat('Tom');
$cat1->greet();