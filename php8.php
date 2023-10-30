<?php


function divide($a, $b) {
    return $b === 0 ? throw new Exception("Division by zero") : $a / $b;
}

try{

    echo divide(10, 3); // 5
}
catch(Exception $e){
    print_r($e->getMessage());
}




/*

function greet($first_name, $last_name, $salutation1, $test) {
    echo "$salutation1, $first_name $last_name!";
}

greet(test: '', salutation1: "Mr", first_name: "John", last_name: "Doe");
*/