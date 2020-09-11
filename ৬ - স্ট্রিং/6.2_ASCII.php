<?php
echo ord('A');
echo PHP_EOL;
echo ord('a');
echo PHP_EOL;

echo chr(99);
echo PHP_EOL;
$a = 32;
$b = 126;
//foreach
foreach(range($a,$b) as $key => $char){
    echo  $char ." => " . chr($char);
    echo PHP_EOL;
}
//for loop
for($i=32; $i<=126; $i++){
    echo $i ." = ". chr($i);
    echo PHP_EOL;
}
//while loop
$i=32;
while ($i<=$b){
    echo $i ." = ". chr($i);
    $i++;
    echo PHP_EOL;
}