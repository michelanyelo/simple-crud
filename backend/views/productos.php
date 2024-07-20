<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de Productos</title>
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
                <a href="../index.php"><img class="logo" src="../assets/img/logo.svg" /></a>
            </li>
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="views/categorias.html">Categorias</a></li>
            <li><a href="lista_categorias.php">Lista Categorias</a></li>
            <li><a href="#">Productos</a></li>
            <li><a href="lista_productos.php">Lista Productos</a></li>
        </ul>
    </nav>

    <main class="main_section">
        <section class="form_container">
            <h1>Crear producto</h1>
            <form id="formularioProductos" class="formulario" action="productos.php" method="post" enctype="multipart/form-data">
                <div class="form_input">
                    <label for="nombreProducto">Nombre del producto: </label>
                    <input type="text" id="nombreProducto" name="nombre" />

                    <label for="descripcionProducto">Descripción: </label>
                    <textarea id="descripcionProducto" name="descripcion"></textarea>


                    <label for="precioProducto">Precio: </label>
                    <input type="text" id="precioProducto" name="precio" />

                    <label for="categoriaProducto">Categoría: </label>
                    <select name="categoria" id="categoriaProducto">
                        <option selected disabled value="0">Selecciona una categoría: </option>
                        <?php
                        foreach ($categorias as $categoria) { ?>
                            <option value="<?= $categoria["id"] ?>">
                                <?= $categoria["nombre"] ?>
                            </option>
                        <?php } ?>
                    </select>

                    <label for="imgProducto">Seleccione una imagen: </label>
                    <input type="file" id="imgProducto" name="imagen" />
                </div>

                <div class="form_footer">
                    <button type="submit" class="btn btn_guardar">Guardar</button>
                    <button type="reset" class="btn btn_cancelar">Cancelar</button>
                </div>
            </form>
        </section>
    </main>

    <footer id="productos_footer">
        <p>Hecho por - Miguel Ángel Monzón Martínez</p>
    </footer>
    <!-- js de validaciones -->
    <script src="../assets/js/validaciones.js"></script>
</body>

</html>