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

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
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
    </header>


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

                    <label for="imgProducto" class="form-label">Seleccione una imagen: </label>
                    <input class="form-control" type="file" id="imgProducto">
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
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- js de validaciones -->
    <script src="../assets/js/validaciones.js"></script>
</body>

</html>