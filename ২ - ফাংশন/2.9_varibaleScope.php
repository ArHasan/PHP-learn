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

function doSomethingg(){
    static $i; //static scope
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "\n";
}
echo "---------\n";
function doExtra(){
    static $i;
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "\n";
}

doSomethingg();
doSomethingg();
doSomethingg();
doExtra();
doExtra();
doExtra();