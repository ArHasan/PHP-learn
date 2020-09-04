<?php

function doTaskA(){
    echo "Step A Done";
}
function doTaskB(){
    echo "Step B Done";
}
function doTaskC(){
    echo "Step C Done";
}
function doTaskD(){
    echo "Step D Done";
}
function doTaskE(){
    echo "Step E Done";
}

function doTheLargerTask(){
    doTaskA();
    doTaskB();
    doTaskC();
    doTaskD();
    doTaskE();
}
doTheLargerTask();