<?php 
$name = "Hasan"; //global scope
function doSomething(){
    // global $name;
    // echo $name;
    echo $GLOBALS['name'];
}
doSomething();

echo PHP_EOL;

function localScope(){
    $name = 'nice';
    echo $name;
}

localScope();

echo PHP_EOL;

function staticScoope(){
    Static $i;
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "\n";
}

staticScoope();
staticScoope();
staticScoope();