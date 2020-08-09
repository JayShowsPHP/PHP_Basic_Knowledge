<?php

/** Array */
$myArrayA = ['Hello', 'World'];
// in php different from other langs we can store miltiple types in a array, but we should not do
$myArrayB = ['Number', 1];

// here we see that we cant echo something other than string
// php try to convert things echoed to string, but it can do this only
// for int and float (exceptions for objects later)
echo $myArrayA;

// here we use var_dump to show the content of $myArrayA
var_dump($myArrayA);
// we see now that there are keys 0, 1
// we always start with 0 !!

// we can access the content of array by key
echo $myArrayA[0] . ' ' . $myArrayA[1] . PHP_EOL;

// we can also count the array that gives us the amount of elements inside
echo 'Count $myArrayA: ' . count($myArrayA) . PHP_EOL;

/** Associative Array */

$myAssociative = [
    // in key Foo we have a number 1
    'Foo' => 1,
    // in key Bar we have an additional array with two elements
    'Bar' => ['One', 'Two'],
];

// lets see how it looks like
var_dump($myAssociative);

// we access the number in Foo like before
echo 'Foo: ' . $myAssociative['Foo'] . PHP_EOL;
// we access Bar over key and then using the first key of the array in Bar
echo 'Bar->One: ' . $myAssociative['Bar'][0] . PHP_EOL;
echo 'Bar->One: ' . $myAssociative['Bar'][1] . PHP_EOL;

// we also can use implode to make a string from array elements
// implode makes a chain from all elements and puts a specific char between them
echo 'Bar: ' . implode(',', $myAssociative['Bar']) . PHP_EOL;
