<?php
$name = 'ArHasan';
// $age = 24;
$question = "How are your?";

echo 'Hello' . $name;
echo "\n";

echo "Hi $name";
echo 'HI $name'; //singel coute not execute variable

echo "Hello {$name},{$question}\n";

/* class-1.3 */
define('PI',3.14169);
$task = 'Read';
$task = 'Write';
echo $task;
echo "\n";
echo "Value of PI = {PI}".PI;
echo "\n";
echo constant('PI');

$constant = 'constant';
echo "Value of PI = {$constant('PI')}";

/*class-1.8*/
$n = 7;
$m = $n++;
echo "\npost increment m = {$m}" ."\nincrement n = {$n}";

/*
$m = $n++;
$m = $n;
$n = $n + 1;

$m = ++$n;
$n = $n + 1;
$m = $n;
*/
// echo "\n";
printf('My name is %2$s and %1$s',$question,$name);
