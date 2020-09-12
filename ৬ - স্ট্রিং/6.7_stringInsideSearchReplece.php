<?php
$string = "Quick Brown brown Fox fox jumps over the lazy dog";
$replacedString = str_ireplace('brown','red',$string,$count);
$string = str_replace(array('brown','fox'),array('red','cat'),$string,$count);
// str_ireplace -> all same value change;
echo $replacedString;
echo PHP_EOL;
echo $string;
echo PHP_EOL;
echo "Total Replace: {$count}";
