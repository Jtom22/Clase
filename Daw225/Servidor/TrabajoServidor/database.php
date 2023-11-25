<?php

require_once 'config.php';
function obtenerConexion(){
    //conectarnos con la base de datos teniendo en cuenta las constantes que pasamos desde config.php
    try {
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Error de conexión a la base de datos: " . $e->getMessage());
    }
}



function obtenerCervezas($pdo) {
    //creamos una consulta con sql de la cual obtenemos todas las cervezas
    try {
        $query = $pdo->query("SELECT * FROM cervezas");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Error al obtener datos de la base de datos: " . $e->getMessage());
    }
}

function insertarCerveza($nombre, $tipo, $graduacion_alcoholica, $pais, $precio, $ruta_imagen) {
    //añadimos la cerveza con una sentencia sql
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

function obtenerCervezaPorId($id) {
    $pdo = obtenerConexion();

    try {
        $stmt = $pdo->prepare("SELECT * FROM cervezas WHERE id = ?");
        $stmt->execute([$id]);
        $cerveza = $stmt->fetch(PDO::FETCH_ASSOC);

        return $cerveza;
    } catch (PDOException $e) {
        die("Error al obtener cerveza por ID: " . $e->getMessage());
    }
}

function actualizarDatosCerveza($idCerveza, $nuevoNombre, $nuevoTipo, $nuevaGraduacion, $nuevoPais, $nuevoPrecio) {
    $pdo = obtenerConexion();

    try {
        $stmt = $pdo->prepare("UPDATE cervezas SET nombre = ?, tipo = ?, graduacion_alcoholica = ?, pais = ?, precio = ? WHERE id = ?");
        $stmt->execute([$nuevoNombre, $nuevoTipo, $nuevaGraduacion, $nuevoPais, $nuevoPrecio, $idCerveza]);
    } catch (PDOException $e) {
        die("Error al actualizar datos de la cerveza: " . $e->getMessage());
    }
}

function subirImagen($imagen) {
    $nombreArchivo = basename($imagen['name']);
    $carpetaDestino = 'img/';  // Ajusta la carpeta según tu estructura
    $rutaCompleta = $carpetaDestino . $nombreArchivo;

    move_uploaded_file($imagen['tmp_name'], $rutaCompleta);

    return $rutaCompleta;
}
function actualizarRutaImagen($idCerveza, $nuevaRutaImagen) {
    try {
        $conexion = obtenerConexion();

        $query = "UPDATE cervezas SET ruta_imagen = :ruta_imagen WHERE id = :id";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':ruta_imagen', $nuevaRutaImagen);
        $stmt->bindParam(':id', $idCerveza);
        $stmt->execute();

        // Cierra la conexión
        $conexion = null;
    } catch (PDOException $e) {
        echo "Error al actualizar la ruta de la imagen: " . $e->getMessage();
    }
}


?>