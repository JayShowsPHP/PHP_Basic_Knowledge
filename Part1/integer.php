<?php

/** Integer */
$myIntegerA = 1;
$myIntegerB = 2;

$result = $myIntegerA + $myIntegerB;
// result is cast to string
echo 'A + B = ' . $result . PHP_EOL;

// result is set with new value
$result = $myIntegerA * $myIntegerB;
echo 'A x B = ' . $result . PHP_EOL;

$result = $myIntegerA / $myIntegerB;
echo 'A / B = ' . $result . PHP_EOL;
