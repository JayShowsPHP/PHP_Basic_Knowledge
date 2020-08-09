<?php

/** Integer */
$myIntegerA = 1;
$myIntegerB = 2;

$result = $myIntegerA + $myIntegerB;
# DE: die Variable $result wird hier zu einem String transferiert
// EN: result is cast to string
echo 'A + B = ' . $result . PHP_EOL;

# DE: die Variable $result wird hier mit einem neuen Wert überschrieben
// EN: result is set with new value
$result = $myIntegerA * $myIntegerB;
echo 'A x B = ' . $result . PHP_EOL;

$result = $myIntegerA / $myIntegerB;
echo 'A / B = ' . $result . PHP_EOL;
