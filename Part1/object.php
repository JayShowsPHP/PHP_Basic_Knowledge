<?php

/** Object */
$myObject = new stdClass();

# DE: für Objekte können wir echo nicht benutzen (Ausnahmen behandeln wir später)
// EN: unlike arrays we cant do echo for objects (exceptions will be shown later)
#echo $myObject;

# DE: aber wir können var_dump() nutzen
// EN: but we can var_dump it
var_dump($myObject);

# DE: lasst uns dem Objekt eine Eigenschaft geben (zu Testzwecken)
# DE: in der Praxis sollten Eigenschaften nicht direkt gesetzt werden
// EN: lets give the object an property with a value
// EN: this is only to show the effect, in practise we should avoid doing it like this
$myObject->foo = 1;
var_dump($myObject);