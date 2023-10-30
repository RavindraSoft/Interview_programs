<?php
function findMatchingSubstrings($str1, $str2) {
    $matches = array(); // Array to store matching substrings
    $str1Length = strlen($str1);
    $str2Length = strlen($str2);

    for ($i = 0; $i < $str2Length; $i++) {
        $substring = '';
        for ($j = $i; $j < $str2Length; $j++) {
            $char = $str2[$j];
            if (strpos($str1, $char) !== false) {
                $substring .= $char;
                if (strlen($substring) >= 2) {
                    $matches[] = $substring;
                }
            } else {
                break; // Reset substring if character not found in the first string
            }
        }
    }

    return $matches;
}

$str1 = "Hello, World";
$str2 = "WorldHello";

$str1 = "tesh iaman pawar";
$str2 = "hwr";

$resutl = "h iaman pawar";


echo $str1;
echo "<hr>";
echo $str2;
echo "<hr>";


$matchingSubstrings = findMatchingSubstrings($str1, $str2);



echo "Matching Substrings in '$str2' with characters from '$str1':\n";
echo "<hr>";
foreach ($matchingSubstrings as $substring) {
    echo "$substring\n";
}
?>
