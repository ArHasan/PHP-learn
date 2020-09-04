<?php 

$student =array(
    'fname'=>'Ar',
    'lname'=>'Hasan',
    'age'=>'23',
    'class'=>'Diplome Eng.',
    'Section'=>'A',
);
print_r($student);
echo $student['fname']." " .$student['lname']."\n";
printf("%s %s \n",$student['fname'],$student['lname']);

echo join(",",$student);
echo PHP_EOL;

$serialized = serialize($student);
echo $serialized;
$newStudent = unserialize($serialized);
print_r($newStudent);

$jsondata = json_encode($student);
echo $jsondata;
echo PHP_EOL;
$student2 = json_decode($jsondata,true);// true means associative array
print_r($student2);