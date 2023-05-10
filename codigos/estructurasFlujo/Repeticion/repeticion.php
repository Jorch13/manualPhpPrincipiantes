<?php
$numero = 1;
$num2 = 13;

$personas = array(
    'Pepe', 'Manoli', 'Juanito', 'Rosalinda', 'Victor Manuel'
);

foreach ($personas as $nombre) {
    print $nombre.', ';
}


$tanques = array("Leopard", "M1A2 Abrams", "Challenger 2", "AMX-56 Leclerc");
foreach ($tanques as $indice => $tanque) {
    echo 'Top: ' . $indice . ', Tanque: ' . $tanque . '<br>';
}


while ($numero <= 10) {
    print $numero;
    $numero++;
}



do {
    print 'JEJEJEJEJj 13 13 13';
} while ($num2 < 10);
