<?php
$nuestroArchivo = fopen("archivo.txt", "w");
$ruletas = array(
    "Calle Azar 777, Ciudad de la Suerte, Estado Ganador",
    "Avenida Apostador Dorado 123, Villa de la Fortuna, Condado de Riesgo",
    "Calle Ruleta 36, Barrio de la Esperanza, Ciudad del Juego",
    "Avenida Ganancia Instantánea 888, Pueblo del Azar, Provincia de Fortuna",
    "Calle Dados 555, Colina de los Apostadores, Municipio de la Suerte",
    "Avenida Jackpot 999, Barrio del Éxito, Ciudad de la Fortuna",
    "Calle Apuesta Alta 777, Pueblo de la Emoción, Condado del Riesgo",
    "Avenida Ruleta Rápida 101, Villa del Triunfo, Estado de la Suerte",
    "Calle Ganador 123, Ciudad del Apostador, Región de la Fortuna",
    "Avenida Gran Premio 666, Barrio de la Ganancia, Municipio del Juego"
);

if ($nuestroArchivo) {
    // Tratamos el fichero
    foreach ($ruletas as $direccionRuleta) {
        fwrite($nuestroArchivo, $direccionRuleta . "\n");
    }
    // Cerramos el fichero
    fclose($nuestroArchivo);

    //Notificamos
    echo "<h1>Elementos del array escritos en el archivo.</h1>";

    $nuestroArchivo = fopen("archivo.txt", "r");
    if ($nuestroArchivo) {
        // Leer y mostrar el contenido del archivo línea por línea
        while (($linea = fgets($nuestroArchivo)) !== false) {
            echo "<p>" . $linea . "</p>";
        }
        // Cerrar el archivo después de leerlo
        fclose($nuestroArchivo);
    } else {
        echo "No se pudo abrir el archivo para lectura.";
    }
} else {
    echo "No se pudo abrir el archivo";
}
