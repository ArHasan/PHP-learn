<?php
// $vegetables =explode(', ','brinjal, brocolli, carrot, capsicam,poteto, tometo');
$vegetables =preg_split('/(, |,)/','brinjal, brocolli, carrot, capsicam,poteto, tometo');
//delimeter
// var_dump($vegetables);
print_r($vegetables);
// echo $vegetables[0];

$vegetablesString = join(', ',$vegetables);
// echo $vegetablesString;
echo count($vegetables);
