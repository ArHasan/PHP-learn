<?php 

trait NumberSeriesOne{
    function NumberSeriesA(){
        echo "Number Series A\n";
        // parent::NumberSeriesA();
    }
    function NumberSeriesB(){
        echo "Number Series B\n";
    }
}

class SomeClass{
    function NumberSeriesA(){
        echo "Printing ";
    }
}

class NumberSeries extends SomeClass{
    use NumberSeriesOne;
    
   
}

$ns = new  NumberSeries();
$ns->NumberSeriesA();