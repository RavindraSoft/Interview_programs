<?php

$associativeArray = array(
    'apple' => 3,
    'banana' => 1,
    'cherry' => 2,
    'chicku'=>1
);
echo "<pre>";

print_r($associativeArray);

echo "<hr>";

$arrResult = customSortByValues($associativeArray);

// Now, $associativeArray is sorted by values in ascending order
print_r($arrResult);



// Custom bubble sort by values in ascending order
function customSortByValues($array) {
    $arrKeys = array_values($array);
    $arrCount = count($arrKeys);
    for($i=0; $i<$arrCount-1; $i++){
        for($j=0; $j <$arrCount-1; $j++){
            if($arrKeys[$j] > $arrKeys[$j+1]){
                $temp = $arrKeys[$j];
                $arrKeys[$j] = $arrKeys[$j+1];
                $arrKeys[$j+1] = $temp;
            }
        }
    }
    
    $arrResult = [];
    for($i=0; $i<$arrCount; $i++){
        $char = $arrKeys[$i];
        foreach($array as $key => $val){
            if($char == $val){
                $arrResult[$key]=$val;
                unset($array[$key]);
            }
        }
    }

    return $arrResult;

}