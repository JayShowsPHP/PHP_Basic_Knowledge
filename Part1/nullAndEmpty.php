<?php

/** NULL / empty */
# DE: hier eine ungesetzte Variable $myNull
// EN: this is an unset var $myNull
$myNull = null;
$myEmpty = '';
$myZero = 0;

# DE: echo ist möglich, PHP wandelt null in einen leeren String um
// EN: this is possible php convert it to empty string
echo '$myNull: ' . $myNull . PHP_EOL;

# DE: Vorsicht die Prüfung isset() entspricht nicht empty() !!
// EN: careful isset is not the same like an empty var !!
echo PHP_EOL . 'Test isset:' . PHP_EOL;
var_dump(isset($myNull));
var_dump(isset($myEmpty));
var_dump(isset($myZero));

echo PHP_EOL . 'Test empty:' . PHP_EOL;
var_dump(empty($myNull));
var_dump(empty($myEmpty));
var_dump(empty($myZero));

# DE: wir können unsere Variable auch wieder "löschen"
// EN: last we can unset a var
$myVar = 'Hello World';
var_dump($myVar);

# DE: entweder indem wir sie null setzen
// EN: we could set it to null
$myVar = null;
var_dump($myVar);

# DE: oder indem wir die unset() Funktion nutzen
// EN: or unset it now its entirely gone
unset($myVar);

# DE: eine nicht gesetzte Variable erzeugt eine PHP-Notice und ergibt null
// EN: php cast such an "not found or not set var" to null and throws a notice
var_dump($myVar);
