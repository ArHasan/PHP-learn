<?php

$cat = 'cat-12,cat-13,subcat-14,cat-15';
$test ='sasd fsd#%';
print_r($cat);
echo PHP_EOL;
$t = (preg_split('/(#%|,)/', $test));

print_r($t);

echo $t[1];
print_r(join(' ',$t));

// print_r(serialize($t));