<?php
/* @autor Miguel Ángel Monzón Martínez */

require_once 'class/variables_db.php';
require_once 'class/autoload.php';

// Crear una instancia de la base de datos y conectar
$db = new Database();
$db->getConn();

// Comprobar si la conexión fue exitosa
if ($db->conn) {
    $producto = new Producto($db->getConn());
    $productos = $producto->getAllCat();
    include('views/home.php');
    exit;
} else {
    echo "Error en la conexión.";
}
