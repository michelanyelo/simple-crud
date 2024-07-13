<?php
require_once '../class/variables_db.php';
include '../class/autoload.php';
$database = new Database;

$producto = new Producto($database->getConn());
$productos = $producto->getAll();
include 'views/lista_productos.php';
