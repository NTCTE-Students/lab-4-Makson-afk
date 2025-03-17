<?php

function celsiusToFahrenheit($celsius) {
    return $celsius * 1.8 + 32;
}

$celsius = 25;
$fahrenheit = celsiusToFahrenheit($celsius);
echo "$celsius°C = $fahrenheit°F";
?>
