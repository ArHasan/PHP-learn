<?php
$string = "Quick brown fox Fox jumps over the lazy dag";
echo stripos($string,'Fox');
echo PHP_EOL;
$offset =  strrpos($string,'Fox'); //strrpos;
echo $offset;
if($offset !== false){
    echo "\n Word was found\n";
}else{
    echo "\n word wea not found\n";
}

