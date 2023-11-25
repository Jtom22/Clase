<?php

require_once 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];  // Aquí se obtiene el valor del campo 'tipo'
    $graduacion_alcoholica = $_POST['graduacion_alcoholica'];
    $pais = $_POST['pais'];
    $precio = $_POST['precio'];

    // Subir el documento
    $documento = $_FILES['documento'];
    $documento_extns = $documento['name'];
    $documento_nombre = $nombre;
    $documento_tmp = $documento['tmp_name']; //ruta archivo temporal del documento para poder moverla al archivo que queremos
    $carpeta_destino = 'beer_desc/';
    $info_documento = pathinfo($documento['name']);
    $documento_extns = $info_documento['extension'];

    // extensión del documento
    $ruta_documento_destino = $carpeta_destino . $documento_nombre . '.' . $documento_extns;
    $imagen = $_FILES['imagen'];
    $imagen_nombre = $imagen['name'];
    $imagen_tmp = $imagen['tmp_name']; //ruta archivo temporal de la imagen
    $carpeta_imagen = 'img/';
    $ruta_imagen_destino = $carpeta_imagen . $imagen_nombre;

    if (move_uploaded_file($imagen_tmp, $ruta_imagen_destino)) {
        //Vamos a mover el archivo temporal a la ruta que queremos

    if (move_uploaded_file($documento_tmp, $ruta_documento_destino)) {
        // Insertar nueva cerveza en la base de datos
        if (insertarCerveza($nombre, $tipo, $graduacion_alcoholica, $pais, $precio, $ruta_imagen_destino)) {
            header("Location: index.php");
        } else {
            echo "Error al añadir la cerveza.";
        }
    } else {
        echo "Error al subir el documento.";
    }

} else {
    // Redireccionar si se intenta acceder directamente a insert_cerveza.php sin enviar datos del formulario
    header("Location: create_cerveza.php");
    exit();
}
}

?>