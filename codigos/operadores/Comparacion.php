<?php
$numero1 = 13;
$numero2 = 7;

if($numero1 == $numero2){
    print "Los números son iguales";
} else {
    print "Los números son diferentes";
}
if ($numero1 != $numero2) {
    print 'Los numeros son distintos';
} else {
    print 'Los numeros son iguales';
}
if ($numero1 === $numero2){
    print 'Las variables son del mismo tipo';
} else {
    print 'El tipo de las variables es diferente';
}
print "<p>";
if($numero1 > $numero2){
    print "El número 1 es mayor que el número 2";
} else {
    print "El número 1 es menor o igual que el número 2";
}
print "<p>";
if($numero1 !== "10"){
    print "El número 1 es diferente a la cadena '10'";
} else {
    print "El número 1 es igual a la cadena '10'";
}

?>


