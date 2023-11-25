<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Cerveza</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

    <h1>Detalles de la Cerveza</h1>
<div id=datosCerveza>
    <p>ID: <?php echo $cerveza['id']; ?></p>
        <p>Nombre: <?php echo $cerveza['nombre']; ?></p>
        <p>Tipo: <?php echo $cerveza['tipo']; ?></p>
        <p>Graduación Alcohólica: <?php echo $cerveza['graduacion_alcoholica']; ?></p>
        <p>País: <?php echo $cerveza['pais']; ?></p>
        <p>Precio: <?php echo $cerveza['precio']; ?></p>
        <img src="<?php echo $cerveza['ruta_imagen']; ?>" alt="<?php echo $cerveza['nombre']; ?>" width="300">

</div>

<div id=volver>
    <a href="index.php">Volver a la lista de cervezas</a>
</div>
   
</body>
</html>