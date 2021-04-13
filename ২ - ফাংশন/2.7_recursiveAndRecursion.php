<?php

function printN($i){
    if($i>=10){
        return;
    }
    echo "$i \n";
    $i++;
    printN($i);
}
printN(1);

//recursive function //recursion

function printNumber($counter,$end,$stepping=1){
    //breacking condetion //base case
    if($counter>$end){
    return;
    }
    echo $counter."\n";
    // $counter++;
    $counter +=$stepping;
    printNumber($counter,$end);
    
}
// printNumber(10,30,2);