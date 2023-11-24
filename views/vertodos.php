<div class="container">
    <h1>Todos los Productos</h1>
    
    <form method="post" action="">
        <label for="filtroTipo">Filtrar por tipo:</label>
        <select name="filtroTipo" id="filtroTipo">
            <option value="Todos">Todos</option>
            <option value="Termo">Termo</option>
            <option value="Mates">Mates</option>
            <option value="Vasos">Vasos</option>
            <option value="Mugs">Mugs</option>
        </select>
        <label for="filtroColor">Filtrar por color:</label>
    <select name="filtroColor" id="filtroColor">
        <option value="Todos">Todos</option>
        <option value="Blanco">Blanco</option>
        <option value="Verde">Verde</option>
        <option value="Marrón">Marrón</option>
        <option value="Negro">Negro</option>
        <option value="Rosa">Rosa</option>
        <option value="Azul">Azul</option>
        <option value="Violeta">Violeta</option>
    </select>
        <button type="submit" class="btn btn-primary">Filtrar</button>
    </form>

    <div class="row">
        <?php 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $filtroTipo = $_POST['filtroTipo'];
            if ($filtroTipo !== 'Todos') {
                $productos = array_filter($productos, function ($producto) use ($filtroTipo) {
                    return $producto->getTipo() === $filtroTipo;
                });
            }
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $filtroColor = $_POST['filtroColor'];
            if ($filtroColor !== 'Todos') {
                $productos = array_filter($productos, function ($producto) use ($filtroColor) {
                    return $producto->getColor() === $filtroColor;
                });
            }
        }

        foreach ($productos as $producto) { ?>
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
        <?php } ?>
        
    </div>
</div>


