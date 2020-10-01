<?php 

define('OK',123);

class MyClass{
    const CITY = 'Dhaka';

    function sayHi(){
        // echo "Hi From".self::CITY;
        echo "Hi From".$this::CITY;
    }
}

$m = new MyClass();
// echo $m::CITY;
$m->sayHi();
echo MyClass::CITY;