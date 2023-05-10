<?php
$n1 = 13;
$n2 = 7;
$n3 = 54;

$palabra = 'Burrito';

if (!empty($palabra)) {
    print $palabra;
}

if ($n1 < $n2) {
    //Si se cumple hace esto:
    print 'Hasta aquí vas bien maquina';
} else {
    print 'Estas en el else';
}

$usuario = 'Hermenegilda';
if ($usuario === 'Jorge') {
    // Ejecuta si la condición1 es verdadera
    print 'Hola ' . $usuario . ' has iniciado sesión';
} elseif ($usuario === 'Pedro') {
    // Ejecuta si la 1ºCondición es falsa y ésta es verdadera
    print 'Hola ' . $usuario . ' has iniciado sesión';
} elseif ($usuario === 'Hermenegilda') {
    // Ejecuta si la 1º y 2ºCondición son falsas y la 3ºCondición es verdadera
    print 'Hola Hermen, tu tienes más flow que naide';
} else {
    // Ejecuta si todas las condiciones son falsas
    print '¿Te quieres colar sin ser usuario?';
}




?>


