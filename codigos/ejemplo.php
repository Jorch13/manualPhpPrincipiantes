<?php
echo "Hola Mundo";
$autor = 'Jorge Moya';
$edad = 23;
$descrip = 'Este sitio solamente deberia mostrar un Hola Mundo';
$estudios = array (
    'CFGS' => array (
        'ASIR', 'DAW'
    ),
    'Bachiller', 'ESO'
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer Ejemplo PHP</title>
</head>
<body>
    <h1>Autor de este sitio: <?php print $autor; ?></h1>
    <h3>Descipción: <?php print $descrip; ?></h3>
    <div class="container">
        <p>Mis estudios en CFGS son: </p>
        <span><?php print $estudios['CFGS'][0]?></span>
        <span><?php print $estudios['CFGS'][1]?></span>
        <p>Otros estudios son:</p>
        <span><?php print $estudios[0]?></span>
        <span><?php print $estudios[1]?></span>
    </div>
</body>
</html>
