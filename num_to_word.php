<?php 

$num = $_REQUEST['num'] ?? 10;


echo NUMBER_TO_WORDS_LAKHS($num);

function convertBelowThousand($num) {
    $words = ['Zero', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19'];
    $tens = ['', '', '2', '3', '4', '5', '6', '7', '8', '9'];

    if ($num === 0) {
      return '';
    } else if ($num < 20) {
      return $words[$num];
    } else if ($num < 100) {
      return $tens[floor($num / 10)] .''. convertBelowThousand($num % 10);
    } else {
      return $words[floor($num / 100)] .''. convertBelowThousand($num % 100);
    }
  }


function NUMBER_TO_WORDS_LAKHS($number) {
  
    if ($number === 0) {
      return 'Zero';
    } else if ($number < 0) {
      return 'Negative '. NUMBER_TO_WORDS_LAKHS(abs($number));
    } 

    $lakhPart = floor($number / 100000);
    $number = $number % 100000;
    $thousandPart = floor($number / 1000);
    $hundredPart = $number % 1000;

    $result = '';
    if ($lakhPart > 0) {
        $result .= convertBelowThousand($lakhPart) . ' Lakh ';
    }

    if ($thousandPart > 0) {
        $result .= convertBelowThousand($thousandPart). ' Thousand ';
    }

    if($hundredPart > 0){
        $result .= convertBelowThousand($hundredPart);
    }

    return trim($result);
  }

  
?>