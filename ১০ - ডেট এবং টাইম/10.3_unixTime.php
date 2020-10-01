<?php 

// echo time()."\n";
// echo date('h:i:s')."\n";
echo mktime(0,0,0,12,1,2020)."\n";
date_default_timezone_set('Asia/Dhaka');
echo mktime(0,0,0,12,1,2020)."\n";

echo (mktime(0,0,0,9,29,2020) - mktime(0,0,0,11,15,1996))/(24*60*60);
