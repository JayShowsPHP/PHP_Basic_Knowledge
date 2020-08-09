<?php

/** String */
$myStringA = 'Hello';
// here with double quotes
$myStringB = "World";

// we are using a operator for int, this is wrong
//$result = $myStringA + $myStringB;
$result = $myStringA . ' ' . $myStringB;
// here we see how double quotes can be used
echo "$result \n";
// this is not working for single quotes
echo '$result \n' . PHP_EOL;