<?php
interface BaseAnimal{
    function isAlive();
    function canEat($param);
    function breed();
}

class Animal implements BaseAnimal{
    function isAlive(){}
    function canEat($param){}
    function breed(){}
}
interface BaseHuman extends BaseAnimal{
    function canTalk();
}
class Human implements BaseHuman{
    function isAlive(){}
    function canEat($param){}
    function breed(){}
    function canTalk(){}
}

$cat = new Animal();
echo $cat instanceof BaseAnimal;


// $h = new Human();
// echo $h instanceof BaseAnimal;