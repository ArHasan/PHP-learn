<?php 

class A{
    public static $name;
    static function sayHi(){
        // $this->name = "Hasan";
        self::$name = "Hasan";
        echo "Hi From A\n";
    }
}

class B extends A{
     static function sayHi(){
         echo parent::$name;
        echo "Hi From B\n";
        parent::sayHi();
    }
}
B::sayHi();
// A::sayHi();
echo B::$name;