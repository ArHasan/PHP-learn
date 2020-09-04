<?php

$name = ['Hasan','Aman','Nahid','Nowshin'];
$food = array('mango','bannan','stobery','pinapel');

// var_dump($name);
// echo count($name);

$n = count($name);

for($i = 0; $i<$n; $i++){
    echo $i."-".$name[$i]."\n";
}
echo "\n";

$m = count($food);

for($i=($m-1); $i>=0; $i--){
    echo $i."-" .$food[$i]."\n";
}