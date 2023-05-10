<?php
// Variables de diferentes tipos
$name = "Juan";
$age = 15;
$mail = "juan@example.com";
$pass = "juan123";
$telf = 689120903;
$student = true;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apuestas Recreotivas Registro</title> <!-- No es un error, es un chiste entre recreo y recreativas -->
    <link rel="stylesheet" href="../tiposDatos/css/styles.css">
</head>

<body>
    <h1>Perfil de Usuario</h1>
    <?php
    print '<p>Nombre: '.$name.'</p>';
    print '<p>Edad: '.$age.'</p>';
    print '<p>Correo: '.$mail.'</p>';
    print '<p>Telefono: '.$telf.'</p>';
    print '<p>Es estudiante: '.$student.'</p>';

?>
</body>

</html>