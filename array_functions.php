<?php echo "<pre>";

start_code('array_diff');

start_input();
$array1 = ["a" => 1, "b" => 2];
$array2 = ["b" => 3, "c" => 4];

print_r($array1);
print_r($array2);

echo 'Syntax - array_diff($array1,$array2)';
start_output();
print_r(array_diff($array1,$array2));

// ====================== array_flip =================
start_code('array_flip');

start_input();
$arr = ['a'=>'nitesh','b'=>"yogesh"];
print_r($arr);

echo 'Syntax - array_flip($arr)';
start_output();
print_r(array_flip($arr));

// ==================== array_chunk ======================================
start_code('array_chunk');

$arr1 = ["a"=>"nitesh","b"=>"yogesh","c"=>"ravindra","d"=>"krushna"];

start_input();
print_r($arr1);

echo 'Syntax - array_chunk($arr1, 2)';
start_output();
$arrChunk = array_chunk($arr1, 2);
print_r($arrChunk);

// ========================== array_combine =========================
start_code('array_combine');

$array1 = ["a" => 1, "b" => 2];
$array2 = ["b" => 3, "c" => 4];
start_input();
print_r($array1);
print_r($array2);

echo 'Syntax - array_combine($array1, $array2)';
start_output();
$combineArray = array_combine($array1, $array2);
print_r($combineArray);

// ========================= array_merge ============================
start_code('array_merge');
start_input();

$arr1 = ["a"=>"nitesh","b"=>"yogesh","c"=>"ravindra","d"=>"krushna"];
$arr2 = ["b"=>"neha","e"=>"karuna","f"=>"ashwini","g"=>"joshna"];
$arr3 = ["z"=>"nitesh","h"=>"nanded city"];

print_r($arr1);
print_r($arr2);
print_r($arr3);

echo 'Syntax - array_merge($arr1,$arr2,$arr3)';
start_output();
$arrResult = array_merge($arr1,$arr2,$arr3);

print_r($arrResult);

echo "<br> input array size - ". count($arr1)." ".count($arr2)." ". count($arr3);
echo "<br>". 'result array size - '. count($arrResult);


start_input();

$array1 = ["a" => 1, "b" => 2];
$array2 = ["b" => 3, "c" => 4];
print_r($array1); 
print_r($array2);

echo 'Syntax - array_merge($array1, $array2)';
start_output();
$mergedArray = array_merge($array1, $array2);
print_r($mergedArray);

// =============================== fucntions below =================================
function start_code($str){
    echo "<hr>";
    echo "========================== ".$str."====================";
}

function start_input(){
    echo "<br>";
    echo "-------- Inpute ------------<br>";
    //echo "==============================<br>";
}

function start_output(){
    echo "<br>";
    echo "-------- Output ------------ <br>";
   // echo "==============================<br>";
}
 
?>