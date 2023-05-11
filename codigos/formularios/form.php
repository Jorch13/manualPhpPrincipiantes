<!DOCTYPE html>
<html>

<head>
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <h1>Formulario de Registro</h1>
    <form method="POST" action="registro.php">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="genero">Género:</label>
            <select id="genero" name="genero" required>
                <option value="">Seleccione una opción</option>
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
                <option value="otro">Otro</option>
            </select>
        </div>
        <div class="form-group">
            <label for="contraseña">Contraseña:</label>
            <input type="password" id="contraseña" name="contraseña" required>

            <label for="conf_contraseña">Confirmar Contraseña:</label>
            <input type="password" id="conf_contraseña" name="conf_contraseña" required>

        </div>



        <div class="form-group">
            <label for="ciudad">Ciudad:</label>
            <input type="text" id="ciudad" name="ciudad">

            <label for="pais">País:</label>
            <input type="text" id="pais" name="pais" required>

        </div>

        <input type="submit" value="Registrarse">
    </form>
</body>

</html>