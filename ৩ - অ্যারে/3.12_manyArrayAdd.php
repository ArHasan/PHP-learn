<?php
$fruits = array('apple','banana','orange','plum','dates','mango');
$random = array('a'=>11,'b'=>12,'c'=>13,'d'=>14,'e'=>15, 12=>23, 'f'=>'Hasan','g'=>'IBTI');

// $newFruits1 = array_slice($fruits,0,2);
// $newFruits2 = array_slice($fruits,2,null,true);

// $newFruits = array_merge($newFruits1,$newFruits2);

// print_r($newFruits1);
// print_r($newFruits2);
// print_r($newFruits);

// $newFruitsPlus = $newFruits1 + $newFruits2;
// print_r($newFruitsPlus); 

$r1 = array_slice($random,0,2,true);
$r2 = array_slice($random,4,null,true);
$r3 = array('j'=>45, 'k'=>90);

$randomData = array_splice($random,2,2,array('j'=>40,'H'=>50));
$randomDataCorrectWay = $r1+$r2+$r3;


print_r($randomData);
print_r($random);
print_r($randomDataCorrectWay);