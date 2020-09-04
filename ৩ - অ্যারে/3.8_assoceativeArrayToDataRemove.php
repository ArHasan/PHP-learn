<?php 

$person = array('fname'=>'Hello','lname'=>'world');

print_r($person);

//data remove
unset($person['lname']);
print_r($person);