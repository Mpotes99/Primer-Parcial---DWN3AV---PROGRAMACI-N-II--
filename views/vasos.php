<div class="container">
    <h1>Todos los Vasos</h1>
    <div class="row">
        <?php 
        // Bucle foreach para mostrar los vasos
        foreach ($productos as $producto) {
            if ($producto->getTipo() === 'Vasos') { ?>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card">
                        <img src="<?= $producto->getImagen() ?>" class="card-img-top" alt="<?= $producto->getModelo() ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $producto->getModelo() ?></h5>
                            <p class="card-text">Tipo: <?= $producto->getTipo() ?></p>
                            <p class="card-text">Capacidad: <?= $producto->getCapacidad() ?></p>
                            <p class="card-text">Precio: $<?= number_format($producto->getPrecio(), 2) ?></p>
                            <button class="btn btn-dark">Agregar al carrito</button>
                            <a href="index.php?sec=info&id=<?= $producto->getId() ?>" class="btn btn-info">Ver más</a>
                        </div>
                    </div>
                </div>
        <?php }
        } ?>
    </div>
</div>