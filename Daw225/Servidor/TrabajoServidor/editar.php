<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Datos de la Cerveza</title>
</head>
<body>
    <h1>Actualizar Datos de la Cerveza</h1>

    <form action="editar_cerveza.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $cerveza['id']; ?>">

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $cerveza['nombre']; ?>" required>
        <br>

        <label for="tipo">Tipo:</label>
        <input type="text" name="tipo" value="<?php echo $cerveza['tipo']; ?>" required>
        <br>

        <label for="graduacion_alcoholica">Graduación Alcohólica:</label>
        <input type="text" name="graduacion_alcoholica" value="<?php echo $cerveza['graduacion_alcoholica']; ?>" required>
        <br>

        <label for="pais">País:</label>
        <input type="text" name="pais" value="<?php echo $cerveza['pais']; ?>" required>
        <br>

        <label for="precio">Precio:</label>
        <input type="text" name="precio" value="<?php echo $cerveza['precio']; ?>" required>
        <br>

        <label for="imagen">Nueva Foto (menos de 10 MB, formato .jpg o .png):</label>
        <input type="file" name="imagen" accept=".jpg, .jpeg, .png">
        <br>

        <input type="submit" value="Actualizar Datos">
    </form>

    <a href="index.php">Volver a la lista de cervezas</a>
</body>
</html>