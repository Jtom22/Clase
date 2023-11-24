<?php


require_once 'database.php';

try {
    $pdo=obtenerConexion();
    $cerves=obtenerCervezas($pdo);
} catch (PDOException $e) {
    die("Error al obtener cervezas: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cervezas</title>
</head>
<body>
    <?php if (!empty($cerves)): ?>
        <h1>Listado de Cervezas</h1>
        <ul>
            <?php foreach ($cerves as $cerve): ?>
                <li>
                    <?php echo isset($cerve['nombre']) ? $cerve['nombre'] : 'Nombre de cerveza no disponible'; ?>
                    - 
                    <?php echo isset($cerve['tipo']) ? $cerve['tipo'] : 'Tipo no disponible'; ?>
                    
                </li>
                <img src="<?php echo $cerve['ruta_imagen']; ?>" alt="<?php echo $cerve['nombre']; ?>" width="300">

                <!-- //Con esto ponemos boton de cerveza al lado de los elementos -->
                <a href="delete_cerveza.php?id=<?php echo $cerve['id']; ?>">Eliminar Cerveza</a>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No hay cervezas disponibles.</p>
    <?php endif; ?>


    <a href="insertar.php">Insertar Cerveza</a>

</body>
</html>