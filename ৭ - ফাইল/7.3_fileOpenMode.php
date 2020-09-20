<?php
$filename = "/media/arhasan/Othres/PHP-learn/wu.txt";

$fp = fopen($filename,"w+");
$line = fgets($fp);
echo $line;
fwrite($fp,"Uranus");
rewind($fp);
$line = fgets($fp);


// echo $line;
// fseek($fp,0); // rewind($fp)
// fwrite($fp,"venus\n");
// fclose ($fp);