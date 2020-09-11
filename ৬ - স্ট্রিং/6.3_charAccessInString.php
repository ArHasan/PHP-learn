<?php
$string = "Hello Hasan";
echo $string[0];
echo $string[-1]."\t";
echo substr($string,6,11);
echo PHP_EOL;

$length = strlen($string);
echo substr($string,$length-3);
echo PHP_EOL;
echo substr($string,-11,-1);
