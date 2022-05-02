<?php 

class Student{
    private $name;
    private $age;
    private $class;
    function __construct($name='',$age='',$class=''){
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    public function __get($prop){
        return Strtoupper($this->$prop);
    }
    public function __set($prop,$value){
        $this->$prop = $value;
    }

    // function getName(){
    //     return $this->name;
    // }

    // function setName(){
    //      $this->name = $name;
    // }

    // function getAge(){
    //     return $this->age;
    // }

    // function setAge(){
    //     $this->age = $age;
    // }

    // function getClass(){
    //     return $this->class;
    // }

    // function setClass(){
    //      $this->class = $class;
    // }
}

$R = new Student('Hasan',' 12 ','14');
// $R = new Student();
// $R->setName('Hasan');

echo $R->name;
echo $R->age;

$R->name = "Aman";
echo $R->name;