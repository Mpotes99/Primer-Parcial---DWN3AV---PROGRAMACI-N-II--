<div class="container">
    <h1>Todos los Productos</h1>
    
    <!-- Agregar formulario de filtro -->
    <form method="post" action="">
        <label for="filtroTipo">Filtrar por tipo:</label>
        <select name="filtroTipo" id="filtroTipo">
            <option value="Todos">Todos</option>
            <option value="Termo">Termo</option>
            <option value="Mates">Mates</option>
            <option value="Vasos">Vasos</option>
            <option value="Mugs">Mugs</option>
        </select>
        <button type="submit" class="btn btn-primary">Filtrar</button>
    </form>

    <div class="row">
        <?php 
        // Verificar el formulario de filtro
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtener el valor
            $filtroTipo = $_POST['filtroTipo'];

            // Filtrar los productos
            if ($filtroTipo !== 'Todos') {
                $productos = array_filter($productos, function ($producto) use ($filtroTipo) {
                    return $producto->getTipo() === $filtroTipo;
                });
            }
        }

        // Bucle foreach para mostrar los productos después de aplicar el filtro
        foreach ($productos as $producto) { ?>
            <div class="col-12 col-md-4 mb-4">
                <div class="card">
                    <img src="<?= $producto->getImagen() ?>" class="card-img-top" alt="<?= $producto->getModelo() ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $producto->getModelo() ?></h5>
                        <p class="card-text">Tipo: <?= $producto->getTipo() ?></p>
                        <p class="card-text">Capacidad: <?= $producto->getCapacidad() ?></p>
                        <p class="card-text">Precio: $<?= number_format($producto->getPrecio(), 2) ?></p>
                        <!-- Agregar botón "Agregar al carrito" -->
                        <button class="btn btn-dark">Agregar al carrito</button>
                        <a href="index.php?sec=info&id=<?= $producto->getId() ?>" class="btn btn-info">Ver más</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
