<?php
function sum(int ...$number):int{
    $result = 0;
    for($i=0;$i<count($number);$i++){
        $result +=$number[$i];
    }
    // foreach($number as $num){
    //     $result +=$num;
    // }
    return $result;
}
echo sum(1,2,3,4,5,);