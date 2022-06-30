<?php 

class A{
    public static $name;
    static function sayHi(){
        // $this->name = "Hasan"; // this will not
        echo  self::$name = "Hasan ";
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

// $objA = new A();
// $objA->sayHi();

$B=B::sayHi();
print_r($B);
