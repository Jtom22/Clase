<?php

require_once 'config.php';

function obtenerConexion(){
    try {
        // Utilizamos las constantes de config para realizar la conexion con la base de datos
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
        die("Error al obtener datos de la base de datos " . $e->getMessage());
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
        $stmt = $pdo->prepare("DELETE FROM cervezas WHERE id = ?");
        $stmt->execute([$id]);
        return true;
    } catch (PDOException $e) {
        die("Error al eliminar cerveza: " . $e->getMessage());
        return false;
    }
}


?>