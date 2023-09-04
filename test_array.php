<?php
// store multiple values in arra

$mixedArray = [
    1,           // Integer
    3.14,        // Float
    "Hello",     // String
    true,        // Boolean
    null,        // Null
    ['a', 'b'],  // Nested array
    new stdClass()  // Object
];

// Accessing elements
echo $mixedArray[0];  // Output: 1
echo $mixedArray[2];  // Output: Hello

echo "<br>";
echo "<br>";

// Iterating through elements
foreach ($mixedArray as $element) {
    echo "=>";
    print_r($element); echo "<br>";
}
// Output: 1 3.14 Hello 1
