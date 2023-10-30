<?php

function fibonacci() {
    $a = 0;
    $b = 1;
    while (true) {
        yield $a;
        [$a, $b] = [$b, $a + $b];
    }
}

$gen = fibonacci();

foreach ($gen as $value) {
    if ($value > 1000) break;
    echo $value . " ";
}

echo "<hr>";

function testingYield(){
    yield  "nitesh";
    yield  "rakesh";
    yield "yogesh";
}

$obj_name =  testingYield();

foreach($obj_name as $name){
    echo $name." ";
}
