<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jorge Moya">
    <link rel="stylesheet" href="barrio/styles.css">
    <title>Archivos - Modificar</title>
</head>

<body>
    <h2>Información sobre los archivos</h2>
    <div class="info-container">
        <?php
        // Rutas de los archivos en el barrio
        $directorio_origen = 'barrio/origen/';
        $directorio_destino = 'barrio/destino/';
        $nombre_archivo = 'cAntiguos.txt';
        $nombre_archivo_nuevo = 'cNuevos.txt';
        // Copiar el archivo de origen al destino
        if (copy($directorio_origen . $nombre_archivo, $directorio_destino . $nombre_archivo)) {
            echo "<p>El archivo se ha copiado exitosamente.</p>\n";
        } else {
            echo "<p>Ha ocurrido un error al copiar el archivo.</p>\n";
        }

        // Renombrar el archivo copiado
        if (rename($directorio_destino . $nombre_archivo, $directorio_destino . $nombre_archivo_nuevo)) {
            echo "<p>El archivo se ha renombrado correctamente.</p>\n";
        } else {
            echo "<p>Ha ocurrido un error al intentar renombrar el archivo.</p>\n";
        }
        echo "</div>";

        // Mostrar información sobre los archivos
        echo "<div class='container-info'";
        echo "<p><strong>Archivo copiado:</strong></p>\n";
        if (file_exists($directorio_destino . $nombre_archivo_nuevo)) {
            echo "<p>Tamaño: " . filesize($directorio_destino . $nombre_archivo_nuevo) . " bytes</p>\n";
            echo "<p>Fecha de modificación: " . date("Y-m-d H:i:s", filemtime($directorio_destino . $nombre_archivo_nuevo)) . "</p>\n";
        } else {
            echo "<p>El archivo copiado no existe.</p>\n";
        }
        echo "<p><strong>Archivo original:</strong></p>\n";
        if (file_exists($directorio_origen . $nombre_archivo)) {
            echo "<p>Tamaño: " . filesize($directorio_origen . $nombre_archivo) . " bytes</p>\n";
            echo "<p>Fecha de modificación: " . date("Y-m-d H:i:s", filemtime($directorio_origen . $nombre_archivo)) . "</p>\n";
        } else {
            echo "<p>El archivo original no existe.</p>\n";
        }

        // Eliminar el archivo original
        // if (unlink($directorio_origen . $nombre_archivo)) {
        //     echo "<p>El archivo original se ha eliminado correctamente.</p>\n";
        // } else {
        //     echo "<p>Ha ocurrido un error al intentar eliminar el archivo original.</p>\n";
        // }
        ?>
</body>

</html>