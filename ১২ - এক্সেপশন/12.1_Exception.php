<?php 
class Student{
    function __construct($name,$age){
        $this->name = $name;
        if($age<4){
            throw new Exception('Too Yange',1001);
        }elseif($age>35){
            throw new Exception("Too old",1002);
        }
        $this->age = $age;
    }
}

try{
     $s = new Student('Rahim',6);
    echo "it will never display";
}catch(Exception $e){
    echo $e->getCode().":".$e->getMessage();
}