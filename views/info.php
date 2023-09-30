<?php
if (isset($_GET['id'])) {
    $producto_id = $_GET['id'];

    $productos = json_decode(file_get_contents('datos/productos.json'), true);

    $producto = null;
    foreach ($productos as $p) {
        if ($p['id'] == $producto_id) {
            $producto = $p;
            break;
        }
    }

    if ($producto) {
        $modelo = $producto['modelo'];
        $tipo = $producto['tipo'];
        $capacidad = $producto['capacidad'];
        $precio = $producto['precio'];
        $imagen = $producto['imagen'];

        ?>


            <div class="container">
                <h1>Detalle del Producto</h1>
                <div class="card">
                    <img src="<?= $imagen ?>" class="card-img-top" alt="<?= $modelo ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $modelo ?></h5>
                        <p class="card-text">Tipo: <?= $tipo ?></p>
                        <p class="card-text">Capacidad: <?= $capacidad ?></p>
                        <p class="card-text">Precio: $<?= number_format($precio, 2) ?></p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>


        <?php
    } else {
        echo "Producto no encontrado.";
    }
} else {
    echo "ID de producto no especificado.";
}
?>
