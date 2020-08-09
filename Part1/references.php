<?php

// for the most normal types the variable will be copied to the new
$myInt = 1;
$myInt2 = $myInt;
var_dump($myInt2);
$myInt = 2;
var_dump($myInt2);

// but objects for example are referenced
// the second var points to the first

$myObj1 = new stdClass();
$myObj1->foo = 1;

// $myObj2 points to the object stored in $myObject1
$myObj2 = $myObj1;
// if we manipulate $myObj2 we will see the change on $myObj1 as well
$myObj2->foo = 2;

var_dump($myObj1);