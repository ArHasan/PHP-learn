<?php 

trait NumberSeriesOne{
    function NumberSeriesA(){
        echo "Number Series A\n";
    }
    function NumberSeriesB(){
        echo "Number Series B\n";
    }
}

class NumberSeries{
    use NumberSeriesOne;
    
    function NumberSeriesA(){
        echo "Printing Number Series A\n";
    }
}

$ns = new  NumberSeries();
$ns->NumberSeriesA();