<?php
$string = "Hello Hasan, How are you";
$string2 = "Quick brown fox jumps over the lazy dog";
$parts = explode(',',$string);
$parts = explode(' ',$string);
print_r($parts);
echo PHP_EOL;
//$original = join(" ",$parts);
$original = implode(" ",$parts);
echo $original;
//---------------
//$parts2 = str_split($string);
//print_r($parts2);
echo PHP_EOL;
$parts3 = strtok($string," ,");
//while ($parts3 !== false){
//    echo $parts3."\n"; //iterator
//    $parts3 = strtok(" ,");
//}
print_r($parts3);
echo PHP_EOL;
//$parts4 = strtok($string2,' ');
//while($parts4 !== false){
//    echo $parts4."\n" ;
//    $parts4 = strtok(" ");
//}
echo PHP_EOL;
$parts5 = preg_split("/ |,/",$string);
print_r($parts5);





 //my own code
//$count =str_word_count($string);
//for ($i=0; $i<$count; $i++){
//    echo $i ."->".($parts[$i])." = " . strlen($parts[$i]) ." = ". strrev($parts[$i]);
//    echo PHP_EOL;
//}