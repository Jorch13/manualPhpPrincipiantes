<?php
$nuestroArchivo = fopen("archivo.txt", "r");
if ($nuestroArchivo) {
    // Tratamos el fichero

    // Cerramos el fichero
    fclose($nuestroArchivo);
} else {
    echo "No se pudo abrir el archivo";
}
