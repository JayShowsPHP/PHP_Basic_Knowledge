<?php

/** Array */

$myArrayA = ['Hello', 'World'];
# DE: in PHP, anders als in anderen Sprachen, können wir verschiedene Typen in einem Array speichern
// EN: in php different from other langs we can store miltiple types in a array, but we should not do
$myArrayB = ['Number', 1];

# DE: hier sehen wir, das wir nichts anderes als einen String per echo ausgeben können
# DE: PHP versucht den Typ in einen String aber dies geht nur mit
# DE: Int und Float (Ausnahmen behandlen wir später)
// EN: here we see that we cant echo something other than string
// EN: php try to convert things echoed to string, but it can do this only
// EN: for int and float (exceptions for objects later)
echo $myArrayA;

# DE: wir nutzen var_dump() um den Inhalt des Arrays zu sehen
// EN: here we use var_dump to show the content of $myArrayA
var_dump($myArrayA);
# DE: wir sehen die Schlüssel (keys) 0 und 1 des Arrays
# DE: wenn Schlüssel nicht explizit gestzt werden beginnen diese immer mit 0 !!
// EN: we see now that there are keys 0, 1
// EN: we always start with 0 !!

# DE: wir können jetzt auf den Inhalt des Arrays über den Schlüssel zugreifen
// EN: we can access the content of array by key
echo $myArrayA[0] . ' ' . $myArrayA[1] . PHP_EOL;

# DE: das Zählen der Elemente im Array is mit count() möglich
// EN: we can also count the array that gives us the amount of elements inside
echo 'Count $myArrayA: ' . count($myArrayA) . PHP_EOL;

/** Associative Array */

$myAssociative = [
    # DE: unter Schlüssel Foo befindet sich der Wert 1
    // EN: in key Foo we have a number 1
    'Foo' => 1,
    # DE: unter Schlüssel Bar befindet sich ein neues Array mit zwei Elementen
    // EN: in key Bar we have an additional array with two elements
    'Bar' => ['One', 'Two'],
];

# DE: wir lassen uns den Inhalt mit var_dump() anzeigen
// EN: lets see how it looks like with var_dump()
var_dump($myAssociative);

# DE: wir greifen auf den Wert in Foo genauso zu wie am Anfang der Lektion
// EN: we access the number in Foo like before
echo 'Foo: ' . $myAssociative['Foo'] . PHP_EOL;

# DE: wir greifen auf den Wert in Bar zu (Array) und nutzen dann den ersten Schlüssel des Arrays
// EN: we access Bar over key and then using the first key of the array in Bar
echo 'Bar->One: ' . $myAssociative['Bar'][0] . PHP_EOL;
echo 'Bar->One: ' . $myAssociative['Bar'][1] . PHP_EOL;

# DE: wir können die Funktion implode() nutzen um aus dem Array einen String zu machen
# DE: implode() bildet eine Kette aus den Elementen des Arrays und fügt bestimmte Zeichen zwischen die Elemente
// EN: we also can use implode to make a string from array elements
// EN: implode makes a chain from all elements and puts a specific char between them
echo 'Bar: ' . implode(',', $myAssociative['Bar']) . PHP_EOL;
