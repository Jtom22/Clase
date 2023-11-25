<?php

require_once 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id'])) {
        $idCerveza = $_GET['id'];

        // Obtener los datos de la cerveza por su ID
        $cerveza = obtenerCervezaPorId($idCerveza);

        if ($cerveza) {
            // Incluir la vista para mostrar los detalles de la cerveza
            require 'visualizar.php';
        } else {
            echo "La cerveza no existe.";
        }
    } else {
        echo "ID de cerveza no proporcionado.";
    }
} else {

}


?>