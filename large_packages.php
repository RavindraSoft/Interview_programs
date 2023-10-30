<?php

/*
A large package can hold five items, while a small one can hold only one item. The available number of both large and small packages is limited. All items must be placed in packages and used packages have to be filled up completely.

Write a function that calculates the minimum number of crates needed to hold a given number of items. If it's not possible to meet the requirements, return -1.

For example, if we have 16 items, 2 large and 10 small crates, the function should return 8 (2 large crates + 6 small crates).

*/

echo "<pre>";

$obj = new Capacity(5,1);

$result = $obj->getMinimumCrates(12,10,20);

print_r($result);

class Capacity {

    private $largeCrate, $smallCrate;

    public function __construct($large=5, $small=2){
        $this->largeCrate = $large;
        $this->smallCrate = $small;
    }

    public function checkCapacity($item, $largeCrates,$smallCrates){

        $fullCapacity = ($this->largeCrate * $largeCrates) + ($this->smallCrate * $smallCrates);

        if($fullCapacity < $item){
            return false;
        }
        return true;
    }


    public function getMinimumCrates($item, $largeCrates,$smallCrates)
    {

        if(!$this->checkCapacity($item, $largeCrates,$smallCrates)){
            return -1;
        }

        $largeCapacity = $this->largeCrate * $largeCrates;
        $smallCapacity = $this->smallCrate * $smallCrates;

        if($largeCapacity == $item){
            return ['large'=>$largeCrates,'small'=> '0','Total'=> $largeCrates];
        }

        if($largeCapacity < $item ){
            $smallCrateUsed = $item - $largeCapacity;
            $largeCrateUsed = $largeCrates;
            return ['large'=>$largeCrateUsed,'small'=> $smallCrateUsed,'Total'=> ($smallCrateUsed + $largeCrateUsed)];
        }else{

            // echo "here"; die;

            $tempLargesTotal = floor($item/$this->largeCrate);
            $largeCrateUsed = $tempLargesTotal * $this->largeCrate;
            $smallCrateUsed = $item - $largeCrateUsed;

            return ['large'=>$tempLargesTotal,'small'=> $smallCrateUsed,'Total'=> ($smallCrateUsed + $tempLargesTotal)];

        }
    }
}
