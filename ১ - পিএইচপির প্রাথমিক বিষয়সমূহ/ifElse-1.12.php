<?php
$n = 12;
if ($n % 2==0){
    echo "$n is an even number";
}else{
    echo "$n is a odd number";
}

echo PHP_EOL;

if($n%2==0):
    echo "Even number";
else:
    echo "Odd number";
endif;

echo PHP_EOL;

echo $n = ($n%2==0)?"Even number":"Odd number";