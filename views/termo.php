
<div class="container mt-5">
        <h1>Productos Termo</h1>
        <div class="row">
            <?php foreach ($productos as $producto) : ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?= $producto->getImagen() ?>" class="card-img-top" alt="<?= $producto->getModelo() ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $producto->getModelo() ?></h5>
                            <p class="card-text">Color: <?= $producto->getColor() ?></p>
                            <p class="card-text">Capacidad: <?= $producto->getCapacidad() ?></p>
                            <p class="card-text">Precio: $<?= $producto->getPrecio() ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

