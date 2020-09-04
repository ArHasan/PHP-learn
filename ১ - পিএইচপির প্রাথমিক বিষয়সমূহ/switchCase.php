<?php
$n = 12;
$r = $n % 2;
switch($r){
    case 0:
        switch($n){
            case $n>0:
                echo "$n is posative Even number";
            break;
            
            case $n<0:
                echo "$n is negative Even number";
            break;
        }
    break;
    default:
        switch($n){
            case $n>0:
                echo "$n is posative odd number";
            break;
            
            case $n<0:
                echo "$n is negative odd number";
            break;
        }
}

echo "\n";

$string = '8balls';
switch($string){
    case(string) '9balls';
        echo 'Nine ball';
        break;
    case (string) 8:
        echo '8';
    break;
    case (string) '8balls':
        echo 'Eight Balls';
    break;
}