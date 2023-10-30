<?php


$inputStr =  'Nitesh Hiraman Pawar';
$expected_output = 'Hiraman';

$output = LongestWord($inputStr);

echo "<hr>";
if($expected_output == $output){
    echo "solved";
}else{
    echo "error";
}


function LongestWord($sen) {  
    echo "<pre>";

    $str =  str_word_count($sen,1);

    print_r($str);

    $str1 = array_map('strlen', $str);

    print_r($str1);

    $comp = array_combine($str,$str1);

    print_r($comp);

    $max = max($comp);

    echo $max;

    $keys =  array_keys($comp,$max);

    print_r($keys);

    
    return $keys[0];
 
    


        preg_replace("/[^A-Za-z0-1 ]/","",$str);
        preg_replace('/[^a-zA-Z0-9 ]/', '', $value);


}