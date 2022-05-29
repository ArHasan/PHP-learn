<?php

$greeting = 'Hello ';

$name = 'Hasan';

// echo  "{$greeting}{$name}";

$num = [2,7,11,15];
$target = 9;
$sum =0;
$result = [];
foreach($num as $key=>$item){
    $sum = $item + $sum;
    if($sum == $target){
        array_push($result,$key);
        echo $sum,"[$key]";
        echo $sum;
    }
    echo $sum,"[$key]";
    echo PHP_EOL;
}
echo $sum;
print_r($result);