<?php 
$num = [1,2,3,4,5,6,7,8,9,10];
echo count($num);

echo PHP_EOL;

$a[0]= 1;
$a[1]= 2;
$a[2]= 3;
$a[3]= 4;
$a[4]= 5;
print_r(count($a));

echo PHP_EOL;

$food = array('fruits' => array('orange', 'banana', 'apple'),
              'veggie' => array('carrot', 'collard', 'pea'));

              echo count($food);
var_dump($food['fruits']);
print_r($food['fruits']);

echo count($food, COUNT_RECURSIVE);
?>