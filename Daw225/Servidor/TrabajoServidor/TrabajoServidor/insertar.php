<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Cerveza</title>
</head>
<body>
    <h1>Añadir Nueva Cerveza</h1>
    <form action="insert_cerveza.php" method="post">
        
        <label for="nombre">Nombre de la cerveza:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Introduce el nombre de la cerveza" required >

        <label for="tipo">Tipo de cerveza:</label>
        <input type="text" id="tipo" name="tipo" required>

        <label for="graduacion_alcoholica">Graduación alcohólica:</label>
        <input type="number" id="graduacion_alcoholica" name="graduacion_alcoholica" required min="0" required max="100">

        <label for="pais">País de procedencia:</label>
        <input type="text" id="pais" name="pais" required>

        <label for="precio">Precio de la cerveza :</label>
        <input type="text" id="precio" name="precio" required min="0">

        <label for="ruta_imagen">Ruta de la imagen:</label>
        <input type="text" id="ruta_imagen" name="ruta_imagen">

        <button type="submit">Añadir Cerveza</button>
    </form>
</body>
</html>