<?php 
$numeros = array(1, 3, 2, 5, 4, 6, 7, 9);

foreach ($numeros as $numero) {
    if ($numero % 2 == 0) {
        continue;
    }
    echo $numero . ', ';
}



foreach ($numeros as $numero) {
    if ($numero % 2 == 0) {
        break;
    }
    echo $numero . ', ';
}