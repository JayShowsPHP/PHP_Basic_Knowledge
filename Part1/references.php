<?php

# DE: für die meisten Typen wird der Wert der ersten Variable einfach in die zweite kopiert
// EN: for the most normal types the variable will be copied to the new
$myInt = 1;
$myInt2 = $myInt;
var_dump($myInt2);
$myInt = 2;
var_dump($myInt2);

# DE: aber Objekte zum Beispiel werden referenziert
# DE: die zweite Variable zeigt nun quasi auf den Wert der ersten
// EN: but objects for example are referenced
// EN: the second var points to the first

$myObj1 = new stdClass();
$myObj1->foo = 1;

# DE: $myObj2 zeigt auf das Objekt, welches in $myObj1 gespeichert ist
// EN: $myObj2 points to the object stored in $myObject1
$myObj2 = $myObj1;

# DE: wenn wir $myObj2 nun manipulieren sehen wir die Änderung auch bei $myObj1
// EN: if we manipulate $myObj2 we will see the change on $myObj1 as well
$myObj2->foo = 2;
var_dump($myObj1);

# DE: wollen wir das verhindern müssen wir das Objekt kopieren
// EN: if we want to avoid this, we have to clone the object
$myObj3 = clone $myObj2;

# DE: jetzt können wir $myObj3 verändern, ohne dabei $myObj2 auch zu verändern
// EN: now we can manipulate $myObj3 without having effect on $myObj2
$myObj3->foo = 3;
var_dump($myObj2);
