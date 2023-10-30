<?php

error_reporting(1);

// $undefinedVar = "hi";


// $result = echo $undefinedVar; // Outputs nothing, no error

// var_dump($result);

$result = print($undefinedVar); // Results in a fatal error

var_dump($result);



// $name = "yogesh";

// print ("print does not require parentheses.". " true nitesh $name "."tsting");



// $associativeArray = ['apple' => 5, 'banana' => 2, 'cherry' => 9, 'date' => 1, 'fig' => 7];
// $maxValue = max($associativeArray);

// echo $maxValue;

// $maxValueKey = array_search($maxValue, $associativeArray); // $maxValueKey will be 'cherry'

// echo "<br>";

// echo $maxValueKey;

// echo $associativeArray['cherry'];


// $numbers = ['hi',1, 2, 3, 4, 5, 'n12ites'];
// $sum = array_sum($numbers); // $sum will be 15
// echo $sum;

// $name = "Nitesh";
// define("N",'Nitesh1');
// const n = 'Pawar';
// echo $name.' '. N .' '. n;