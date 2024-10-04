<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jorge Moya">
    <link rel="stylesheet" href="css/styles.css">
    <title>Formulario basico</title>
</head>

<body>
    <form action="" method="post">
        <label for="name">Nombre: </label>
        <input type="text" name="name" id="name">

        <label for="name">Edad: </label>
        <input type="text" name="name" id="name">

        <label for="level">Nivel: </label>
        <select name="level" id="level">
            <option value="estudiante">Estudiante</option>
            <option value="empleado">Empleado</option>
            <option value="educador">Educador</option>
        </select>
        <input type="submit" value="Enviar formulario">
    </form>
</body>

</html>