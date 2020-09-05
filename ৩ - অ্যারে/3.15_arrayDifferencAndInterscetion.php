<?php 
//find array common value

$number1 = array(1,4,3,66,54,7,23,1,2,5,10);
$number2 = array(88,44,3,66,54,8,23,1,9,5,6);

$fruits1 = array('a'=>'apple','b'=>'banana','c'=>'lemon');
$fruits2 = array('d'=>'pineapple','b'=>'malta','d'=>'grapes','c'=>'lemon');

$common = array_intersect($number1,$number2);
// $commonf = array_intersect($fruits1,$fruits2);
$commonf = array_intersect_assoc($fruits1,$fruits2);

print_r($common);
print_r($commonf);

$diff = array_diff($number1, $number2);
// $difff = array_diff($fruits1, $fruits2);
$difff = array_diff_assoc($fruits2, $fruits1);
print_r($diff);
print_r($difff);