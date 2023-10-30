<?php
// Convert a string of numbers to a sentence. Each number represents a letter. Numbers in the string are separated by a space, and words in the sentence are separated by a plus character.

/*
Conversion table:

1 = A

2 = B

...

26 = Z

Example: numbers to letters ('20 5 19 20+4 15 13 5') should return 'TEST DOME'.
*/

$str = '20 5 19 20+4 15 13 5';
$i=1;
for($char = 'A', $i=1; $i <= 26; $char++, $i++){
    $strconst[$i] = $char;
}

$arrStr = explode('+',$str);

$arrStrCount = count($arrStr);

$resultStr = '';

for($i=0; $i< $arrStrCount; $i++){
	$arr = $arrStr[$i];
	$arrChar = explode(" ",$arr);
	$arrCharCount = count($arrChar);
	
	for($j=0; $j<$arrCharCount; $j++){
		$resultStr .=  $strconst[$arrChar[$j]];
	}
	$resultStr.= " ";
}

var_dump($resultStr);


if('TEST DOME ' == $resultStr){
    echo "sovled";
}else{
    echo "error";
}
