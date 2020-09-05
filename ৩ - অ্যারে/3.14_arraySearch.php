<?php 
$fruits = array('a'=>'apple','b'=>'banana','o'=>'orange','p'=>'plum','d'=>'dates','m'=>'mango');
$number = array(22,54,12,23, 9, 2, 24, '44', 99,);

if(in_array(44,$number)){
    echo '44 is found',"\n";
}

$offset = array_search(44,$number,true);
echo $offset."\n";

if(key_exists('b',$fruits)){
    echo 'key is exists';
}