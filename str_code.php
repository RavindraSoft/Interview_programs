<?php



$string1 = "ABCD";
$string2 = "silent";

$char = 'Z';

echo ord($char); die;



print_r(count_chars($string1, 1));
echo "<br>";
print_r(count_chars($string2, 1));
die;



function areAnagrams($str1, $str2) {
    return count_chars($str1, 1) == count_chars($str2, 1);
}

if (areAnagrams($string1, $string2)) {
    echo "$string1 and $string2 are anagrams.<br>";
} else {
    echo "$string1 and $string2 are not anagrams.<br>";
}




echo "<hr>";
$string = "Hello, World!";
$vowels = 0;
$consonants = 0;
$string = strtolower($string);

for ($i = 0; $i < strlen($string); $i++) {
    if (ctype_alpha($string[$i])) {
        if (in_array($string[$i], ['a', 'e', 'i', 'o', 'u'])) {
            $vowels++;
        } else {
            $consonants++;
        }
    }
}

echo "String: $string <br>";
echo "Vowels: $vowels <br>";
echo "Consonants: $consonants <br>";




echo "<hr>";

$string = "The quick brown fox jumps over the lazy dog.";
$substring = "the";
$count = 0;
$lowercaseString = strtolower($string);
$lowercaseSubstring = strtolower($substring);
$str1 = strlen($lowercaseString);
$str2 = strlen($lowercaseSubstring);

for ($i = 0; $i <= $str1 - $str2; $i++) {
    if (substr($lowercaseString, $i, $str2) == $lowercaseSubstring) {
        $count++;
        $i += $str2- 1;
    }
}

echo "String: $string\n";
echo "Substring: $substring\n";
echo "Count of occurrences: $count\n";



echo "<hr>";

// palimdrom string;
$str = 'cases';
$strLen = strlen($str);
$palim= true;
for($i=0,$j=$strLen-1; $i<$j; $i++,$j--){
    if($str[$i] != $str[$j]){
        $palim= false;
        break;
    }
}
if($palim == true){
    echo "$str is palimdrom string";
}else{
    echo "$str is not a palimdrom string";
}