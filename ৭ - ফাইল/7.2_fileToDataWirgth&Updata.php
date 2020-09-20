<?php
$filename = "/media/arhasan/Othres/PHP-learn/wu.txt";

if(is_writable($filename)){

$existingData = file_get_contents($filename);
$fp = fopen($filename,'a'); //a w r

// fwrite($fp, $existingData);
fwrite($fp,"Mercury\n");
fwrite($fp,"Venus\n");
fwrite($fp,"Earth\n");
fclose($fp);
}
