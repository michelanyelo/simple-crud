<?php
require_once '../class/variables_db.php';
include '../class/autoload.php';
$database = new Database;

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$categoria = $_POST['categoria'];


$producto = new Producto($database->getConn());
$producto->setNombre($nombre);
$producto->setDescripcion($descripcion);
$producto->setPrecio($precio);
$producto->setIdCategoria($categoria);
$producto->insert();

header('Location: lista_productos.php');
exit;
