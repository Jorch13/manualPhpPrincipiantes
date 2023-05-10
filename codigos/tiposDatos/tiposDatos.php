<?php
// Ejemplo de declaraciones de tipos de datos

// Tipo de datos escalares
$int_var = 10; // Entero
$float_var = 3.14; // Flotante
$string_var = "Hola mundo"; // Cadena o tring
$bool_var = true; // Booleano

// Tipo de datos compuestos
$array_var = array(1, 2, 3); // Array
$object_var = new stdClass(); // Objeto

// Ejemplo de conversión de tipos de datos

// Conversión de escalares a otros tipos
$int_to_string = (string) $int_var; // Entero a cadena
$float_to_int = (int) $float_var; // Flotante a entero
$string_to_bool = (bool) $string_var; // Cadena a booleano

// Conversión de arrays a otros tipos
$array_to_object = (object) $array_var; // Array a objeto
$array_to_string = implode(',', $array_var); // Array a cadena

// Conversión de objetos a otros tipos
$object_to_array = (array) $object_var; // Objeto a array
$object_to_string = json_encode($object_var); // Objeto a cadena JSON

// Imprimir valores
echo "Valores de variables:\n";
echo "Entero: $int_var\n";
echo "Flotante: $float_var\n";
echo "Cadena: $string_var\n";
echo "Booleano: $bool_var\n";
echo "Array: ";
print_r($array_var);
echo "Objeto: ";
print_r($object_var);

// Imprimir valores después de conversión
echo "Valores después de conversión:\n";
echo "Entero a cadena: $int_to_string\n";
echo "Flotante a entero: $float_to_int\n";
echo "Cadena a booleano: $string_to_bool\n";
echo "Array a objeto: ";
print_r($array_to_object);
echo "Array a cadena: $array_to_string\n";
echo "Objeto a array: ";
print_r($object_to_array);
echo "Objeto a cadena JSON: $object_to_string\n";
?>