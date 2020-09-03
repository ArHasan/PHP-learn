<?php
//Aman_code
$n = 10;
$firstNum= 0;
$secondNum = 1;
$sum = 0;
for($i=0; $i< $n; $i++){
    $sum = $a+$sum;
    echo $sum."\n";
    $a=$b+$sum;
    $b=$sum;
}