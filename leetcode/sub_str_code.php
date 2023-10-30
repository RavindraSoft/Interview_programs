<?php

// Test the function with the provided input
$inputStr = "ahffaksfajeeubsne";
$targetStr = "jefaa";
$expected_output = 'aksfaje';


$inputStr = "aaffhkksemckelloe";
$targetStr = "fhea";
$expected_output = 'affhkkse';


$inputStr = "aaffsfsfasfasfasfasfasfacasfafe";
$targetStr = "fafsf";
$expected_output = 'affsf';


echo 'Input String - '. $inputStr;
echo "<br>";
echo 'Input Target String - '. $targetStr;
echo "<br>";
echo 'Expected Output - '. $expected_output;
echo "<hr>";

$output = shortestSubstring_new($inputStr, $targetStr);

echo "<hr>";
echo 'Output - '. $output;
echo "<br>";

if($output == $expected_output){
    echo "sovled";
}else{
    echo "error";
}

// solved in 40 min
function shortestSubstring_new($inputStr, $targetStr){

    // echo "<pre>";
    // echo "input string - ";

    $inputStrArr = str_split($inputStr);
    $inputStrCount = count($inputStrArr);
    // print_r($inputStrArr);

    // echo "<br>";
    // echo "target string - ". $targetStr;

    $targetStrChar = str_split($targetStr);
    // print_r($targetStrChar);

    $targetStrArr = array_count_values($targetStrChar);
    // print_r($targetStrArr);
    $targetStrArrCount = count($targetStrArr);

    

    $foundChars = [];
    $shortestSubstring = '';
    $shortStr = '';
    $start =0;

    for($i = 0; $i < $inputStrCount; $i++){


        $currentChar = $inputStrArr[$i];
        $shortestSubstring .= $currentChar;

        // echo "i - ". $i. ' input str - '. $currentChar; 

        if (in_array($currentChar, $targetStrChar)) {
            if(isset($foundChars[$currentChar])){
                $foundChars[$currentChar]++;
            }else{
                $foundChars[$currentChar] = 1;
            }
        }

        // echo "<br>";
        // print_r($foundChars);

        $foundCharsCount = count($foundChars);

        if( $targetStrArrCount == $foundCharsCount ){
            // echo "same size array";
            $arrCheckDetails = compaire_array_key_value($targetStrArr, $foundChars);

            // echo '<h1>'. $arrCheckDetails.'</h1>';
            if($arrCheckDetails == 'Same'){
                $start +=1;
                $i = $start;
                $i -=1;

                unset($foundChars);
                $foundChars = [];

                if($shortStr == ''){
                    $shortStr = $shortestSubstring;
                }else{
                    if(strlen($shortStr) > strlen($shortestSubstring)){
                        $shortStr = $shortestSubstring;
                    }
                }
                $shortestSubstring = '';
            }
        }
    }

    return $shortStr;
}


function compaire_array_key_value($array1, $array2){

    krsort($array1);
    krsort($array2);

    // print_r($array1);
    // print_r($array2);

    $valueMatchCount = 0;
    foreach($array1 as $key => $value){
        if($value <= $array2[$key]){
            $valueMatchCount +=1;
        }else{
            return 'Not_Same';
        }
    }

    if($valueMatchCount == count($array1)){
        return 'Same';
    }

    return 'Not_Same';
}



function checkArray($array1, $array2) {

    ksort($array1);
    ksort($array2);

    // print_r($array1);
    // print_r($array2);

    if (array_keys($array1) !== array_keys($array2)) {
        return 'not_same';
    }

    // if (array_values($array1) == array_values($array2)) {
    //     return 'same';
    // }

    foreach ($array1 as $key => $value) {
        if ($value <= $array2[$key]) {
            $result = 'same';
        }else{
            $result = "not_ok";
            break;
        }
    }

    return $result;
}



function shortestSubstring_working_last($inputStr, $targetStr) {
    echo "<pre>";

    $targetChars = str_split($targetStr);
    $targetCharArr = array_count_values($targetChars);

    $targetCharArrCount = count($targetCharArr);

    echo 'target array count - '. $targetCharArrCount;
    echo "<br>";

    echo "Targat Array - ";

    print_r($targetCharArr);

    $inputChars = str_split($inputStr);

    $windowStart = 0;
    $foundChars = [];
    $shortestSubstring = "";
    $minLength = PHP_INT_MAX;

    $shortStr = '';

    $start = 0;

    for ($windowEnd = 0; $windowEnd < count($inputChars); $windowEnd++) {
        $currentChar = $inputChars[$windowEnd];

        $shortestSubstring .= $currentChar;

        if (in_array($currentChar, $targetChars)) {
            if (!isset($foundChars[$currentChar])) {
                $foundChars[$currentChar] = 1;
            } else {
                $foundChars[$currentChar]++;
            }
        }
        echo "<br>";
        echo 'windowEnd - '. $windowEnd. ' source str char- '. $currentChar. ' found array count '. count($foundChars). "<br>";

        print_r($foundChars);

        if(count($targetCharArr) === count($foundChars)){
            echo "same count";
            $temp = checkArray($targetCharArr, $foundChars);


            echo "<h1>$temp</h1>";

            if($temp == 'same' ){

               // echo $start; die;


                $start++;
                $windowEnd = $start;
                $windowEnd -=1;

                unset($foundChars);
                $foundChars = [];

                echo "samestr - ". $shortestSubstring;
                echo "<br>";

                if($shortStr == ''){
                    $shortStr = $shortestSubstring;
                }else{
                    if(strlen($shortStr) > strlen($shortestSubstring)){
                        $shortStr = $shortestSubstring;
                    }
                }
                $shortestSubstring = '';

            }

            if($temp == 'not_ok' ){
                $start++;
                $windowEnd = $start;
                unset($foundChars);
                $foundChars = [];
                $shortestSubstring = '';
            }
        }
    }

    return $shortStr;
}


function shortestSubstring1($inputStr, $targetStr) {
   
    $targetChars = str_split($targetStr);
    $targetCharArr = array_count_values($targetChars);

    $inputChars = str_split($inputStr);
    $inputCharsCount = count($inputChars);

    $foundChars = [];
    $shortestSubstring = "";

    $shortStr = '';
    $start = 0;

    for ($windowEnd = 0; $windowEnd < $inputCharsCount ; $windowEnd++) {
        
        $currentChar = $inputChars[$windowEnd];
        $shortestSubstring .= $currentChar;

        if (in_array($currentChar, $targetChars)) {
            if (!isset($foundChars[$currentChar])) {
                $foundChars[$currentChar] = 1;
            } else {
                $foundChars[$currentChar]++;
            }
        }
        if(count($targetCharArr) === count($foundChars)){
            
            $temp = checkArray($targetCharArr, $foundChars);

            if($temp == 'same' ){
                $start++;
                $windowEnd = $start;
                $windowEnd -=1;

                unset($foundChars);
                $foundChars = [];

                if($shortStr == ''){
                    $shortStr = $shortestSubstring;
                }else{
                    if(strlen($shortStr) > strlen($shortestSubstring)){
                        $shortStr = $shortestSubstring;
                    }
                }
                $shortestSubstring = '';

            }
        }
    }

    return $shortStr;
}


function shortestSubstring($inputStr, $targetStr) {
    echo "<pre>";

    $targetChars = str_split($targetStr);
    $targetCharArr = array_count_values($targetChars);

    $targetCharArrCount = count($targetCharArr);

    echo 'target array count - '. $targetCharArrCount;
    echo "<br>";

    echo "Targat Array - ";

    print_r($targetCharArr);

    $inputChars = str_split($inputStr);

    echo "input string count - ". count($inputChars);

    $windowStart = 0;
    $foundChars = [];
    $shortestSubstring = "";
    $minLength = PHP_INT_MAX;

    $shortStr = '';

    $start = 0;

    for ($windowEnd = 0; $windowEnd < count($inputChars); $windowEnd++) {
        $currentChar = $inputChars[$windowEnd];

        $shortestSubstring .= $currentChar;

        if (in_array($currentChar, $targetChars)) {
            if (!isset($foundChars[$currentChar])) {
                $foundChars[$currentChar] = 1;
            } else {
                $foundChars[$currentChar]++;
            }
        }
        echo "<br>";
        echo 'windowEnd - '. $windowEnd. ' source str char- '. $currentChar. ' found array count '. count($foundChars). "<br>";

        print_r($foundChars);

        if(count($targetCharArr) === count($foundChars)){
            echo "same count";
            $temp = checkArray($targetCharArr, $foundChars);


            echo "<h1>$temp</h1>";

            if($temp == 'same' ){

               // echo $start; die;


                $start++;
                $windowEnd = $start;
                $windowEnd -=1;

                unset($foundChars);
                $foundChars = [];

                echo "samestr - ". $shortestSubstring;
                echo "<br>";

                if($shortStr == ''){
                    $shortStr = $shortestSubstring;
                }else{
                    if(strlen($shortStr) > strlen($shortestSubstring)){
                        $shortStr = $shortestSubstring;
                    }
                }
                $shortestSubstring = '';

            }

            if($temp == 'not_ok' ){
                // $start++;
                // $windowEnd = $start;
                // $windowEnd -=1;
                // unset($foundChars);
                // $foundChars = [];
                // $shortestSubstring = '';
            }
        }
    }

    return $shortStr;
}

