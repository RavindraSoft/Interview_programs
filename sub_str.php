<?php
$str1 = "tesh iaman pawar";
$str2 = "hwr";

$firstChar = $str2[0];
$str2Len = strlen($str2);
$lastChar = $str2[$str2Len-1];

$fistMat= strpos($str1, $firstChar);
$lastMat = strpos($str1, $lastChar);

echo $str1;
echo "<hr>";
echo $str2;
echo "<hr>";
echo '1-'. $fistMat.' '.$lastMat;

if($fistMat < $lastMat){
    echo "her";

    $newStr = substr($str1, $fistMat, $lastMat+1);
}else{

    echo "in";

    $fistMat = $fistMat - $lastMat+1;
    echo "<hr>";
echo $fistMat.' '.$lastMat;
    $newStr = substr($str1, $lastMat, $fistMat);
}


echo "<hr>";
echo $newStr;