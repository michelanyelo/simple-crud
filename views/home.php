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
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <!-- Navbar -->
    <header>
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
    </header>

    <!-- Main Section - Productos -->
    <main class="main_section">
        <div class="form_container">
            <h1 class="fs-3 fw-normal">Encuentra aquí</h1>
            <h1 class="fs-2 text-decoration-underline">VINILOS NUEVOS</h1>
            <div class="row mt-3 py-5">
                <?php foreach ($productos as $producto) { ?>
                    <div class="col-12 col-md-3 d-flex justify-content-around">
                        <div class="card mb-5 w-75">
                            <img src="backend/<?= $producto["imagen"]  ?>" class="card-img-top" alt="Imagen del producto">
                            <div class="card-body">
                                <p class="card-text fs-5 fw-bold"> <?= $producto["nombre"] ?></p>
                                <p class="card-text">Condición: <?= $producto["descripcion"] ?></p>
                                <p class="card-text">Valor: <?= $producto["precio"] ?></p>
                                <p class="card-text">Género: <?= $producto["categoria_nombre"] ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>

    <!-- Footer con nombre -->
    <footer id="productos_footer">
        <p class="fw-bold">Hecho por - Miguel Ángel Monzón Martínez</p>
    </footer>

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>