<?php

require_once 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    if (isset($_GET['id'])) {
        $idCerveza = $_GET['id'];
        // Obtenemos los datos de la cerveza por el id
        $cerveza = obtenerCervezaPorId($idCerveza);
        if ($cerveza) {
            // Incluimos la vista para actualizar los datos de la cerveza
            require 'editar.php';
        } else {
            echo "La cerveza que buscas no existe.";
        }
    } else {
        echo "ID de cerveza no proporcionado.";
    }

} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Procesar la actualización de datos aquí
    if (isset($_POST['id'])) {
        $idCerveza = $_POST['id'];
        $nuevoNombre = $_POST['nombre'];
        $nuevoTipo = $_POST['tipo'];
        $nuevaGraduacion = $_POST['graduacion_alcoholica'];
        $nuevoPais = $_POST['pais'];
        $nuevoPrecio = $_POST['precio'];

        // Actualizar la ruta de la imagen si se proporciona un archivo nuevo
        if ($_FILES['imagen']['size'] > 0) {
            $nuevaRutaImagen = subirImagen($_FILES['imagen']);
            actualizarRutaImagen($idCerveza, $nuevaRutaImagen);
        }

        // Otros campos para la actualización

        // Actualizar los datos en la base de datos
        actualizarDatosCerveza($idCerveza, $nuevoNombre, $nuevoTipo, $nuevaGraduacion, $nuevoPais, $nuevoPrecio);

        // Redirigir a la lista de cervezas u otra ubicación
        header('Location: index.php');
        exit();
    } else {
        echo "ID de cerveza no proporcionado.";
    }

} else {
    echo "Método de solicitud no válido.";
}