<?php

class Bill{
    public $dinner = 20;
    public $dessert = 15;
    public $coldDrink = 5;
    public $bill;


    public function dinner($person){
        $this->bill += $this->dinner * $person;
        return $this;
    }

    public function dessert($person){
        $this->bill += $this->dessert * $person;
        return $this;
    }

    public function coldDrink($person){
        $this->bill += $this->coldDrink * $person;
        return $this;
    }
}

$TotalBill = new bill();
echo $TotalBill->dinner(2)->dessert(1)->coldDrink(3)->bill;

