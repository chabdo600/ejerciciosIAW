<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear módulo</title>
</head>
<body>

    <h1>Crear nuevo módulo</h1>

    <form action="store.php" method="POST">

        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <br><br>

        <label>Abreviatura:</label>
        <input type="text" name="abreviatura" required>
        <br><br>

        <label>Créditos:</label>
        <input type="number" name="creditos" step="0.01" min="0" max="99.99" required>
        <br><br>

        <label>Horas semanales:</label>
        <input type="number" name="horassemanales" min="0" max="32767">
        <br><br>

        <button type="submit">Guardar módulo</button>

    </form>

</body>
</html>