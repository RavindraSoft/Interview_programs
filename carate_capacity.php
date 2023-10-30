<?php

$result = getFullCratesByItems('15','2','80');
echo "<pre>";
print_r($result);


function getFullCratesByItems($number, $intLargeNumber, $intSmallCaretNumebr){

	$intLarge = 5;
	$intSmall = 1;

	$intLargeHold = $intLargeNumber * $intLarge;
	
	$capacity = ($intLargeNumber * $intLarge) + ($intSmallCaretNumebr + $intSmall);
	
	if($capacity < $number){
	  return -1;
	}
	
	
	if($number <= $intLarge ){
	  
	  if($number == $intLarge){
	    $largeCaret = 1;
	    $smallCaret = 0;
	  }else{
	    $largeCaret = 0;
	    $smallCaret = $number;
	  }
	  
	    return ['small'=>$smallCaret,'large'=>$largeCaret, 'sum'=>$smallCaret+$largeCaret ];
	}
	

	if( $intLargeHold <= $number ){
		$smallCaret = $number - $intLargeHold;
		$largeCaret = (int) $intLargeHold / $intLarge;
	}else{
		$largeCaret = (int) $number/$intLarge;
		$smallCaret = (int) $number%$intLarge;
		
		  if($largeCaret > $intLargeNumber ){
		    $tempLarge =  $largeCaret - $intLargeNumber;
		    $smallCaret += $tempLarge*$intLarge;
		  } 
	}

  $sum = $smallCaret+$largeCaret;

  return ['small'=>$smallCaret,'large'=>$largeCaret, 'sum'=>$sum ];
	
}