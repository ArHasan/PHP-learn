<?php
$filename = "/media/arhasan/Othres/PHP-learn/name.txt";
$students = array(
    array(
        'fname'=>'Hasan',
        'age'=>'23',
        'class'=>14,
        'roll'=>11,
    ),
    array(
        'fname'=>'Aman',
        'age'=>'21',
        'class'=>12,
        'roll'=>3,
    ),
    array(
        'fname'=>'Rohim',
        'age'=>5,
        'class'=>15,
        'roll'=>19,
    ),
    array(
        'fname'=>'Nahid',
        'age'=>20,
        'class'=>12,
        'roll'=>34,
    )
);

// $data = serialize($students);
// file_put_contents($filename,$data,LOCK_EX);

$dataFromFile = file_get_contents($filename);
$allStudents = unserialize($dataFromFile);
print_r($allStudents);

// unset($allStudents[1]);
// $data = serialize($allStudents);
// file_put_contents($filename,$data,LOCK_EX);

