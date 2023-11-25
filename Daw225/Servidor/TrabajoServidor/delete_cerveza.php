<?php

require_once 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    // Obtenemos el ID de la cerveza que queremos eliminar
    $id_cerveza = $_GET['id'];

    // Eliminamos la cerveza con la funcion de la database
    if (eliminarCerveza($id_cerveza)) {
        header("Location: index.php");
    } else {
        echo "Error al eliminar la cerveza.";
    }

} else {
    // Redireccionar si no se proporciona un ID válido
    header("Location: index.php");
    exit();
}



?>