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
        
        <label for="aficion">Aficiones: </label>
        <input type="radio" name="cinema" id="cinema">
        <input type="radio" name="sport" id="sport">
        <input type="radio" name="read" id="read">
        <input type="radio" name="watchTv" id="watchTv">

        <label for="desc">Descripción personal: </label>
        <textarea name="desc" id="desc" cols="30" rows="10"></textarea>

        <input type="submit" value="Enviar formulario">
    </form>
    <footer>
        <a href="https://twitter.com/jorch13_13">Mi twitter</a>
        <a href="https://instagram.com/jorch13_13">Mi Instagram</a>
        <a href="twitter.com/jorch13_13">Mi LinkedIn</a>
    </footer>
</body>
</html>

