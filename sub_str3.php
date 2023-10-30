<?php
$str1 = "tesh iaman pawar";
$str2 = "en";


echo $str1;
echo "<hr>";
echo $str2;
echo "<hr>";


$result = '';

for ($i = 0; $i < strlen($str1); $i++) {
    $char = $str1[$i];
    if (strpos($str2, $char) === false) {
        $result .= $char;
    }
}

echo "Result: $result";
?>
