<?php
function displayKey($key){
        printf("value = '%s' ",$key);
 
}
$foo = "local variable";

echo '$foo in global scope: ' . $GLOBALS["foo"] . "\n";

?>