<?php
$filename = "/media/arhasan/Othres/PHP-learn/name.txt";
// echo getcwd();

if(is_readable($filename)){


    $fp = fopen($filename,'r');

// $line = fgets($fp);
// echo $line;
// $line = fgets($fp);
// echo $line;
// $line = fgets($fp);
// echo $line;

while($line = fgets($fp)){
    echo $line;
}
rewind($fp);
fseek($fp,8);
fseek($fp,-1,SEEK_END);
while($line = fgets($fp,5)){
    echo $line."-";
}
fclose($fp);

$data = file($filename);
print_r($data);

echo "\n";
$data = file_get_contents($filename);
echo $data;
}