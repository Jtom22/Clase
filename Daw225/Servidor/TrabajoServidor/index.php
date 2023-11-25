<?php


require_once 'database.php';

try {
    $pdo=obtenerConexion();
    $cerves = obtenerCervezas($pdo);
} catch (PDOException $e) {
    die("Error al obtener usuarios: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if (!empty($cerves)): ?>
        <h1>Listado de Cervezas</h1>
        <div class="galeria">
            <?php foreach ($cerves as $cerve): ?>
               <div class="cerveza">
                    <div id=datos>
                        Nombre: <?php echo isset($cerve['nombre']) ? $cerve['nombre'] : 'Nombre de cerveza no disponible'; ?>
                    </div> 
                    <img src="<?php echo $cerve['ruta_imagen']; ?>" alt="<?php echo $cerve['nombre']; ?>" width="300">
                    <div id=opciones>
                        <!-- //Con esto ponemos boton de cerveza al lado de los elementos -->
                        <a href="delete_cerveza.php?id=<?php echo $cerve['id']; ?>">Eliminar Cerveza</a>
                        <a href="visualizar_cerveza.php?id=<?php echo $cerve['id']; ?>">Visualizar Cerveza</a>
                        <a href="editar_cerveza.php?id=<?php echo $cerve['id']; ?>">Editar Cerveza</a>
                    </div>
                </div>
               
            <?php endforeach; ?>
      
        <?php else: ?>
            <p>No hay cervezas disponibles.</p>
        <?php endif; ?>

    </div>

    <div class="generales">
        <a href="insertar.php">Insertar Cerveza</a>
    </div>
    
</body>
</html>