<?php 

abstract class OurClass{
    function sayHi(){
        echo "Hi boy\n";
    }
    abstract function eat($a);
}

class MyClass extends OurClass{
    function eat($b){       
        echo "I am eating $b\n";
    }
}
$mc = new MyClass();
$mc->sayHi(); 
$mc->eat(2); 