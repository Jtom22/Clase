<?php

require_once 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    // Obtener el ID de la cerveza a eliminar
    $id_cerveza = $_GET['id'];

    // Eliminar la cerveza utilizando la función de eliminación
    if (eliminarCerveza($id_cerveza)) {
        echo "Eliminamos???";
        // header("Location: index.php");
    } else {
        echo "Error al eliminar la cerveza.";
    }
} else {
    // Redireccionar si no se proporciona un ID válido
    header("Location: index.php");
    exit();
}

?>