<?php 

echo lengthOfLongestSubstring('niteshpawar');


function lengthOfLongestSubstring($s) {
        $lenght = strlen($s);
        $ans=[];
        $max = 0;
        for($i=0; $i<$lenght; $i++)
        {
            for($j=$i; $j<$lenght; $j++){
                if(in_array($s[$j], $ans)){
                    break;
                }
                $ans[] = $s[$j];
            }
            
            $tempCont = count($ans);

            if($tempCont > $max){
                $max = $tempCont;
            }
            $ans = [];
        }
        return $max;
}