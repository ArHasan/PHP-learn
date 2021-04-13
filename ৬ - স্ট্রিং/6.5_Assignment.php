<?php
$string = "Hello Hasan , How are you";
$parts = str_split($string);
// print_r($parts);
$count =  count($parts);
for ($i =65; $i<=122; $i++ ){
    $w_count = 0;
    $a = chr($i);
     for ($j = 0; $j<$count; $j++){
         $b = $parts[$j];
         if($a == $b){
             $w_count++;
             echo $b;
         }
     }
    if($w_count){
        echo "-->".$w_count."\n";
    }
}


//print_r(array_count_values($parts));
