<?php

$name = ['Hasan','Aman','Nahid','Nowshin'];
$food = array('mango','bannan','stobery','pinapel');

// var_dump($name);
// echo count($name);

$n = count($name);

for($i = 0; $i<$n; $i++){
    echo $i."-".$name[$i]."\n";
}
// echo "\n";

// echo $m = count($food);

// for($i=($m-1); $i>=0; $i--){
//     echo $i."-" .$food[$i]."\n";
// }

// var_dump($name);
// foreach($name as $key => $item){
//     echo $item."-".$key;
//     echo PHP_EOL;
// }

// echo PHP_EOL;

// for($i=($n-1);$i>=0;$i--){
//     echo $name[$i];
//     echo PHP_EOL;
// }