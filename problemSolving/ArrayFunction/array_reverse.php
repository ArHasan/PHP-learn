<?php 
// $input  = array("php", 4.0, array("green", "red"));
$input  = ['Hasan','Aman','Nahid','Nowshin'];
$reversed = array_reverse($input);
$preserved = array_reverse($input, true);

print_r($input);
print_r($reversed);
print_r($preserved);
?>