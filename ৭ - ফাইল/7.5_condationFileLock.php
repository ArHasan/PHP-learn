<?php
$filename = "/media/arhasan/Othres/PHP-learn/name.txt";
file_put_contents($filename,'Mars',FILE_APPEND);
file_put_contents($filename,"jupiter",LOCK_EX);

