<?php

//Declarar los array de diferentes maneras
$arrayMarcasCoches = ['Nissan', 'Toyota', 'Opel', 'Mercedes'];
$marcasCoches = array('Nissan', 'Toyota', 'Opel', 'Mercedes');

//Array vacio, puede usarse luego para almacenar datos
$mensajes = array();

$mensajes[0] = 'Este es el primer mensaje de tu array de mensajes';

print_r($mensajes);

//Arrays asociativos
$ventas = array(
    'Patatas' => 300,
    'Churros' => 200,
    'Porras' => 760,
    'Melones' => 400,
    'Cobre' => 300,
    'Ajos' => 125
);

//En estos tenemos indices personalizables a los que podemos acceder
print $ventas['Patatas'] . ', '; //Mostrará 300
print $ventas['Churros'] . ' y '; //Mostrará 200
print $ventas['Porras']; //Mostrará 760




//Podemos declarar arrays dentro de arrays si queremos
$arrayDosDimensiones = array(
    'Notas' => array(
        'Juan' => array(
            'Lengua' => 5,
            'Mate' => 7,
            'Economia' => 3,
            'Latin' => 8
        ),
        'Pedro' => array(
            'Lengua' => 9,
            'Mate' => 10,
            'Economia' => 8,
            'Latin' => 3
        )
    ),
    'Faltas' => array(
        'Juan' => array(
            'Lengua' => 2,
            'Mate' => 0,
            'Economia' => 9,
            'Latin' => 0
        ),
        'Pedro' => array(
            'Lengua' => 0,
            'Mate' => 0,
            'Economia' => 0,
            'Latin' => 9
        )
    )
);


//Métodos de Arrays
$Frutas = array('Manzana', 'Pera', 'Papaya', 'Platano', 'Fresa');
print '<h4>Array sin modificar $Frutas: </h4>';
var_dump($Frutas);


// count() para contar los elementos del array
$contFrutas = count($Frutas);
print '<h4>Contando los elementos del array // count($Frutas): </h4>';
print 'Elementos en el array: '.$contFrutas; //Devuelve 5

//array_push() agrega un elemento al final del array
array_push($Frutas, 'Melon', 'Sandia', 'Melocoton');
print '<h4>Añadir elementos al final del array // array_push($Frutas): </h4>';
var_dump($Frutas);

//array_pop() elemina el ultimo elemento del array y lo almacena
$ultimaFruta = array_pop($Frutas);
print '<h4>Sacando el ultimo elemento // array_pop($Frutas): </h4>';
print 'Ultima fruta: '.$ultimaFruta;

//array_shift() elimina y almacena el primer elemento del Array
$primeraFruta = array_shift($Frutas);
print '<h4>Sacando el primer elemento // array_shift($Frutas): </h4>';
print ('Primera fruta: '.$primeraFruta);

//array_unshift() añade elementos al principio del Array
array_unshift($Frutas, 'Mora', 'Uva', 'Naranja', 'Arandano');
print '<h4>Añadir elementos al principio del Array // array_unshift(): </h4>';
var_dump($Frutas);

//sort() ordena los elementos en orden ascendente
sort($Frutas);
print '<h4>Ordenando el Array en orden ascendente // sort(): </h4>';
var_dump ($Frutas);

//rsort() ordena los elementos en orden Descendente
rsort($Frutas);
print '<h4>Ordenando el Array en orden Descendente // rsort(): </h4>';
var_dump($Frutas);

//Para asort() y ksort() vamos a usar el array $ventas
/*
$ventas = array(
    'Patatas' => 300,
    'Churros' => 200,
    'Porras' => 760,
    'Melones' => 400,
    'Cobre' => 300,
    'Ajos' => 125
);
*/

//asort() ordena un array asociativo en orden ascendente por los valores
asort($ventas);
print '<h4>Ordenando un Array asociativo por valores // asort(): </h4>';
var_dump($ventas);

//ksort() ordena un array asociativo en orden ascendente por las claves
ksort($ventas);
print '<h4>Ordenando un Array asociativo por claves // ksort(): </h4>';
var_dump($ventas);


