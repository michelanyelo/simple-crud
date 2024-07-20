<?php
/* @autor Miguel Ángel Monzón Martínez */

$classMap = [
    'Database' => __DIR__ . '/database.php',
    'Categoria' => __DIR__ . '/categorias.php',
    'Producto' => __DIR__ . '/productos.php',
    'FileUploader' => __DIR__ . '/fileuploader.php'
];

spl_autoload_register(function ($class_name) use ($classMap) {
    if (isset($classMap[$class_name])) {
        require_once $classMap[$class_name];
    }
});


// carga dinamica
// spl_autoload_register(function ($class_name) {
//     include __DIR__ . '/' . strtolower($class_name) . '.php';
// });
