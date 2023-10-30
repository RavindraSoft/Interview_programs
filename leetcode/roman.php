<?php



    function romanToInt($s) {
        $chars = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        ];
        $sArr = str_split($s);

        echo "<pre>";
        print_r($sArr);
        


        $sum = 0;

        foreach($sArr as $sItemKey => $sItem) {

            echo $sItemKey. ' '. $sItem;
            $sign = 1;
            if(isset($sArr[$sItemKey+1])) {
                echo ' '.$sArr[$sItemKey+1];
                $nextVal = $chars[$sArr[$sItemKey+1]];
                echo ' - '. $nextVal. ' '. $chars[$sItem]; 
                if($nextVal > $chars[$sItem]){
                    $sign = -1;
                }
            }

            echo ' * '.$sign;

            $sum += $sign * $chars[$sItem];

            echo ' sum -> '. $sum;

            echo '<hr>';
        }

        return $sum;
    }


    function romanToInt1($s){
        $arrRoman = ['I'=> 1, 'V'=> 5, 'X'=>10, 'L'=>50, 'C'=>100,'D'=>500,'M'=>1000];
        $sArr = str_split($s);
         $sum =0;
         $sing = 0;
        foreach($sArr as $kay => $val){
            
            if(isset($sArr[$kay+1])){
                $nextVal = $arrRoman[$sArr[$kay+1]];
                $sing = 1;
                if($nextVal > $arrRoman[$val]){
                    $sing = -1;
                }
            }
            $sum += $sing * $arrRoman[$val];
        }

        return $sum;
    }





    echo romanToInt1('XVIII');