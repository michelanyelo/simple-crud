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
    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <nav>
        <ul>
            <li>
                <a href="../views/home.html">
                    <img class="logo" src="../assets/img/logo.svg" />
                </a>
            </li>
            <li><a href="../views/home.html">Inicio</a></li>
            <li><a href="views/categorias.html">Categorias</a></li>
            <li>
                <a href="#">Lista Categorias</a>
            </li>
            <li><a href="views/productos.html">Productos</a></li>
            <li><a href="lista_productos.php">Lista Productos</a></li>
        </ul>
    </nav>
    <main class="main_section">
        <div class="form_container">
            <h1>Listado de categorías</h1>
            <div class="lista_categorias">
                <table>
                    <tr>
                        <th>Código</th>
                        <th>Nombre Categoria</th>
                    </tr>
                    <?php foreach ($categorias as $categoria) : ?>
                        <tr>
                            <td>
                                <div class="celda">
                                    <?= $categoria["codigo"] ?>
                                </div>
                            </td>
                            <td>
                                <div class="celda">
                                    <?= $categoria["nombre"] ?>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="form_footer">
                <button type="submit" onclick="window.location.href='views/categorias.html'" class="btn btn-agregar-categoria">Agregar</button>
            </div>
        </div>
    </main>
    <footer id="categorias_footer">
        <p>Hecho por - Miguel Ángel Monzón Martínez</p>
    </footer>
</body>

</html>