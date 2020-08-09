<?php

/** Object */
$myObject = new stdClass();
// like arrays we cant do this for now
#echo $myObject;

// but we can var_dump it
var_dump($myObject);

// lets give the object an property with a value
// this is only to show the effect, in practise we should avoid doing it like this
$myObject->foo = 1;
var_dump($myObject);