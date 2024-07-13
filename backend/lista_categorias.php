<?php
require_once '../class/variables_db.php';
include '../class/autoload.php';
$database = new Database;

$categoria = new Categoria($database->getConn());
$categorias = $categoria->getAll();
include 'views/lista_categorias.php';
