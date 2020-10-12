<?php 
trait MyTrait{
    static $number;
    abstract function sayHi();
}

class MyClassA{
    use MyTrait;
    function sayHi(){
        echo "HI";
    }
}
class MyClassB{
    use MyTrait;
    function sayHi(){
        echo "Hello";
    }
}

MyClassA::$number = 2;
echo MyClassA::$number;

$ma = new MyClassB();
echo $ma::$number;