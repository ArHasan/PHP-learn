<?php

interface baseStudent {
    function displayName();
}

class Student implements baseStudent {

    private $name;
    function __construct($n) {
        $this->name = $n;
    }

    function displayName() {
        echo "Hello " . $this->name;
    }
}

// class StudentManage{

//     function infoStd($name){
//         $st = new Student($name);
//         $st->displayName();
//     }
// }

class StudentManage {

    function infoStd(Student $student) {
        print_r($student);
      $student->displayName();
    }
}

$d =  new DateTime();

$stn = new Student('Nahid');

$obj = new StudentManage;
$obj->infoStd($stn);