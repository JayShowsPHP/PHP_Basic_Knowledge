<?php

/** Float */
$myFloatA = 2.13;
$myFloatB = 1.5;

$result = $myFloatA + $myFloatB;
echo "A + B = $result \n";

# DE: floor() wird zum abrunden genutzt, ceil() zum aufrunden
// EN: floor() used for round down and ceil() for round up
$result = floor($result);
echo "Floor: $result \n";
$result = ceil($result);
echo "Ceil: $result \n";

$result = $myFloatA * $myFloatB;
echo "A * B = $result \n";
echo "Round 2: " . round($result, 2) . PHP_EOL;
# DE: wir können hier die originale Variable $result ohne Rundung sehen
// EN: we can see the original $result without rounding
echo "Result: $result \n";

$myIntegerA = 1;

# DE: wir können Typen Int und Float mixen
// EN: we can mix int and float
$result = $myIntegerA + $myFloatA;
# DE: aber das Ergebnis ist dann vom Typ Float, also vorsicht beim mixen von Typen
// EN: but the result is of cause a float, so be careful with mixing types
var_dump($myIntegerA, $myFloatA, $result);