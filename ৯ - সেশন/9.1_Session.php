<?php

/*session_start();
$_SESSION['name']='Hasan';
$_SESSION['counter'] = $_SESSION['counter'] ?? 0;
$_SESSION['counter']++;
echo $_SESSION['counter'];
*/

session_name('myapp');
session_start([
    'cookie_lifetime' => 60
]);
// $_SESSION['name']='Hasan';
echo $_SESSION['name'];