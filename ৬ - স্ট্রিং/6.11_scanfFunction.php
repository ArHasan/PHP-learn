<?php
$name = "Ar Hasan 0176871527";
$parts = sscanf($name, "%s %s %11s");
print_r($parts);

sscanf($name, "%s %s %11s",$fname,$lname,$mobile);
echo $fname;

echo PHP_EOL;
$hexColor = "#FF2F44";
sscanf($hexColor,"#%2x%2x%2x", $red,$green,$amaranth);
echo $amaranth;