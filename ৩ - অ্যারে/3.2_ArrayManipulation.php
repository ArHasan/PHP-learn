<?php
$students = [
'Rohim',
'korim',
'MoKlas',
'jobber',
123,
'Hasin'
];

// var_dump($n);

# -> array is mutabel

$students[4]='nahid';//array add
$student = array_unshift($students,"salma");
echo "\n".$student."\n------\n";


// foreach($students as $student){
//     echo $student."\n";
// }

$students[]="jamal";
array_push($students,"kamel");

$n = count($students);
for($i=($n-1);$i>=0;$i--){
    echo $i."-".$students[$i]."\n";
}

echo "------";
$student = count($students);
echo "\n".$student."\n------\n";
/*
 array_shift(); //fast data out
 array_unshift();// faste add data
 array_pop(); //last out
 array_push();//last add data
*/