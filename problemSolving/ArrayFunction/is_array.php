<?php 
$yes = array('this', 'is', 'an array');

echo is_array($yes)? 'Array' : 'Not an Array';
echo "\n";

$no = 'this is a string';

echo is_array($no) ? 'Array' : 'not an Array';

?>