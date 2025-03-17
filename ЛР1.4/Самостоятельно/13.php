<?php
function calculateAverage($numbers) {
    if (empty($numbers)) {
        return null;
    }

    $sum = array_sum($numbers);

    $average = $sum / count($numbers);

    return $average;
}
$array = [10, 20, 30, 40, 50];
$avg = calculateAverage($array);
echo "Среднее арифметическое: $avg";
?>