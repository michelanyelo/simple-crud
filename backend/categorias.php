<?php
require_once '../class/variables_db.php';
include '../class/autoload.php';
$database = new Database;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];

    $categoria = new Categoria($database->getConn());
    $categoria->setCodigo($codigo);
    $categoria->setNombre($nombre);
    $categoria->insert();

    header('Location: lista_categorias.php');
    exit;
}
