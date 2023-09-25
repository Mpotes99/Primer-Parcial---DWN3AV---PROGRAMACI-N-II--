
<div class="container">
    <h1>Todos los Productos</h1>
    <div class="row">
        <?php foreach ($productos as $producto) { ?>
            <div class="col-12 col-md-4 mb-4">
                <div class="card">
                    <img src="<?= $producto->getImagen() ?>" class="card-img-top" alt="<?= $producto->getModelo() ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $producto->getModelo() ?></h5>
                        <p class="card-text">Tipo: <?= $producto->getTipo() ?></p>
                        <p class="card-text">Capacidad: <?= $producto->getCapacidad() ?></p>
                        <p class="card-text">Precio: $<?= number_format($producto->getPrecio(), 2) ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>


