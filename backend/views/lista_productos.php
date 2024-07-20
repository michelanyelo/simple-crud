<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Categorías</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="../assets/img/music-store.png" type="image/png">
    <!-- css propio -->
    <link rel="stylesheet" href="../assets/css/estilos.css">
     <!-- CSS Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="../index.php">
                        <img class="logo" src="../assets/img/logo.svg" />
                    </a>
                </li>
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="views/categorias.html">Categorias</a></li>
                <li>
                    <a href="lista_categorias.php">Lista Categorias</a>
                </li>
                <li><a href="productos.php">Productos</a></li>
                <li><a href="#">Lista Productos</a></li>
            </ul>
        </nav>
    </header>

    <main class="main_section">
        <div class="form_container">
            <h1>Listado de productos</h1>
            <div class="lista_productos">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Nombre Producto</th>
                        <th>Descripción Producto</th>
                        <th>Precio Producto</th>
                        <th>ID Categoría</th>
                    </tr>
                    <?php foreach ($productos as $producto) : ?>
                        <tr>
                            <td>
                                <div class="celda">
                                    <?= $producto["id"] ?>
                                </div>
                            </td>
                            <td>
                                <div class="celda">
                                    <?= $producto["nombre"] ?>
                                </div>
                            </td>
                            <td>
                                <div class="celda">
                                    <?= $producto["descripcion"] ?>
                                </div>
                            </td>
                            <td>
                                <div class="celda">
                                    <?= $producto["precio"] ?>
                                </div>
                            </td>
                            <td>
                                <div class="celda">
                                    <?= $producto["id_categoria"] ?>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="form_footer">
                <button type="submit" onclick="window.location.href='productos.php'" class="btn btn-agregar-producto">Agregar</button>
            </div>
        </div>
    </main>
    <footer id="productos_footer">
        <p>Hecho por - Miguel Ángel Monzón Martínez</p>
    </footer>
     <!-- JS Bootstrap -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>