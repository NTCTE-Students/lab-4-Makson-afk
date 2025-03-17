<?php

function sortArrayAscending($array) {
    sort($array);
    return $array;
}

$numbers = [5, 3, 8, 1, 9];
$sortedNumbers = sortArrayAscending($numbers);
print_r($sortedNumbers);
?>