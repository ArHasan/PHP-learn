<?php
$veryold = 0;
$old = 1;
$new = 1;

for($i=1; $i<=10; $i++){

    echo $veryold . " \n";
    $old = $new;
    $new = $old + $veryold;
    $veryold = $old;    
}


/*
inital 
v = 0
o = 1
n = 1

1st loop
v = 1
o = 1
n = 1

2nd loop
v = 1
o = 1
n = 2

3th loop
v = 2
o = 2
n = 3

4th loop
v = 3
o = 3
n = 5
*/