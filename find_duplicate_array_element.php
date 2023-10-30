<?php
function findAndSortDuplicates($numbers) {
    $duplicates = array();
    sort($numbers); // Sort the array in ascending order
    
    $length = count($numbers);
    for ($i = 0; $i < $length - 1; $i++) {
        if ($numbers[$i] === $numbers[$i + 1]) {
            $duplicates[] = $numbers[$i];
        }
    }
    
    return array_unique($numbers); // Remove duplicates from the result
}

$numbers = array(5, 2, 3, 4, 2, 1, 4, 5, 6, 7, 8, 9, 9, 10);
$duplicateNumbers = findAndSortDuplicates($numbers);

echo "Duplicate numbers: ";
foreach ($duplicateNumbers as $number) {
    echo $number . " ";
}
?>