<?php
$name = [
    '12'=>'Hasan',
    '13'=>'Nahid',
    '14'=>'Aman',
];

// echo $name['13'];
// echo $name[12];

$foods=[
    'vegetables'=>'brinjal, brocolli, carrot, capsicam',
    'fruits'=>'orange, banana, apple',
    'drinks'=>'water, milk, tea'
];

print_r($foods['drinks'] .= ",orange juice");

// echo $foods['vegetables'];

// for($i=0;$i<=count($foods);$i++){
//     echo $foods[$i];
//     var_dump( $foods[$i]);
// }

// foreach($foods as $key=>$food){
//     echo "\n".$key." => ".$food;
// }

$keys = array_keys($foods);
$values = array_values($foods);
// print_r($keys);
// print_r($values);

// for($i=0;$i<count($keys);$i++){
//     $key = $keys[$i];
//     echo $foods[$key]."\n";
// }

// for($i=0;$i<count($values);$i++){
//     $value = $values[$i];
//     echo $value."\n";
// }