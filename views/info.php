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
        <div class="card">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?= $imagen ?>" class="card-img-top img-fluid" alt="<?= $modelo ?>">
                </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title display-4"><?= $modelo ?></h5>
                            <p class="card-text h3">Tipo: <?= $tipo ?></p>
                            <p class="card-text h3">Capacidad: <?= $capacidad ?></p>
                            <p class="card-text" text-success h3>Precio: $<?= number_format($precio, 2) ?></p>
                            <a href="#" class="btn btn-success btn-lg">Comprar</a>
                        </div>    
                    </div>    
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
