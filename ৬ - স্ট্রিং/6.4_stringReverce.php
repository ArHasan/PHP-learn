<?php
$string = "Hello Hasan";
echo  $lan = strlen($string);
echo "\n----------\n";

$lan = strlen($string);
for ($i=1; $i<=$lan; $i++){
  echo $string[-$i];
//  echo -$i;
//  echo $i."=".$string[-$i];
}
echo PHP_EOL;
 $length = strlen($string)-1;
for($i=$length; $i>=0; $i--){
    echo $string[$i];
}
echo PHP_EOL;
echo strrev($string);
echo PHP_EOL;

