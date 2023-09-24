<?php
// Validar y sanitizar la variable $_GET['tipo']
$tipoSeleccionado = filter_input(INPUT_GET, 'tipo', FILTER_SANITIZE_STRING);

// Cargar y decodificar el archivo JSON de productos
$productos_json = file_get_contents('datos/productos.json');
$productos = json_decode($productos_json, true);

// Filtrar productos por el tipo seleccionado (o mostrar todos si no se selecciona uno)
$productosFiltrados = [];
if (!empty($productos)) {
    foreach ($productos as $producto) {
        if ($tipoSeleccionado === 'todos' || $producto['tipo'] === $tipoSeleccionado) {
            $productosFiltrados[] = $producto;
        }
    }
}

$titulo = ($tipoSeleccionado === 'todos') ? "Todos los Productos" : "Productos de Tipo: " . $tipoSeleccionado;
?>

<!-- Aquí empieza el HTML -->
<div class="d-flex justify-content-center p-5">
    <div>
        <h1 class="text-center mb-5 fw-bold">Nuestro catálogo de <span class="text-danger"><?= $titulo ?></span></h1>
        <div class="container">
            <?php if (!empty($productosFiltrados)) { ?>
                <div class="row">
                    <?php foreach ($productosFiltrados as $producto) { ?>
                        <div class="col-12 col-md-4">
                            <!-- Tu código HTML para mostrar productos aquí -->
                        </div>
                    <?php } ?>
                </div>
            <?php } else { ?>
                <div class="row">
                    <div class="col-12 text-danger text-center h1">NO SE ENCONTRARON PRODUCTOS DE ESE TIPO</div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
