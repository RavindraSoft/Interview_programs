<?php

// Creating an array
                    $array = [1, 2, 3, 4, 5];

// Accessing elements
echo $array[0]; // Output: 1

echo "<br>";

// Adding elements
$array[] = 6;

// Removing elements
unset($array[2]);

// Iterating through elements
foreach ($array as $element) {
    echo $element . ' ';
}
// Output: 1 2 4 5 6
