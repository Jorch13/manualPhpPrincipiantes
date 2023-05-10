<?php
$numero1 = 13;
$numero2 = 7;
$numero3 = 54;

if ($numero1 > $numero2 and $numero1 > $numero3) {
    print "El número 1 es el mayor";
} elseif ($numero2 > $numero1 and $numero2 > $numero3) {
    print "El número 2 es el mayor";
} else {
    print "El número 3 es el mayor";
}
print "<br>";
if ($numero1 > $numero2 or $numero3 > $numero2) {
    print "Al menos un número es mayor que el número 2";
} else {
    print "Ningún número es mayor que el número 2";
}
print "<br>";
if (!($numero1 == $numero2)) {
    print "Los números 1 y 2 son diferentes";
} else {
    print "Los números 1 y 2 son iguales";
}
