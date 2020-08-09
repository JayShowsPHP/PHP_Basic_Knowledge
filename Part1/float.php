<?php

/** Float */
$myFloatA = 2.13;
$myFloatB = 1.5;

$result = $myFloatA + $myFloatB;
echo "A + B = $result \n";
// here result is also set with the new value
$result = floor($result);
echo "Floor: $result \n";
$result = ceil($result);
echo "Ceil: $result \n";

$result = $myFloatA * $myFloatB;
echo "A * B = $result \n";
echo "Round 2: " . round($result, 2) . PHP_EOL;
// here we see that result is still with out round
echo "Result: $result \n";

$myIntegerA = 1;

// we can mix int and float
$result = $myIntegerA + $myFloatA;
// but the result is of cause a float
// so be careful with mixing types
var_dump($myIntegerA, $myFloatA, $result);