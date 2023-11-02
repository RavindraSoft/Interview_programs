<?php


$data = "Two Ts and one F.";

echo "<pre>";
print_r(count_chars($data));

die;






// foreach (count_chars($data, 1) as $i => $val) {


$input = ["(1,2)", "(2,4)", "(5,7)", "(7,2)", "(9,5)"];

// keep this function call here  
echo TreeConstructor($input);

function TreeConstructor($strArr)
{

  echo "<pre>";

  // code goes here
  $parent = [];
  $child = [];
  for ($i = 0; $i < count($strArr); $i++) {

    echo $strArr[$i];
    echo "<br>";


    preg_match_all('!\d+!', $strArr[$i], $matches);

    print_r($matches);

    @$parent[$matches[0][1]]++;
    @$child[$matches[0][0]]++;

    echo "parent - ";
    print_r($parent);
    echo "child - ";
    print_r($child);
  }
  if (max($parent) > 2) {
    return 'false';
  }
  if (max($child) > 1) {
    return 'false';
  }
  return  'true';
}
