<?php

const name = "nitesh";

echo name;



die;



// echo "<pre>";

// // JSON data
// $json = '{"name": "John", "age": 30, "city": "New York"}';

// // Convert JSON to stdClass object
// $obj = json_decode($json,1);

// echo "var dump - ";
// var_dump($obj); 

// echo "<br>";

// echo "print r - ";
// print_r($obj);

// echo "<br>";

// // Access properties
// echo $obj->name; // Outputs 'John'
// echo $obj->age;  // Outputs 30
// echo $obj->city; // Outputs 'New York'

die;

// ===================================================================================
$text = "Hello, world!";
$replacements = [
    '/Hello/' => function ($matches) {
        return 'Hi';
    },
    '/world/' => function ($matches) {
        return 'there';
    },
];  

$result = preg_replace_callback_array($replacements, $text);

print_r($result);

die;

// =================================================================================
echo "<hr>";


$result = preg_replace_callback_array($replacements, $text);



$randomInt = random_int(1, 100); // Generates a random integer between 1 and 100

print_r($randomInt);
die;

// =================================================================================
echo "<hr>";



$randomBytes = random_bytes(32); // Generates 32 random bytes

var_dump($randomBytes);
die;


// =================================================================================
echo "<hr>";


$a = 7;
$b = 1;

$result = $a <=> $b; // Returns -1, 0, or 1

echo $result;
die;



// =================================================================================
echo "<hr>";

$x = "5 nitesh";
$y= "6 yogesh";

echo $x+$y;