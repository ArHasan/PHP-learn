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

/*$encodeSrting = json_encode($student);
file_put_contents('name.txt',$encodeSrting);
$fileContents = file_get_contents('name.txt');
$decode = json_decode($fileContents,true);
var_dump($decode);  */

// $fp = fopen($filename,"w");
// foreach($students as $student){
//     $data = sprintf("%s,%s,%s,%s\n",$student['fname'],$student['age'],$student['class'],$student['roll']);
//     fwrite($fp,$data);
// }
// fclose($fp);

// $fp = fopen($filename,"r");
// while($data = fgets($fp)){
//     $student = explode(",",$data);
//     printf("Name = %s \nAge = %s\nClass = %s\nRoll = %s \n",$student[0],$student[1],$student[2],$student[3]);
// }
// fclose($fp);

// CSV formet data seve
/*$fp = fopen($filename,"w");
foreach($students as $student){
    fputcsv($fp,$student);
}
fclose($fp);*/

// $fp = fopen($filename,"r");
// while($student = fgetcsv($fp)){
//     printf("Name = %s \nAge = %s\nClass = %s\nRoll = %s \n\n",$student[0],$student[1],$student[2],$student[3]);
// }
// fclose($fp);

// extra student save
$student = 
    array(
        'fname'=>'kamal',
        'age'=>'33',
        'class'=>12,
        'roll'=>17,
    );
// $fp = fopen($filename,"a");
// fputcsv($fp,$student);
// fclose($fp);

$data = file($filename);
print_r($data);
unset($data[2]);
$fp = fopen($filename,"w");
foreach ( $data as $line){
    fwrite($fp,$line);
}
fclose($fp);