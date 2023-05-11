<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <h1>Formulario de Registro</h1>
    <form method="POST" action="controllerFormulario.php">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" required>
        </div>
        <div class="form-group">
            <label for="pais">País:</label>
            <select id="pais" name="pais" required>
                <option value="">Selecciona un país</option>
                <option value="España">España</option>
                <option value="México">México</option>
                <option value="Argentina">Argentina</option>
            </select>
        </div>
        <div class="form-group">
            <label for="ciudad">Ciudad:</label>
            <input type="text" id="ciudad" name="ciudad" required>
        </div>
        <div class="form-group">
            <label for="direccion">Dirección:</label>
            <textarea id="direccion" name="direccion" required></textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="Enviar Formulario">
        </div>
    </form>
</body>

</html>