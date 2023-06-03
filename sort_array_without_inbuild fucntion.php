<?php
$arr = [9,8,7,5];
$n=0;
for($i=0; @$arr[$i]!=''; $i++)
    $n++;


echo "Input Array -  ";
echo "<pre>";
print_r($arr);
echo "</pre>";
echo "- Input array count/size ". $n;
echo "<br>";

for($i=0; $i<$n-1; $i++){
    for($j=0; $j<$n-1; $j++){
//        echo $i." ".$j." - ".implode(",",$arr)."<br>";
        if($arr[$j] > $arr[$j+1]){
            $temp = $arr[$j];
            $arr[$j]=$arr[$j+1];
            $arr[$j+1]=$temp;
        }
    }
}

echo "<br> Result - ";
echo "<pre>";
print_r($arr);
echo "</pre>";