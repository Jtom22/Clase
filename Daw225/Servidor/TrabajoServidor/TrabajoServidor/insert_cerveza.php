<?php

require_once 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];
    $graduacion_alcoholica = $_POST['graduacion_alcoholica'];
    $pais = $_POST['pais'];
    $precio = $_POST['precio'];
    $ruta_imagen = $_POST['ruta_imagen'];

    // Insertar nueva cerveza en la base de datos utilizando la función de inserción
    if (insertarCerveza($nombre, $tipo, $graduacion_alcoholica, $pais, $precio, $ruta_imagen)) {
        header("Location: index.php");
    } else {
        echo "Error al añadir la cerveza.";
    }
} else {
    // Redireccionar si se intenta acceder directamente a insert_cerveza.php sin enviar datos del formulario
    header("insertar.php");
    exit();
}

?>