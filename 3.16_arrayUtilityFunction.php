<?php 

$number = array(1,2,3,4,5,6,7,8,9,10,11,12);

function square($n){
    printf("Square of %d is %d \n",$n, $n*$n);
}
array_walk($number,'square');

function cube($n){
    return $n*$n*$n;
}

function even($n){
    return $n%2==0;
}
function odd($n){
    return $n%2==1;
}

// $newArray = array_map('cube',$number);
$evenNumbers = array_filter($number,'even'); //collback function
$oddNumbers = array_filter($number,'odd'); //collback function

print_r($number);
print_r($evenNumbers);
print_r($oddNumbers);

$person = array('Hasan','Aman','Nahid','Hasin','Hoydor','Helel','Fahim');
function filterByS($name){
    return $name[0]=='H';
}
$newPersons = array_filter($person,'filterByS');
print_r($newPersons);

