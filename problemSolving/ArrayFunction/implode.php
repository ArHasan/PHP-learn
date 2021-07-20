<?php

$array = array('lastname', 'email', 'phone');
$comma_separated = implode("|", $array);

echo $comma_separated; // lastname,email,phone

echo PHP_EOL;
// Empty string when using an empty array:
var_dump(implode('hello', array('Hasan'),)); // string(0) ""

?>