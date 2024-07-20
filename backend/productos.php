<?php
require_once '../class/variables_db.php';
include '../class/autoload.php';
$database = new Database;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $categoria = $_POST['categoria'];
    $imagen = $_FILES['imagen'];
    $uploader = new FileUploader();
    $rutaImagen = $uploader->upload($imagen);

    $producto = new Producto($database->getConn());
    $producto->setNombre($nombre);
    $producto->setDescripcion($descripcion);
    $producto->setPrecio($precio);
    $producto->setIdCategoria($categoria);
    $producto->setImagen($rutaImagen);
    $producto->insert();

    header('Location: lista_productos.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $categoria = new Categoria($database->getConn());
    $categorias = $categoria->getAll();

    // Incluye la vista de productos y pasa las categorías
    include 'views/productos.php';
}
