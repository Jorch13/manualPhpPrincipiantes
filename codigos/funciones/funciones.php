<?php
function creaMotosierras($precio, $marca, $modelo)
{
    $motoSierra = array(
        "precio" => $precio,
        "marca" => $marca,
        "modelo" => $modelo
    );
    return $motoSierra;
}

$Stihl = creaMotosierras(120, 'sthil', 'tira troncales');
$Husqvarna = creaMotosierras(150, 'husqvarna', 'parte piernas');

print_r($Stihl);
print_r($Husqvarna);

//Paso por referencia usando &
function duplicar(&$num) {
    $num *= 2;
  }
  $numero = 5;
  duplicar($numero);
  echo $numero; // imprime "10"
