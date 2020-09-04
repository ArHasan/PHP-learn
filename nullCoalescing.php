<?php
$default_lat = 23.3;
$default_lon =90.5;

$user_lat = 32.6;

$lat = isset($user_lat) ? $user_lat : $default_lat;
$lat = $user_lat ?? $default_lat;
echo $lat;


if(isset($user_lat)){
    $lat = $user_lat;
}else{
    $lat = $default_lat;
}