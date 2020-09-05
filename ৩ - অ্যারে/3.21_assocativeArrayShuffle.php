<?php 

$fruits = array('a'=>'Array','b'=>'banana','c'=>'Cherry','d'=>'Dates');

shuffle($fruits);
print_r($fruits);

$key = array_rand($fruits);
echo $fruits[$key];

$_fruits = $fruits;
shuffle($_fruits);
print_r($_fruits);