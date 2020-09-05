<?php
$fruits = array('apple','banana','orange','plum','dates','mango');
$random = array('a'=>11,'b'=>12,'c'=>13,'d'=>14,'e'=>15, 12=>23, 'f'=>'Hasan','g'=>'IBTI');

$newFruits = array('jackfruit','tamarind','pineapple');
$someFruits = array_splice($fruits,0,1,$newFruits);


print_r($someFruits);
print_r($fruits);