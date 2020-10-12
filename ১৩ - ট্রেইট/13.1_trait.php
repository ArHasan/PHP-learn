<?php

trait NumberSeriesOne{
    function NumberSeriesA(){
        echo "Number Series A\n";
    }
    function NumberSeriesB(){
        $this->NumberSeriesA();
        echo "Number Series B\n";
    }
}

trait NumberSeriesTwo{
    use NumberSeriesOne;
    function NumberSeriesC(){
        echo "Number Series C\n";
    }
    function NumberSeriesD(){
        echo "Number Series D\n";
    }
}

class NumberSeries{
    use NumberSeriesTwo;
}
$ns = new NumberSeries();
$ns->NumberSeriesA();
$ns->NumberSeriesB();
$ns->NumberSeriesC();
// $ns->NumberSeriesD();