<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record Store</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/img/music-store.png" type="image/png">
    <!-- css propio -->
    <link rel="stylesheet" href="assets/css/estilos.css">
    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <main>
        <nav>
            <ul>
                <li>
                    <a href="#"><img class="logo" src="assets/img/logo.svg" /></a>
                </li>
                <li><a href="#">Inicio</a></li>
                <li><a href="backend/views/categorias.html">Categorias</a></li>
                <li><a href="backend/lista_categorias.php">Lista Categorias</a></li>
                <li><a href="backend/productos.php">Productos</a></li>
                <li><a href="backend/lista_productos.php">Lista Productos</a></li>
            </ul>
        </nav>
    </main>


    <main class="main_section">
        <div class="form_container">
            <h1>Listado de productos y Categoría</h1>
            <div class="lista_productos">
                <table>
                    <tr>
                        <th>Producto</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Categoría</th>
                    </tr>
                    <?php foreach ($productos as $producto) { ?>
                        <tr>
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
                                    <?= $producto["categoria_nombre"] ?>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </main>
    <footer id="productos_footer">
        <p>Hecho por - Miguel Ángel Monzón Martínez</p>
    </footer>
</body>

</html>