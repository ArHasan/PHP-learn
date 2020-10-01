<?php
session_start();
$_SESSION['data']= 'Hello Hasan';
echo $_SESSION['data'];