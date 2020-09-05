<?php
$fruits = array('apple','banana','orange','plum','dates','mango');
$random = array('a'=>11,'b'=>12,'c'=>13,'d'=>14,'e'=>15, 12=>23, 'f'=>'Hasan','g'=>'IBTI');

// $someFruits = array_slice($fruits,1);
// $someFruits = array_slice($fruits,2,-1);
// $someFruits = array_slice($fruits,-3,-1);
// $someFruits = array_slice($fruits,1,3,true);
$randomData = array_slice($random,0,null,true);
print_r($randomData);

$test = join('-',$random);
echo $test;

