<?php 
$array = [22,11,22,12,33,12,11];  


$count = array_count_values($array);

print_r($count);
die;


// $dup = [];
// $arrLen = count($array1);
// for($i=0; $i<$arrLen; $i++){
//     $item = $array1[$i];
//     unset($array1[$i]);
//     if(in_array($item, $dup)){
//         continue;
//     }
//     if(in_array($item, $array1)){
//         $dup[] = $item;
//     }
// }
// sort($dup);
// print_r($dup);  

function findDuplicates($arr) {
    $duplicates = [];
    $count = array_count_values($arr); // Count the occurrences of each item

    foreach ($count as $item => $occurrences) {
        if ($occurrences > 1) {
            $duplicates[] = $item; // Add the item to the duplicates array
        }
    }

    return $duplicates;
}

// $array = [1, 2, 3, 4, 2, 5, 6, 3];
$duplicateItems = findDuplicates($array);

print_r($duplicateItems);
