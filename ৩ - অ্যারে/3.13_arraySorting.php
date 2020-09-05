<?php 
$fruits = array('a'=>'apple','b'=>'banana','o'=>'orange','p'=>'plum','d'=>'dates','m'=>'mango');

$number = array(22,54,12,23, 9, 2, 24, 44, 99,);

$random = array('apple','Apple','banana','Banana','Pineapple');
sort($random, SORT_STRING | SORT_FLAG_CASE);
print_r($random);

// sort($number);
// rsort($number);
// arsort($number);
sort($number,SORT_STRING);

// asort($fruits);
ksort($fruits);

print_r($number);
// print_r($fruits);

// for($i=0;$i<count($number);$i++){
//     echo $number[$i]."\n";
// }

// echo "-----------\n";
// foreach ($fruits as $item) {
//     echo $item."\n";
// }