<?php

/** String */
$myStringA = 'Hello';
# DE: hier mit doppelten Anführungszeichen, auch dies geht
// EN: here with double quotes, also this works
$myStringB = "World";

# DE: wir benutzen hier einen Operator für Nummern (+), was für das Zusammenfügen von Strings nicht geht
// EN: we are using a operator (+) for numbers, this does not work for combining strings
//$result = $myStringA + $myStringB;

# DE: der richtige Operator für das Zusammenfügen von Strings ist (.)
// EN: the right operator for combining strings is (.)
$result = $myStringA . ' ' . $myStringB;

# DE: hier sehen wir was mir doppelten Anführungszeichen möglich ist
# DE: wir können die Variable direkt in den Anführungszeichen nutzen
// EN: here we see how double quotes can be used
// EN: we can use the var directly in the quotes
echo "$result \n";
# DE: dies geht nicht bei einfachen Anführungszeichen
// EN: this is not working for single quotes
echo '$result \n' . PHP_EOL;