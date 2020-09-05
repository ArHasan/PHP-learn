<?php 
// $numbers = array(12,13,14,15,16,17,18,19,20);
// $numbers = array();
// for($i=12; $i<21; $i++){
//     array_push($numbers,$i);
// }

$numbers = range(10,20,2);
print_r($numbers);

foreach(range(0,50,11) as $evenNumber){
    if($evenNumber > 0){
        echo $evenNumber."\n";
    }
}