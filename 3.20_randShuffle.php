<?php 

$number = range(40,60);
$random = mt_rand(0,30);

// print_r($number);
// print_r($random);

$luck = $number[$random];

if($luck%2==0){
    echo 'Head';
}else{
    echo 'Tail';
}

echo "\n";
// shuffle($number);
// print_r($number);
$randomNumber = $number[3];
echo $randomNumber;