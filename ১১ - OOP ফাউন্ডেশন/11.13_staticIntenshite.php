<?php 

class MathCalculator{
    private $number;
    static $name;
    static function fibonacci($n){
        // self::$name = 12;
        echo self::$name."\n";
        self::doSomething();
        // $this->doSomething(); wrong call
        echo "Fibonacci series up to {$n}\n";
    }

    static function doSomething(){
        echo "Doing well\n";
    }

    function factorial($n){
        self::$name = "adbd";
        self::doSomething();
        $this->doSomething();
        $this->number =12;
        echo "Calculating factorial of {$n}";
    }

}
$mathc = new MathCalculator();
$mathc->fibonacci(8);

MathCalculator::fibonacci(5);
echo MathCalculator::$name;