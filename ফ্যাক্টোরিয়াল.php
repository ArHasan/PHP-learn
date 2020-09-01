<?php
$fact=5;
$total=1;

for($i=1;$i<=$fact;$i++){
   echo $total=$i*$total ;
    // echo $total;
    echo "\n";
}

$n=3;
for($i=$n, $factorial=1; $i>1; $i--){
    // $factorial = $factorial * $i;
    $factorial *=$i;
}
printf("Factorial of %d is %d",$n,$factorial);