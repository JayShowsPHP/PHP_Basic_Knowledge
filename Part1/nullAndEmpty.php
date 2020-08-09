<?php

/** NULL / empty */
// this is an unset var
$myNull = null;
$myEmpty = '';
$myZero = 0;

// this is possible php convert it to empty string
echo '$myNull: ' . $myNull . PHP_EOL;

// careful isset is not the same like an empty var !!
echo PHP_EOL . 'Test isset:' . PHP_EOL;
var_dump(isset($myNull));
var_dump(isset($myEmpty));
var_dump(isset($myZero));

echo PHP_EOL . 'Test empty:' . PHP_EOL;
var_dump(empty($myNull));
var_dump(empty($myEmpty));
var_dump(empty($myZero));

// last we can unset a var
$myVar = 'Hello World';
var_dump($myVar);
// we could set it to null
$myVar = null;
var_dump($myVar);

// or unset it now its entirely gone
unset($myVar);
// php makes such an "not found or not set var" to null and throws a notice
var_dump($myVar);
