<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de ejemplo</title>
</head>
<body>
    <form action="controllerFormulario.php" method="post">
        <label for="name">Nombre: </label>
        <input type="text" name="name" id="name">

        <label for="age">Edad: </label>
        <input type="number" name="age" id="age">

        <label for="level">Nivel: </label>
        <select name="level" id="level">
            <option value="student">Estudiante</option>
            <option value="employed">Empleado</option>
            <option value="teacher">Enseñador</option>
        </select>

        <input type="submit" value="Enviar formulario">
    </form>
</body>
</html>

