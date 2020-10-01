<?php 
date_default_timezone_set('Asia/Dhaka');
echo mktime(0,0,0,11,15,1996)."\n";
echo strtotime('15 November 1996')."\n";
echo strtotime('now')."\n";
echo strtotime('+4days')."\n";

echo mktime(0,0,0,11,15,1996)/(24*60*60);
echo PHP_EOL;

echo (strtotime('+2weeks 5days 24 hours')-strtotime('now'))/(86400);

echo("------\n");
$d1 = new DateTime('20 sep 2020');
$d2 = new DateTime('10 nov 2020');
$difference = date_diff($d1,$d2);
echo $difference->format("%m Month %d Days");