<?php

function secondLargestNumber($array) {
    rsort($array);

    return $array[1];
}
$numbers = [23, 11, 45, 67, 89, 34];
$secondLargest = secondLargestNumber($numbers);
echo "Второе по величине число: $secondLargest";
?>