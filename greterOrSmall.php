<?php
$x = 5;
$y = 8;

function greter($x,$y){
    if($x>$y){
        return 0;
    }
    elseif($x==$y){
        return 1;
    }
    else{
        return -1;
    }
}
    if(greter($x,$y)==0){
        echo "{$x} is grater the {$y}";
    }
    elseif(greter($x,$y)==1){
        echo "{$x} and {$y} is Equle";
    }
    elseif(greter($x,$y)==-1){
        echo "{$x} is less then {$y}";
    }
    echo PHP_EOL;
$result = $x<=>$y;
    if($result==0){
        echo "{$x} is grater the {$y}";
    }
    elseif($result==1){
        echo "{$x} and {$y} is Equle";
    }
    elseif($result==-1){
        echo "{$x} is less then {$y}";
    }