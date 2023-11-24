<?php

require_once 'config.php';
function obtenerConexion(){
    try {
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Error de conexión a la base de datos: " . $e->getMessage());
    }
}



function obtenerCervezas($pdo) {
    try {
        $query = $pdo->query("SELECT * FROM cervezas");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Error al obtener datos de la base de datos: " . $e->getMessage());
    }
}

function insertarCerveza($nombre, $tipo, $graduacion_alcoholica, $pais, $precio, $ruta_imagen) {
    $pdo = obtenerConexion();

    try {
        $stmt = $pdo->prepare("INSERT INTO cervezas (nombre, tipo, graduacion_alcoholica, pais, precio, ruta_imagen) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$nombre, $tipo, $graduacion_alcoholica, $pais, $precio, $ruta_imagen]);
        return true;
    } catch (PDOException $e) {
        die("Error al insertar cerveza: " . $e->getMessage());
        return false;
    }
}

function eliminarCerveza($id) {
    $pdo = obtenerConexion();

    try {
        // Obtener la ruta de la imagen antes de la cerveza
        $stmt = $pdo->prepare("SELECT ruta_imagen, nombre FROM cervezas WHERE id = ?");
        $stmt->execute([$id]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        // Borrar la cerveza de la base de datos
        $stmt = $pdo->prepare("DELETE FROM cervezas WHERE id = ?");
        $stmt->execute([$id]);

        // Borrar la imagen del servidor
        unlink($data['ruta_imagen']);
        $nombreDocumento1 =$data['nombre'] . ".docx";// Asumiendo que el documento tiene la extensión .docx
        $nombreDocumento2 =$data['nombre'] . ".pdf"; // Asumiendo que el documento tiene la extensión .pdf
        $carpetaDocumentos = 'beer_desc/';
        $rutaDocumento1= $carpetaDocumentos . $nombreDocumento1;
        $rutaDocumento2 = $carpetaDocumentos . $nombreDocumento2;

        if (file_exists($rutaDocumento1)) {
            unlink($rutaDocumento1);
        }
         else if (file_exists($rutaDocumento2)) {
            unlink($rutaDocumento2);
        }

        return true;
    } catch (PDOException $e) {
        die("Error al borrar cerveza: " . $e->getMessage());
        return false;
    }
}


?>