<?php
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 5);
echo $input[$rand_keys[4]] . "\n";
echo $input[$rand_keys[3]] . "\n";
?>