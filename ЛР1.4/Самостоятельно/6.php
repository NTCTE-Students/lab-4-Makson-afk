<?php

function sumOfDigits($number) {
    $digits = str_split((string)$number);
    
    return array_sum($digits);
}
echo sumOfDigits(12345);
?>