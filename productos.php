<?php
// Cargar y decodificar el archivo JSON de productos
$productos_json = file_get_contents('datos/productos.json');
$productos = json_decode($productos_json, true);

$perSeleccionado = $_GET['per'] ?? FALSE;

if ($perSeleccionado === 'todos') {
    // Mostrar todos los productos sin filtrar
    $titulo = "Todos los Productos";
} else {
    // Filtrar por el personaje seleccionado
    $titulo = ucwords(str_replace("ms", "ms.", str_replace("_", " ", $perSeleccionado)), " \t\r\n\f\v-");
}

$perSeleccionado = $_GET['per'] ?? FALSE;

$titulo = ucwords(str_replace("ms", "ms.", str_replace("_", " ", $perSeleccionado)), " \t\r\n\f\v-");

?>
<div class="d-flex justify-content-center p-5">
    <div>
        <h1 class="text-center mb-5 fw-bold">Nuestro catálogo de <span class="text-danger"><?= $titulo ?></span></h1>
        <div class="container">
            <?php if (!empty($productos)) { ?>
                <div class="row">
                    <?php foreach ($productos as $producto) { ?>
                        <div class="col-12 col-md-4">
                            <div class="card mb-3">
                                <img src="<?= $producto['imágen'] ?>" class="card-img-top" alt="Portada de <?= $producto['modelo'] ?>">
                                <div class="card-body">
                                    <p class="fs-6 m-0 fw-bold text-danger"><?= $producto['modelo'] ?></p>
                                    <h5 class="card-title"><?= $producto['color'] ?></h5>
                                    <p class="card-text">Tipo: <?= $producto['tipo'] ?></p>
                                    <p class="card-text">Capacidad: <?= $producto['capacidad'] ?></p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><span class="fw-bold">Precio:</span> $<?= number_format($producto['precio'], 2) ?></li>
                                </ul>
                                <div class="card-body">
                                    <div class="fs-3 mb-3 fw-bold text-center text-danger">$<?= number_format($producto['precio'], 2) ?></div>
                                    <!-- Enlace para ver más detalles -->
                                    <a href="#" class="btn btn-danger w-100 fw-bold">VER MÁS</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } else { ?>
                <div class="row">
                    <div class="col-12 text-danger text-center h1">NO SE ENCONTRARON PRODUCTOS DE ESE PERSONAJE</div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
