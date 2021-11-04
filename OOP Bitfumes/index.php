<?php
class Student {

  public $name;
  public $attendence;
  public $totalMarks;

  public function StudentDetails($a, $b, $c) {
    echo  $this->name = $a;
    echo  $this->attendence = $b;
    echo  $this->totalMarks = $c;

  }

}

$class10 = new Student();
$class10->StudentDetails('Hasan',true,93);

