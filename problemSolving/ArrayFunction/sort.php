<?php

$fruits = array("lemon", "orange", "banana", "apple");
sort($fruits);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}
asort($fruits);
print_r($fruits);

$fruits = array("lemon", "orange", "banana", "apple");
rsort($fruits);
print_r($fruits);

arsort($fruits);
print_r($fruits);
?>