<?php

abstract class Person {

    abstract public function greet();
}

class English extends Person {

    public function greet() {
        return 'Hello';
    }
}

class German extends Person {

    public function greet() {
        return 'Hallo';
    }
}

class Bangla extends Person {
    
    public function greet() {
        return 'salam';
    }
}

function greeting($people)
{
	foreach ($people as $person) {
		echo $person->greet() . "\n";
	}
}

$people = [
	new English(),
	new German(),
	new Bangla()
];

greeting($people);